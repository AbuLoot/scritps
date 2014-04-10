<?php
$array = array();
$x = 0;
while ($x <= 10)
{	
	$array[] = rand(1,99);
	$x++;
}

foreach ($array as $value)
{
	print $value.' ';
}

for ($i = 0; $i < count($array); $i++)
{
	for ($s = $i; $s < count($array); $s++)
	{
		if ($array[$i] > $array[$s])
		{
			$v = $array[$i];
			$array[$i] = $array[$s];
			$array[$s] = $v;
		}
	}
}

echo "<hr>";
foreach ($array as $value)
{
	print $value.' ';
}
?>