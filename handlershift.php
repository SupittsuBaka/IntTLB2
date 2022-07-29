<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial+scale=1.0">
	<title>ShmidtLB1</title>
<head>

<body>
	<?php
    include "connection.php";
    $departnum=$_GET["departnum"];
	$shiftname=$_GET["shiftname"];
    $key = $departnum . $shiftname;
    $cursor = $game->find(['shift'=>$shiftname, 'department'=>$departnum]);
    $value =  "<table border =1><tr><th>shift</th><th>date</th><th>department</th><th>nursename</th><th>ward</th></tr>";
    foreach ($cursor as $document){
        $ward = $document['ward'];
		$nursename =$document['nursename'];
		$date=$document['date'];
       $value .= "<tr><td>$shift</td><td>$date</td><td>$department</td><td>$nursename</td><td>$ward</td></tr>";
    }
    echo $value;
    echo "<script> localStorage.setItem('$key', '$value'); </script>"
    ?>
</body>
</html>