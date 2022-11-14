<table align="center" border='1' width="100%">
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST')
{
	$num = 100;

	for($i = 1; $i <= 100; $i++)
	{	
	    echo "<tr>";
	
		for($j =1; $j <= $num; $j++)
		{
			$multiplication_table = ($i * $j);
			echo "<td>$multiplication_table </td>";
		}
	
		echo "<tr/>";
	}
}

?>
</table>