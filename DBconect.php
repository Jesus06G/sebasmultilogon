<?php
$db_host="bmbzta65sap5rbtk9ugd-mysql.services.clever-cloud.com"; //localhost server 
$db_user="ubh8aptvm54nwrpu";	//database username
$db_password="M3yuXpdhUysSSJGAcXRl";	//database password   
$db_name="bmbzta65sap5rbtk9ugd";	//database name

try
{
	$db=new PDO("mysql:host={$db_host};dbname={$db_name}",$db_user,$db_password);
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOEXCEPTION $e)
{
	$e->getMessage();
}

?>



