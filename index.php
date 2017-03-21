<?php error_reporting(-1); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

<?php

$year = 1900;
echo '<select>';
	while ($year <= 2017) {
		echo "<option value='$year'>$year</option>";
		$year++;
	}
echo "</select>";
?>
</body>
</html >