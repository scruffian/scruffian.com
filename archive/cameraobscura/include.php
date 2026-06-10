<?php

	if ($handle = opendir('../../cameraobscura'))
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
			if ($file != "." && $file != "..")
			{
				if (is_dir($file))
				{
				echo "<a href='../../cameraobscura/index.php?sub=$file'>$file</a><br>";
				}
			}
		}
   	}
   	closedir($handle);
?>