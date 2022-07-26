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
		<th>nursename</th>
		<th>ward</th>
	</tr>
	<h4>Інформація про дежурства обраної медсестри:</h4>
	<?php
		include("connection.php");
		if(isset($_GET["nursename"]))
		{
			
			$nursename=$_GET["nursename"];
			try
			{
				$cursor = $duty->find([],[
						'projection' => ['_id'=>0, 'nursename' => $nursename, 'ward' => 1]
				])
				foreach($cursor as $doc)
				{
					$nursename = $doc['nursename'];
					$ward = $doc['ward'];
					print"<tr> <td>$nursename</td> <td>$ward</td> </tr>";
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