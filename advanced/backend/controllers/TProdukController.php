<?php
use kartik\mpdf\mpdf;
namespace backend\controllers;
use Mpdf\Mpdf;
use Yii;
use backend\models\TProduk;
use backend\models\search\TProdukSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * TProdukController implements the CRUD actions for TProduk model.
 */
class TProdukController extends Controller
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

    /**
     * Lists all TProduk models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new TProdukSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }
    public function actionProduk()
    {
        $searchModel = new TProdukSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('produk', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }


    /**
     * Displays a single TProduk model.
     * @param string $id
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
     * Creates a new TProduk model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new TProduk();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->kode_produk]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }
    public function actionPrintPdf(){
        $model = TProduk::find()->all(); 
        $pdf_content = $this->renderPartial('pdf', [
            'model' => $model,
        ]);
        $mpdf = new \Mpdf\Mpdf();
        $mpdf->showImageErrors = true;
        $mpdf->WriteHTML($pdf_content);
        $mpdf->Output();
        exit();
    }

    /**
     * Updates an existing TProduk model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->kode_produk]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing TProduk model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }
      public function actionCetak(){
        $model = TProduk::find()->all();
       $searchModel = new TProdukSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

         return $this->render('testing', [
            'model' => $model,
            'dataProvider' => $dataProvider,
        ]);
    }
   

    

       //http://localhost/frontend/web/index.php?r=t-produk%2Fpdf


    /**
     * Finds the TProduk model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $id
     * @return TProduk the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = TProduk::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
    public function actionPdf($id)
    {
        $pdf_content = $this->renderPartial('index',[
            'model' => $this->findModel($id),
        ]);
        $mpdf = new \mPDF();
        $mpdf->WriteHTML($pdf_content);
        $mpdf->Output();
        exit;
    }
  

public function actionReport() {
    // get your HTML raw content without any layouts or scripts
    $content = $this->renderPartial('testing');
  
    
    // setup kartik\mpdf\Pdf component
    $pdf = new mPdf([
        // set to use core fonts only
        'mode' => Pdf::MODE_CORE, 
        // A4 paper format
        'format' => Pdf::FORMAT_A4, 
        // portrait orientation
        'orientation' => Pdf::ORIENT_PORTRAIT, 
        // stream to browser inline
        'destination' => Pdf::DEST_BROWSER, 
        // your html content input
        'content' => $content,  
        // format content from your own css file if needed or use the
        // enhanced bootstrap css built by Krajee for mPDF formatting 
        'cssFile' => '@vendor/kartik-v/yii2-mpdf/src/assets/kv-mpdf-bootstrap.min.css',
        // any css to be embedded if required
        'cssInline' => '.kv-heading-1{font-size:18px}', 
         // set mPDF properties on the fly
        'options' => ['title' => 'Krajee Report Title'],
         // call mPDF methods on the fly
        'methods' => [ 
            'SetHeader'=>['Krajee Report Header'], 
            'SetFooter'=>['{PAGENO}'],
        ]
    ]);
    
    
    // return the pdf output as per the destination setting
    return $pdf->render(); 

}

       
}
