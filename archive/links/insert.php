<?php
include("dbinfo.inc.php");
mysql_connect(localhost,$username,$password);
@mysql_select_db($database) or die( "Unable to select database"); 

$query = "INSERT INTO links VALUES ('','$linkname','$linkurl','$rating')";
mysql_query($query);

mysql_close();
echo "<a href='index.php'>The BMX Interweb</a>";
?> 