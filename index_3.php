<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

$kodi = $_POST["kodi"];
$a = substr(str_shuffle('0123456789'),0,7);
    echo $a."<br>";
    
    if($kodi == $a){
        echo "sworia";
    }else{
        echo "arasworia";
    }
    
?>

<form method="post" action="index_3.php">
    <input type="text" name="kodi"> sheiyvanet kodi <br><br> 

    <input type="submit" value = "submit">
</form>


</body>
</html>