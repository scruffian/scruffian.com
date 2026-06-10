<?php
$style = $_COOKIE['style']; 

include("dbinfo.inc.php");
mysql_connect(localhost,$username,$password);
@mysql_select_db($database) or die( "Unable to select database");
$query="SELECT * FROM links ORDER BY rating DESC ";
$result=mysql_query($query);
$num=mysql_numrows($result); 
mysql_close();

?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>The BMX Interweb</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="css/<?php echo "$style"; ?>.css" rel="stylesheet" type="text/css">
</head>

<body onload="document.search.q.focus()">

<table border="0" cellspacing="0" cellpadding="5" width="100%">
  <tr> 
    <td><font size="7"><div id="banner">My BMX Family</div></font></td>
    <td rowspan="2" align="center" valign="top" id="white" bgcolor="#ffffff"><table id="white" height="100%">
        <tr> 
          <td> 
            <!-- Search Google -->
            <FORM method=GET action="http://www.google.co.uk/search" name="search">
              <input type=hidden name=ie value=UTF-8>
              <input type=hidden name=oe value=UTF-8>
              <TABLE bgcolor="#FFFFFF">
                <tr> 
                  <td align="center"><font size="+2">Search.</font></td>
                </tr>
                <tr> 
                  <td align="center"><input class="button" name='q' type='text' size="50" maxlength="255" style="margin-bottom:5px;margin-top:5px;"/>

                  </td>
                </tr>
                <tr> 
                  <td align="center">
			<input class="button" name="button" type='button' onClick="window.location='http://www.google.co.uk/search?hl=en&q='+document.search.q.value" value='Google' />
			<input class="button" name="button1" type='button' onClick="window.location='http://en.wikipedia.org/wiki/Special:Search?search='+document.search.q.value+'&go=Go'" value='Wikipedia' />
			<input class="button" name="button2" type='button' onClick="window.location='http://www.multimap.com/map/places.cgi?client=public&lang=&advanced=&keepicon=true&quicksearch='+document.search.q.value" value='MultiMap' />
			<input class="button" name="button3" type='button' onClick="window.location='http://search.ebay.co.uk/search/search.dll?cgiurl=http%3A%2F%2Fcgi.ebay.co.uk%2Fws%2F&fkr=1&from=R8&satitle='+document.search.q.value+'&category0='" value='eBay' />
			<input class="button" name="button4" type='button' onClick="window.location='http://www.whois.net/search.cgi2?str='+document.search.q.value" value='WhoIs' />
			<input class="button" name="button5" type='button' onClick="window.location='http://www.youtube.com/results?search_query='+document.search.q.value" value='YouTube' />
                  </td>
                </tr>
              </TABLE>
            </FORM>
            <!-- Search Google -->
          </td>
        </tr>
        <tr> 
          <td align="right"><b>Other useful links:</b></td>
        </tr>
        <tr> 
          <td align="right">
<a href="http://www.blogger.com">Blogger</a><br>
<a href="http://www.bbc.co.uk/news">BBC News</a><br>
<a href="http://www.ebay.co.uk">Ebay</a><br>
<a href="http://www.hotmail.com">Hotmail</a><br>
<a href="http://www.metcheck.com">Metcheck</a><br>
<a href="http://www.multimap.com">Multimap</a><br>
<a href="http://www.myspace.com">Myspace</a><br> 
<a href="http://tveasy.co.uk/">UK TV Listings</a><br>
<a href="http://www.bbc.co.uk/weather/ukweather/">UK Weather (from the BBC)</a><br>
<a href="http://www.wikipedia.org">Wikipedia</a><br>
</td>
        </tr>
      </table></td>
  </tr>
  <tr> 
    <td> <table id="bmxlinks" width="100%">
        <tr> 
          <td>Link counter reset 5th January 2007 | <a href="about.html">About</a> | <a href="add.html">Add Link</a> 
            | <a href="admin.php">Admin</a></td>
          <td align="right"></td>
        </tr>
        <tr> 
          <td><b>BMX Links: (open in a new window)</b></td>
        </tr>
        <?php
$i=0;
while ($i < $num) {
$id=mysql_result($result,$i,"id");
$linkname=mysql_result($result,$i,"linkname");
$linkurl=mysql_result($result,$i,"linkurl");
$rating=mysql_result($result,$i,"rating");
?>
        <tr> 
          <td><a href="rating.php?id=<?php echo "$id"; ?>" target="_blank"><?php echo "$linkname"; ?></a></td>
        </tr>
        <?php
++$i;
} 

?>
      </table></td>
  </tr>
<tr><td>
<p>Styles: 
<a href="index.php">Default</a>
 | <a href="style.php?style=brown">Brown</a>
 | <a href="style.php?style=yellow">Yellow</a>
</p>
<p>Reports:<br>
<a href="reports/2ndmay.html">Hit Count at 2nd May 2006</a><br>
<a href="reports/1june.htm">Hit Count at 1st June 2006<br>
<a href="reports/june30.htm">Hit Count at 30th June 2006</a><br>
<a href="reports/august5.htm">Hit Count at 5th August 2006</a><br>
<a href="reports/september1.html">Hit Count at 1st September 2006</a><br>
<a href="reports/october1.html">Hit Count at 1st October 2006</a><br>
<a href="reports/november1.html">Hit Count at 1st November 2006</a><br>
<a href="reports/2december.htm">Hit Count at 2nd Decebmer 2006</a></p>
<a href="reports/5jan07.htm">Hit Count at 5th January 2007</a></p>
</td>
  </tr>
</table>
</body>
</html>