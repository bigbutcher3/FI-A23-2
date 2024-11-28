<?php
require_once __DIR__.'/../config.php';
$namen = array(
    'Arthur',
    'Marvin',
    'Ford',
    'Zaphod',
    'Trillian',
);

require_once PATHTEMPLATE.'head.tpl.php';
?>

<h4>Charaktere aus "Per Anhalter durch die Galaxis"</h4>
<ul>
    <?php foreach ($namen as $name) { ?>
        <li><?php echo $name; ?></li>
    <?php } ?>
</ul>
<?php
require_once PATHTEMPLATE.'footer.tpl.html';