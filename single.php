<?php
	$status = $_GET['status'];
	$name = $_GET['name'];

	echo $name;
	if ($status == 'yes')
	{
		echo '<input type="radio" name="status" value="yes" checked> Yes';
		echo '<input type="radio" name="status" value="no"> No';
	}
	else
	{
		echo '<input type="radio" name="status" value="yes"> Yes';
		echo '<input type="radio" name="status" value="No" checked> No';
	}
?>