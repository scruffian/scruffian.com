<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<title>Photography</title>
<style>
body         { font-family: georgia; }
table        { font-size: 12pt; font-family: georgia; }
body         { color: #000000; font-size: 12pt }
a            { text-decoration: none; background-color: #000000; }
a:link       { color: #ffffff }
a:visited    { color: #ffffff; text-decoration: line-through;  }
a:active     { color: #ffffff }
a:hover      { color: #000000; background-color: #ffffff;}

</style>
</head>

<body>
<table border="0" cellpadding="0" cellspacing="0" width="750" align="center">
  <tr>
    <td width="100%">
        <a href="index.php"><img src="title.gif" width="750" height="100" border="0"></a><br />
<a href="http://www.scruffian.com/">Home&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a><a href="../messages.php">Messages&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a><a href="../zine/index.php">Zine&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a><a href="../contact.php">Contact&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
<br>
    <table cellpadding="0" cellspacing="0" style="border: solid 5px #000000;" >
      <tr>
        <td width="100%">
<?php

$sub = isset($_REQUEST["sub"]) ? $_REQUEST["sub"] : ""; // Get the subdirectory from URL
$ext = array("jpg", "png", "jpeg", "gif"); // These are the file extensions that will be displayed

if (preg_match('/^[0-9]{6}$/', $sub) && is_dir($sub)) // This is what will happen if the subdirectory is set in the URL
{
	$files = array();

	if ($handle = opendir($sub))
	{
		while ($file = readdir($handle)) // This reads the directory contents
		{
			$localpath = $sub."/".$file;
			$extension = strtolower(pathinfo($file, PATHINFO_EXTENSION));
 
			if (is_file($localpath) && in_array($extension, $ext))
			{
				$files[] = $file;
			}
		}
		closedir($handle);

		sort($files);
		foreach ($files as $file)
		{
			$filename = pathinfo($file, PATHINFO_FILENAME);
			$src = htmlspecialchars($sub."/".$file, ENT_QUOTES);
			$alt = htmlspecialchars($filename, ENT_QUOTES);

			echo "<img src='$src' alt='$alt'><br>";
		}
	}
}
?>
        </td>
      </tr>
    </table>
<?php
	$files = array();

	if ($handle = opendir('.'))
	{
		while ($file = readdir($handle))
		{
			if (preg_match('/^[0-9]{6}$/', $file) && is_dir($file))
			{
				$files[] = $file;
			}
		}
		closedir($handle);

		rsort($files);
		foreach ($files as $file)
		{
			$Year = substr($file, 0, 2);
			$Month = substr($file, 2, 2);
			$Day = substr($file, 4, 2);
			$Date = date("l j F", mktime(0, 0, 0, $Month, $Day, $Year));
			$link = htmlspecialchars($file, ENT_QUOTES);

			echo "<a href='?sub=$link'>$Date</a><br />";
		}
   	}

?>
    </td>
  </tr>
</table>

</body>
</html>





















