<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\TCustomer */

$this->title = 'Update T Customer: ' . $model->id_customer;
$this->params['breadcrumbs'][] = ['label' => 'T Customers', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_customer, 'url' => ['view', 'id' => $model->id_customer]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tcustomer-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
