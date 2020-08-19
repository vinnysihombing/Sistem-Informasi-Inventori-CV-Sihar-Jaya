<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $searchModel frontend\models\search\TSupplierSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Data Supplier';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tsupplier-index">

    <h1><?= Html::encode($this->title) ?></h1>


<?php

	foreach ($model as $item) {
		echo $item->nama_supplier.'<br>';
	}
?>



