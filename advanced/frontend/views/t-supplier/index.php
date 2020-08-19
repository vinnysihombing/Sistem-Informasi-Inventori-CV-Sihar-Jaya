<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\search\TSupplierSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Data Supplier';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tsupplier-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Tambahkan Data', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

   

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        //'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_supplier',
            'nama_supplier',
            'alamat_supplier',
            'no_telp_supplier',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
