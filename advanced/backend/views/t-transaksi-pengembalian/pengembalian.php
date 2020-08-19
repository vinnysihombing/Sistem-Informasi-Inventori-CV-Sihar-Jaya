<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\search\TTransaksiPengembalianSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Laporan Pengembalian Produk';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="ttransaksi-pengembalian-index">
<center>
    <h1><?= Html::encode($this->title) ?></h1>
</center>
    <p>Laporan Pengembalian </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        //'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'no_retur',
            'id_customer',
            'kode_produk',
            'jumlah_produk_retur',
            'tgl_retur',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?= Html::a('Cetak', ['print-pdf'], ['class' => 'btn btn-success']) ?>


</div>
