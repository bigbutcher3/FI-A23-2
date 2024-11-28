<!DOCTYPE html>
<!--
 @author Frank-Michael Heldt <info@webdesign-heldt.de>
 @date 17.06.2017 20:15:40

 @project Grundlagen
-->
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link type="text/css" rel="stylesheet" href="css/main.css">
    </head>
    <body>
        <form name="eingabe"
              action="<?php echo $_SERVER['PHP_SELF']; ?>"
              method="post"
              >
            <?php foreach ($formFields as $key => $field) : ?>            
            <div class="form-controls">
                <label class=""><?php echo $field['label'];?>:</label>
                <input type="<?php echo $field['type'];?>" 
                       name="data[<?php echo $key;?>]" 
                       id="<?php echo $key;?>" 
                       required="<?php echo $field['required'];?>" 
                       value="<?php echo $field['value'];?>" />
            </div>
            <?php endforeach; ?>
            <input type="hidden" name="action" value="save" />
            <input type="submit" name="submit" value="Kontakt speichern" />
        </form>
        <form
            action="<?php echo $_SERVER['PHP_SELF']; ?>"
            method="post"
            >
            <input type="hidden" name="action" value="list" />
            <div class="">
                <button>Kontakte anzeigen</button>
            </div>
        </form>
    </body>
</html>
