/**
 * Created by bjwsl-001 on 2016/12/14.
 */
$('#header img').click(function(){
    location.href='index.html'
})
$('#login-forget-s1').click(function(){
   location.href='register.html';
});
$('#login-style span:even').css('color','#FF6700');
$(function(){
    $('#login-style span').click(function(){
        $(this).css('color','#FF6700')
            .siblings().css('color','#000');
    });
})
$('#count').click(function(){
        $('#login-page-1').fadeIn(200);
        $('#login-page-2').fadeOut(200);
})
$('#vmall').click(function(){
        $('#login-page-2').fadeIn(200);
        $('#login-page-1').fadeOut(200);
});
$('#btn').click(function(e){
    e.preventDefault();
    var uname=$('#uname input').val();
    var upwd=$('#pwd input').val();
    if(uname==""||(pwd="")){
        $("#warn-txt").html('用户名或者密码不能为空!');
    }else{
        $.ajax({
            type:'POST',
            url:'data/login.php',
            data:{'uname':uname,'pwd':upwd},
            success:function(txt,message,xhr){
                if(txt.msg=='succ'){
                    $('#warn-txt').html("登录成功,3后跳转到主页")
                        .css('color','#fff');
                    setInterval(function(){
                        location.href='index.html';
                    },3000)
                   sessionStorage.setItem('LoginName',uname);
                   console.log(sessionStorage['LoginName']);
                }else{
                    $('#warn-txt').html("用户名或者密码错误")
                }
            }
        })
    }
});
