<?
	$connect=mysql_connect("$db_host","$db_id","$db_pw");
 	if(!$connect) { echo "connect failure"; exit; }
	if(!mysql_select_db("$db_name",$connect))
		{echo "select failure"; exit;}
?>
