<?php
session_start();
//本機
$host = 'localhost';
//帳號
$dbuser = 'root';
//密碼
$dbpw = '00000000';
//資料庫
$dbname = 'smoke';

$_SESSION['link'] = mysqli_connect($host, $dbuser, $dbpw, $dbname);

if ($_SESSION['link'])
{
  mysqli_query($_SESSION['link'], "SET NAMES utf8");
}
else
{
  echo '無法連線mysql資料庫 :<br/>' . mysqli_connect_error();
}
?>