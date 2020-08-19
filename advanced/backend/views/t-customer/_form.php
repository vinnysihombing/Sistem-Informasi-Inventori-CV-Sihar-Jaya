<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\TCustomer */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tcustomer-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_customer')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nama_customer')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'alamat_customer')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'no_telp_customer')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
