<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\search\TTransaksiPemesananSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Laporan Produk Keluar';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ttransaksi-pemesanan-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Tambah Transaksi', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,

        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'no_pemesanan',

            [
                'attribute'=>'id_customer',
                'value'=>'customer.nama_customer',
                'label'=>'Nama Customer',
            ],
            
            
            [
                'attribute'=>'kode_produk',
                'value'=>'kodeProduk.nama_produk',
                'label'=>'Nama Customer',
            ],
            'jumlah_pemesanan',
            'tgl_pemesanan',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
