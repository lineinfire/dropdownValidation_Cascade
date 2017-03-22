<?php	
	mysql_connect('localhost', 'root', '');
	mysql_select_db('multi-admin');
	
	if (isset($_GET['default']) == 1)
	{
		$asql = "update tbl_enum set marital_status ='no'";
		$aresult = mysql_query($asql);

		$esql = "update tbl_enum set marital_status = 'yes' where id=2";
		$eresult = mysql_query($esql);	
	}
	else
	{
		$sql = "update `tbl_enum` set marital_status='".$_GET['status']."'";
		$result = mysql_query($sql);
	}
?>