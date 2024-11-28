<?php
$_POST['name'] = 'Maurer';
$_GET['action']= 'home';
$_GET['controller'] = 'Test';
var_dump($_POST);
echo '<br>';
var_dump($_GET);
echo '<br>';
$request = array_merge($_POST,$_GET);
echo "<pre>";
print_r ($request);
?>