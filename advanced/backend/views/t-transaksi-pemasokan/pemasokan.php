<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\search\TTransaksiPemasokanSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Laporan Pemasokan Produk';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ttransaksi-pemasokan-index">
<center>
    <h1><?= Html::encode($this->title) ?></h1>
</center>

    <p>Laporan Produk Masuk</p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        //'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'no_pemasokan',
            //'id_supplier',
            'kode_produk',
            'tgl_masuk',
            'Jumlah_produk',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
<?= Html::a('Cetak', ['print-pdf'], ['class' => 'btn btn-success']) ?>


</div>
