<html>
<head>
<title>Scruffian</title>

<?php

$size = $_REQUEST[size];

if (empty($size))
{
echo "<script type='text/javascript' src='screenRes.js'></script>";
}

?>
<style>
body	{ margin: 0px; overflow:auto; border:0px none; font-family: courier; font-size: 8pt; margin-width: 0; margin-height: 0; border-top-width:0px; border-right-width:0px; border-bottom-width:0px; border-left-width:0px}
table	{ color: #999999; }
a	{ color: #ffffff; }
</style>
</head>
<body bgcolor="#000000">
<table cellspacing="0" cellpadding="10" border="0" width="100%" height="100%" style="background-image:url('<?php echo $size ?>.jpg'); background-repeat: no-repeat; background-postition: 50%;"><tr><td align="left" valign="bottom">Your screen resolution is <?php echo $size ?> pixels wide. <br>This page has been optimised for your viewing pleasure.<br>Press F11 to view full screen.<br><a href="index2.php">Enter</a></td>
</tr></table>
</body>
</html>