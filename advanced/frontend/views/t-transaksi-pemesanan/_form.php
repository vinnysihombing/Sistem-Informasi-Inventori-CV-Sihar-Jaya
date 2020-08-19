<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\datepicker\DatePicker;
/* @var $this yii\web\View */
/* @var $model frontend\models\TTransaksiPemesanan */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ttransaksi-pemesanan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'no_pemesanan')->textInput() ?>

    <?= $form->field($model, 'id_customer')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kode_produk')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jumlah_pemesanan')->textInput() ?>
<?=$form->field($model, 'tgl_pemesanan')->widget(
    DatePicker::className(), [
        // inline too, not bad
         //'inline' => true, 
         // modify template for custom rendering
        //'template' => '<div class="well well-sm" style="background-color: #fff; width:250px">{input}</div>',
        'clientOptions' => [
            'autoclose' => true,
            'format' => 'dd-M-yyyy'
        ]
]);?>
   

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
