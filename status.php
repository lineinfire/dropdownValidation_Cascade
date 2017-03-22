<?php
	mysql_connect('localhost', 'root', '');
	mysql_select_db('multi-admin');
	
	$sql = "SELECT name, marital_status FROM `tbl_enum` order by name asc";
	$result = mysql_query($sql);
	
	echo "<strong>Name and Marital Status</strong>";
	echo "<ol>";

	while ($row = mysql_fetch_array($result)) 
	{
		echo "<li>" . $row['name'] . " " . $row['marital_status'] . "</li>";
	}
	echo "</ol>";


	$nsql = "SELECT name, marital_status FROM `tbl_enum` order by name asc";
	$nresult = mysql_query($nsql);
	while($newRow = mysql_fetch_array($nresult))
	{
		echo $newRow['name'];
		// echo $newRow['marital_status'];
		$string = str_replace(' ', '', $newRow['name']);

		if ($newRow['marital_status'] == 'yes')
		{			
			echo '<input type="radio" name="'.$string.'status" value="yes" checked> Yes';
			echo '<input type="radio" name="'.$string.'status" value="no"> No';
		}
		else
		{
			echo '<input type="radio" name="'.$string.'status" value="yes"> Yes';
			echo '<input type="radio" name="'.$string.'status" value="No" checked> No';
		}
		echo "<br>";
	}
?>