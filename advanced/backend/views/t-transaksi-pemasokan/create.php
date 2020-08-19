<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $model frontend\models\TTransaksiPemasokan */

$this->title = 'Form Transaksi Pemasokan';
$this->params['breadcrumbs'][] = ['label' => 'T Transaksi Pemasokans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="ttransaksi-pemasokan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        //'filterModel' => $searchModel,
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
