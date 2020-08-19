<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\TKategori */

$this->title = 'Update T Kategori: ' . $model->id_kategori;
$this->params['breadcrumbs'][] = ['label' => 'T Kategoris', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_kategori, 'url' => ['view', 'id' => $model->id_kategori]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tkategori-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
