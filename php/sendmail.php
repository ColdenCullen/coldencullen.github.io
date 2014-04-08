<?php
if (!$_POST)
{ 
	header("Location: http://coldencullen.com/");
}
else
{
	$username = $_POST["username"];
	$usermail = $_POST["usermail"];
	$ip = $_POST["ip"];
	$httpref = $_POST["httpref"];
	$httpagent = $_POST["httpagent"];
	$subject = $_POST["subject"];
	$message = "Message: ".stripslashes($_POST["message"])." \n
	Additional Info:\n
	IP address = $ip \n
	Browser Info: $httpagent \n
	Referring Page: $httpref \n";

	if( strstr( $usermail, "@" ) && strstr( $usermail, "." ) )
	{
		mail( "Colden Cullen <ColdenCullen@gmail.com>", "Message from $usermail: $subject", $message, "Colden Cullen <Colden@ColdenCullen.com>" );
	}
}
?>