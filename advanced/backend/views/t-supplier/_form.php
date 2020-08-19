<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\TSupplier */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tsupplier-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_supplier')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nama_supplier')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'alamat_supplier')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'no_telp_supplier')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
