<div class="col-container">
    <div class="p-pay v-flex v-align-items-start v-justify-content-between v-flex">
        <form class="p-pay__left">
            <div class="p-pay__left__block">
                <p class="p-pay__left__block__title">發票</p>
                <div class="v-flex p-pay__box">
                    <div class="v-flex-grow-1 p-pay__box__group">
                    <div class="p-pay__form__title v-flex v-align-left-between">
                            <label for="mail">電子信箱</label>
                        </div>
                        <div class="p-pay__form__input v-flex v-align-left-between">
                            <input class="p-pay__form__text" type="email" autofocus="autofocus" required="required" spellcheck="false" placeholder="123@gmail.com">
                        </div>
                    </div>
                </div>
                <div class="v-flex p-pay__box">
                    <div class="v-flex-grow-1 p-pay__box__group">
                        <div class="p-pay__form__title v-flex v-align-left-between">
                            <label for="VATnumber">統一編號</label>
                        </div>
                         <div class="p-pay__form__input v-flex v-align-left-between">
                            <input class="p-pay__form__text" type="text" autofocus="autofocus" required="required" spellcheck="false" placeholder="12345678">
                        </div>
                    </div>
                </div>
            </div>
            <input type="submit" value="確認結帳" class="p-pay__form__submit">
        </form>
        <div class="p-pay__right">
            <div class="p-pay__right__block">
                <div class="p-pay__right__block__box">
                    <div class="p-pay__order__title">訂單資訊</div>
                    <ul class="p-pay__order__detail">
                        <li class="p-pay__order__detail__total v-flex v-justify-content-between">
                            <span>小計</span>
                            <span>NT$ 3,000</span>                            
                        </li>
                        <li class="p-pay__order__detail__freight v-flex v-justify-content-between">
                            <span>運費</span>
                            <span>NT$ 300</span>            
                        </li>
                        <li class="p-pay__order__detail__totalprice v-flex v-justify-content-between">
                            <span>總計</span>
                            <span>NT$ 3,300</span>
                        </li>
                    </ul>
                </div>
                <div class="p-pay_right_block__box">
                    <div class="p-pay__order__title">結帳清單</div>
                    <ul class="p-pay__order__list">
                        <li class="v-flex">
                            <div style="background-image: url(../material/img/p-shop__flavors1.svg)" class="p-pay__order__list__img"></div>
                            <div class="p-pay__order__list__detail v-flex v-flex-column">
                                <span>彩色粉末 (2)</span>
                                <span>NT$ 3,300</span>
                            </div>
                        </li>
                        <hr>
                        <li class="v-flex">
                            <div style="background-image: url(../material/img/p-shop__flavors1.svg)" class="p-pay__order__list__img"></div>
                            <div class="p-pay__order__list__detail v-flex v-flex-column">
                                <span>彩色粉末 (2)</span>
                                <span>NT$ 3,300</span>
                            </div>
                        </li>
                        <hr>
                        <li class="v-flex">
                            <div style="background-image: url(../material/img/p-shop__flavors1.svg)" class="p-pay__order__list__img"></div>
                            <div class="p-pay__order__list__detail v-flex v-flex-column">
                                <span>彩色粉末 (2)</span>
                                <span>NT$ 3,300</span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>