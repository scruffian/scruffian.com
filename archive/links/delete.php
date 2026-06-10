<?php
include("dbinfo.inc.php");
mysql_connect(localhost,$username,$password);
@mysql_select_db($database) or die( "Unable to select database");

$id = $_GET['id'];

$delete="DELETE FROM links WHERE id = '$id'";
mysql_query($delete) or die(mysql_error());

mysql_close();

echo "Deleted";
?>