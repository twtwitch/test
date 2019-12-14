<?php
require_once 'db.php';
require_once "function.php";

if(add_user($_POST['un'], $_POST['pw'], $_POST['n']))
{
	echo 'yes';
}
else
{
	echo 'no';	
}

?>