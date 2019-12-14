<!doctype html>
<html lang="zh-Hant-TW">
<head>
    <?php include_once('.\partial\meta.php');?>
</head>
<body>
    <?php include_once('.\partial\b-header.php');?>

<!------------------------- login ------------------------->
    <?php
		require_once '../mysql/db.php';

        if(isset($_SESSION['is_login']) && $_SESSION['is_login'])
        {  
    ?>
        <div class="b-windows col-container v-flex v-justify-content-center">
            <a href="./b-home.php" class="b-windows__content ">
                <p>登入成功，回到首頁</p>
            </a>
        </div>
    <?php    
        }
        else 
        {
    ?>
        <div class="b-windows col-container v-flex v-justify-content-center">
            <a href="./home.php" class="b-windows__content">
                <p>登入失敗，回到首頁</p>
            </a>
        </div>
    <?php
        }
    ?>

    <?php 
		mysqli_close($link);
    ?>
<!------------------------- login ------------------------->        
    <?php include_once('.\partial\slideshow.php');?>
    <?php include_once('.\partial\footer.php');?>
</body>
</html>