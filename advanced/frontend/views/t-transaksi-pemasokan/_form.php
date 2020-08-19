<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\datepicker\DatePicker;

/* @var $this yii\web\View */
/* @var $model frontend\models\TTransaksiPemasokan */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ttransaksi-pemasokan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'no_pemasokan')->textInput() ?>

    <?= $form->field($model, 'id_supplier')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kode_produk')->textInput(['maxlength' => true]) ?>

    <?=$form->field($model, 'tgl_masuk')->widget(
    DatePicker::className(), [
        // inline too, not bad
         //'inline' => true, 
         // modify template for custom rendering
        
        //'template' => '<div class="well well-sm" style="background-color: #fff; width:250px">{input}</div>',
        'clientOptions' => [
            'autoclose' => true,
            'format' => 'yyyy-M-dd'
        ]
]);?>
    
    <?= $form->field($model, 'Jumlah_produk')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
