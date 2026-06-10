<?php
include("dbinfo.inc.php");
mysql_connect(localhost,$username,$password);
@mysql_select_db($database) or die( "Unable to select database");

$rating=0;

$query="UPDATE links SET rating='$rating'";
@mysql_select_db($database) or die( "Unable to select database");
mysql_query($query);
mysql_close();

echo "All Reset";
?>