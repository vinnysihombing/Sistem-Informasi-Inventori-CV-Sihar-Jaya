
<div class="pdf-testing">
    <p>
        <b> Test </b>
        <?php  
            foreach($model as $m){
                echo "<p>".$m->no_pemesanan."</p>";
                echo "<p>".$m->id_customer."</p>";
            }
        ?>
</div>