<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Scruffian. Home.</title>
<meta name="Keywords" content="dirt, dirty, scruffy, trails, bike, bmx, music, food, trails, dig, sittingbourne skatepark, digging, year, jump, pictures, fun, design, ride, summer, skatepark, bmx, riding, pretty, mud, worms, built, build" />
<meta name="Description" content="This is a website about art: photography, mud sculpture, graphic design, music and bicycle riding." />
<meta name="Author" content="ben@scruffian.com" />
<meta name="robots" content="index,follow" />
<script type="text/javascript">
function SwitchLayers(layer)
{
	document.getElementById('about').style.display = "none";
	document.getElementById('archive').style.display = "none";
	document.getElementById('blog').style.display = "none";
	document.getElementById('links').style.display = "none";
	document.getElementById(layer).style.display = "block";
}
</script>
<link href="december.css" rel="stylesheet" type="text/css" />
</head>

<body>
	<div id="wrapper">
		<div id="background"></div>
		<span style="float: left; font-size: 1em; margin: 8px 0 0 8px;">the chairman of the pedantic society</span><h1>Scruffian</h1>
		<div id="header">
			<div id="header-pic" style="overflow: hidden;"><a href="http://www.scruffian.com/photoblog/"><img src="http://www.scruffian.com/photoblog/index.php?showthumb=latest&thumbtag=image" style="margin-top: -190px;" border="0" /></a></div>
		</div>
		<div id="nav">
			<div id="navcontainer">
				<ul id="navlist">
					<li><a href="http://www.scruffian.com/">Home</a></li>
					<li><a href="javascript:SwitchLayers('about')">About</a></li>
					<li><a href="http://www.scruffian.com/messages.php">Messages</a></li>
					<li><a href="http://design.scruffian.com">Design</a></li>
					<li><a href="http://www.scruffian.com/media/">Archive</a></li>
					<li><a href="http://www.scruffian.com/links.htm">Links</a></li>
					<li><a href="http://www.scruffian.com/contact.php">Contact</a></li>
				</ul>
			</div>
			<div id="right">
				<h3><a href="blog/index.php">Blog</a></h3>
				<ul class="features" id="features1">
					<?php
					$Month = "01";
					$Year = "07";
					$Date = $Year.$Month;
					
					$TodaysMonth = date("m")+1;
					$TodaysMonth = $TodaysMonth;
					$TodaysYear = date("y");
					$Today = $TodaysYear.$TodaysMonth;			

					while( $Date < $Today  )
					{
						$DateName = date("F y", mktime(0, 0, 0, $Month, 1, $Year));
						echo "<li><a href='index.php?Date=$Date'>$DateName</a></li>";
						if( $Month == 12 )
						{
							$Month = $Month + 1;
							$Year = $Year + 1;
						}
						else
						{
							$Month = $Month + 1;
							$Year = $Year;
							
						}
						if( $Month < 10 )
						{
							$Month = "0".$Month;
						}
						$Date = $Year.$Month;
					}
					?>
				</ul>
			</div>
		</div>
		<div style="position: relative;">
			<div id="content">
				<div id="footer">
					<div id="footer-text">scruffy design</div>
				</div>
				<div id="about" class="text" style="display: none;">
					<h3>About</h3>
					<p>This website is a collection of pictures, words and ideas which document the lives of people who don't like killing time in front of the television. I like being outside and looking at trees and animals. I like going for walks and taking pictures of things I see. I like to build jumps out of mud and ride them on my bike. I also like doodling on paper, on the computer and on my guitar.
<br /><br /><a href='../about/index.html'>The old about page</a></p>
				</div>
				<div id="archive" class="text" style="display: none;">
					<h3>Archive</h3>
					<p>
						<a href='http://www.scruffian.com/blog/0702/'>February 07</a><br />
						<a href='http://www.scruffian.com/blog/0701/'>January 07</a>
						<br />
						<a href='http://www.scruffian.com/media/index.htm'>Media</a>
						<br />
						<a href='http://www.scruffian.com/cameraobscura/index.php'>Camera Obscura</a>
						<br />
						<a href='http://www.scruffian.com/articles/'>Articles</a>
						<br />
						<a href='http://www.scruffian.com/gallery/'>Gallery</a>
						<br />
						<a href='../news/archives.html'>Old News</a>
						<br />
						<a href='http://www.scruffian.com/media/oldnews.htm'>Really Old News</a>
					</p>
				</div>
				<div id="blog" class="text" style="display: block;">
					<?php
					$username="thisis_ben";
					$password="rebekah";
					$database="thisis_main";
					mysql_connect(localhost,$username,$password);
					@mysql_select_db($database) or die( "Unable to select database");
					
					$Datime = $_REQUEST["Datime"];
					if($Datime)
					{
						$SQL = " SELECT * FROM blog WHERE Datime = $Datime ";
						$Data = mysql_query($SQL);
					}
					else
					{
						$Date = $_REQUEST["Date"];
						if($Date)
						{
							//Do Nothing
						}
						else
						{
							$Date = date("y").date("m");
						}
						$StartMonth = substr($Date, 2, 2);
						$StartYear = "20".substr($Date, 0, 2);
						$EndMonth = $StartMonth + 1;
						if($EndMonth == "12")
						{
							$EndYear = $StartYear + 1;
						}
						else
						{
							$EndYear = $StartYear;
						}
						$StartDate = mktime(0, 0, 0, $StartMonth, 1, $StartYear);
						$EndDate = mktime(0, 0, 0, $EndMonth, 1, $EndYear);
						$SQL = " SELECT * FROM blog WHERE Datime > $StartDate AND Datime < $EndDate ORDER BY Datime ";
						$Data = mysql_query($SQL);
					}

					if( mysql_num_rows($Data) > 0)
					{
						for( $Loop = 0 ; $Loop < mysql_num_rows($Data) ; $Loop++ )
						{
							$Datime = mysql_result($Data, $Loop, 'Datime');
							$DateHeader = date("jS F", $Datime);
							$Text = mysql_result($Data, $Loop, 'Text');
							echo "<h3>".$DateHeader."</h3>".$Text."<p>&nbsp;</p>";
						}
					}
					else
					{
						echo $SQL;
					}
					mysql_close();
					?>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
