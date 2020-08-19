<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\search\TSupplierSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tsupplier-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    

    <?= $form->field($model, 'nama_supplier') ?>

   

    <div id='search-box'>
    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
       
    </div>
    

    <?php ActiveForm::end(); ?>

</div>
