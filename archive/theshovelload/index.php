<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>

<title>The Shovel Load Videos</title>

<style>
<!--
table { font-family: courier; font-size: 8px; }
ul { margin:0; padding:0; border-left: 30px solid #000000; }
li { margin: 0px; padding: 0px; }
a { color: #000000; text-decoration:none; }
a:visited { color:#000000; background-color: #000000 }
a:hover { color:#ffffff; background-color: #000000}
// .style1 {font-size: 24px}
.style2 {font-size: 36px}
-->
</style>

</head>

<body>

<table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse; background-image:url(bg.jpg); background-repeat:no-repeat;" bordercolor="#111111" id="AutoNumber2">
  <tr>
<td>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
	Yak used to make a website called the shovel load. I let him use my webspce for videos. These are they. I hope he doesn't mind. In date order. You need windows media player.</p>
	<ul>
<?php

$ext = array("wmv", "avi"); // These are the file extensions that will be displayed

	$handle = opendir('.');
	while ($file = readdir($handle)) // This reads the directory contents
	{
		$localpath = $file;
		if (is_file($localpath))
		{
			$key = filemtime($localpath).md5($file);
			$files[$key] = $file;
		}
	}
	ksort($files);
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
				print("<li><a href=\"$file\">$filename</a></li>\r\n");
				}
		}
	}
	closedir($handle);
?>
</ul>
    </td>
  </tr>
</table>

</body>
</html>