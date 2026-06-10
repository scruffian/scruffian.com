<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<title>Pete's Sittingboure Pictures</title>
	<style>
		table { font-family: courier; }
	</style>
</head>
<body>
<table border="0" cellpadding="0" cellspacing="0" width="750" align="center">
	<tr>
		<td align="center">
			<p align="center">Pete's Sittingbourne Pictures</p>
			<p>Pete took some pictures of the step up and things</p>
			<?php
				$ext = array("jpg", "png", "jpeg", "gif"); // These are the file extensions that will be displayed
				$sub = "./"; // Get the subdirectory from URL
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
			?>
		</td>
	</tr>
</table>
</body>
</html>






