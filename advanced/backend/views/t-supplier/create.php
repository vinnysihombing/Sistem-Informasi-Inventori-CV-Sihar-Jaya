<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\TSupplier */

$this->title = 'Create T Supplier';
$this->params['breadcrumbs'][] = ['label' => 'T Suppliers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tsupplier-create">

    <h1><?= Html::encode($this->title) ?></h1>
 <div class="col-sm-4">
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
</div>
</div>
