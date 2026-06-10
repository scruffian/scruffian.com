<html>
<head><title>The Pretty Shady File Uploader</title></head>
<body>
<p>Welcome to the Pretty Shady File Uploader. Last Updated 9th March 2006. Now accepting all image, audio, video and text files. I 

hope.</p>
<form action="<?=$PHP_SELF?>" method="post" enctype="multipart/form-data">
<input type="file" name="file">
<input type="submit" name="submit" value="submit">
</form>
</body>
</html>

<?php

if (!isset($file)) exit; 

if ($file_size>99999999)
	{
	$file_upload="false";
	print '<p>Your file was too big. Please try again.</p>';
	}
else
	{
	if 	(!(	
		$file_type=="image/pjpeg" OR 
		$file_type=="image/gif" OR
		$file_type=="image/jpeg" OR
		$file_type=="image/jpg" OR
		$file_type=="image/jpe" OR
		$file_type=="image/png" OR
		$file_type=="image/tiff" OR
		$file_type=="image/tif" OR
		$file_type=="image/x-xbitmap xbm" OR
		$file_type=="image/x-xpixmap xpm*" OR
		$file_type=="audio/mpeg" OR
		$file_type=="audio/mpga" OR
		$file_type=="audio/mp2" OR
		$file_type=="audio/mp3" OR
		$file_type=="audio/mpeg" OR
		$file_type=="audio/x-wav wav" OR
		$file_type=="audio/wav" OR
		$file_type=="video/mpeg" OR
		$file_type=="video/mpg" OR
		$file_type=="video/mpe" OR
		$file_type=="video/x-msvideo avi" OR
		$file_type=="video/wmv" OR
		$file_type=="video/quicktime" OR
		$file_type=="video/qt" OR
		$file_type=="video/mov" OR
		$file_type=="text/css" OR
		$file_type=="text/directory" OR
		$file_type=="text/plain asc txt" OR
		$file_type=="text/rtf rtf" OR
		$file_type=="text/xml xml" OR
		$file_type=="text/css" OR
		$file_type=="text/html" OR
		$file_type=="text/htm"
		))
		{
		$file_upload="false";
		print '<p>Your file was not the right type. Please try again.</p>';
		}
	else
		{
			if ( move_uploaded_file ($_FILES['file'] ['tmp_name'], "mediadump/{$_FILES['file'] ['name']}") )
			{
			print '<p> The file has been successfully uploaded </p>';
			}
			else
			{
			print '<p>Your file is the right size and type but there was some other error. Please try again.</p>';
			}
       		}
}
?>