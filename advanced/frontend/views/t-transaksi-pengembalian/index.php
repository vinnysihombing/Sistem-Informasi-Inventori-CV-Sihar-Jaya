<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\search\TTransaksiPengembalianSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'T Transaksi Pengembalians';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="ttransaksi-pengembalian-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create T Transaksi Pengembalian', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
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


</div>
