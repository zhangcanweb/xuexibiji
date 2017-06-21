/**
 * Created by bjwsl-001 on 2016/12/10.
 */
$(function(){
    $('#header').load('data/header.php',function(){
        if(sessionStorage['LoginName']==undefined){
            $('#welcome a').html('您还未登录');
        }else{
            $('#welcome a').html('欢迎回来：'+sessionStorage['LoginName']);
        }
    });
    $('#footer').load('data/footer.php');
})
$('#header').on('click','#login',function(e){
    e.preventDefault();
    location.href='login.html';
});
$('#header').on('click','#register',function(e){
    e.preventDefault();
    location.href='register.html';
});
$('#header').on('click','#product',function(e){
    e.preventDefault();
    location.href='product.html';
});
//轮播广告php引入
$.ajax({
    type:'GEt',
    url:'data/carousel.php',
    success:function(str){
        var html='';
        var htmlList='';
        for(var i=0;i<str.length;i++){
            var list=str[i];
            html+=`
                    <a href="#"><img src="${list.pic}" alt=""/></a>
                `;
            htmlList+=`
                    <li>${list.pid}</li>
                `;
        }
        $('#turn-img').html(html);
        $('#turn-num').html(htmlList);
    }
});
$.ajax({
    type:'GET',
    url:'data/service.php',
    success:function(str){
        var html='';
        $.map(str,function(list){
            html+=`
                <li>
            <a href="#">
                <img src="${list.sPic}" alt=""/>
                <h3>${list.sName}</h3>
            </a>
        </li>
            `;
        })
        $('#body-top ul').html(html);
    }
});
$.ajax({
    type:'GET',
    url:'data/serviceRight.php',
    success:function(str){
        var html='';
        $.map(str,function(list){
            html+=`
                 <a href="#"><img src="${list.pic}" alt=""/></a>
            `;
        })
        $('#body-top-right').html(html);
    }
});
$.ajax({
    type:'GET',
    url:'data/starProductOne.php',
    success:function(str){
        var html='';
        $.map(str,function(list){
            html+=`
                <li>
                <a href="#">
                    <img src="${list.pic}" alt=""/>
                    <h4>${list.pName}</h4>
                    <p>${list.title}</p>
                    <b>${list.price}元起</b>
                </a>
            </li>
            `;
        })
        $('#body-list-1').html(html);
    }
});

$.ajax({
    type:'GET',
    url:'data/starProductTwo.php',
    success:function(str){
        var html='';
        $.map(str,function(list){
            html+=`
                <li>
                <a href="#">
                    <img src="${list.pic}" alt=""/>
                    <h4>${list.pName}</h4>
                    <p>${list.title}</p>
                    <b>${list.price}元起</b>
                </a>
            </li>
            `;
        })
        $('#body-list-2').html(html);
    }
});
$.ajax({
    type:'GET',
    url:'data/product.php',
    success:function(str){
        var html='';
        $.map(str,function(list){
            html+=`
                <li>
                    <a href="#">
                        <img src="${list.pic}" alt=""/>
                        <h4>${list.pName}</h4>
                        <p>${list.title}</p>
                        <b>${list.price}元</b>
                    </a>
                    <!-- 商品弹出评价-->
                    <div class="assess">
                        <h5>${list.comment}</h5>
                        <p>${list.cmtPeople}</p>
                    </div>
                </li>
            `;
        })
        $('#body-product div ul').html(html);

    }
});
$('document').ready(function(){
    var n=0;
    $('#turn-img a:not(:first-child)').hide();
    $('#turn-num').on('mouseenter','li',function(){
        var i=$(this).text()-1;
        var n=i;
        $('#turn-img a').filter(':visible').fadeOut(500)
            .parent().children().eq(n).fadeIn(500);
        $(this).css({'background':'#be2424','color':'#111'})
            .siblings().css({'background':'#6f4f67','color':'#fff'})
    });
    setInterval(function(){
        var count=$('#turn-img a').length;
        if(n>(count-1)){
            n=0;
        }else{
            n++;
        }
        $('#turn-num li').eq(n).trigger('mouseenter');
    },3000)
})
//明星商品展示列表
$('document').ready(function(){
    $('#body-star-s1').click(function(){
        $(this).css('background-color','#FF6700')
                .css('cursor','default');
        $('#body-star-s2').css('background-color','#30F197')
            .css('cursor','pointer');
        $('#body-list-2').fadeOut(200);
        $('#body-list-1').fadeIn(200);
    });
    $('#body-star-s2').click(function(){
        $(this).css('background-color','#FF6700')
                .css('cursor','default');
        $('#body-star-s1').css('background-color','#30F197')
            .css('cursor','pointer');
        $('#body-list-1').fadeOut(200);
        $('#body-list-2').fadeIn(200);
    });
    var n=1;
    setInterval(function(){
        $("#body-star-s"+n).trigger('click');
        n++;
        if(n>2){
            n=1
        }
    },4000);
});
$('#body-product').on('mouseenter','li',function(){
    $(this).children('.assess').slideDown(100);
})
$('#body-product').on('mouseleave','li',function(){
    $(this).children('.assess').slideUp(100);
});








