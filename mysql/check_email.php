<?php
require_once 'db.php';
require_once "function.php";


if(check_email($_POST['n']))
{
	echo 'no';
}
else
{
	echo 'yes';	
}

?>