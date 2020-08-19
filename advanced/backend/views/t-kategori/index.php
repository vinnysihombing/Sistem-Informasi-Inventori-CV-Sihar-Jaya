<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\search\TKategoriSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'T Kategoris';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tkategori-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create T Kategori', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_kategori',
            'jumlah_per_kategori',
            'jenis_kategori',
            'lokasi',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
