<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\TProduk */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tproduk-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'kode_produk')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_kategori')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nama_produk')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status_produk')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'harga_jual')->textInput() ?>

    <?= $form->field($model, 'harga_beli')->textInput() ?>

    <?= $form->field($model, 'jumlah_produk')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
