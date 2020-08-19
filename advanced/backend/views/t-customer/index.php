<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\TCustomerSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Data Customer';

$this->params['breadcrumbs'][] = $this->title;

?>


<div class="tcustomer-index">


    <h1>Data Customer</h1>

    

<?php  echo $this->render('_search', ['model' => $searchModel]); ?>




    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        //'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_customer',
            'nama_customer',
            'alamat_customer',
            'no_telp_customer',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

<?= Html::a('Tambah Customer', ['create'], ['class' => 'btn btn-success'])?>
</div>


