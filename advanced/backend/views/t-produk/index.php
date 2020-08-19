<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\search\TProdukSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Laporan Stok Produk';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tproduk-index">
<center>
    <h1><?= Html::encode($this->title) ?></h1>

   
</center>
    <p>Laporan Stok Produk</p>
 

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        //'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'kode_produk',
            'id_kategori',
            'nama_produk',
            'status_produk',
            //'harga_jual',
            //'harga_beli',
            'jumlah_produk',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
<?= Html::a('Cetak', ['print-pdf'], ['class' => 'btn btn-success']) ?>


</div>
