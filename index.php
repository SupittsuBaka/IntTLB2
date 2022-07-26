<?php
	include("connection.php");
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial+scale=1.0">
	<title>ShmidtLB1</title>
<head>

<body>
	<h4>Оберіть медсестру, чиї палати ви хочете побачити</h4>
	<form action="handlernname.php" method="GET">
		<select name="nursename">
			<?php
				try
				{
					$cursor = $duty->find([],[
						'projection' => ['_id'=>0, 'nursename' => 1]
					]);
					foreach($cursor as $doc)
					{
						$nname = $doc['nursename'];
						print "<option value='$nname'>$nname</option>";
					}
				}
				catch(MongoException $e)
				{
					print "Error: ".$e->getMessage()."<br>";
					reset();
				}
			?>
		</select>
		<br>
		<input type="submit" value="Get">
	</form>

	<h4>Оберіть відділ, чиїх медсестер ви хочете побачити</h4>
	<form action="handlerdepart.php" method="GET">
		<select name="departnum">
			<?php
				try
				{
					$cursor = $duty->find([],[
						'projection' => ['_id'=>0, 'department' => 1]
					foreach($cursor as $doc)
					{
						$department = $doc['department'];
						print "<option value='$department'>$department</option>";
					}
				}
				catch(MongoException $e)
				{
					print "Error: ".$e->getMessage()."<br>";
					reset();
				}
			?>
		</select>
		<br>
		<input type="submit" value="Get">
	</form>	
	
	<h4>Оберіть зміну та відділ, щоб побачити повне чергування</h4>
	<form action="handlershift.php" method="GET">
		<select name="shiftname">
			<?php
				try
				{
					$cursor = $duty->find([],[
						'projection' => ['_id'=>0, 'shift' => 1]
					foreach($cursor as $doc)
					{
						$shift = $doc['shift'];
						print "<option value='$shift'>$shift</option>";
					}
				}
				catch(MongoException $e)
				{
					print "Error: ".$e->getMessage()."<br>";
					reset();
				}
			?>
		</select>
		<br>
		<select name="departnum">
			<?php
				try
				{
					$cursor = $duty->find([],[
						'projection' => ['_id'=>0, 'department' => 1]
					foreach($cursor as $doc)
					{
						$department = $doc['department'];
						print "<option value='$department'>$department</option>";
					}
				}
				catch(MongoException $e)
				{
					print "Error: ".$e->getMessage()."<br>";
					reset();
				}
			?>
		</select>
		<br>
		<input type="submit" value="Get">
	</form>
	
</body>
</html>