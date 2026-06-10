<?php

$image = $_GET['image'];
$date='060315';
$imagefile=$date . $image; 


$name01='sunset';
$desc01='';

$name02='zoom';
$desc02='';

$name03='pie and caffreys';
$desc03='We ended up with this on St. Patricks day. Pure coincidence.';

$name04='tools';
$desc04='These are useful tools. The one on the left is a tamper. It is good for making things flat. The one on the right is a spade with a stainless steel head. Good for making things smooth.';

$name05='lilly';
$desc05='';

$name06='lilies';
$desc06='';

switch ($image){
	case "01":
		$imagedescription=$desc01;
		break;
	case "02":
		$imagedescription=$desc02;
		break;
	case "03":
		$imagedescription=$desc03;
		break;
	case "04":
		$imagedescription=$desc04;
		break;
	case "05":
		$imagedescription=$desc05;
		break;
	case "06":
		$imagedescription=$desc06;
		break;
	case "07":
		$imagedescription=$desc07;
		break;
	case "08":
		$imagedescription=$desc08;
		break;
	case "09":
		$imagedescription=$desc09;
		break;
	case "10":
		$imagedescription=$desc10;
		break;
	case "11":
		$imagedescription=$desc11;
		break;
	case "12":
		$imagedescription=$desc12;
		break;
	case "13":
		$imagedescription=$desc13;
		break;
	case "14":
		$imagedescription=$desc14;
		break;
	case "15":
		$imagedescription=$desc15;
		break;
	case "16":
		$imagedescription=$desc16;
		break;
	case "17":
		$imagedescription=$desc17;
		break;
	case "18":
		$imagedescription=$desc18;
		break;
	case "19":
		$imagedescription=$desc19;
		break;
	case "20":
		$imagedescription=$desc20;
		break;
		}

?>


<html>

<head>
<meta http-equiv="Content-Language" content="en-gb">
<META name="description" content="Riding dirty bikes on dirty jumps: Pictures Videos and Design.">
<META name="keywords" content="dirt, dirty, scruffy, trails, jumps, bike, bikes, bmx, music, food">

<title>scruffian</title>
<style>

body         { margin:0; overflow:auto; border:0px none; font-family: georgia; font-size: 8pt; margin-width: 0; margin-height: 0; border-top-width:0px; border-right-width:0px; border-bottom-width:0px; border-left-width:0px }
table        { font-size: 8pt; font-family: georgia; }
img			 { border: 0px solid #FFFFFF; color: #FFFFFF }

body         { color: #ffffff }
a            { font-size: 18pt; text-decoration: none;}
a:link       { color: #ffffff }
a:visited    { color: #ffffff }
a:active     { color: #ffffff }
a:hover      { color: #000000 }

</style>
</head>

<body bgcolor="#000000">



<table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" width="100%" id="AutoNumber1" height="100%">
  <tr>
    <td width="100%" align="center">
    <table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="900" id="AutoNumber1" height="590">
  <tr>
    <td rowspan="2" valign="top" align="right">
<br>
<a href="<?php echo "?image=01"; ?>"><?php echo "$name01"; ?></a><br>
<a href="<?php echo "?image=02"; ?>"><?php echo "$name02"; ?></a><br>
<a href="<?php echo "?image=03"; ?>"><?php echo "$name03"; ?></a><br>
<a href="<?php echo "?image=04"; ?>"><?php echo "$name04"; ?></a><br>
<a href="<?php echo "?image=05"; ?>"><?php echo "$name05"; ?></a><br>
<a href="<?php echo "?image=06"; ?>"><?php echo "$name06"; ?></a><br>
<a href="<?php echo "?image=07"; ?>"><?php echo "$name07"; ?></a><br>
<a href="<?php echo "?image=08"; ?>"><?php echo "$name08"; ?></a><br>
<a href="<?php echo "?image=09"; ?>"><?php echo "$name09"; ?></a><br>
<a href="<?php echo "?image=10"; ?>"><?php echo "$name10"; ?></a><br>
<a href="<?php echo "?image=11"; ?>"><?php echo "$name11"; ?></a><br>
<a href="<?php echo "?image=12"; ?>"><?php echo "$name12"; ?></a><br>
<a href="<?php echo "?image=13"; ?>"><?php echo "$name13"; ?></a><br>
<a href="<?php echo "?image=14"; ?>"><?php echo "$name14"; ?></a><br>

    </td>
    <td width="640" height="480" bgcolor="#FFFFFF" background="<?php echo "$imagefile"; ?>.jpg">
    <img border="0" src="frame.gif" width="640" height="480"></td>
  </tr>
  <tr>
    <td width="640" align="center" valign="top"><?php echo "$imagedescription"; ?></td>
  </tr>
</table>
    </td>
  </tr>
</table>



</body>

</html>