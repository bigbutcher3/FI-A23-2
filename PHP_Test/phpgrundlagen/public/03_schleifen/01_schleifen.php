<?php
require_once __DIR__.'/../config.php';
require_once PATHTEMPLATE.'head.tpl.php';
echo '<h4>Die for-Anweisung</h4>';
   for ($i=1; $i<=5; $i++)
   {
      echo "Zeile $i <p>";
   }
require_once PATHTEMPLATE.'footer.tpl.html';
