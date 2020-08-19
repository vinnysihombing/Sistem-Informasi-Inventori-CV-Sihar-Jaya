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

   
    <div class="form-group">
    <?= $form->field($model, 'nama_supplier') ?>

		 <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
           </div>
    

    <?php ActiveForm::end(); ?>
      </span>


</div>
