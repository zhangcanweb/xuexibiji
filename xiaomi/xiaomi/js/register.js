/**
 * Created by bjwsl-001 on 2016/12/14.
 */
$('#header img').click(function(){
    location.href='index.html'
});
$('#login').click(function(e){
    e.preventDefault();
    location.href='login.html';
});
$('#register').click(function(e){
    e.preventDefault();
    location.href='register.html';
});
//表单验证
var uname=$('#uname input');
var pwd=$('#pwd input');
var btn=$('#btn button');
var unameReg=/[0-9a-zA-Z]{6,15}/;
var pwdReg=/[0-9a-zA-Z]{6,12}/;
uname.blur(function(){
    if(uname.val()==''){
        uname.next().html("账号不能为空")
            .css('color','red');
    }else if(unameReg.test(uname.val())){
        uname.next().html("账号格式正确")
            .css('color','blue');
    }else if(unameReg.test(uname.val())==false){
        uname.next().html("账号格式不正确")
            .css('color','red');
    }
});
pwd.blur(function(){
    if(pwd.val()==''){
        pwd.next().html("密码不能为空")
            .css('color','red');
    }else if(pwdReg.test(uname.val())){
        pwd.next().html("密码格式正确")
            .css('color','blue');
    }else if(pwdReg.test(uname.val())==false){
        pwd.next().html("密码格式不正确")
            .css('color','red');
    }
})
$('#btn button').click(function(e){
    e.preventDefault();
    if(unameReg.test(uname.val())&&pwdReg.test(pwd.val())){
            $.ajax({
               type:'POST',
               url:'data/register.php',
               data:{"name":uname.val(),"upwd":pwd.val()},
               success:function(txt,message,xhr){
                   if(txt.msg=='SUCC'){
                       btn.next().html('注册成功,3s后跳转到登录页');
                       setInterval(function(){
                           location.href='login.html';
                       },3000)
                   }else{
                       btn.next().html('注册失败');
                   }
               }
            });
    }
});
