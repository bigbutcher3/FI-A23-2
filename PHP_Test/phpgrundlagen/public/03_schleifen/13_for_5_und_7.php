<?php
require_once __DIR__.'/../config.php';
require_once PATHTEMPLATE.'head.tpl.php';
?>
    <h4>Wir zählen jede Zahl, die durch 5 und 7 ganz teilbar ist</h4>
<?php for ($i = 1; $i <= 100; $i++) { ?>
    <?php if (($i % 5 === 0) && ($i % 7 === 0)) { ?>
        <p>
            Die Zahl <?php echo $i; ?> ist durch 5 und 7 teilbar.
        </p>
    <?php } ?>
<?php }
require_once PATHTEMPLATE.'footer.tpl.html';