<?php
$db = mysql_connect("localhost", "thisis_ben","rebekah");
mysql_select_db("thisis_main", $db)  or die( "Unable to select database");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

<title>Scruffian. Design.</title>
<style type="text/css">
body {
	color: #000000;
	font-family: Arial;
	font-size: 0.8em;
	margin: 0;
}
a {
	color: #000000;
	text-decoration: none;
}
a:visited { 
	color: #000000;
}
a:active {
	color: #000000;
}
a:hover {
	color: #cccccc;
}
h1 {
	font-size: 10em;
	font-weight: normal;
	margin: 0;
	line-height: 1.1em;
	z-index: 1;
	position: relative;
}
h2 {
	font-weight: normal;
	font-size: 3em;
	margin: 40px 0 0 0;
	padding: 0;
	line-height: 0.6em;
	color: #A4AC99;
}
h3 {
	font-size: 1.5em;
	font-weight: normal;
	line-height: 0.5em;
}
h4 {
	color: #666666;
	text-decoration: none;
	font-size: 1.5em;
	line-height: 0.4em;
	font-weight: normal;
	margin: 0;
}
#top {
	background-color: #D2D6CD;
	height: 15px;
	padding: 5px;
	margin-top: -27px;
	border-top: 1px solid #000000;
	z-index: 0;
	position: relative;
}
.buttons {
	float: right;
	margin: 0 10px 0 0;
	position: relative;
	z-index: 2;
}
.buttons a {
	color: #000000;
}

.project {
	background-color: #ffffff;
	border: 1px solid #000000;
	width: 300px;
	padding: 20px;
	margin: 0px;
}
.project a {
	color: #000000;
}
.project a:hover {
	color: #000000;
}
.project:hover {
	color: #000000;
	background-color: #eeeeee;
}
#container {
	position: relative;
	margin: 0 0 0 20px;
	min-width: 820px;
}
.box {
	width: 400px;
}
#banner {
	margin: -10px 0 0 0;
}
.right-box {
	width: 400px;
	position: absolute;
	right: 0;
	margin: 0 50px 0 0;
	z-index: 0;
}
.details {
	display: none;
	border: 1px dashed #000000;
	width: 400px;
	padding: 10px;
	z-index: 0;
	position: absolute;
	right: 0;
	margin: -100px 5% 0 0;
}
.details a {
	text-decoration: underline;
}
.details h3 a {
	text-decoration: none;
}
.text {
	width: 343px;
	color: #FFFFFF;
	background-color: #A4AC99;
	margin: 0 0 10px 0;
}
#banner {
	width: 400px;
}

</style>
<script>
function showdiv(div)
{
	<?php
		$SQL = " SELECT * FROM design ";
		$Data = mysql_query($SQL);
		for ( $Loop = 0 ; $Loop < mysql_num_rows($Data) ; $Loop++ )
			{
				$Id = mysql_result($Data, $Loop, 'Id');
				print("document.getElementById('".$Id."').style.display = 'none';\r\n");
			}
	?>
	document.getElementById(div).style.display = 'block';
}
</script>
</head>

