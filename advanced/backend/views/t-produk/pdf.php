<!DOCTYPE html>
<div class="pdf-testing">
    <div class="col-md-4">
<center>
    <h1>CV Sihar Jaya Balige</h1>
</center>
</div>
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
    <footer class="main-footer">
    <div class="pull-right hidden-xs">
        <b>Version</b> 2.0
    </div>
    <strong>Copyright &copy; 2014-2015 <a href="http://almsaeedstudio.com">Almsaeed Studio</a>.</strong> All rights
    reserved.
</footer>
</div>