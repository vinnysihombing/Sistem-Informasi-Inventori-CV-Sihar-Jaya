<?php

use yii\helpers\Html;
use yii\grid\GridView;


/* @var $this yii\web\View */
/* @var $model frontend\models\TTransaksiPengembalian */

$this->title = 'Form Pengembalian Produk';
$this->params['breadcrumbs'][] = ['label' => 'T Transaksi Pengembalians', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ttransaksi-pengembalian-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) 


    ?>
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


</div>
