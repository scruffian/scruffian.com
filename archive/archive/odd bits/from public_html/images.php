<?php


$image = $_GET['image'];
$date='060227';
$imagefile=$date . $image; 

$name01='image one';
$desc01='image one desc';

$name02='image two';
$desc02='image two desc';

$name03='image three';
$desc03='image three desc';

$name04='image four';
$desc04='image four desc';

$name05='image five';
$desc05='image five desc';

$name06='image six';
$desc06='image six desc';

$name07='image seven';
$desc07='image seven desc';

$name08='image eight';
$desc08='image eight desc';

$name09='image nine';
$desc09='image nine desc';

$name10='image ten';
$desc10='image ten desc';

$name11='';
$desc11='';

$name12='';
$desc12='';

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


<img src="<?php echo "$imagefile"; ?>.jpg"><br>

<?php echo "$imagedescription"; ?><br>