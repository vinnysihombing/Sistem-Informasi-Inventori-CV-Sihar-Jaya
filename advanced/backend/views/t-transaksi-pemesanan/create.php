<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $model frontend\models\TTransaksiPemesanan */

$this->title = 'Form Pemesanan Produk';
$this->params['breadcrumbs'][] = ['label' => 'T Transaksi Pemesanans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ttransaksi-pemesanan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
 <?= GridView::widget([
        'dataProvider' => $dataProvider,
        //'filterModel' => $searchModel,

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
