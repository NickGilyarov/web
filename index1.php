<?php error_reporting(-1); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

<?php

$i = 1;
echo "<table border=\"1\"> \n"; // экранировали кавычки, перенос строки  
while ($i <= 10) {
	echo "\t<tr>\n"; //табуляция
	$n = 1;
	while ($n <= 3) {
		echo "\t\t<td>Row $i | Col - $n</td>\n";
		$n++;
	}
	echo "\t</tr>\n";
	$i++;
}
echo '</table>'

?>
</body>
</html >