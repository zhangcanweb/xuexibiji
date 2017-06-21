/**
 * Created by bjwsl-001 on 2016/12/2.
 */
$('.login').click(function(){
    location.href='login.html';
})
uname.onblur = function(){
    if(this.validity.valueMissing){
        var msg = '用户名不能为空！';
        this.setCustomValidity(msg);
    }else if(this.validity.tooShort){
        var msg = '用户名不能少于6位！';
        this.setCustomValidity(msg);
    }else if(this.validity.tooLong){
        var msg = '用户名不能大于10位！';
        this.setCustomValidity(msg);
    }else {
        this.setCustomValidity('');
    }
}
pwd.onblur = function(){
    if(this.validity.valueMissing){
        var msg = '密码不能为空！';
        this.setCustomValidity(msg);
    }else if(this.validity.tooShort){
        var msg = '密码不能少于5位！';
        this.setCustomValidity(msg);
    }else if(this.validity.tooLong){
        var msg = '密码不能大于12位！';
        this.setCustomValidity(msg);
    }else {
        this.setCustomValidity('');
    }
}
$('.refresh').click(function(e){
    e.preventDefault();
    $('.register-check').attr('src',  'imgs/refresh.php');
})
