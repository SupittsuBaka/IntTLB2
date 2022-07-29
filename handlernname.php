<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial+scale=1.0">
	<title>ShmidtLB2</title>
<head>
<body>
	<h4>Інформація про чергування обраної медсестри:</h4>
	<?php
    include "connection.php";
    $nursename = $_GET['nursename'];
    $key = $nursename;
    $cursor = $game->find(['nursename'=>$nursename]);
    $value =  "<table border =1><tr><th>Nursename</th><th>Ward</th></tr>";
    foreach ($cursor as $document){
        $ward = $document['ward'];
       $value .= "<tr><td>$nursename</td><td>$ward</td></tr>";
    }
    echo $value;
    echo "<script> localStorage.setItem('$key', '$value'); </script>"
    ?>
</body>
</html>