<?php
	
$user = 'sql8167811';	
$pass = '48nBZJLKIh';	
$db = 'sql8167811'	
	
$dbz = new mysqli('sql8.freemysqlhosting.net',$user,$pass) or die("not connecte");


$dbsel= mysql_select_db($db, $dbz);		
 echo "hreat"	;
?>