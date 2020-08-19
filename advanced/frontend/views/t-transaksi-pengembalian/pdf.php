
<div class="pdf-testing">
    <p>
        <b> Test </b>
        <?php  
            foreach($model as $m){
                echo "<p>".$m->no_retur."</p>";
                echo "<p>".$m->kode_produk."</p>";
            }
        ?>
</div>