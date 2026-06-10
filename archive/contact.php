<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

<title>Scruffian. Contact.</title>

<meta name="Keywords" content="dirt, dirty, scruffy, trails, bike, bmx, music, food, trails, dig, sittingbourne skatepark, digging, year, jump, pictures, fun, design, ride, summer, skatepark, bmx, riding, pretty, mud, worms, built, build" />

<meta name="Description" content="This is a website about art: photography, mud sculpture, graphic design, music and bicycle riding." />

<meta name="Author" content="ben@scruffian.com" />

<meta name="robots" content="index,follow" />

<style>

	body	{ margin: auto; font-family: Georgia; }

	h1	{ font-weight: normal; font-size: 7em; line-height: 0.5em; }

	h3	{ font-weight: normal; }

	a	{ color: #000000; }

	a:hover	{ color: #999999; }

</style>

</head>

<body>

	<div style="margin: auto; width: 450px;">

		<h1>Contact</h1>

		<?php

			if(!isset($_REQUEST["EMailAddress"]))

			{

			?>

				<form action='<?php echo $PHP_SELF ?>' method='post' name='FormName'>

					If you have any questions please use this form to email me.

					<p>Name: <br/><input type='text' name='Name' size='48'></p>

					<p>Email: <br/><input type='text' name='EMailAddress' size='48'></p>

					<p>Question: <br/><textarea name='Question' rows='10' cols='36'></textarea></p>

					<p><input type='submit' name='submitButtonName' value='Submit'> <input type='reset' value='Clear'></p>

				</form>

			<?php

			}

			else

			{	

				$EMailAddress = $_REQUEST["EMailAddress"];

				$Name = $_REQUEST["Name"];

				$Question = $_REQUEST["Question"];

						

				$To = 'ben@scruffian.com';

				$Subject = 'Question from Scruffian.com';

				$Message = "Question from $Name regarding Scruffian.com.\r\n";

				$Message .= "$Question\r\n";

				$Message .= "Please respond to $Name\r\n";

				$Message .= "Email Address: $EMailAddress\r\n";

				$Headers = "From: $EMailAddress \r\n" .

					"Reply-To: $EMailAddress \r\n";

				mail($To, $Subject, $Message, $Headers);

			?>

			Thank you for your email. I will reply to your question soon

			<?php

			}

		?>

		<h3><a href="index.php">Home</a> | <a href="zine/index.php">Zine</a> | <a href="media/index.htm">Media</a> | <a href="messages.php">Messages</a></h3>

	</div>

</body>

</html>