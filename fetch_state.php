<?php
	$switchid = trim($_POST["switchid"]);
	// echo $switchid;
	mysql_connect('localhost', 'root', '');
	mysql_select_db('multi-admin') or die(mysql_error());
	
	$sql = "SELECT `rr_modulecode` FROM `role_rights` WHERE `rr_rolecode` = '$switchid' AND `rr_create` = 'yes' AND `rr_edit` = 'yes' AND `rr_delete` = 'yes' AND `rr_view` = 'yes'";
	echo $sql;
	$result = mysql_query($sql);
?>
<select name="state"> 
<option class="form-control" value="" selected>Please Role Code</option>
<?php

	while ($row = mysql_fetch_array($result)) 
	{
		echo "<option value='" . $row['rr_modulecode'] . "'>" . $row['rr_modulecode'] . "</option>";
	}
	
	echo "</select>";
?>