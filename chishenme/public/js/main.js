$(function(){

//	var resource = {
//		'sucai'	: ['豆芽', '空心菜', '西红柿', '包菜', , '白菜', '地瓜叶', '苋菜', '豆腐', '山药', '洋葱'],
//		'huncai': ['花蛤', '鱿鱼', '鲳鱼', '皇帝鱼', '黄翅鱼', '三文鱼',
//		           '猪肉', '猪蹄', '牛肉', '羊肉', '驴肉', '鸡肉', '鸭肉', '排骨'],
//		'shuiguo' : ['芙蓉李', '梨子', '苹果', '香蕉', '葡萄', '橙子', 
//		             '百香果', '奇异果', '火龙果', '牛油果', '西瓜', '哈密瓜'],
//		'yinliao': ['蜂蜜', '牛奶'],             
//		'zhushi' : ['空心粉', '意大利粉', '米粉', '冬粉', '手工面', '泡面'],
//		'tiandian' : ['蛋糕', '冰激凌'],
//	};
});
function random_sucai(cai)
{
	var length = cai.length;
	var index = Math.round(Math.random() * length + 0);
	$("#sucai p").html(cai[index].name);
	
}

function random_huncai(cai)
{
	var length = cai.length;
	var index = Math.round(Math.random() * length + 0);
	$("#huncai p").html(cai[index].name);
}