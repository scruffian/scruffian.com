<?php

$image = $_GET['image'];
$date='060308';
$imagefile=$date . $image; 

$name01='wet';
$desc01='getting your shoes muddy at lunchtime is not a good idea';

$name02='metro';
$desc02='detritus';

$name03='broken';
$desc03='smashing things is fun';

$name04='light';
$desc04='';

$name05='pole';
$desc05='i dragged this pole a long way, but then it wouldnt go in my car';

$name06='sunset';
$desc06='i think you get the best sunsets in the spring and winter';

$name07='skatepark';
$desc07='whoops not sure how this slipped in here';

$name08='pedal';
$desc08='whoops my pedal broke';

$name09='right';
$desc09='i have two good MG1 left pedals and two broken right ones. ill swap a left for a right with anyone?';

$name10='flat';
$desc10='these pictures are all of broken things. i feel like i am surrounded by broken machines.';

$name11='spade';
$desc11='i had to use a spade to get the wheel off. always carry a spade.';

$name12='spare';
$desc12='all done';

$name13='';
$desc13='';

$name14='';
$desc14='';

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

<title>scruffian</title>
<style>

body         { margin:0; overflow:auto; border:0px none; font-family: georgia; font-size: 8pt; margin-width: 0; margin-height: 0; border-top-width:0px; border-right-width:0px; border-bottom-width:0px; border-left-width:0px }
table        { font-size: 8pt; font-family: georgia; }
img			 { border: 0px solid #FFFFFF; color: #FFFFFF }

body         { color: #dddddd }
a            { font-size: 18pt; text-decoration: none; }
a:link       { color: #dddddd }
a:visited    { color: #dddddd }
a:active     { color: #dddddd }
a:hover      { color: #999999 }

</style>
</head>

<body bgcolor="#000000">



<table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" width="100%" id="AutoNumber1" height="100%">
  <tr>
    <td width="100%" align="center">
    <table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="790" id="AutoNumber1" height="590">
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