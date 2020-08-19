<!DOCTYPE html>
<div class="pdf-testing">
    <p>
        <h2>Laporan Stok Produk</h2>

    <table>
    <thead>

        <tr>
        
            <th>kode_produk</th>
            <th>id_kategori</th>
            <th>nama_produk</th>
            <th>Jumlah Produk</th>
        </tr>
    </thead>


        <?php  
            foreach($model as $m){
            	
              
                echo '<tr>';
               
               
                echo '<td>'.$m->kode_produk.'</td>';
                echo '<td>'.$m->id_kategori.'</td>';
                echo '<td>'.$m->nama_produk.'</td>';
               
                echo '<td>'.$m->jumlah_produk.'</td>';
                echo '</tr>';
             
            }
        ?>
    </table>
</div>