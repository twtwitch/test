/*slideshow*/
var array = 0;
slideshow();

function slideshow() {
  var img;
  var slides = document.getElementsByClassName("l-slideshow__array");

  for (img = 0; img < slides.length; img++) {
    slides[img].style.display = "none";  
  }
  array++;
  if (array > slides.length) {array = 1}    
  slides[array-1].style.display = "block";  
  setTimeout(slideshow, 2500);
}

/*sidemenu*/
function myFunction() {
  var x = document.getElementById("myDIV");
  if (x.style.display === "none") {
    x.style.display = "block";
  }}

$(document).ready(function(){
	$('#navbar-btn').click(function(){
		$(this).toggleClass('open');
	});
});

function toggleMenu() {
  let getMenu = document.querySelector(".l-header__bars__panel");
  getMenu.classList.toggle("open");
  }
  let getHamburger = document.querySelector("#navbar-btn");
  getHamburger.addEventListener("click", toggleMenu); 


/*like*/
    $('.p-shop__container__img__like').click(function(){
      $(this).toggleClass('click');
    })


/*shop page*/
function openMenu(evt, group) {
  var i, shop_hide, shop_btn;
  shop_hide = document.getElementsByClassName("shop-hide");
  for (i = 0; i < shop_hide.length; i++) {
    shop_hide[i].style.display = "none";
  }
  shop_btn = document.getElementsByClassName("p-shop__container__pagination_link");
  for (i = 0; i < shop_btn.length; i++) {
    shop_btn[i].className = shop_btn[i].className.replace(" active", "");
  }
  document.getElementById(group).style.display = "flex";
  evt.currentTarget.className += " active";
  document.documentElement.scrollTop = 600;
}


/*cart function*/
var shippingRate = 300; 
var fade = 250;

  $('button[id^=min]').click(function(){
    var num=$(this).parent().find('input[id^=num]');
    num.val(parseInt(num.val())-1)
    if(parseInt(num.val())<0){
    num.val(0);
    }
    updatenum(num);
  })

  $('button[id^=add]').click(function(){
    var num=$(this).parent().find('input[id^=num]');
    num.val(parseInt(num.val())+1)
    if(parseInt(num.val())>99){
    num.val(99);
    }
    updatenum(num);
  })


  $('input[id^=num]').change(function(){
    var num=$(this).parent().find('input[id^=num]');
    num.val(parseInt(num.val())+0)
    if(parseInt(num.val())>99){
    num.val(99);
    }
    else if(parseInt(num.val())<0){
    num.val(0);
    }
    updatenum(num);
  });

function updatenum(numInput)
{
  var goodsList = $(numInput).parent().parent();
  var price = parseInt(goodsList.find('span[id^=goods-price]').text());
  var num = $(numInput).val();
  var priceTotal = price * num; 
   
  goodsList.find('label[id^=price-total').each(function () {
    $(this).fadeOut(fade, function() {
      $(this).text(priceTotal);
      $(this).fadeIn(fade);
      lastTotal()
    });
  });  
}


function lastTotal()
{
  var subtotal = 0;

  $('div[id^=sub-total').each(function () {
    subtotal += parseInt($(this).find('label[id^=price-total').text());
  });

  var result = (subtotal > 0 ? shippingRate : 0);
  var priceTotal = subtotal + result;

  $('.p-cart__right__detail_value').fadeOut(fade, function() {
    $('#last-subtotal').html(subtotal);
    $('#last-shippingRate').html(result);
    $('#last-priceTotal').html(priceTotal);
    if(priceTotal == 0){
      $('#submit').fadeOut(fade);
    }else{
      $('#submit').fadeIn(fade);
    }
    $('.p-cart__right__detail_value').fadeIn(fade);
  });
}

$('button[id^=removal]').click(function() {
  remove(this);
});

function remove(removeButton)
{
  var goodsList = $(removeButton).parent().parent().parent().parent().parent();
  goodsList.slideUp(fade, function() {
    goodsList.remove();
    recalculateCart();
  });
}


