<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>

<title>cameraobscura</title>

<style>
<!--
table { font-family: courier; }
ul.twocol { width: 400px; }
li { float: left; width: 180px; margin: 0px 20px 0px 0px; padding: 0px; }
// -->
</style>

</head>

<body>

<table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="100%" id="AutoNumber1">
  <tr>
    <td width="100%" align="center">
    <table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" id="AutoNumber2">
      <tr>
        <td width="100%">
        <p align="center">
        <a href="index.php"><img border="0" src="camera.gif" width="110" height="80"></a><br>
        cameraobscura</p>
<?php

$sub = isset($_REQUEST["sub"]) && is_string($_REQUEST["sub"]) ? $_REQUEST["sub"] : ""; // Get the subdirectory from URL
$validSub = $sub !== "" && $sub !== "." && $sub !== ".." && strpos($sub, "/") === false && strpos($sub, "\\") === false && is_dir($sub);

$ext = array("jpg", "png", "jpeg", "gif"); // These are the file extensions that will be displayed

if($validSub) // This is what will happen if the subdirectory is set in the URL
{
	$files = array();
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
		ksort($files);
		foreach ($files as $file)
		{
			if(in_array(strtolower(pathinfo($file, PATHINFO_EXTENSION)), $ext)) // Find out if the file extensions match those above NOT case sensitive.
			{
					if ($file != "." && $file != "..") // Get rid of dot files
					{
						$extension = strrchr($file, '.'); // This strips off the extension
						if($extension !== false)
						{
							$filename = substr($file, 0, -strlen($extension));
						}
					$imgSrc = rawurlencode($sub)."/".rawurlencode($file);
					$imgAlt = htmlspecialchars($filename, ENT_QUOTES, "UTF-8");
					echo "<img src='$imgSrc' alt='$imgAlt'><br>$imgAlt<br>";
					}
			}
		}
	closedir($handle);
	}
}

	echo "<ul class='twocol'>";
	if ($handle = opendir('.'))
	{
		$files = array();
		while ($file = readdir($handle))
		{
			$localpath = $file;
 
			if (is_dir($localpath))
			{
				$key = filemtime($localpath).md5($file);
				$files[$key] = $file;
			}
		}
		krsort($files);
		foreach ($files as $file)
		{
			if ($file != "." && $file != "..")
			{
				if (is_dir($file))
				{
				$link = rawurlencode($file);
				$title = htmlspecialchars($file, ENT_QUOTES, "UTF-8");
				echo "<li><a href='?sub=$link'>$title</a></li>";
				}
			}
		}
		closedir($handle);
	}
	echo "</ul>";

?>
        </td>
      </tr>
    </table>
    </td>
  </tr>
</table>

</body>
</html>
