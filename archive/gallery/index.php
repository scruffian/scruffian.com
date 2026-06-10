<?php
$sub = $_REQUEST["sub"]; // Get the subdirectory from URL
$ext = array("jpg", "jpeg", "gif"); // These are the file extensions that will be displayed
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
	closedir($handle);
	}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="Author" content="Ben Dwyer" />
<meta name="Description" content="Gallery" />
<meta name="Keywords" content="images" />
<meta name="robots" content="index,follow" />
<title>Scruffian Image Vault: <?php echo $sub ?></title>

<script language="JavaScript"><!--
Hmove=-800;

function moveImgRight(img) 
{
	Hmove = document.getElementById(img).style.left;
	Hmove = parseInt(Hmove);
   	Hmove = Hmove + 800;	
   	document.getElementById(img).style.left=Hmove+"px";
	//document.getElementById('black').style.left=Hmove+"px";
   	//if(Hmove<1)
	//{
   	//  	window.setTimeout("moveImgRight('"+img+"')", 100);
	//}
	//else
	//{
	//	moveObjLeft('black');
	//}
}

function moveImgLeft(img) 
{
	Hmove = document.getElementById(img).style.left;
	Hmove = parseInt(Hmove);
	Hmove = Hmove - 800;
   	document.getElementById(img).style.left=Hmove+"px";
	//document.getElementById('black').style.left=Hmove+"px";
   	//if(Hmove>-801)
	//{
   	//  	window.setTimeout("moveImgLeft('"+img+"')", 100);
	//}
}

function moveObjRight(img) 
{
	Hmove = document.getElementById(img).style.left;
	Hmove = parseInt(Hmove);
	Hmove = Hmove + 800;
   	document.getElementById(img).style.left=Hmove+"px";
   	if(Hmove<0)
	{
   	  	window.setTimeout("moveObjRight('"+img+"')", 100);
	}
}

function moveObjLeft(img) 
{
	Hmove = document.getElementById(img).style.left;
	Hmove = parseInt(Hmove);
	//alert(Hmove);
	Hmove = Hmove - 800;
   	document.getElementById(img).style.left = Hmove+"px";
	//alert(document.getElementById(img).style.left);
   	if(Hmove>-801)
	{
   	  	window.setTimeout("moveObjLeft('"+img+"')", 100);
	}
}

which_image_loaded = 0;
NUMBER_OF_IMAGES = <?php echo (count($files)-1); ?>;

ImageNames = new Object();
ImageNames.length = NUMBER_OF_IMAGES - 1;

for (counter = 0; counter < NUMBER_OF_IMAGES; counter++){
    file_number = counter + 1;
    filename = ("image" + file_number + ".jpg");
    ImageNames[counter] = filename;
}

function changeImage(direction) {
    which_image_loaded += direction;
	if (which_image_loaded == 1)
	{
        document.getElementById('previous').style.visibility = "hidden";
	}
	else
	{
        document.getElementById('previous').style.visibility = "visible";
	}
	if (which_image_loaded == NUMBER_OF_IMAGES )
	{
        document.getElementById('next').style.visibility = "hidden";
	}
	else
	{
        document.getElementById('next').style.visibility = "visible";
	}

	if(direction > 0)
	{
		var image;
		image = 'image'+which_image_loaded;
		moveImgRight(image);
	}
	if(direction < 0)
	{
		var image;
		image = 'image'+(which_image_loaded+1);
		moveImgLeft(image);
	}
}

function back()
{
	moveObjRight('black');
	window.setTimeout("changeImage(-1);", 250);
}

function Loading(percent) {
	var oldwidth;
 	oldwidth = document.getElementById('percent').style.width;
	newidth = parseFloat(oldwidth) + percent;
	displaywidth = Math.round(newidth);
	document.getElementById('percent').style.width = newidth+'%';
	document.getElementById('percent').innerHTML = displaywidth+'%';
	document.getElementById('loading').innerHTML = '&nbsp;Loaded';
}

function Loaded() {
	document.getElementById('percent').style.width = '100%';
	document.getElementById('percent').innerHTML = '100% Loaded';
	document.getElementById('loading').innerHTML = '';
	document.getElementById('loading').style.display = 'none';
	document.getElementById('help').innerHTML = '';
	changeImage(1);
	setTimeout("document.getElementById('percent').innerHTML = '';",1000)
}

if (document.images)
{
  preload_image = new Image(20,20); 
  preload_image.src="left.gif"; 
  preload_image.src="right.gif"; 
}

