<?php
$titel = "Zahlensysteme";
include_once "../template/head.tpl.php";
echo "<pre>";

$decTest = 57464;
echo $decTest." als Binärzahl: ".decbin($decTest)."<br>";
echo $decTest." als Hexzahl: ".mb_strtoupper(dechex($decTest))."<br>";
echo $decTest." als Oktalzahl: ".base_convert($decTest, 10, 8)."<br><br>";

$binTest = "100101";
echo $binTest." als Dezimalzahl: ".bindec($binTest)."<br>";
echo $binTest." als Hexzahl: ".base_convert($binTest, 2, 16)."<br>";
echo $binTest." als Oktalzahl: ".base_convert($binTest, 2, 8)."<br><br>";

$hexTest = "3F";
echo $hexTest." als Dezimalzahl: ".hexdec($hexTest)."<br>";
echo $hexTest." als Binärzahl: ".base_convert($hexTest, 16, 2)."<br>";
echo $hexTest." als Oktalzahl: ".base_convert($hexTest, 16, 8)."<br><br>";

$octTest = 34;
echo $octTest." als Dezimalzahl: ".base_convert($octTest, 8, 10)."<br>";
echo $octTest." als Binärzahl: ".base_convert($octTest, 8, 2)."<br>";
echo $octTest." als Hexzahl: ".base_convert($octTest, 8, 16)."<br><br>";

require_once "../template/footer.tpl.html";
