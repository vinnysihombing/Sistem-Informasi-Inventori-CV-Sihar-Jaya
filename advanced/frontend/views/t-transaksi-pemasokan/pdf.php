
<div class="pdf-testing">
    <p>
        <b> Test </b>
        <?php  
            foreach($model as $m){
                echo "<p>".$m->no_pemasokan."</p>";
                echo "<p>".$m->id_supplier."</p>";
            }
        ?>
</div>