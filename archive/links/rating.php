<?php
include("dbinfo.inc.php");
mysql_connect(localhost,$username,$password);
@mysql_select_db($database) or die( "Unable to select database");

$id = $_GET['id'];

$query="SELECT linkurl, rating FROM links WHERE id='$id'";
$result=mysql_query($query) or die(mysql_error());

$arrayRow = mysql_fetch_array($result);
$ratingplusone = $arrayRow['rating'];
$linkurl = $arrayRow['linkurl'];

$ratingplusone++;

$update="UPDATE links SET rating = '$ratingplusone' WHERE id = '$id'";
mysql_query($update) or die(mysql_error());

mysql_close();

header('Location: '.$linkurl.'');
?>