<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\TProduk */

$this->title = 'Tambah Produk';
$this->params['breadcrumbs'][] = ['label' => 'Tabel Produk', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
 <div class="col-sm-4">
<div class="tproduk-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
</div>
</div>
