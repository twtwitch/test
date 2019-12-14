<?php
session_start();
/*----------------GET GOODS----------------*/
function get_commodities_flovers(){
	$datas = array();

	$sql = "SELECT * FROM `commodities` WHERE `catogory` = '經典系列';";

	$query = mysqli_query($_SESSION['link'], $sql);

	if ($query){
			  
		if (mysqli_num_rows($query) > 0){
		 
			while ($row = mysqli_fetch_assoc($query)){
				$datas[] = $row;
			}
		}
		mysqli_free_result($query);
	}
	else{
		echo "{$sql} error：" . mysqli_error($_SESSION['link']);
	}
	
	return  $datas;
}

function get_commodities_other(){
	$datas = array();

	$sql = "SELECT * FROM `commodities` WHERE `catogory` = '周邊商品';";
	
	$query = mysqli_query($_SESSION['link'], $sql);

	if ($query){
			  
		if (mysqli_num_rows($query) > 0){
		 
			while ($row = mysqli_fetch_assoc($query)){
				$datas[] = $row;
			}
		}
		mysqli_free_result($query);
	}
	else{
		echo "{$sql} error：" . mysqli_error($_SESSION['link']);
	}
	
	return  $datas;
}

function get_commodities_kit(){
	$datas = array();

	$sql = "SELECT * FROM `commodities` WHERE `catogory` = '精品組合';";
	
	$query = mysqli_query($_SESSION['link'], $sql);

	if ($query){
			  
		if (mysqli_num_rows($query) > 0){
		 
			while ($row = mysqli_fetch_assoc($query)){
				$datas[] = $row;
			}
		}
		mysqli_free_result($query);
	}
	else{
		echo "{$sql} error：" . mysqli_error($_SESSION['link']);
	}
	
	return  $datas;
	
}
/*----------------CART DATA----------------*/
function get_cart_data(){
	$datas = array();

	$sql = "SELECT * FROM `cart`";
	
	$query = mysqli_query($_SESSION['link'], $sql);

	if ($query){
			  
		if (mysqli_num_rows($query) > 0){
		 
			while ($row = mysqli_fetch_assoc($query)){
				$datas[] = $row;
			}
		}
		mysqli_free_result($query);
	}
	else{
		echo "{$sql} error：" . mysqli_error($_SESSION['link']);
	}
	
	return  $datas;
}

/*----------------SHOP ADD CART----------------*/
function add_cart($name,$image,$price){
	
	$result = null;

	$sql = "INSERT INTO `cart`(`name`,`image`,`price`)VALUE
	('{$name}', '{$image}', '{$price}');";
	
	$query = mysqli_query($_SESSION['link'], $sql);
		
	if ($query){	
		if (mysqli_affected_rows($_SESSION['link']) == 1){
			$result = true;
		}
	}
	else{
		echo "{$sql} error:" . mysqli_error($_SESSION['link']);
	}

	return $result;
}
/*----------------DEL CART----------------*/
function del_goods($id){
	
	$result = null;

	$sql = "DELETE FROM `cart` WHERE `id` = {$id};";
	
	$query = mysqli_query($_SESSION['link'], $sql);
		
	if ($query){	
		if (mysqli_affected_rows($_SESSION['link']) == 1){
			$result = true;
		}
	}
	else{
		echo "{$sql} error:" . mysqli_error($_SESSION['link']);
	}

	return $result;
}
/*----------------CHECK EMAIL----------------*/
function check_email($email){
	$result = null;

	$sql = "SELECT * FROM `account` WHERE `email` = '{$email}'";

	$query = mysqli_query($_SESSION['link'], $sql);


	if ($query){

	if (mysqli_num_rows($query) >= 1){
			$result = true;
		}
		mysqli_free_result($query);
	}
	else{
		echo "{$sql} error：" . mysqli_error($_SESSION['link']);
	}
	
	return $result;
}

/*----------------ADD USER----------------*/
function add_user($email, $password, $name){	

	$result = null;

    $password = md5($password);

	$sql = "insert into `account`(email,password,name)	VALUE
	('".$email."', '".$password."', '".$name."')";
	
	$query = mysqli_query($_SESSION['link'], $sql);
		
	if ($query){	
		if (mysqli_affected_rows($_SESSION['link']) == 1){
			$result = true;
		}
	}
	else{
		echo "{$sql} error:" . mysqli_error($_SESSION['link']);
	}

	return $result;
}

/*----------------VERIFY USER----------------*/

function verify_user($email,$password){

	$result = null;

	$password = md5($password);

	$sql = "SELECT * FROM `account` WHERE `email` = '{$email}' AND `password` = '{$password}'";
	
	$query = mysqli_query($_SESSION['link'], $sql);

	if ($query){
		if (mysqli_num_rows($query) == 1){
			$id = mysqli_fetch_array($query);

			$_SESSION['is_login'] = true;
			$_SESSION['user_id'] = $id['id'];

			$result = true;
		}
	}
	else{
		echo "{$sql} error:" . mysqli_error($_SESSION['link']);
	}

	return $result;
}
/*----------------GET ALL MEMBER----------------*/
function get_all_member(){
	$datas = array();
	
	$sql = "SELECT * FROM `account` ORDER BY `id` DESC;";
	
	$query = mysqli_query($_SESSION['link'], $sql);
	
	if ($query){
		if (mysqli_num_rows($query) > 0){
			while ($row = mysqli_fetch_array($query)){
				$datas[] = $row;
			}
		}
		mysqli_free_result($query);
	}
	else{
		echo "{$sql} error：" . mysqli_error($_SESSION['link']);
	}

	return $datas;
}

/*----------------GET USER----------------*/
function get_user($id){
	$result = null;
	
	$sql = "SELECT * FROM `account` WHERE `ID` ";
	
	$query = mysqli_query($_SESSION['link'], $sql);
	
	if ($query){
		
		if (mysqli_num_rows($query) == 1){
				$result = mysqli_fetch_array($query);
			}

			mysqli_free_result($query);
	}

	else{
		echo "{$sql} error：" . mysqli_error($_SESSION['link']);
	}

	return $result;
}

?>