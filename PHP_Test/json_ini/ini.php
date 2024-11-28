<?php

$conf = parse_ini_file('test.ini',true);

echo '<pre>';
print_r($conf);

echo '<pre>';
print_r($conf['kunden']);

echo '<pre>';
print_r($conf['database']);

