<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\User */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="user-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'username')->textInput(['autofocus' => true, 'class' => 'input100']) ?>


    <?= $form->field($model, 'password')->textInput(['class' => 'input100']) ?>

    <?= $form->field($model, 'email')->textInput(['class' => 'input100']) ?>
    

    <?= $form->field($model, 'role')->dropDownList(['1' => 'Owner', '2' => 'Admin',  '3' => 'Inventori'],['prompt'=>'Pilih Role User']) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
