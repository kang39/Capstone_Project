<?php
$mysql_hostname = 'db.soic.indiana.edu';
$mysql_user = 'caps16_team11';
$mysql_password = 'my+sql=caps16_team11';
$mysql_database = 'caps16_team11';

$bd = mysql_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Opps something went wrong!");
$select_db = mysql_select_db($mysql_database) or die ("Opps something went wrong!");

?>