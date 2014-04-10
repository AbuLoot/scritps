<?php
$tech = array();
for ($a=0; $a < 4; $a++)
{
	for ($b=0; $b < 4; $b++)
	{
		$tech[$a][$b] = rand(1,99);
	}
}

echo "<table border='1'>";
echo "<caption>Random numbers</cation>";
for ($i=0; $i < count($tech); $i++)
{
	echo "<tr>";
	for ($q=0; $q < count($tech[$i]); $q++)
	{
		echo "<td>".$tech[$i][$q]."</td>";
	}
	echo "</tr>";
}
echo "</table>";
echo "<hr>";

// Total number of horizontal
$sum_h = NULL;
for ($x=0; $x < count($tech[0]); $x++)
{
	$sum_h = $sum_h + $tech[0][$x];
}

echo <<<CODE
<fieldset>
	<legend>Total number of horizontal</legend>
	<h2>$sum_h</h2>
</fieldset>
<hr>
CODE;

// Total number of vertical
$sum_v = NULL;
for ($i=0; $i < count($tech); $i++)
{
	foreach ($tech[$i] as $key => $value)
	{
		if ($key == 0)
		{
			$sum_v = $sum_v + $value;
		}
	}
}

echo <<<CODE
<fieldset>
	<legend>Total number of vertical</legend>
	<h2>$sum_v</h2>
</fieldset>
<hr>
CODE;

// Sum of the diagonal numbers
$sum_d = NULL;
for ($i=0; $i < count($tech); $i++)
{
	foreach ($tech[$i] as $key => $value)
	{
		if ($key == $i)
		{
			$sum_d = $sum_d + $value;
		}
	}
}

echo <<<CODE
<fieldset>
	<legend>Sum of the diagonal numbers</legend>
	<h2>$sum_d</h2>
</fieldset>
<hr>
CODE;

// Results mirror numbers
$mirror_array = array();
$x = 0;
for ($i=0; $i < count($tech); $i++)
{
	foreach ($tech[$i] as $k => $value)
	{
		if ($k == $i)
		{
			$mirror_array[$i][$k] = $value;
		}
		else
		{
			$mirror_array[$k][$i] = $value;
		}
	}
}

echo "<table border='1'>";
echo "<caption>Results mirror numbers</cation>";
for ($i=0; $i < count($mirror_array); $i++)
{
	echo "<tr>";
	foreach ($mirror_array[$i] as $key => $value)
	{
		if ($key == $i)
		{
			echo "<th>".$value."</th>";
		}
		else
		{
			echo "<td>".$value."</td>";
		}
	}
	echo "</tr>";
}
echo "</table>";
echo "<hr>";
?>