<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\search\TTransaksiPemasokanSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Transaksi Pemasokan';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ttransaksi-pemasokan-index">

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

            'no_pemasokan',
            'id_supplier',
            'kode_produk',
            'tgl_masuk',
            'Jumlah_produk',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
