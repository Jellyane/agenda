<?php
$count = count($caminho);
?>
<ul class="breadcrumb">
    <?php
    foreach ($caminho as $key => $value) {
        $count -= 1;
        ?>    
        <li class="<?php echo $count == 0 ? "active" : "" ?>">
            <a href="<?php echo $value; ?>"><?php echo $key; ?></a>
            <?php if ($count > 0) { ?>
                <span class="divider">&raquo;</span>
            <?php } ?>
        </li>
    <?php } ?>    
</ul>