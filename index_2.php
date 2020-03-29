<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form method="post" action="index_2.php">
    <input type="text" name="sigrdze"> sigrdze <br><br> 
    <input type="text" name="sigane"> sigane <br><br>

    <input type="submit" value = "submit">
</form>

<table align="left" border="1" cellpadding="3" cellspacing="0">

<?php

$m = $_POST["sigrdze"];
$n = $_POST["sigane"];

for($i=1;$i<=$m;$i++)
{
echo "<tr>";
for ($j=1;$j<=$n;$j++)
  {
  echo "<td>". substr(str_shuffle('0123456789abcdefghijklmnopqrstuvwxyz'),0,7) ."</td>";
  }
  echo "</tr>";
  }

?>
</table>

</body>
</html>