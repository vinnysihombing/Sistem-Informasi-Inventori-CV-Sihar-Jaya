<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\TTransaksiPemasokan */

$this->title = 'Update T Transaksi Pemasokan: ' . $model->no_pemasokan;
$this->params['breadcrumbs'][] = ['label' => 'T Transaksi Pemasokans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->no_pemasokan, 'url' => ['view', 'id' => $model->no_pemasokan]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="ttransaksi-pemasokan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
