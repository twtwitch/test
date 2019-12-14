<!doctype html>
<html lang="zh-Hant-TW">
<head>
    <?php include_once('.\partial\meta.php');?>
</head>
    <body>
        <?php include_once('.\partial\header.php');?>
        <?php
        $datas = get_commodities_other();
        ?>
            <div class="col-container p-shop">
            <div class="p-shop__img">
                <div></div>
            </div>
            <div class="p-shop__container col-container col-row">
                <div class="p-shop__container__left">
                    <div class="p-shop__container__left__tltle">
                        <p>商品目錄</p>
                    </div>
                    <ul class="p-shop__container__left__menu">
                        <li id="shop-btn">
                            <a href=".\shop.php">所有商品</a>
                        </li>
                        <li id="shop-btn">
                            <a href=".\shop-flovers.php" class="">經典系列</a>
                        </li>
                        <li id="shop-btn">
                            <a href=".\shop-other.php" class="p-shop__container__left__present">周邊商品</a>
                        </li>
                        <li id="shop-btn">
                            <a href=".\shop-kit.php" class="">精品組合</a>
                        </li>
                    </ul>
                </div>
                <div class="p-shop__container__right v-flex v-justify-content-around v-flex-wrap">
                <?php if(!empty($datas)):?>
                    <?php foreach($datas as $row):?>
                <li id="shop-group3">
                    <div class="p-shop__container__img" style="background-image: url(<?php echo $row['image']; ?>)">
                        <div class="p-shop__container__img__tag"><?php echo $row['catogory']; ?></div>
                        <div class="p-shop__container__img__like far fa-heart"></div>
                    </div>
                    <div class="p-shop__container__item v-flex">
                        <div class="p-shop__container__item__name v-flex-grow-1"><?php echo $row['name']; ?></div>
                        <div class="p-shop__container__item__price"><?php echo $row['price']; ?></div>
                    </div>
                    <div class="p-shop__container__btn">
                        <a class="p-shop__container__btn__word">加入購物車</a>
                    </div>
                </li>
                    <?php endforeach; ?>
                <?php endif; ?>
                <div class="p-shop__container__pagination v-flex v-justify-content-center">
                    <li>
                        <a href="" class="p-shop__container__pagination_link fas fa-angle-left"></a>
                    </li>
                    <li>
                        <a href="" class="p-shop__container__pagination_present">1</a>
                    </li>
                    <li>
                        <a href="" class="p-shop__container__pagination_link">2</a>
                    </li>
                    <li>
                        <a href="" class="p-shop__container__pagination_link">3</a>
                    </li>
                    <li>
                        <a href="" class="p-shop__container__pagination_link fas fa-angle-right"></a>
                    </li>
                </div>
            </div>
        </div>
    </div>
    <?php include_once('.\partial\slideshow.php');?>
    <?php include_once('.\partial\footer.php');?>
</body>
</html>