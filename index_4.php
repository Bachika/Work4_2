<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
  $eng = substr(str_shuffle('abcdefghijklmnopqrstuvwxyz'),0,rand(5,15));
  echo $eng."<br>";
  $geo = substr(str_shuffle('აბგდევზთიკლმნოპჟრსტუფქღყშჩცძწჭხჯჰ'),0,rand(5,15));
  echo $geo;

?>


</body>
</html>