<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="Author" content="Ben Dwyer" />
<meta name="Description" content="Gallery" />
<meta name="Keywords" content="images" />
<meta name="robots" content="index,follow" />
<title>Scruffian Image Vault: <?php echo $sub ?></title>
</head>

<body style="width: 800px; margin: auto;">

<p align="center">
	Scruffian Image Vault - Scrolling view<br />
	<?php
	if($sub)
	{
		$URL = "?sub=".$sub;
	}
	?>
	<a href="index.php<?=$URL?>">Slideshow View</a>
</p>

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
		$myFile = "$sub/captions.txt";
		$fh = fopen($myFile, 'r');

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
					$theData = fgets($fh);
					echo "<img src='$sub/$file' alt='$filename'><br>$theData<br>";
					}
			}
		}
	closedir($handle);
	}
}
	echo "<ul class='twocol'>";
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
		krsort($files);
		foreach ($files as $file)
		{
			if ( $file != "." && $file != ".." && $file != "js" && $file != "css" && $file != "images" )
			{
				if (is_dir($file))
				{
					echo "<li><a href='?sub=$file'>$file</a></li>";
				}
			}
		}
   	}
   	closedir($handle);
   	echo "</ul>";
?>
</body>
</html>