//--></script>
<style>
* { font-family: Georgia, 'Times New Roman', Times, serif; font-size: 1em; color: #000000; margin: 0; padding: 0; }
h1 { font-size: 2em; letter-spacing: -0.1em; opacity: .20; filter: alpha(opacity=20); z-index: 30; position: absolute; padding: 0px; }
<?php
if($sub)
{
?>
* { color: #ffffff;  }
body { background-color: #000000; color: #FFFFFF; }
a { text-decoration: none; outline: none; padding: 0 2px; margin: 2px 0; }
a:hover { background-color: #FFFFFF; color: #000000; }
a:hover.arrow { background-color: #000000; }
a.current { background-color: #ffffff; color: #000000; }
<?php
}
else
{
?>
a:hover { background-color: #000000; color: #FFFFFF; }
<?php
}
?>

</style>
</head>

<body style="background-image: url(bg.jpg); background-position: 800px top; background-repeat: repeat-y; margin: 0;" 
<?php
if($sub)
{
?>
onload="javascript:Loaded();"
<?php
}
?>
>
<div style="position: relative; width:800px; height: 600px; float: left; margin: 0 10px 0 0;">
	<div style="position: relative; height: 533px; width:800px;">
		<?php
		if($sub)
		{
		?>
		<div id="preload" style="display: none;"><img src="left.gif" /><img src="right.gif" /><img src="images/loading.gif" /></div>
		<?php
			$myFile = "$sub/captions.txt";
			$fh = fopen($myFile, 'r');
			$Count = 1;
			$Total = count($files)-1;
			$Percent =  100 / $Total;
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
							$path = $sub."/".$file;
						}
						$theData = fgets($fh);
						echo "<div id=\"image".$Count."\" style=\"background-color: #000000; z-index: 0; left: -800px; position: absolute; top: 0px; width: 800px;\"><img align=\"right\" border=\"0\" hspace=\"0\" src=\"".$path."\" onload=\"javascript:Loading($Percent);\" /><div style=\"margin: 10px; position: absolute; right: 0px; bottom: 0px; \"><font style=\"background-color: #000000; color: #FFFFFF;\">$theData ($Count/$Total)</font></div></div>\r\n";
						$Count++;
					}
				}
			}
		}
		?>
		<?php
		if($sub)
		{
			echo "<h1>".$sub."</h1>";
		}
		else
		{
			echo "<h1>Scruffian Image Vault</h1>";
		}
		?>
		<!--<div id="black" style="z-index: 3; left: -800px; position: absolute; top: 0px; width: 800px;"><img height="533" width="800" align="baseline" border="0" hspace="0" src="black.jpg"></div>-->
	</div>
	<?php
	if($sub)
	{
	?>
	<div id="total" style="position: relative; width: 100%; background-color:#ffffff; height: 18px;"><div id="percent" style="height: 18px; float: left; position: relative; width: 0%; background-color:#000000; color: #ffffff; text-align: right;"></div><div id="loading" style="color: #000000;">Loading...</div></div>
	<div style="margin: 5px 10px 0 0; width:800px; position: relative; z-index: 100; text-align: right;"><div id="help" style="float: left;">You can look at the pictures while they are loading</div>
		<div id="next" style="float: right; width: 20px; height: 20px; margin: 0 5px 0 10px; visibility: visible;"><a  href="javascript:changeImage(1)" class="arrow"><img  src="right.gif" width="20" height="20" alt="right" border="0" /></a></div>
		<div id="previous" style="width: 20px; height: 20px; float: right; visibility: hidden;"><a href="javascript:changeImage(-1);" class="arrow"><img src="left.gif" width="20" height="20" alt="left" border="0" /></a></div>
	</div>
	<?php
	}
	?>
&nbsp;</div>
<div style="position: relative; height: 650px;">
	<a href="http://www.scruffian.com/">Home</a> | <a href="http://www.scruffian.com/messages/">Messages</a>  | <a href="http://www.scruffian.com/contact.php">Contact</a><br /><br />
	<h2>Galleries:</h2>
	<ul style="list-style-type: none;">
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
			krsort($files);
			foreach ($files as $file)
			{
				if ( $file != "." && $file != ".." && $file != "js" && $file != "css" && $file != "images" )
				{
					if (is_dir($file))
					{
						//$Year = substr($file, 0, 2);
						//$Month = substr($file, 2, 2);
						//$Day = substr($file, 4, 2);
						//$Date = date("l j F", mktime(0, 0, 0, $Month, $Day, $Year));
						echo "<li><a href='index.php?sub=$file'";
						if($file==$sub)
						{
							echo " class='current'";
						}
						echo ">$file</a></li>";
					}
				}
			}
		}
		closedir($handle);
		?>
	</ul>
	<br />
	<br />
	<br />
	<?php
	if($sub)
	{
		$URL = "?sub=".$sub;
	}
	?>
	<p align="right">
		<a href="scroll.php<?=$URL?>">change to scrolling view</a><br />
		<a href="box.php<?=$URL?>">change to thumbnail view</a>
	</p>
</div>
</body>
</html>