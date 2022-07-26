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
		<th>departnum</th>
		<th>nursename</th>
	</tr>
	<h4>Інформація про дежурства обраної медсестри:</h4>
	<?php
		include("connection.php");
		if(isset($_GET["departnum"]))
		{
			
			$departnum=$_GET["departnum"];
			try
			{
				$cursor = $duty->find([],[
						'projection' => ['_id'=>0, 'department' => $departnum, 'nursename' => 1]
				])
				foreach($cursor as $doc)
				{
					$departnum = $doc['department'];
					$nursename = $doc['nursename'];
					print"<tr> <td>$departnum</td> <td>$nursename</td> </tr>";
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