
<div class="pdf-testing">
    <p>
    	 <h1>CV SIHAR JAYA</h1>
    	
        <h2>Laporan Produk Masuk</h2>
        <table>
    <thead>
        <tr>
            <th>#</th>
            <th>Nomor Pemasokan</th>
            <th>ID Supplier</th>
            <th>Kode Produk</th>
            
            <th>Tanggal Masuk</th>
            <th>Jumlah Produk</th>
        </tr>
    </thead>

        <?php  
            $number = 1;
            foreach($model as $m){
              
                echo '<tr>';
                echo '<td>'.$number.'</td>';
                echo '<td>'.$m->no_pemasokan.'</td>';
                 echo '<td>'.$m->id_supplier.'</td>';
                echo '<td>'.$m->kode_produk.'</td>';
                echo '<td>'.$m->tgl_masuk.'</td>';
                echo '<td>'.$m->Jumlah_produk.'</td>';
               
                echo '</tr>';
            }
        ?>
    </table>
</div>