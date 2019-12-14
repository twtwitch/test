//E-mail Check
$(document).ready(function() {
    $("#email").keyup(function(){
        
        var keyin_value = $(this).val();
        if(keyin_value != ''){
            $.ajax({
                type : "POST",
                url : "../mysql/check_email.php",
                data : {
                n : $(this).val()
                },
                dataType : 'html'
            
                }).done(function(data) {
                if(data == "yes"){
                    $("#email").parent().removeClass("error").addClass("success");
                    $("#form_join button[type='submit']").removeClass('disabled');
                }
                else{
                    alert("信箱已被註冊");
                    $("#email").parent().removeClass("success").addClass("error");
                    $("form_join button[type='submit']").addClass('disabled');
                }
            
                })
        .fail(function(jqXHR, _textStatus, _errorThrown) {
        alert("console log");
        console.log(jqXHR.responseText);
});
        }	
    else
        {
            $("#email").parent().removeClass("success").parent().removeClass("error");
        }
});
    
//Password Check
        $("#form_join").submit(function(){

            if ($("#password").val() != $("#confirm_password").val()) {
                $("#password").parent().addClass("error"); 
                $("#confirm_password").parent().addClass("error"); 
                alert("密碼不同，請重新輸入");
                }
            else
                {
                    $.ajax({
                        type : "POST",
                        url : "../mysql/add_user.php",
                        data : {
                        un : $("#email").val(),
                        pw : $("#password").val(),
                        n : $("#name").val()
                        },
                        dataType : 'html'
                        
                        }).done(function(data) {
                        if(data == "yes")
                            {
                                alert("帳號註冊成功");
                                window.location.href="login.php";
                            }
                        else
                            {
                                alert("帳號註冊失敗");
                            }
                        })
                        .fail(function(jqXHR, _textStatus, _errorThrown) {
                        alert("console log");
                        console.log(jqXHR.responseText);
                });
            }
            return false;
    });
});

//E-mail Password Check
$(document).ready(function() {
    $("#form_login").submit(function(){
        
        $.ajax({
            type : "POST",
            url : "../mysql/verify_user.php",
            data : {
            pw : $("#password_login").val(),
            un : $("#email_login").val()	

            },
            dataType : 'html'
            
            })
            .done(function(data){
            if(data == "yes"){
                window.location.href = "../sources/b-login.php";
            }
            else{
                alert("帳號或密碼輸入錯誤");
            }
            })
            .fail(function(jqXHR, _textStatus, _errorThrown) {
            alert("console log");
            console.log(jqXHR.responseText);
        });
        
        return false;
    });
});
//Add Cart Goods 
$(document).ready(function() {
    $('a[id*=add-btn]').click(function(){
            console.log($('div[id="name"]').attr("data-add-goods-name"));
            console.log($('div[id="image"]').attr("data-add-goods-image"));
            console.log($('div[id="price"]').attr("data-add-goods-price"));
            console.log($(this).attr("data-add-goods-id"));

        $.ajax({
            type : "POST",
            url : "../mysql/add_cart.php",
            data : {
                name : $('div[id="name"]').attr("data-add-goods-name"),
                image : $('div[id="image"]').attr("data-add-goods-image"),
                price : $('div[id="price"]').attr("data-add-goods-price")
            },
            dataType : 'html'
            }).done(function(data){
                if(data == "yes"){
                    alert('成功加入購物車');
                }
                else{
                    alert('加入購物車失敗');
                }
            })
            .fail(function(jqXHR, _textStatus, _errorThrown) {
            alert("console log");
            console.log(jqXHR.responseText);
        });
    
    return false;
    });
});
//Del Cart Goods 
$(document).ready(function() {
    $('a[id^=del-btn]').click(function(){

        $.ajax({
            type : "POST",
            url : "../mysql/del_cart.php",
            data : {
                id : $(this).attr("data-goods-id")
            },
            dataType : 'html'
            }).done(function(data){
                if(data == "yes"){
                console.log('刪除成功');
                }   
                else{
                console.log("刪除失敗");
                }
            })
            .fail(function(jqXHR, _textStatus, _errorThrown) {
            alert("console log");
            console.log(jqXHR.responseText);
        });
        
        return false;
    });
});