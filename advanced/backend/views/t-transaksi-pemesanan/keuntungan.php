<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\TTransaksiPemesanan */

$this->title = 'Laporan Keuntungan';
?>
<div class="ttransaksi-pemesanan-create">
    <h1></h1>   
<form action=" laporan-keuntungan.html" method="get">
<b>
<pre><br>
<strong>Pemasukan        (Rp)   : <input type="text" Pemasukan="value" value=" " />
<br />
<strong>Produk di Gudang (Rp)   : <input type="text" Produk di Gudang="value" value=" " />
  <br />
<strong>Pengeluaran      (Rp)   : <input type="text" Pengeluaran="value" value=" " />
  <br />
<strong>Keuntungan       (Rp)   : <input type="text" Total="value" value=" " />
  <br />
  </div>
      <h1></h1>
      <p>     
      <?= Html::a('Detail', ['create'],['class' => 'btn btn-success']) ?>  <?= Html::a('Cetak', ['create'],['class' => 'btn btn-success']) ?>
      </p>
</div>


</div>
