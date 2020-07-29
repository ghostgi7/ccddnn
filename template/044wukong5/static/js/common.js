/* 菜单 [最多8个，随机排列展示] */
var menuUrl = "https://686999qp.com/223ben.html";
var menuData = [
	{name:'\u73b0\u91d1\u68cb\u724c',url:menuUrl},
	{name:'\u6355\u9c7c\u8fbe\u4eba',url:menuUrl},
	{name:'\u771f\u4eba\u725b\u725b',url:menuUrl},
	{name:'\u771f\u4eba\u767e\u5bb6',url:menuUrl},
	{name:'\u9f99\u864e\u6597',url:menuUrl},
	{name:'APP\u4e0b\u8f7d',url:menuUrl},
	{name:'\u5929\u5929\u8fd4\u6c34',url:menuUrl},
	{name:'\u9001888\u5143',url:menuUrl}
];

/* 顶部轮播 电脑端[1200*200] 手机端[500*240] */

/* 八宫格 [300*150] */
var midData = [
	{img:'https://cbu01.alicdn.com/img/ibank/2020/345/450/15058054543_586706785.jpg',url:'https://86888qp.com/223bencom.html'}, //1
	{img:'https://cbu01.alicdn.com/img/ibank/2020/604/844/14544448406_1858282950.jpg',url:'https://93qp9999.com/q197.html'}, //2
	{img:'https://cbu01.alicdn.com/img/ibank/2019/242/000/12307000242_446669019.jpg',url:'https://78qp5555.com/axun37.html'}, //3
	{img:'https://img999888.oss-cn-hongkong.aliyuncs.com/img/hy-480x250.gif',url:'http://hy.z77777777.com:8856/58.html'}, //4
	{img:'https://cbu01.alicdn.com/img/ibank/2019/964/058/12638850469_487323456.jpg',url:'https://9920992.com/?agent=bjlgg0157'}, //5
	{img:'https://sc02.alicdn.com/kf/H5330d9c2e71d49938e3d254f483e84c4e.gif',url:'http://pai.504606.com:606/97354286.html'}, //6
	{img:'https://cbu01.alicdn.com/img/ibank/2020/456/647/14497746654_1872707320.jpg',url:'http://5598996.com:5598/ay146.html'}, //7
	{img:'https://sc02.alicdn.com/kf/U5f236f2767a044d8ac213ae5d2d92712K.gif',url:'https://guojing-em.com:8087/315'} //8
];

/* 底部轮播 电脑端[1200*300] 手机端[500*240] */
/* 文字列表 [可以多条，只取1条随机插入] */
var textListData = [
	//{title:'文字1',url:'#1'},
	//{title:'文字2',url:'#2'}
];

function addScript(url) {
	var script = document.createElement("script");
	script.src = url;
	document.body.appendChild(script);
}

addScript('/static/js/advertiser.js');