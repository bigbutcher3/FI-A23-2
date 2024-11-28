<?php
declare(strict_types=1);
require_once '../config.php';
require_once PATHTEMPLATE.'head.tpl.php';
function addition(int $a, int $b)
{
    $erg = $a + $b;
    echo "Die Summe von $a+$b <br>ist: $erg";
}

if (isset($_GET['add'])) {
    $a = intval($_GET['a']);
    $b = intval($_GET['b']);
    addition($a, $b);
}

?>
    <form action="<?php $_SERVER['PHP_SELF']; ?>" method="get">
        <label for="z1">Zahl1:</label>
        <input type="text" required name="a" id="z1" value="<?php echo empty($a) ? '' : $a ?>">
        <label for="z2">Zahl1:</label>
        <input type="text" required name="b" id="z2" value="<?php echo empty($b) ? '' : $b ?>">
        <input type="submit" name="add" value="+">
    </form>
<?php
require_once PATHTEMPLATE.'footer.tpl.html';