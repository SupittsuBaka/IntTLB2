<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial+scale=1.0">
	<title>ShmidtLB2</title>
<head>
<body>
	<?php
    include "connection.php";
    $departnum = $_GET['departnum'];
    $key = $departnum;
    $cursor = $game->find(['department'=>$departnum]);
    $value =  "<table border =1><tr><th>Department</th><th>Nursename</th></tr>";
    foreach ($cursor as $document){
        $nursename = $document['nursename'];
       $value .= "<tr><td>$departnum</td><td>$nursename</td></tr>";
    }
    echo $value;
    echo "<script> localStorage.setItem('$key', '$value'); </script>"
    ?>
</body>
</html>