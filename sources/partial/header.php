<?php
require_once "../mysql/db.php";
require_once "../mysql/function.php";

if(isset($_SESSION['is_login']) && $_SESSION['is_login'])
{
  header("Location: b-home.php");
}
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
            <a href=".\home.php">首頁</a>
            <a href=".\shop.php">商店</a>
            <a href=".\join.php">登入</a>
        </div>
        <div></div>   
        <div class="l-header__logo">
            <a href=".\home.php"></a>
        </div>
        <ul class="l-header__menu v-ml-auto v-flex-row v-flex v-md-none">
            <li>
                <a href=".\home.php" class="">首頁</a>
            </li>
            <li>
                <a href=".\shop.php" class="">商店</a>
            </li>
            <li>
                <a href=".\login.php" class="">登入</a>
            </li>
        </ul>
        <a href=".\cart.php" class="l-header__cart">
            <i class="fas fa-shopping-cart"></i>
        </a>
    </div>
</div>

