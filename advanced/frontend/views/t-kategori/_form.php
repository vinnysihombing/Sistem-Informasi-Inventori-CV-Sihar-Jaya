<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\TKategori */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tkategori-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_kategori')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jumlah_per_kategori')->textInput() ?>

    <?= $form->field($model, 'jenis_kategori')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lokasi')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
