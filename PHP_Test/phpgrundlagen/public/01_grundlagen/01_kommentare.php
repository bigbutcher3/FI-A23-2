<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link href="/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/bootstrap/css/bootstrap-icon-1.11.3.css" rel="stylesheet">
    <link rel="shortcut icon" href="/bootstrap/images/icon/erz.png" type="image/x-icon">
    <style>
        .red {
            color: red;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-12">
            <?php
            $test = array('item1','item2','item3','item4','item5','item6');

            echo '<ul class="list-group">';
            foreach ($test as $daten)
            {
               echo '<li class="list-group-item">'.$daten.'</li>';
              }
            echo '</ul';



            echo '<h1> Hallo</h1>';
            //Kommentare einzeilig
            #Kommentare einzeilig
            /* Kommentare mehrzeilig
            Kommentare mehrzeilig
            Kommentare mehrzeilig*/

            //Kommentare einzeilig

            /*Kommentare mehrzeilig
                Kommentare mehrzeilig
                Kommentare mehrzeilig*/
            echo "<h1 class=\"red\">Hallo 1</h1>";
            echo '<h1 class=\'red\'>Hallo 1</h1>';
            echo '<h1 class="red">Hallo 1</h1>';
            echo "<h1 class='red'>Hallo 1</h1>";
            ?>
        </div>
    </div>
</div>
<script src="/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>

