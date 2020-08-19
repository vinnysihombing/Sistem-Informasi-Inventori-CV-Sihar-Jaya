<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\search\TTransaksiPemesananSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */
use dosamigos\datepicker\DatePicker;
$this->title = '';

?>
<div class="ttransaksi-pemesanan-index">

    <h1>Produk Favorit</h1>

    <table class="table table-striped table-bordered"><thead>
    <tr>
        <th>Nama Produk</th>

    </tr>

    </thead>
        <tbody>
            <tr>
            <?php
                foreach ($dataForecasting as $data){

                    echo '<tr></tr>';

                    echo '<td>'.$data['nama_produk'].'</td>';
                }
            ?>
            </tr>    
        </tbody>
    </table>

</div>

</div>
