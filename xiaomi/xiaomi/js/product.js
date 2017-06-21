/**
 * Created by bjwsl-001 on 2016/12/13.
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
$('#index').click(function(){
    location.href='index.html';
})
$('#body-title').on('click','li a',function(e){
    e.preventDefault();
    $(this).css('color','#FF6700')
        .parent('li').siblings().children().css('color','#999');
})

$.ajax({
    type:'GET',
    url:'data/navList.php',
    success:function(str){
        var html='';
        $.map(str,function(list){
            html+=`
                <li><a href="#">${list.lName}</a></li>
            `;
        })
        $('#body-title ul').html(html);
    }
});
$.ajax({
    type:'GET',
    url:'data/productList.php',
    success:function(str){
            var html='';
            $.map(str,function(list){
                html+=`
                     <li>
                    <a href="#">
                        <img src="${list.pic}" alt=""/>
                    </a>
                    <h2>${list.pName}  <b>${list.price}元起</b></h2>
                    <p>${list.title}</p>
                    <span>立即购买</span>
                </li>
                `;
            })
        $('#body-product ul').html(html);

    }
});
$.ajax({
    type:'GET',
    url:'data/productPicture.php',
    success:function(str){
        var html='';
        $.map(str,function(list){
            html+=`
                 <div class="body-pic-list">
                <img src="${list.pic}" alt=""/>
            </div>
            `;
        })
        $('#body-pic-list').html(html);
    }
});
$.ajax({
    type:'GET',
    url:'data/hardProduct.php',
    success:function(str){
        var html='';
        $.map(str,function(list){
            html+=`
                <li>
                        <a href="#">
                            <img src="${list.pic}" alt=""/>
                            <h4>${list.hName}</h4>
                            <p>${list.title}</p>
                            <div>${list.price}元</div>
                        </a>
                    </li>
            `;
        })
        $('#hard-list-p ul').html(html);
    }
})