<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<table align="left" border="1" cellpadding="3" cellspacing="0">
<?php


for($i=1;$i<=10;$i++)
{
echo "<tr>";
for ($j=1;$j<=10;$j++)
  {
  echo "<td>". substr(str_shuffle('0123456789abcdefghijklmnopqrstuvwxyz'),0,7) ."</td>";
  }
  echo "</tr>";
  }

?>
</table>

</body>
</html>