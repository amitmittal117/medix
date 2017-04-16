<?php
	mysql_connect('localhost','root','');
	mysql_select_db('medix');
	$str="SELECT * FROM aadhaar WHERE aadhaar_id = '112233445566'";
	$records = mysql_query($str);
	$base_aadhaar=0;
	while($row = mysql_fetch_array($records))
	{
		$base_aadhaar=$row['aadhaar_id'];
	}
	echo "<p>".$base_aadhaar."</p>";
?>