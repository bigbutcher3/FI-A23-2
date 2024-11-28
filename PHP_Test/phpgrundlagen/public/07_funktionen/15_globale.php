<?php
require_once '../config.php';
$alter = 45;
function altersangabe()
{
    global $alter;
    echo "Wie alt bin ich: $alter<br>";
}

altersangabe();
function altersangabe1()
{
    $alter = 42;
    echo "Wie alt bin ich: $alter<br>";
}

if (isset($_POST['test'])) {
    altersangabe1();
}
require_once PATHTEMPLATE.'head.tpl.php';
?>

<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
    <input type="submit" name="test" value="senden">
</form>
<?php
require_once PATHTEMPLATE.'footer.tpl.html';