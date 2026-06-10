<?php


$image = $_GET['image'];
$date='060224';
$imagefile=$date . $image; 

$name01='tip';
$desc01='these are some woods round the back of the industrial estate where i work. a lot of rubbish gets dumped here. some of it is quite useful';

$name02='fungus';
$desc02='you cant escape mobile masts';

$name03='windfall';
$desc03='its amazing how long trees carry on growing after they have fallen down';

$name04='yew';
$desc04='yew trees are interesting. their wood makes excellent long bows and they grow very slowly, so to see a big one like this is good.';

$name05='chainsaw';
$desc05='';

$name06='catkins';
$desc06='catkins come out on hazel trees in february usually';

$name07='pipe';
$desc07='looks like a challenge';

$name08='more pipe';
$desc08='i was tempted to walk across';

$name09='macro pipe';
$desc09='but my shoes were slippy';

$name10='under pipe';
$desc10='and it was a long way down';

$name11='extinguisher';
$desc11='i was playing with this when it started to hiss and all the gas came out. gave me a shock.';

$name12='treefingers';
$desc12='';

$name13='dead motorbike';
$desc13='i find rubbish quite interesting';

$name14='sunset';
$desc14='not sure why but i like this.';

$name15='';
$desc15='';

$name16='';
$desc16='';

$name17='';
$desc17='';

$name18='';
$desc18='';

$name19='';
$desc19='';

$name20='';
$desc20='';

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

<title>scruffian: february</title>
<style>

body         { margin:0; overflow:auto; border:0px none; font-family: georgia; font-size: 8pt; margin-width: 0; margin-height: 0; border-top-width:0px; border-right-width:0px; border-bottom-width:0px; border-left-width:0px }
table        { font-size: 8pt; font-family: georgia; }
img			 { border: 0px solid #FFFFFF; color: #FFFFFF }

body         { color: #ffffff }
a            { }
a:link       { color: #ffffff }
a:visited    { color: #ffffff }
a:active     { color: #ffffff }
a:hover      { color: #999999 }

</style>
</head>

<body bgcolor="#000000">



<table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" width="100%" id="AutoNumber1" height="100%">
  <tr>
    <td width="100%" align="center">
    <table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="790" id="AutoNumber1" height="590">
  <tr>
    <td rowspan="2" valign="top">

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
    <td width="640"><?php echo "$imagedescription"; ?></td>
  </tr>
</table>
    </td>
  </tr>
</table>



</body>

</html>