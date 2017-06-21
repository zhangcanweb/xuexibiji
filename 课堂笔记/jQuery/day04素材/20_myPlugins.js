if(window.$===undefined){
	throw new Error("myPlugins库依赖于jQuery库")
}
jQuery.fn.dropdown=function(){
	//this->$("...")
	//找到this下的ul，侵入dropdown-menu和fade class
	this.children("ul")
		  .addClass("dropdown-menu fade");
	//为this绑定hover
		//找到this下的ul,切换in class
	this.hover(function(){
		$(this).children("ul").toggleClass("in");
	});
}
//$("#my-dropdown").dropdown();
jQuery.fn.tabs=function(){
	//this->$("...")
	this.addClass("tabs");//为父元素侵入tabs class
	//为第一个li和第一个div侵入active class
	this.find("ul>li:first").addClass("active");
	this.find("div:first").addClass("active");
	//为ul下每个a绑定单击事件
	this.children("ul").on("click","a",function(e){
		e.preventDefault();//阻止默认行为
		//如果当前a的父级li不是active的
		if(!$(this).parent().hasClass("active")){
			$(this).parent()
				     .addClass("active")
				     .siblings(".active")
				     .removeClass("active");
			$(this).parent().parent()
				     .siblings(".active")
				     .removeClass("active");
			$($(this).attr("href")).addClass("active");
		}
	});
}