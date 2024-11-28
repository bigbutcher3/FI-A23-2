<?php
echo $test = file_get_contents('arrayJson.json');

echo '<pre>';
print_r(json_decode(file_get_contents('arrayJson.json'),true));
echo '</pre>';

echo '<pre>';
print_r(json_decode(file_get_contents('arrayAssoJson.json'),true));
echo '</pre>';

echo '<pre>';
print_r(json_decode(file_get_contents('arrayZweiJson.json'),true));
echo '</pre>';

echo '<pre>';
print_r(json_decode(file_get_contents('arrayZweiAssJson.json'),true));
echo '</pre>';