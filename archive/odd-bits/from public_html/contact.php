<?php


	if(!isset($_REQUEST["EMailAddress"]))
	{
		$Form = "";
		$Form .= "<form action='$PHP_SELF' method='post' name='FormName'>";
		$Form .= "<table align='left' border='0' cellspacing='20' cellpadding='0'>";
		$Form .= "<tr height='11'>";
		$Form .= "<td colspan='2' height='11'>If you have any questions please use this form to email me.</td>";
		$Form .= "</tr>";
		$Form .= "<tr>";
		$Form .= "<td valign='top'>Name:</td>";
		$Form .= "<td valign='top'><input type='text' name='Name' size='48'></td>";
		$Form .= "</tr>";
		$Form .= "<tr height='10'>";
		$Form .= "<td valign='top' height='10'>Email:</td>";
		$Form .= "<td valign='top' height='10'><input type='text' name='EMailAddress' size='48'></td>";
		$Form .= "</tr>";
		$Form .= "<tr>";
		$Form .= "<td valign='top'>Question:</td>";
		$Form .= "<td valign='top'><textarea name='Question' rows='10' cols='36'></textarea></td>";
		$Form .= "</tr>";
		$Form .= "<tr>";
		$Form .= "<td valign='top'></td>";
		$Form .= "<td valign='top'><input type='submit' name='submitButtonName' value='Submit'> <input type='reset' value='Clear'></td>";
		$Form .= "</tr>";
		$Form .= "</table>";
		$Form .= "</form>";
	}
	else
	{	
		$EMailAddress = $_REQUEST["EMailAddress"];
		$Name = $_REQUEST["Name"];
		$Question = $_REQUEST["Question"];
		
		$To = 'contact@scruffian.com';
		$Subject = 'Question from Scruffian.com';
		$Message = "Question from $Name regarding Scruffian.com.\r\n";
		$Message .= "$Question\r\n";
		$Message .= "Please respond to $Name\r\n";
		$Message .= "Email Address: $EMailAddress\r\n";

		$Headers = "From: $EMailAddress \r\n" .
				"Reply-To: $EMailAddress \r\n";

		mail($To, $Subject, $Message, $Headers);
		
		$Form = "";
		$Form .= "<table width='550' border='0' cellspacing='20' cellpadding='0'>";
		$Form .= "<tr>";
		$Form .= "<td align='center'>Thank you for your email. I will reply to your question soon.</td>";
		$Form .= "</tr>";
		$Form .= "</table>";
	}

?>
<?php print($Form); ?>
