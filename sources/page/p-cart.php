<div class="p-cart col-container v-flex v-justify-content-between v-flex-wrap v-align-items-start v-justify-content-lg-center">
    <div class="p-cart__left" >
        <div class="p-cart__title">您的購物車</div>
        <?php
            $datas = get_cart_data();
            
        ?>
        <?php if(!empty($datas)):?>
            <?php foreach($datas as $row):?>
        <ul>
            <li class="p-cart__list v-flex v-flex-md-column">
                <div class="p-cart__list__contentBox v-flex">
                    <div style="background-image: url(<?php echo $row['image']; ?>)" class="p-cart__list__contentBox__img"></div>
                    <div class="p-cart__list__contentBox__content v-flex v-flex-md-column">
                        <div class="p-cart__list__contentBox__name">
                            <span><?php echo $row['name']; ?></span>
                            <span id="goods-price" class="price"><?php echo $row['price']; ?></span>
                        </div>
                        <div class="p-cart__list__contentBox__num v-flex">
                            <button id="min" class="min">
                                <i class="fas fa-minus"></i>
                           </button>
                           <input id="num" value="0" type="text">
                            <button id="add" class="add">
                                <i class="fas fa-plus"></i>
                            </button>
                        </div>
                        <div id="sub-total" class="p-cart__list__total v-flex v-align-items-center v-justify-content-end">
                            <label class="name-en" id="price-total">0</label>
                            <a href='javascript:void(0);' id="del-btn" data-goods-id="<?php echo $row['id'];?>">
                                <button id="removal">
                                    <i class="far fa-trash-alt"></i>
                                </button>   
                            </a>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
            <?php endforeach; ?>
        <?php endif; ?>
       
    </div>
    <div class="p-cart__right">
        <div class="p-cart__right__title">訂單資訊</div>
        <ul class="p-cart__right__detail">
            <li class="p-cart__right__detail__total v-flex v-justify-content-between">
                <span>小計</span>
                <span class="p-cart__right__detail_value" id="last-subtotal">0</span>                            
            </li>
            <li class="p-cart__right__detail__freight v-flex v-justify-content-between">
                <span>運費</span>
                <span class="p-cart__right__detail_value" id="last-shippingRate">0</span>            
            </li>
            <li class="p-cart__right__detail__totalprice v-flex v-justify-content-between">
                <span>總計</span>
                <span class="p-cart__right__detail_value" id="last-priceTotal">0</span>
            </li>
        </ul>
        <a href="./b-delivers.php" id="submit" class="p-cart__right__submit">結帳</a>
    </div>
</div>
