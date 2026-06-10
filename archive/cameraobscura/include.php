<?php

	$cameraobscuraDir = __DIR__;
	$files = array();

	if ($handle = opendir($cameraobscuraDir))
	{
		while ($file = readdir($handle))
		{
			$localpath = $cameraobscuraDir."/".$file;

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
				if (is_dir($cameraobscuraDir."/".$file))
				{
				$link = rawurlencode($file);
				$title = htmlspecialchars($file, ENT_QUOTES, "UTF-8");
				echo "<a href='../../../cameraobscura/index.php?sub=$link'>$title</a><br>";
				}
			}
		}
		closedir($handle);
	}
?>
