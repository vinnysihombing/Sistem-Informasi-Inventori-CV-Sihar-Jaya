<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\TTransaksiPengembalian */

$this->title = 'Update T Transaksi Pengembalian: ' . $model->no_retur;
$this->params['breadcrumbs'][] = ['label' => 'T Transaksi Pengembalians', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->no_retur, 'url' => ['view', 'id' => $model->no_retur]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="ttransaksi-pengembalian-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
