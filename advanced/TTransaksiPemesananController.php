<?php

namespace frontend\controllers;

use Yii;
use frontend\models\TTransaksiPemesanan;
use frontend\models\TProduk;
use frontend\models\search\TTransaksiPemesananSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * TTransaksiPemesananController implements the CRUD actions for TTransaksiPemesanan model.
 */
class TTransaksiPemesananController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }
 public function actionPemesanan()
    {
      
        $searchModel = new TTransaksiPemesananSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

       
        return $this->render('pemesanan', [
            
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,

        ]);
       
    }
     public function actionKeuntungan()
    {
       
       
        

        return $this->render('keuntungan');

      
       
    }
    /**
     * Lists all TTransaksiPemesanan models.
     * @return mixed
     */
     public function actionIndex()
    {
       $model = new TTransaksiPemesanan();
        $searchModel = new TTransaksiPemesananSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->no_pemesanan]);
        }

        return $this->render('create', [
            'model' => $model,
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,

        ]);
       
    }


    /**
     * Displays a single TTransaksiPemesanan model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new TTransaksiPemesanan model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new TTransaksiPemesanan();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->no_pemesanan]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing TTransaksiPemesanan model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->no_pemesanan]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing TTransaksiPemesanan model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }
    public function actionForm($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['_form']);
    }
    /**
     * Finds the TTransaksiPemesanan model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return TTransaksiPemesanan the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = TTransaksiPemesanan::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

    public function actionForecasting(){
        $model = TTransaksiPemesanan::find()->select(['kode_produk,COUNT(*) AS jumlah'])
        ->groupBy(['kode_produk'])
        ->createCommand()->queryAll();
        $temp_id = array();
        foreach($model as $data){
            if($data['jumlah']>=2 && $data['jumlah']<=20){
                $temp_id[] = $data['kode_produk'];
            }
        }
        
        
        if(count($temp_id) != 0) {
            foreach($temp_id as $row){
                $dataForecasting[] = TProduk::find()->where(['kode_produk'=>$row])->one();
            }
        }
        
        return $this->render('forecasting',
        [
            'dataForecasting'=>$dataForecasting
        ]);
    }

    public function actionPrintPdf(){
        $model = TTransaksiPemesanan::find()->all(); 
        $pdf_content = $this->renderPartial('pdf', [
            'model' => $model,
        ]);
        $mpdf = new \Mpdf\Mpdf();
        $mpdf->showImageErrors = true;
        $mpdf->WriteHTML($pdf_content);
        $mpdf->Output();
        exit();
    }
}
