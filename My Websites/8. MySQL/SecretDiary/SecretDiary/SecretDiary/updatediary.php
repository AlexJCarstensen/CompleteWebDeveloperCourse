<?php

session_start();

include("connection.php");
$query="UPDATE users SET diary='".mysqli_real_escape_string($link, $_POST['diary'])."'WHERE id='".$_SESSION['id']."'LIMIT 1";


if(mysqli_query($link, $query))
{
	$msg = " Failed to update diary";
	error_log('['.date("F j, Y, g:i a e O").']'. $msg."\n", 3, "/var/tmp/my-errors.log");
}

?>
