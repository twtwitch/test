<?php
require_once 'db.php';
require_once "function.php";

	
if(add_cart($_POST['name'],$_POST['image'],$_POST['price'])){
	echo 'yes';
}
else{
	echo 'no';	
}

?>