<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\search\TTransaksiPemesananSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ttransaksi-pemesanan-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'no_pemesanan') ?>

    <?= $form->field($model, 'id_customer') ?>

    <?= $form->field($model, 'kode_produk') ?>

    <?= $form->field($model, 'jumlah_pemesanan') ?>

    <?= $form->field($model, 'tgl_pemesanan') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
