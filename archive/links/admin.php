<?php

// Define your username and password
$username = "admin";
$password = "delete";

if ($_POST['txtUsername'] != $username || $_POST['txtPassword'] != $password) {

?>

<h1>Login</h1>

<form name="form" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <p><label for="txtUsername">Username:</label>
    <br /><input type="text" title="Enter your Username" name="txtUsername" /></p>

    <p><label for="txtpassword">Password:</label>
    <br /><input type="password" title="Enter your password" name="txtPassword" /></p>

    <p><input type="submit" name="Submit" value="Login" /></p>

</form>

<?php

}
else {

?>

<?php
include("dbinfo.inc.php");
mysql_connect(localhost,$username,$password);
@mysql_select_db($database) or die( "Unable to select database");
$query="SELECT * FROM links ORDER BY rating DESC ";
$result=mysql_query($query);

$num=mysql_numrows($result); 

mysql_close();

echo "<b><center>Database Output</center></b><br><br>";

?>
<table border="0" cellspacing="2" cellpadding="2">

<?php
$i=0;
while ($i < $num) {
$id=mysql_result($result,$i,"id");
$linkname=mysql_result($result,$i,"linkname");
$linkurl=mysql_result($result,$i,"linkurl");
$rating=mysql_result($result,$i,"rating");
?>

<tr> 
<td><font face="Arial, Helvetica, sans-serif"><a href="rating.php?id=<?php echo "$id"; ?>" target='_blank'><?php echo "$linkname"; ?></a></font></td>
<td><font face="Arial, Helvetica, sans-serif"><?php echo "$rating"; ?></font></td>
<td><font face="Arial, Helvetica, sans-serif"><?php echo "$linkurl"; ?></font></td>
<td></td>
</tr>
<?php
++$i;
} 

?>

<tr>
<td><a href="reset.php">Reset All</a></td>
</tr>
</table>
<?php

}

?> 