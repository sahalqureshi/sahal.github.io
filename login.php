<?php 


if(isset($_POST['save']))
{	 
	  $_POST["un"];
$un= $_POST['un'];
 $pw = $_POST["pw"];

if ($un=='sahal'&&$pw==123) { echo "hiiiiiiiiii";
	header("Location: http://localhost/sahal/firstlook.php");

	}	else {
		echo "<H1>LOGIN error</H1>";
	}
	}


?>
