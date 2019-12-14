<?php
require_once "../mysql/db.php";
require_once "../mysql/function.php";

if(!isset($_SESSION['is_login']) || !$_SESSION['is_login']){
  header("Location: login.php");
}

$members = get_all_member();

?>

<div class="col-container l-header">
    <div class="col-row v-align-items-center">
        <div class="l-header__bars v-none v-md-block" id="navbar-btn">
            <span class="l-header__bars_btn v-none v-md-inline"  ></span>
            <span class="l-header__bars_btn v-none v-md-inline"  ></span>
            <span class="l-header__bars_btn v-none v-md-inline"  ></span>
            <span class="l-header__bars_btn v-none v-md-inline"  ></span>
        </div>
        <div class="l-header__bars__panel v-none" id="navbar-menu">
            <a href=".\b-home.php">首頁</a>
            <a href=".\b-shop.php">商店</a>
            <a href="./partial/b-logout.php">登出</a>
        </div>
        <div></div>   
        <div class="l-header__logo">
            <a href=".\home.php"></a>
        </div>
        <ul class="l-header__menu v-ml-auto v-flex-row v-flex v-md-none">
            <li>
                <a href=".\b-home.php" class="">首頁</a>
            </li>
            <li>
                <a href=".\b-shop.php" class="">商店</a>
            </li>
            <li>
                <a href="./partial/b-logout.php" class="">登出</a>
            </li>
        </ul>
        <a href=".\b-cart.php" class="l-header__cart">
            <i class="fas fa-shopping-cart"></i>
        </a>
    </div>
</div>