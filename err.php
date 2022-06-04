<?php
if(count($error)>0):
?>
<div class="error1">
    <?php
    foreach($error as $error1):
    ?>
    <p>
        <?php
            echo $error1;
        ?>
    </p>
    <?php endforeach ?>
</div>
<?php endif ?>