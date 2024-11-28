<!DOCTYPE html>
<?php
if (!isset($_POST['senden']))
{
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Adressformular</title>
</head>
<body>
<form name="adressformular" action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
    Herr:<input type="radio" value="Herr" name="anrede">Frau:<input type="radio" value="Frau" name="anrede"><br>
    Name:<input type="text" name="name" value=""><br>
    Vorname:<input type="text" name="vorname" value=""><br>
    Alter<input type="text" name="alter" value=""><br>
    Ort<input type="text" name="ort" value=""><br>
    <input type="submit" name="senden" value="Absenden"><br>
</form>
</body>
</html>

<?php
}
else {
    $adress = array();
    $adress = unserialize(file_get_contents('adress.txt'));
    $adress['anrede'][] = $_POST['anrede'];
    $adress['name'][] = $_POST['name'];
    $adress['vorname'][] = $_POST['vorname'];
    $adress['alter'][] = $_POST['alter'];
    $adress['ort'][] = $_POST['ort'];
    file_put_contents('adress.txt', serialize($adress));

}

?>