<?php
require_once __DIR__.'/../config.php';
require_once PATHTEMPLATE.'head.tpl.php';
?>
	<h1>Nicht identisch</h1>
	<p>
		Die Zahlen 1 und 1.0 sind nicht ungleich: 
		<?php echo 1 != 1.0; ?>
	</p>
	<p>
		Die Zahl 1 und der String '1' sind nicht ungleich: 
		<?php echo 1 != '1'; ?>
	</p>
<?php
require_once PATHTEMPLATE.'footer.tpl.html';