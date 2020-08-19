<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\grid\GridView;
use Mpdf\Mpdf;
/* @var $this yii\web\View */
/* @var $searchModel frontend\models\search\TSupplierSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Data Produk';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tproduk-index">

    <h1><?= Html::encode($this->title) ?></h1>
 <p>
        <?= Html::a('Tambah Produk', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <div class="col-sm-4">
<?php  echo $this->render('_search', ['model' => $searchModel]); ?>
</div>

 <?= GridView::widget([
        'dataProvider' => $dataProvider,
        //'filterModel' => $searchModel,
        'columns' => [
            //['class' => 'yii\grid\SerialColumn'],

            //'kode_produk',
            'id_kategori',
            'nama_produk',
            'status_produk',
            //'harga_jual',
            //'harga_beli',
            'jumlah_produk',

            ['class' => 'yii\grid\ActionColumn'],
        ],

    ]); 
    ?>


