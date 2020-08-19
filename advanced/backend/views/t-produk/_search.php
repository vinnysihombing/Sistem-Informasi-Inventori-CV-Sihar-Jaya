<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\search\TProdukSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tproduk-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'nama_produk') ?>

    

   

    <?php // echo $form->field($model, 'harga_beli') ?>

    <?php // echo $form->field($model, 'jumlah_produk') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
       
    </div>

    <?php ActiveForm::end(); ?>

</div>
