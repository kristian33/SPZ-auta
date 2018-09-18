<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
<h1>Auto</h1>
<?php
$submit=filter_input(INPUT_POST,'submit');
$znacka=filter_input(INPUT_POST, 'znacka');
$spz=filter_input(INPUT_POST, 'spz');
 ?>

<?php
  echo "Vaše auto : $znacka s poznávcí značkou : $spz . ";
  ?>

  </body>
</html>
