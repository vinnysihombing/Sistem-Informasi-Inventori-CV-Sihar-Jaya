<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\TCustomer */

$this->title = 'Create T Customer';
$this->params['breadcrumbs'][] = ['label' => 'T Customers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tcustomer-create">

    <h1><?= Html::encode($this->title) ?></h1>
 <div class="col-sm-4">
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
</div>

</div>
