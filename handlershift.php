<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial+scale=1.0">
	<title>ShmidtLB1</title>
<head>

<body>
	<table border='1'>
	<tr>
		<th>shift</th>
		<th>date</th>
		<th>departnum</th>
		<th>nursename</th>
		<th>ward</th>
	</tr>
	<h4>Інформація про дежурства обраної медсестри:</h4>
	<?php
		include("connection.php");
		if(isset($_GET["departnum"]) AND
			isset($_GET["shiftname"]))
		{
			
			$departnum=$_GET["departnum"];
			$shiftname=$_GET["shiftname"];
			try
			{
				$cursor = $duty->find([],[
						'projection' => ['_id'=>0, 'shiftname' => $shiftname, 'date' => 1, 'department' => $departnum, 'nursename' => 1, 'ward' => 1]
				])
				foreach($cursor as $doc)
				{
					$shiftname = $doc['shift'];
					$date = $doc['date'];
					$departnum = $doc['department'];
					$nursename = $doc['nursename'];
					$ward = $doc['ward'];
					print"<tr> <td>$shiftname</td> <td>$date</td> <td>$departnum</td> <td>$nursename</td> <td>$ward</td> </tr>";
				}
			}
			catch(MongoException $e)
			{
				print "Error: ".$e->getMessage()."<br>";
				reset();
			}
		}
	?>
</body>
</html>