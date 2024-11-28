<!DOCTYPE html>
<html lang="de">
<head>
  <title><?php if (!empty($titel)) echo $titel; else echo "Kiki's Test-Seite"?></title>
  <meta charset="utf-8">
  <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<pre><h1><?php echo $titel?></h1>