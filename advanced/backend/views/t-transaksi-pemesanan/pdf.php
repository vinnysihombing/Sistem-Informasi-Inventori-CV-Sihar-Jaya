<!DOCTYPE html>
<div class="pdf-testing">
    <p>
        <h2>Laporan Pemesanan</h2>

    <table>
    <thead>
        <tr>
            <th>#</th>
            <th>Nomor Pemesanan</th>
            <th>Kode Produk</th>
            <th>Jumlah Pemesanank</th>
            <th>Tanggal Pemesanan</th>
        </tr>
    </thead>

        <?php  
            $number = 1;
            foreach($model as $m){
              
                echo '<tr>';
                echo '<td>'.$number.'</td>';
                echo '<td>'.$m->no_pemesanan.'</td>';
                echo '<td>'.$m->kode_produk.'</td>';
                echo '<td>'.$m->jumlah_pemesanan.'</td>';
                echo '<td>'.$m->tgl_pemesanan.'</td>';
                echo '</tr>';
            }
        ?>
    </table>
</div>