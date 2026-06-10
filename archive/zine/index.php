<html>

<head>
<meta http-equiv="Content-Language" content="en-gb">
<META name="description" content="Riding dirty bikes on dirty jumps: Pictures Videos and Design.">
<META name="keywords" content="dirt, dirty, scruffy, trails, jumps, bike, bikes, bmx, music, food">

<title>Scruffian. Zine.</title>
<style>

body         { margin:0; overflow:auto; border:0px none; font-family: georgia; font-size: 8pt; margin-width: 0; margin-height: 0; border-top-width:0px; border-right-width:0px; border-bottom-width:0px; border-left-width:0px }
table        { font-size: 8pt; font-family: georgia; }
img			 { border: 0px solid #FFFFFF; color: #FFFFFF }

body         { color: #000000 }
a            { text-decoration: none;}
a:link       { color: #000000 }
a:visited    { color: #000000 }
a:active     { color: #000000 }
a:hover      { color: #999999 }

</style>
</head>

<body>
<table border="0" cellpadding="9" cellspacing="10" align="center">
  <tr>
        <td width="100%" align="left" valign="top"><p><img border="0" src="zine2006/treeline.jpg" width="454" height="228"> <br>
<?php
$ext = array("jpg", "png", "jpeg", "gif"); // These are the file extensions that will be displayed
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
			if ($file != "." && $file != ".." && $file != "zine2005" && $file != "zine2006")
			{
				if (is_dir($file))
				{
					$Year = substr($file, 0, 2);
					$Month = substr($file, 2, 2);
					$Day = substr($file, 4, 2);
					$Date = date("l j F Y", mktime(0, 0, 0, $Month, $Day, $Year));
					$length = strlen($file);
					$filename = substr($file, 6, $length);
					echo "<a href='$file'><b>$filename</b> - <i>$Date</i></a><br>";
				}
			}
		}
   	}
   	closedir($handle);
?>
          <p><strong>2006:<br>
            </strong><a href="zine2006/january06/index.html">January<br>
            </a><a href="zine2006/february06/index.html">February<br>
            </a><a href="zine2006/march.html">March<br>
            </a><a href="zine2006/april06/index.html">April<br>
            </a><a href="zine2006/may06/index.php">May</a><br>
            <a href="zine2006/june06/index.html">June</a><br>
            <a href="zine2006/july06/index.php">July/August</a><br>
          <a href="zine2006/september06/index.html">September</a><br>
          <a href="zine2006/october06/index.html">October</a><br>
          <a href="zine2006/november06/index.html">November</a><br>
          <a href="zine2006/december06/index.html">December</a>          </p>
          <p><strong>2005:</strong><br>
            <a href="zine2006/october05/index.html">October<br>
            </a><a href="zine2006/november05/index.html">November<br>
            </a><a href="zine2006/december05/december.html">December</a></p>
          <p><a href="zine2005/index.html">Zine version one</a></p>
          <p><a href="../index.php">Home<br>
            </a></p>
        </td>
  </tr>
  </table>
  </center>
</div>
</body>

</html>








