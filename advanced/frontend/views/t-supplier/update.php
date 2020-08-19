<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\TSupplier */

$this->title = 'Update T Supplier: ' . $model->id_supplier;
$this->params['breadcrumbs'][] = ['label' => 'T Suppliers', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_supplier, 'url' => ['view', 'id' => $model->id_supplier]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tsupplier-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
