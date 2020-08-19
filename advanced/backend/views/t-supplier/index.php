<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\search\TSupplierSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Data Supplier';
$this->params['breadcrumbs'][] = $this->title;
?>
 <h1>Data Supplier</h1>
<div class="tsupplier-index">




  

<?php  echo $this->render('_search', ['model' => $searchModel]); ?>



    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        //'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_supplier',
            'nama_supplier',
            'alamat_supplier',
            'no_telp_supplier',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
      <p>
        <?= Html::a('Tambah Supplier', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

</div>



