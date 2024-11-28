
<?php
   echo "numerische Arrays:<br>";
   $f[2][3] = 42;
   echo "bisher war nur dies: " . $f[2][3] . " möglich<br>";
   echo "jetzt geht dies: {$f[2][3]} auch<p>";

   echo "assoziative oder gemischte Arrays:<br>";
   $f[2]["antwort"] = 42;
   echo "bisher war nur dies: " . $f[2]["antwort"] . " möglich<br>";
   echo "jetzt geht dies: {$f[2]["antwort"]} auch";
