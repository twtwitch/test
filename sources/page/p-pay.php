<div class="col-container">
    <div class="p-pay v-flex v-align-items-start v-justify-content-between v-flex">
        <form class="p-pay__left" action=".\b-receipt.php">
            <div class="p-pay__left__block">
                <p class="p-pay__left__block__title">運送</p>
                <div class="v-flex p-pay__box">
                    <div class="v-flex-grow-1 p-pay__box__group">
                    <div class="p-pay__form__title v-flex v-align-left-between">
                            <label for="cardNumber">信用卡卡號</label>
                        </div>
                        <div class="p-pay__form__input v-flex v-align-left-between">
                            <input class="p-pay__form__text" type="text" autofocus="autofocus" required="required" spellcheck="false" placeholder="1234-4321-5678-8765">
                        </div>
                    </div>
                </div>
                <div class="v-flex v-align-items-end p-pay__box">
                    <div class="v-flex-grow-1 p-pay__box__group">
                        <div class="p-pay__form__title v-flex v-align-left-between">
                            <label for="name">持卡人姓名</label>
                        </div>
                        <div class="p-pay__form__input v-flex v-align-left-between">
                            <input class="p-pay__form__text" type="text" autofocus="autofocus" required="required" spellcheck="false" placeholder="姓氏">
                        </div>
                    </div>
                    <div class="v-flex-grow-1 p-pay__box__group">
                        <div class="p-pay__form__title v-flex v-align-left-between">
                            <label for="firstName"></label>
                        </div>
                        <div class="p-pay__form__input v-flex v-align-left-between">
                            <input class="p-pay__form__text" type="text" autofocus="autofocus" required="required" spellcheck="false" placeholder="名字">
                        </div>
                    </div>
                </div>
                <div class="v-flex v-align-items-end p-pay__box">
                    <div class="v-flex-grow-1 p-pay__box__group">
                        <div class="p-pay__form__title v-flex v-align-left-between">
                            <label for="expiryDate">有效期限</label>
                        </div>
                        <select class="p-pay__form__input v-flex v-align-left-between">
                            <option class="p-pay__form__text" selected>月</option>
                            <option class="p-pay__form__text" value="1">一月</option>
                            <option class="p-pay__form__text" value="2">二月</option>
                            <option class="p-pay__form__text" value="3">三月</option>
                            <option class="p-pay__form__text" value="4">四月</option>
                            <option class="p-pay__form__text" value="5">五月</option>
                            <option class="p-pay__form__text" value="6">六月</option>
                            <option class="p-pay__form__text" value="7">七月</option>
                            <option class="p-pay__form__text" value="8">八月</option>
                            <option class="p-pay__form__text" value="9">九月</option>
                            <option class="p-pay__form__text" value="10">十月</option>
                            <option class="p-pay__form__text" value="11">十一月</option>
                            <option class="p-pay__form__text" value="12">十二月</option>
                        </select>
                    </div>
                    <div class="v-flex-grow-1 p-pay__box__group">
                         <select class="p-pay__form__input v-flex v-align-left-between">
                            <option class="p-pay__form__text" selected>年</option>
                            <option class="p-pay__form__text" value="1">2023</option>
                            <option class="p-pay__form__text" value="2">2022</option>
                            <option class="p-pay__form__text" value="3">2021</option>
                            <option class="p-pay__form__text" value="4">2020</option>
                        </select>
                    </div>
                </div>
                <div class="v-flex p-pay__box">
                    <div class="v-flex-grow-1 p-pay__box__group">
                        <div class="p-pay__form__title v-flex v-align-left-between">
                            <label for="back">背後末三碼</label>
                        </div>
                         <div class="p-pay__form__input v-flex v-align-left-between" style="width:50%;">
                            <input class="p-pay__form__text" type="text" autofocus="autofocus" required="required" spellcheck="false" placeholder="123">
                        </div>
                    </div>
                </div>
            </div>
            <input type="submit" value="下一步" class="p-pay__form__submit">
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