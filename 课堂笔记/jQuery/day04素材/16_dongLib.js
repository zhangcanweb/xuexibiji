if(window.$===undefined){
	throw new Error("dongLib依赖于jQuery，请先引入jQuery库");
}
$.dongLib={}//在jQuery对象中添加自己的命名空间对象
//为jQuery库中的自己的命名空间添加一个新的全局函数sum，求所有类数组对象中元素的和
$.dongLib.sum=function(list){
	console.log("东的sum方法");
	var sum=0;
	//jQuery对象中已经包含了一些内置全局函数
	$.each(list,function(i){sum+=list[i]})
	return sum;
}