<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial+scale=1.0">
	<title>ShmidtLB1</title>
	<script src="localStorage.js">
<head>
<body>
	
	<form method="get" action="handlernname.php">
	<p>Оберіть медсестру, чиї палати ви хочете побачити
		<select name="nursename" id="nursename" onchange="nnameFunction()">
            <?php
                include "connection.php";
                $cursor = $duty->distinct("nursename");
                foreach ($cursor as $document) {
                    echo "<option>";
                    echo($document);
                    echo "</option>";
                }
                echo '</select>';
            ?>
    </select>
    <button> ОК </button></p>
	</form>

	<p><form method="get" action="handlerdepart.php">
	Оберіть відділ, чиїх медсестер ви хочете побачити
		<select name="departnum" id="departnum" onchange="departFunction()">
            <?php
                include "connection.php";
                $cursor = $duty->distinct("department");
                foreach ($cursor as $document) {
                    echo "<option>";
                    echo($document);
                    echo "</option>";
                }
                echo '</select>';
            ?>
    </select>
    <button> ОК </button></p>
	</form>
	
	<form method="get" action="handlershift.php">
	<p>Оберіть відділ, чиїх медсестер ви хочете побачити
		<select name="shift" id="shift" onchange="shiftFunction()">
            <?php
                include "connection.php";
                $cursor = $duty->distinct("shift");
                foreach ($cursor as $document) {
                    echo "<option>";
                    echo($document);
                    echo "</option>";
                }
                echo '</select>';
            ?>
    </select>
	<select name="departnum" id="departnum1" onchange="shiftFunction()">
            <?php
                include "connection.php";
                $cursor = $duty->distinct("department");
                foreach ($cursor as $document) {
                    echo "<option>";
                    echo($document);
                    echo "</option>";
                }
                echo '</select>';
            ?>
    </select>
    <button> ОК </button></p>
	</form>
	
</body>
</html>