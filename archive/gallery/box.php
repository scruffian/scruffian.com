<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="Author" content="Ben Dwyer" />
<meta name="Description" content="Gallery" />
<meta name="Keywords" content="images" />
<meta name="robots" content="index,follow" />
<title>Scruffian Image Vault: <?php echo $sub ?></title>
<script type="text/javascript" src="js/prototype.js"></script>
<script type="text/javascript" src="js/scriptaculous.js?load=effects"></script>
<script type="text/javascript" src="js/lightbox.js"></script>
<link rel="stylesheet" href="css/lightbox.css" type="text/css" media="screen" />
<style>
	body { margin: auto; font-family: Verdana; font-size: 0.8em; color: #fff; background: #000; }
	ul { margin: 5px; padding: 0; list-style: none; }
	li { background: #333; margin: 0 10px 10px 0; padding: 5px 0; float: left; }
	li:hover { background: #999; }
	li:hover a { color: #000; }
	li a { padding: 5px; }
	a { color: #fff; text-decoration: none; }
	a:hover { color: #000; }
	p { margin: 5px 5px 10px 5px; padding: 0; }
	p a:hover { color: #999; }
</style>
</head>
<body>
<p><a href="http://www.scruffian.com">scruffian.com</a> | <a href="box.php">image gallery</a></p>
<?php
	echo "<ul>";
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
			if ($file != "." && $file != ".." && $file != "js" && $file != "css" && $file != "images" )
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
<div style="margin: auto; clear: both;">
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
					?>
					<div style="width: 100px; height: 100px; overflow: hidden; float: left; margin: 5px;">
						<a href="<?php echo $sub."/".$file ?>" rel="lightbox[<?php echo $sub ?>]" title="<?=$theData?>">
							<img src="<?php echo $sub."/".$file ?>" alt="<?=$theData?>" border="0" style="width: 200px; margin: -16px 0 0 -50px;" />
						</a>
					</div>
					<?php
					}
			}
		}
	closedir($handle);
	}
}
?>
</div>
<script>
	//initLightbox();
</script>
<br clear="all" />
<p align="center">
	<?php
	if($sub)
	{
		$URL = "?sub=".$sub;
	}
	?>
	<a href="index.php<?=$URL?>">Slideshow View</a> | <a href="scroll.php<?=$URL?>">Scrolling View</a>
</p>
</body>
</html>