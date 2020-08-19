<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\TTransaksiPemesanan */

$this->title = 'Update T Transaksi Pemesanan: ' . $model->no_pemesanan;
$this->params['breadcrumbs'][] = ['label' => 'T Transaksi Pemesanans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->no_pemesanan, 'url' => ['view', 'id' => $model->no_pemesanan]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="ttransaksi-pemesanan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
