<?php
function connectdatabase()
{

	@$dbcon = mysql_connect("192.168.10.11", "root", "iws-a-11-e");

	if (!$dbcon) {

		echo " We're Sorry. We are under Maintenance .. Thank You";

		exit;
	}

	mysql_query("SET NAMES 'utf8'");
	mysql_select_db('weight_x_iws2');

	return 0;

}
