<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\TKategori */

$this->title = 'Create T Kategori';
$this->params['breadcrumbs'][] = ['label' => 'T Kategoris', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tkategori-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
