/**
 * Created by bjwsl-001 on 2016/12/2.
 */
//登录 注册页面跳转
$('.register').click(function(){
    location.href='register.html'
});
$('.login').click(function(){
    location.href='login.html'
});
//商品展示鼠标移入效果
$('.product-pic li a').mouseenter(function(){
   var img=$(this).children('.product-img').children();
   var l=132;
   var timer=setInterval(function(){
       img.css('position','relative').css('width',l+'px');
        l+=10;
       if(l>180){
           clearInterval(timer);
           img.css('position','relative').css('width',132+'px');
       }
   },42)
});
//二维码转换
$('#vmall .c-2').mouseenter(function(){
   $(this).css('background-color','red');
    $('.c-1').css('background-color','greenyellow');
    $('#vmall img').attr('src','imgs/wchat.jpg');
    $('#v-t').html('微信扫码惊喜');
})
$('#vmall .c-1').mouseenter(function(){
   $(this).css('background-color','red');
    $('.c-2').css('background-color','greenyellow');
    $('#vmall img').attr('src','imgs/app.png');
    $('#v-t').html('周三无线专属');
})
//广告轮播
$('document').ready(function(){
    var n=0;
    $('#lunbo-img a:not(:first-child)').hide();
    $('#nav-ad-num span').mouseenter(function(){
        var i=$(this).text()-1;
        var n=i;
        $('#lunbo-img a').filter(':visible').fadeOut(500)
                         .parent().children().eq(n).fadeIn(500);
        $(this).css({'background':'#be2424','color':'#111'})
                .siblings().css({'background':'#6f4f67','color':'#fff'})
    });

setInterval(function(){
    var count=$('#lunbo-img a').length;
    if(n>(count-1)){
        n=0;
    }else{
        n++;
    }
    $('#nav-ad-num span').eq(n).trigger('mouseenter');
},3000)
});
//间隙长图转换
$('.sale-toggle-1').mouseenter(function(){
    $('#sale-pic img').attr('src','imgs/sanjiaojia.png');
    $(this).css('background-color','red');
    $('.sale-toggle-2').css('background','greenyellow')
});
$('.sale-toggle-2').mouseenter(function(){
    $('#sale-pic img').attr('src','imgs/sanjiaojia-2.png');
    $(this).css('background-color','red');
    $('.sale-toggle-1').css('background','greenyellow')
});