<body>
	<div id="banner">
		<h1>Design</h1>
	</div>
	<div id="top">
		<span class="buttons"><a href="http://www.scruffian.com/index.php?page=contact">Contact</a></span>
		<span class="buttons"><a href="http://www.scruffian.com/archive/about/index.html">About</a></span>
		&nbsp;&nbsp;by Ben Dwyer.
	</div>
	<div id="container">
		<p class="box">I have been making websites since 2000. Below are some examples of my work.</p>
		<h2>Recent Work</h2>
		<div class="text">These are websites that I designed and built.</div>
		<div class="box">
			<?php
			$SQL = " SELECT * FROM design WHERE Type = 'Design' ORDER BY date DESC ";
			$Data = mysql_query($SQL);
			for ( $Loop = 0 ; $Loop < mysql_num_rows($Data) ; $Loop++ )
			{
				$Name = mysql_result($Data, $Loop, 'Name');
				$URL = mysql_result($Data, $Loop, 'URL');
				$Description = mysql_result($Data, $Loop, 'Description');
				$Id = mysql_result($Data, $Loop, 'Id');
				?>
					<div class="details" id="<?php echo $Id ?>">
						<a href="<?php echo $URL ?>"><img src="images/<?php echo $Id ?>.jpg" width="400" height="200" border="0" /></a>
						<h3><a href="<?php echo $URL ?>"><?php echo $Name ?></a></h3>
						<?php echo $Description ?><br>
						<a href="<?php echo $URL ?>" style="float: right;"><?php echo $URL ?></a>
					</div>
					<?php
						$Name = mysql_result($Data, $Loop, 'Name');
						$URL = mysql_result($Data, $Loop, 'URL');
						$Description = substr(mysql_result($Data, $Loop, 'Description'), 0, 50);
						$Id = mysql_result($Data, $Loop, 'Id');
					?>
					<a href="javascript:showdiv('<?php echo $Id ?>');" onmouseover="javascript:showdiv('<?php echo $Id ?>');" style="display: block;">
						<div class="project">
							<h4><?php echo $Name ?></h4>
						</div>
					</a>
					<br>
				<?php
			}
			?>
		</div>
		<h2>Code</h2>
		<div class="text">I helped design these websites, but my main role was writing the background code and integrating booking systems.</div>
		<div class="box">
			<?php
			$SQL = " SELECT * FROM design WHERE Type = 'Code' ORDER BY date DESC ";
			$Data = mysql_query($SQL);
			for ( $Loop = 0 ; $Loop < mysql_num_rows($Data) ; $Loop++ )
			{
				$Name = mysql_result($Data, $Loop, 'Name');
				$URL = mysql_result($Data, $Loop, 'URL');
				$Description = mysql_result($Data, $Loop, 'Description');
				$Id = mysql_result($Data, $Loop, 'Id');
				?>
					<div class="details" id="<?php echo $Id ?>">
						<a href="<?php echo $URL ?>"><img src="images/<?php echo $Id ?>.jpg" width="400" height="200" border="0" /></a>
						<h3><a href="<?php echo $URL ?>"><?php echo $Name ?></a></h3>
						<?php echo $Description ?><br>
						<a href="<?php echo $URL ?>" style="float: right;"><?php echo $URL ?></a>
					</div>
					<?php
						$Name = mysql_result($Data, $Loop, 'Name');
						$URL = mysql_result($Data, $Loop, 'URL');
						$Description = substr(mysql_result($Data, $Loop, 'Description'), 0, 50);
						$Id = mysql_result($Data, $Loop, 'Id');
					?>
					<a href="javascript:showdiv('<?php echo $Id ?>');" onmouseover="javascript:showdiv('<?php echo $Id ?>');" style="display: block;">
						<div class="project">
							<h4><?php echo $Name ?></h4>
						</div>
					</a>
					<br>
				<?php
			}
			?>
		</div>
		<h2>Fun</h2>
		<div class="text">These are websites that I made just for fun. I probably learnt something too.</div>
		<div class="box">
			<?php
			$SQL = " SELECT * FROM design WHERE Type = 'Fun' ORDER BY date DESC ";
			$Data = mysql_query($SQL);
			for ( $Loop = 0 ; $Loop < mysql_num_rows($Data) ; $Loop++ )
			{
				$Name = mysql_result($Data, $Loop, 'Name');
				$URL = mysql_result($Data, $Loop, 'URL');
				$Description = mysql_result($Data, $Loop, 'Description');
				$Id = mysql_result($Data, $Loop, 'Id');
				?>
					<div class="details" id="<?php echo $Id ?>">
						<a href="<?php echo $URL ?>"><img src="images/<?php echo $Id ?>.jpg" width="400" height="200" border="0" /></a>
						<h3><a href="<?php echo $URL ?>"><?php echo $Name ?></a></h3>
						<?php echo $Description ?><br>
						<a href="<?php echo $URL ?>" style="float: right;"><?php echo $URL ?></a>
					</div>
					<?php
						$Name = mysql_result($Data, $Loop, 'Name');
						$URL = mysql_result($Data, $Loop, 'URL');
						$Description = substr(mysql_result($Data, $Loop, 'Description'), 0, 50);
						$Id = mysql_result($Data, $Loop, 'Id');
					?>
					<a href="javascript:showdiv('<?php echo $Id ?>');" onmouseover="javascript:showdiv('<?php echo $Id ?>');" style="display: block;">
						<div class="project">
							<h4><?php echo $Name ?></h4>
						</div>
					</a>
					<br>
				<?php
			}
			?>
		</div>
		<h2>Older Work</h2>
		<div class="text">Some examples of projects I worked on in the past.</div>
		<div class="box">
			<?php
			$SQL = " SELECT * FROM design WHERE Type = 'Old' ORDER BY date DESC ";
			$Data = mysql_query($SQL);
			for ( $Loop = 0 ; $Loop < mysql_num_rows($Data) ; $Loop++ )
			{
				$Name = mysql_result($Data, $Loop, 'Name');
				$URL = mysql_result($Data, $Loop, 'URL');
				$Description = mysql_result($Data, $Loop, 'Description');
				$Id = mysql_result($Data, $Loop, 'Id');
				?>
					<div class="details" id="<?php echo $Id ?>">
						<a href="<?php echo $URL ?>"><img src="images/<?php echo $Id ?>.jpg" width="400" height="200" border="0" /></a>
						<h3><a href="<?php echo $URL ?>"><?php echo $Name ?></a></h3>
						<?php echo $Description ?><br>
						<a href="<?php echo $URL ?>" style="float: right;"><?php echo $URL ?></a>
					</div>
					<?php
						$Name = mysql_result($Data, $Loop, 'Name');
						$URL = mysql_result($Data, $Loop, 'URL');
						$Description = substr(mysql_result($Data, $Loop, 'Description'), 0, 50);
						$Id = mysql_result($Data, $Loop, 'Id');
					?>
					<a href="javascript:showdiv('<?php echo $Id ?>');" onmouseover="javascript:showdiv('<?php echo $Id ?>');" style="display: block;">
						<div class="project">
							<h4><?php echo $Name ?></h4>
						</div>
					</a>
					<br>
				<?php
			}
			?>
		</div>
	</div>
	<p>&nbsp;</p>
	<p>&nbsp;</p>
	<p>&nbsp;</p>
	<p>&nbsp;</p>
	<p>&nbsp;</p>
	<p>&nbsp;</p>
	<p align="center" style="color:#CCCCCC;">scruffy design</p>
</body>
</html>