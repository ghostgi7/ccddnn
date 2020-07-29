/**
 * @author: porn
 */
var _mobile = /^(((13[0-9]{1})|(14[0-9]{1})|(15[0-9]{1})|(17[0-9]{1})|(18[0-9]{1}))+\d{8})$/;

//处理ajax请求返回的json数据结果
function handleAjaxJsonResult(json){
    var result = json['result'];
    var msg = json['msg'];
    switch(result){
        case 'yes': {return true;}
        case 'no': {layer.alert(msg);return false;}
        case 'needauth':{ redirectLogin(msg);return false;}
        case 'noPermission': {layer.alert("您无该操作的权限!");return false;}
    }
}

function redirectLogin(msg){
    layer.confirm(msg + ', 是否登陆 ?', {
        btn : [ '登陆', '不登陆' ]
    }, function() {
        var currHref = location.href.replace(basePath, "");
        if(location.href.startsWith('/site')){
            top.location.href = basePath + "/";
        }else{
            top.location.href = basePath + "/admin";
        }
    }, function() {
    });
}

var loadingLayerIndex;

$(function(){
    //设置layer主题
    layer.config({skin:"layui-layer-lan",shade: [0.1,'#fff']} );
    //设置layer弹出位置
    layer.config({
        offset: '100px'
    });
    // 设置全部ajax请求不读取缓存
    $.ajaxSetup({
        cache: false
    });

    $(document).ajaxStart(function(){//ajax请求开始开启遮蔽罩
        loadingLayerIndex = parent.layer.load(1, {shade: [0.5,'#000'],offset: '300px'});
    }).ajaxStop(function(){//ajax请求开始关闭遮蔽罩
        parent.layer.close(loadingLayerIndex);
    });

    try{
        jQuery.validator.addMethod("phone",
            function(value,element,params) {
                return (_mobile.test(value));
            },
            "请填写正确的手机号码"
        );
        jQuery.validator.setDefaults({
            errorClass: "vali-error",
            //onfocusout: true,
            errorPlacement: function(error, element) {
                error.appendTo(element.parent());
            }
        });
    }catch(e){
    }

});

/**
 * 弹出窗口
 *	title	窗口标题
 *	url		打开的资源地址
 *	width	宽
 *	height  高
 *	例 showFrame("新增角色","${basePath}role/add",400,300);
 */
function showFrame(title,url,width,height){
    window.top.layer.open({
        type: 2,
        shade: 0.5,
        fix: true,
        title: [title,'background-color:#367294; color:#FFFFFF; background-image: none;'],
        maxmin: true,
        shadeClose: false,
        content:url,
        area: [parseWidth(width),parseHeight(height)],
        end: function(index){

        }
    });
}

function parseWidth(w){
    w = w + '';
    if(w.indexOf("%") != -1){
        var wwidth = document.body.scrollWidth-15;
        return wwidth*(parseFloat(w)/100) + 'px';
    }else{
        return w + 'px';
    }
}

function parseHeight(h){
    h = h + '';
    if(h.indexOf("%") != -1){
        var wheight = _getHeight() -15;
        return wheight*(parseFloat(h)/100) + 'px';
    }else{
        return h + 'px';
    }
}

//获取可视区域的高
function _getHeight(){
    return document.documentElement.clientHeight;
}

/**
 * 移除数组中的元素
 */
function removeArrEle(arr, str){
    var idx = firstIndexOfArr(arr, str);
    if(-1 == idx){
        return arr;
    }
    arr = arr.splice(idx,1);
    return arr;
}

/**
 * 字符串在数组中第一次出现的位置
 * @param arr
 * @param str
 * @returns {Number}
 */
function firstIndexOfArr(arr, str){
    var idx = -1;
    for(var i = 0; i < arr.length; i++){
        if(arr[i] == str){
            idx = i;
            break;
        }
    }
    return idx;
}

/**
 * 设置cookie
 * @param name
 * @param value
 */
function setcookie(name,value,seconds){
    var exp  = new Date();
    exp.setTime(exp.getTime() + seconds*1000);
    document.cookie = name + "="+ escape (value) + ";expires=" + exp.toGMTString();
}

/**
 * 读取cookie
 * @param name
 * @returns
 */
function getcookie(name){
    var arr = document.cookie.match(new RegExp("(^| )"+name+"=([^;]*)(;|$)"));
    if(arr != null){
        return (arr[2]);
    }else{
        return "";
    }
}

/**
 * 删除cookie
 * @param name
 */
function delcookie(name){
    var exp = new Date();
    exp.setTime(exp.getTime() - 1);
    var cval=getCookie(name);
    if(cval!=null) document.cookie= name + "="+cval+";expires="+exp.toGMTString();
}

/**
 * 判断是不是电脑端
 */
function isPC(){
    var userAgentInfo = navigator.userAgent;
    var Agents = new Array("Android", "iPhone", "SymbianOS", "Windows Phone", "iPad", "iPod");
    var flag = true;
    for (var v = 0; v < Agents.length; v++) {
        if (userAgentInfo.indexOf(Agents[v]) > 0) { flag = false; break; }
    }
    return flag;
}