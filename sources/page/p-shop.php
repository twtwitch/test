<div class="col-container p-shop">
    <div class="p-shop__img">
        <div class="v-md-none"></div>
    </div>
    <div class="p-shop__container col-container col-row">
        <div class="p-shop__container__left">
            <div class="p-shop__container__left__tltle">
                <p>商品目錄</p>
            </div>
            <ul class="p-shop__container__left__menu">
                <li id="shop-btn">
                    <a href=".\shop.php" class="p-shop__container__left__present">所有商品</a>
                </li>
                <li id="shop-btn">
                    <a href=".\shop-flovers.php" class="">經典系列</a>
                </li>
                <li id="shop-btn">
                    <a href=".\shop-other.php" class="">周邊商品</a>
                </li>
                <li id="shop-btn" >
                    <a href=".\shop-kit.php" class="" style="border-bottom: 0.1425rem solid #000000;">精品組合</a>
                </li>
            </ul>
        </div>
        <div class="p-shop__container__right">
            <?php
            $datas = get_commodities_flovers();
            ?>
            <ul id="shop-group1" class="shop-hide v-justify-content-around v-flex-wrap" style="display:flex;">
            <?php if(!empty($datas)):?>
                <?php foreach($datas as $row):?>
                <li >
                    <div class="p-shop__container__img" id="image" style="background-image:url(<?php echo $row['image']; ?>) "data-add-goods-image="<?php echo $row['image']; ?>">
                        <div class="p-shop__container__img__tag"><?php echo $row['catogory']; ?></div>
                        <div class="p-shop__container__img__like far fa-heart"></div>
                    </div>
                    <div class="p-shop__container__item v-flex">
                        <div class="p-shop__container__item__name v-flex-grow-1" id="name" id="name" data-add-goods-name="<?php echo $row['name'];?>"><?php echo $row['name'];?></div>
                        <div class="p-shop__container__item__price" id="price" id="price" data-add-goods-price="<?php echo $row['price'];?>"> <?php echo $row['price'];?>$</div>
                    </div> 
                    <div class="p-shop__container__btn" id="add-cart">
                        <a href='javascript:void(0);' id="add-btn" class="p-shop__container__btn__word" data-add-goods-id="<?php echo $row['id'];?>">加入購物車</a>
                    </div>
                </li>
                <?php endforeach; ?>
            <?php endif; ?>
            </ul>

            <?php
            $datas = get_commodities_other();
            ?>
            <ul id="shop-group2" class="shop-hide v-justify-content-around v-flex-wrap" style="display:none;">
            <?php if(!empty($datas)):?>
                <?php foreach($datas as $row):?>
                <li>
                    <div class="p-shop__container__img" style="background-image:url(<?php echo $row['image']; ?>) "data-add-goods-image="<?php echo $row['image']; ?>">
                        <div class="p-shop__container__img__tag"><?php echo $row['catogory']; ?></div>
                        <div class="p-shop__container__img__like far fa-heart"></div>
                    </div>
                    <div class="p-shop__container__item v-flex">
                        <div class="p-shop__container__item__name v-flex-grow-1"  data-add-goods-name="<?php echo $row['name'];?>"><?php echo $row['name'];?></div>
                        <div class="p-shop__containe__ritem__price" data-add-goods-price="<?php echo $row['price'];?>"> <?php echo $row['price'];?>$</div>
                    </div> 
                    <div class="p-shop__container__btn" id="add-cart">
                        <a href='javascript:void(0);' id="add-btn" class="p-shop__container__btn__word" data-add-goods-id="<?php echo $row['id'];?>">加入購物車</a>
                    </div>
                </li>
                <?php endforeach; ?>
            <?php endif; ?>
            </ul> 

            <?php
            $datas = get_commodities_kit();
            ?>
            <ul id="shop-group3" class="shop-hide v-justify-content-around v-flex-wrap" style="display:none;">   
            <?php if(!empty($datas)):?>
                <?php foreach($datas as $row):?>
                <li>
                    <div class="p-shop__container__img" name="image" style="background-image:url(<?php echo $row['image']; ?>) "data-add-goods-image="<?php echo $row['image']; ?>">
                        <div class="p-shop__container__img__tag"><?php echo $row['catogory']; ?></div>
                        <div class="p-shop__container__img__like far fa-heart"></div>
                    </div>
                    <div class="p-shop__container__item v-flex">
                        <div class="p-shop__container__item__name v-flex-grow-1"  data-add-goods-name="<?php echo $row['name'];?>"><?php echo $row['name'];?></div>
                        <div class="p-shop__container__item__price" name="price" data-add-goods-price="<?php echo $row['price'];?>"> <?php echo $row['price'];?>$</div>
                    </div> 
                    <div class="p-shop__container__btn" id="add-cart">
                        <a href='javascript:void(0);' id="add-btn" class="p-shop__container__btn__word" data-add-goods-id="<?php echo $row['id'];?>">加入購物車</a>
                    </div>
                </li>
                <?php endforeach; ?>
            <?php endif; ?>
            </ul>
            
            <div class="p-shop__container__pagination v-flex v-justify-content-center">
                <li>
                    <a class="p-shop__container__pagination_link fas fa-angle-left"></a>
                </li>
                <li >
                    <a id="btn-top" class="p-shop__container__pagination_link p-shop__container__pagination_link active" onclick="openMenu(event, 'shop-group1')">1</a>
                </li>
                <li>
                    <a class="p-shop__container__pagination_link" onclick="openMenu(event, 'shop-group2')">2</a>
                </li>
                <li>
                    <a class="p-shop__container__pagination_link" onclick="openMenu(event, 'shop-group3')">3</a>
                </li>
                <li>
                    <a class="p-shop__container__pagination_link fas fa-angle-right"></a>
                </li>
            </div>
        </div>
    </div>
</div>