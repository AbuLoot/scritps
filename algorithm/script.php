<?php
$array = array();
$x = 0;
while ($x <= 10) {
	$array[] = rand(1,99);
	$x++;
}
echo 'array: ';
foreach ($array as $value) {
	print $value.' ';
}
echo '<hr>';

$sum = 0;
for ($i=0; $i < count($array); $i++) {
	$sum = $sum + $array[$i];
}
echo 'summa: '.$sum;
echo '<hr>';

$max = $array[0];
for ($i=0; $i < count($array); $i++) { 
	if ($max < $array[$i]) {
		$max = $array[$i];
	}
}
echo 'max value: '.$max;
echo '<hr>';

$min = $array[0];
for ($i=1; $i < count($array); $i++) {
	if ($min > $array[$i]) {
		$min = $array[$i];
	}
}
echo 'min value: '.$min;
echo '<hr>';
?>