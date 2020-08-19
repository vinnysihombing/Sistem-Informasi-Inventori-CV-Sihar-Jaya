<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\search\TTransaksiPengembalianSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ttransaksi-pengembalian-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'no_retur') ?>

    <?= $form->field($model, 'id_customer') ?>

    <?= $form->field($model, 'kode_produk') ?>

    <?= $form->field($model, 'jumlah_produk_retur') ?>

    <?= $form->field($model, 'tgl_retur') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
