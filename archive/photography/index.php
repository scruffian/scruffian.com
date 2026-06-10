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
<a href="http://www.scruffian.com/">Home&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a><a href="../messages.php">Messages&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a><a href="http://www.scruffian.com/zine/">Zine&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a><a href="../index2.php?page=contact">Contact&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
<br>
    <table cellpadding="0" cellspacing="0" style="border: solid 5px #000000;" >
      <tr>
        <td width="100%">
<?php

$sub = $_REQUEST["sub"]; // Get the subdirectory from URL

$ext = array("jpg", "png", "jpeg", "gif"); // These are the file extensions that will be displayed

if(isset ($sub)) // This is what will happen if the subdirectory is set in the URL
{
	if ($handle = opendir($sub))
	{
		while ($file = readdir($handle)) // This reads the directory contents
		{
			$localpath = $sub."/".$file;
 
			if (is_file($localpath))
			{
				$key = filemtime($localpath).md5($file);
				$files[$key] = $file;
			}
		}
		asort($files);
		foreach ($files as $file)
		{
			for($i=0;$i<sizeof($ext);$i++) 
			if(stristr($file, ".".$ext[$i])) // Find out if the file extensions match those above NOT case sensitive.
			{
					if ($file != "." && $file != "..") // Get rid of dot files
					{
						$extension = strrchr($file, '.'); // This strips off the extension
						if($extension !== false)
						{
							$filename = substr($file, 0, -strlen($extension));
						}
					echo "<img src='$sub/$file' alt='$filename'><br>";
					}
			}
		}
	closedir($handle);
	}
}
?>
        </td>
      </tr>
    </table>
<?php
	if ($handle = opendir('.'))
	{
		while ($file = readdir($handle))
		{
			$localpath = $file;
 
			if (is_dir($localpath))
			{
				$key = filemtime($localpath).md5($file);
				$files[$key] = $file;
			}
		}
		arsort($files);
		foreach ($files as $file)
		{
			if ($file != "." && $file != "..")
			{
				if (is_dir($file))
				{
					$Year = substr($file, 0, 2);
					$Month = substr($file, 2, 2);
					$Day = substr($file, 4, 2);
					$Date = date("l j F", mktime(0, 0, 0, $Month, $Day, $Year));
					echo "<a href='?sub=$file'>$Date</a><br />";
				}
			}
		}
   	}
   	closedir($handle);

?>
    </td>
  </tr>
</table>

</body>
</html>





















