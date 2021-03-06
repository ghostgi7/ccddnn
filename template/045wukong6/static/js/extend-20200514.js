var vpicthumbtimes;
var timer = null, ad_time = 5, ad_time_auto = 10, thumb_ok = 1,peers = [];
var _peerId = '', _peerNum = 0, _totalP2PDownloaded = 0, _totalP2PUploaded = 0;
var countdown = 60;
var counttime = null;
function setPlayer (res) {
    if (self !== top) {
        return
    }
    if (res.code === 1) {
        var source = res.data;
        var poster = poster_url;
        var video = document.createElement('Video');
        window.video = video;
        video.poster = poster;
        video.src = source;
        video.controls = 'controls';
        video.playsinline = true;
        $('.player .van-loading').hide();
        $('#player').append(video);
        $(video).attr("playsinline", "")
        try {
            if (/(iPhone|iPad|iPod|iOS)/i.test(navigator.userAgent)) {
                throw "iphone";
            }
            else {
                let player = new Plyr(video, {
                    poster: poster,
                    invertTime: false,
                    fullscreen: {
                        enabled: true,
                        fallback: true,
                        iosNative: true
                    }
                });
                let hls = new Hls({
                    xhrSetup: player.Xhr,
                    maxBufferLength: 30,
                    maxMaxBufferLength: 30,
                });
                hls.loadSource(source);
                hls.attachMedia(video);

                window.hls = hls;
                window.player = player;
                player.on('ready', function () {
                    var stadiv = '<div id="stats" style="top: 0; width:100%; position: absolute; background: rgba(0,0,0,0.2); color: #fff; font-size: 12px; z-index: 2"></div>'
                    $('#player > div.plyr').append(stadiv);
                    $('.player video').show()
                })
            }
        }catch (e) {
            console.log(e)
        }
    }
    else {
        $('#player').append(res.msg);
    }
}

function getUserLike(){
    $.get("/api/like/", {type: app.Info.type, fid: app.Info.id, authorid: app.Info.authorid}, function(res){
        app.UserLike = true
        if(res.code === 1){
            app.Follow["99_"+app.Info.authorid] = res.data.follow
            app.Follow[app.Info.type+"_"+app.Info.id] = res.data.like
        }else{

        }
    });
}


function getFollow(){
    $.get("/api/like/follow", {fid: app.Info.id}, function(res){
        app.UserLike = true
        if(res.code === 1){
            app.Follow["99_"+app.Info.id] = res.data.follow
        }else{

        }
    });
}

function follow(e){
    followbtn = $(e.currentTarget)
    followbtn.attr("disabled", true)
    if(followbtn.length > 0){
        var type = followbtn.attr("data-type")
        var fid = followbtn.attr("data-fid")
        followbtn.addClass("loading")
        if(followbtn.hasClass("red-pale") || followbtn.hasClass("gray") || followbtn.hasClass("light")){
            followbtn.addClass("loading-light")
        }
        $.post("/api/like/", {type: type, fid: fid}, function(res){
            followbtn.attr("disabled", false)
            followbtn.removeClass("loading").removeClass("loading-light")
            if(res.code === 1){
                if(res.data.status === 1){
                    app.Follow[type+"_"+fid] = true
                    if (type != 99){
                        app.Info.likenum++
                    }
                }else{
                    app.Follow[type+"_"+fid] = false
                    if (type != 99){
                        app.Info.likenum--
                    }
                }
                var a = {}
                for(var i in app.Follow){
                    a[i] = app.Follow[i]
                }
                app.Follow = a
            }else{
                if(res.code === -1){
                    confirmModal(res.msg+"，登陆之后才可以"+(type==99 ? "关注" : "点赞")+"<p>是否立即登陆？</p>", function(){
                        showLogin()
                    })
                }else{
                    msg(res.msg, "red text-tint")
                }
            }
        })
    }
}

function confirmModal(msg, callback, nocancel, autoclose){
    Swal.fire({
        title: '亚色网提示',
        type: 'info',
        html:msg,
        showCloseButton: true,
        showCancelButton: true,
        focusConfirm: false,
        confirmButtonText:'确定',
        confirmButtonAriaLabel: 'Thumbs up, great!',
        cancelButtonText:'取消',
        cancelButtonAriaLabel: 'Thumbs down'
    }).then((result) => {
        if(result.value === true){
            callback()
        }
    })
}

function confirmModalAjax(msg, callback, nocancel, autoclose){
    Swal.fire({
        title: '亚色网提示',
        type: 'info',
        html:msg,
        showLoaderOnConfirm: true,
        showCloseButton: true,
        showCancelButton: true,
        preConfirm: () => {
           return new Promise(function(resolve){
               callback(resolve);
            })
        },
        focusConfirm: false,
        confirmButtonText:'确定',
        confirmButtonAriaLabel: 'Thumbs up, great!',
        cancelButtonText:'取消',
        cancelButtonAriaLabel: 'Thumbs down'
    }).then((result) => {
        if(result.value.code === 1){
            msg_success(result.value.msg)
        }else{
            msg_error(result.value.msg)
        }
    })
}

function modalShowLoading(){
    $(".modal-success-btn").addClass("loading")
}

$(document).ready(function() {
    $(function () {
        $("button").attr('disabled', false)
        if ($('.novel-select-bgcolor').length > 0) {
            $('.novel-select-bgcolor span').click(function () {
                $(this).addClass("on").siblings().removeClass('on');
                var color = $(this).attr("data-color");
                $("body").removeClass("white").removeClass("darkview").removeClass("warning-pale").removeClass("primary-pale").removeClass("info-pale").addClass(color)
                $.cookie("novel_bg", color, {
                    path: "/"
                })
                $.cookie("darkview", "", {
                    path: "/"
                })
            })
        }
        if($('.novel-set-night').length > 0){
            $(".novel-set-night").click(function(){
                $("body").toggleClass("darkview")
                if($("body").hasClass("darkview")){
                    $.cookie("darkview", "darkview", {
                        path:"/"
                    })
                }else{
                    $.cookie("darkview", "", {
                        path:"/"
                    })
                }
            })
        }
    })
})

function msg_success(msg, callback){
    if(typeof(callback) !== "function"){
        callback = function(){}
    }
    // const Toast = Swal.mixin({
    //     toast: true,
    //     position: 'center',
    //     showConfirmButton: false,
    //     timer: 3000,
    //     onClose: function(){
    //         callback()
    //     }
    // })
    // Toast.fire({
    //     type: 'success',
    //     title: msg
    // })
    new $.zui.Messager(msg, {
        type: 'success',
    }).show();
    setTimeout(function(){
        callback()
    }, 3000)
}

function msg_error(msg) {
    // const Toast = Swal.mixin({
    //     toast: true,
    //     position: 'center',
    //     showConfirmButton: false,
    //     timer: 3000
    // })
    // Toast.fire({
    //     type: 'error',
    //     title: msg
    // })
    new $.zui.Messager(msg, {
        type: 'error',
    }).show();
}

function handelAjaxErr(res){
    if(typeof(res.msg) !== 'undefined'){
        msg_error(res.msg)
    }
    if(typeof(res.field) !== 'undefined'){
        for(key in res.field){
            var item = res.field[key]
            $("#"+key).html(item).show()
            $("#"+key).parent().addClass("has-error")
        }
    }
}

function getSms(){
    var username = $("input[name='username']").val();
    if(!checkMobile(username) && !checkEmail(username)){
        msg_error("请输入正确的手机号或者邮箱作为用户名")
    }else{
        tncode.show()
    }
}

function settime(obj) {
    if (countdown === 0) {
        obj.removeAttribute("disabled");
        $(obj).html("重新发送");
        countdown = 60;
        return;
    } else {
        obj.setAttribute("disabled", true);
        $(obj).html("重发(" + countdown + ")");
        countdown--;
    }
    counttime = setTimeout(function() {
            settime(obj) }
        ,1000)
}

function checkMobile(value){
    var mobile = false;
    var myreg=/^[1][3,4,5,6,7,8,9][0-9]{9}$/;
    if (!myreg.test(value)) {
        mobile = false
    } else {
        mobile = true
    }
    return mobile;
}

function checkEmail(value){
    var email = false;
    var reMail = /^(?:[a-zA-Z0-9]+[_\-\+\.]?)*[a-zA-Z0-9]+@(?:([a-zA-Z0-9]+[_\-]?)*[a-zA-Z0-9]+\.)+([a-zA-Z]{2,})+$/;
    if (!reMail.test(value)){
        email = false
    } else {
        email = true
    }
    return email;
}

function loginSuccess(res){
    app.UserInfo = {
        UserId: res.data.userinfo.Id,
        Name: res.data.userinfo.Name,
        Avatar: res.data.userinfo.Avatar,
        Coin: res.data.userinfo.Coin,
        Credit: res.data.userinfo.Credit,
        Messagenum: res.data.userinfo.Messagenum,
        Messagenum_Unread: res.data.userinfo.Messagenum_Unread,
        IsVip: res.data.userinfo.IsVip,
        VipEndtime: res.data.userinfo.IsVip ? res.data.userinfo.VipEndtime : "",
        HistoryList: res.data.history_list,
        Qiandao_Lianxu: res.data.userinfo.Qiandao_Lianxu,
        QiandaoToday: today === res.data.userinfo.Qiandao_Lastdate,
        Follownum: res.data.userinfo.Follownum,
        Fansnum: res.data.userinfo.Fansnum,
    };
}

function logoutSuccess(){
    app.UserInfo = {
        UserId: 0,
        Name: "",
        Avatar: "/static/assets/images/avatar1@2x.png",
        Coin: 0,
        Credit: 0,
        Messagenum: 0,
        Messagenum_Unread: 0,
        IsVip: 0,
        VipEndtime: "",
        HistoryList: [],
        Qiandao_Max: 0,
        Qiandao_Lianxu: 0,
        QiandaoToday: false,
        Follownum: 0,
        Fansnum: 0,
    };
}

function showLogin(){
    html = '<div class="white with-nav-top">\n' +
        '        <form id="ajaxLoginForm" method="post" action="/api/user/login">\n' +
        '            <h2 class="text-center">用户登陆</h2>\n' +
        '            <div class="user-form space-sm">\n' +
        '                <div class="container">\n' +
        '                    <div class="form-item">\n' +
        '                        <div class="inputdiv">\n' +
        '                            <input type="text" name="username" placeholder="手机号/邮箱">\n' +
        '                        </div>\n' +
        '                    </div>\n' +
        '                    <div class="form-item">\n' +
        '                        <div class="inputdiv">\n' +
        '                            <input type="password" autocomplete name="password" placeholder="请输入密码">\n' +
        '                        </div>\n' +
        '                    </div>\n' +
        '                    <button type="submit" class="btn btn-block btn-primary circle load-indicator login-btn">提交</button>\n' +
        '                    <div class="user-form-bottom-text">\n' +
        '                        <a href="javascript:showRegister()">注册新用户</a>\n' +
        '                        <a href="javascript:showForgotPw()">忘记密码</a>\n' +
        '                    </div>\n' +
        '                </div>\n' +
        '            </div>\n' +
        '        </form>\n' +
        '    </div>\n'
    Swal.fire({
        title: '',
        html: html,
        allowOutsideClick: false,
        allowEscapeKey: false,
        allowEnterKey: false,
        showCloseButton: true,
        showCancelButton: false,
        showConfirmButton: false,
        focusConfirm: false,
        onRender: function(){
            $('#ajaxLoginForm').ajaxform({
                onSubmit: function(){
                    $(".login-btn").attr("disabled", true)
                },
                onResult: function(res) {
                    $(".login-btn").attr("disabled", false)
                    if(res.code === 1){
                        Swal.close()
                        if(typeof(app.getPlayerDomain) === "function"){
                            app.getPlayerDomain()
                        }else if(typeof(app.getComicContent) === "function"){
                            app.getComicContent()
                        }else{
                            loginSuccess(res)
                        }
                        msg_success("登陆成功！")
                    }else{
                        if(res.code === 0){
                            msg_error(res.msg)
                        }
                    }
                }
            });
        }
    })
}

function showRegister(){
    html = '<div class="white with-nav-top">\n' +
        '        <form id="ajaxRegisterForm" method="post" action="/api/user/register">\n' +
        '        <h2 class="text-center">注册新用户</h2>\n' +
        '        <div class="user-form space-sm">\n' +
        '            <div class="container">\n' +
        '                <div class="form-item">\n' +
        '                    <div class="inputdiv">\n' +
        '                        <input name="username" placeholder="手机号/邮箱">\n' +
        '                    </div>\n' +
        '                </div>\n' +
        '                <div class="form-item nopadding text-red small form-tip" style="display:none" id="UserRegisterRequest_Username"></div>' +
        '                <div class="form-item">\n' +
        '                    <div class="inputdiv">\n' +
        '                        <input name="name" placeholder="请输入昵称">\n' +
        '                    </div>\n' +
        '                </div>\n' +
        '                <div class="form-item nopadding text-red small form-tip" style="display:none" id="UserRegisterRequest_Name"></div>' +
        '                <div class="form-item">\n' +
        '                    <div class="inputdiv">\n' +
        '                        <input type="password" name="password" placeholder="请输入密码">\n' +
        '                    </div>\n' +
        '                </div>\n' +
        '                <div class="form-item nopadding text-red small form-tip" style="display:none" id="UserRegisterRequest_Password"></div>' +
        '                <div class="form-item">\n' +
        '                    <div class="inputdiv">\n' +
        '                        <input type="password" name="confirm_password" placeholder="请再次输入密码">\n' +
        '                    </div>\n' +
        '                </div>\n' +
        '                <div class="form-item nopadding text-red small form-tip" style="display:none" id="UserRegisterRequest_ConfirmPassword"></div>' +
        '                <div class="form-item">\n' +
        '                    <div class="inputdiv">\n' +
        '                        <input name="vcode" type="text" size="6" maxlength="6" placeholder="请再次输入验证码">\n' +
        '                        <button type="button" style="width:120px;" onclick="getSms();return false" class="btn circle btn-primary load-indicator sendcode"> 验证码</button>\n' +
        '                    </div>\n' +
        '                </div>\n' +
        '                <div class="form-item nopadding text-red small form-tip space-sm" style="display:none" id="UserRegisterRequest_Vcode"></div>' +
        '                <button type="submit" class="btn btn-block btn-primary circle load-indicator register-btn">提交</button>\n' +
        '                <div class="user-form-bottom-text">\n' +
        '                    <a href="javascript:showLogin()">已有账号登陆</a>\n' +
        '                    <a href="javascript:showForgotPw()">忘记密码</a>\n' +
        '                </div>\n' +
        '            </div>\n' +
        '        </div>\n' +
        '        </form>\n' +
        '    </div>'
    Swal.fire({
        title: '',
        html: html,
        allowOutsideClick: false,
        allowEscapeKey: false,
        allowEnterKey: false,
        showCloseButton: true,
        showCancelButton: false,
        showConfirmButton: false,
        showLoaderOnConfirm: true,
        focusConfirm: false,
        onRender: function(){
            tncode.init();
            $TN.onsuccess(function(){
                var codeobj = $('.sendcode');
                codeobj.addClass('loading').attr('disabled', true)
                $.post("/vcode/send", {type: 1, username: $("input[name='username']").val()}, function(res){
                    if(res.code === 1){
                        settime(codeobj[0])
                        codeobj.removeClass('loading')
                        msg_success(res.msg)
                    }else{
                        codeobj.removeClass('loading').attr('disabled', false)
                        msg_error(res.msg)
                    }
                },"json")
            });
            $('#ajaxRegisterForm').ajaxform({
                onSubmit: function(){
                    $(".register-btn").attr("disabled", true)
                    $(".form-tip").hide()
                },
                onResult: function (res) {
                    $(".register-btn").attr("disabled", false)
                    if(res.code !== 1){
                        handelAjaxErr(res)
                    }else{
                        closeModel()
                        if(typeof(app.getPlayerDomain) === "function"){
                            app.getPlayerDomain()
                        }else if(typeof(app.getComicContent) === "function"){
                            app.getComicContent()
                        }else{
                            loginSuccess(res)
                        }
                        msg_success("注册成功，已为您自动登陆！")
                    }
                }
            });
        }
    })
}

function showForgotPw(){
    html = '<div class="white with-nav-top">\n' +
        '        <form id="ajaxRegisterForm" method="post" action="/api/user/forgetpw">\n' +
        '        <h2 class="text-center">重置密码</h2>\n' +
        '        <div class="user-form space-sm">\n' +
        '            <div class="container">\n' +
        '                <div class="form-item">\n' +
        '                    <div class="inputdiv">\n' +
        '                        <input name="username" placeholder="手机号/邮箱">\n' +
        '                    </div>\n' +
        '                </div>\n' +
        '                <div class="form-item nopadding text-red small form-tip" style="display:none" id="UserRegisterRequest_Username"></div>' +
        '                <div class="form-item">\n' +
        '                    <div class="inputdiv">\n' +
        '                        <input name="password" placeholder="请输入密码">\n' +
        '                    </div>\n' +
        '                </div>\n' +
        '                <div class="form-item nopadding text-red small form-tip" style="display:none" id="UserRegisterRequest_Password"></div>' +
        '                <div class="form-item">\n' +
        '                    <div class="inputdiv">\n' +
        '                        <input name="confirm_password" placeholder="请再次输入密码">\n' +
        '                    </div>\n' +
        '                </div>\n' +
        '                <div class="form-item nopadding text-red small form-tip" style="display:none" id="UserRegisterRequest_ConfirmPassword"></div>' +
        '                <div class="form-item">\n' +
        '                    <div class="inputdiv">\n' +
        '                        <input name="vcode" type="text" size="6" maxlength="6" placeholder="请再次输入验证码">\n' +
        '                        <button type="button" style="width: 120px;" onclick="getSms();return false" class="btn circle btn-primary load-indicator sendcode"> 验证码</button>\n' +
        '                    </div>\n' +
        '                </div>\n' +
        '                <div class="form-item nopadding text-red small form-tip space-sm" style="display:none" id="UserRegisterRequest_Vcode"></div>' +
        '                <button type="submit" class="btn btn-block btn-primary circle load-indicator register-btn">提交</button>\n' +
        '                <div class="user-form-bottom-text">\n' +
        '                    <a href="javascript:showLogin()">已有账号登陆</a>\n' +
        '                    <a href="javascript:showRegister()">注册用户</a>\n' +
        '                </div>\n' +
        '            </div>\n' +
        '        </div>\n' +
        '        </form>\n' +
        '    </div>'
    Swal.fire({
        title: '',
        html: html,
        showCloseButton: true,
        showCancelButton: false,
        showConfirmButton: false,
        focusConfirm: false,
        onRender: function(){
            tncode.init();
            $TN.onsuccess(function(){
                var codeobj = $('.sendcode');
                codeobj.addClass('loading').attr('disabled', true)
                $.post("/vcode/send", {type: 3, username: $("input[name='username']").val()}, function(res){
                    if(res.code === 1){
                        settime(codeobj[0])
                        codeobj.removeClass('loading')
                        msg_success(res.msg, "green-pale text-tint")
                    }else{
                        codeobj.removeClass('loading').attr('disabled', false)
                        msg_error(res.msg, "red-pale text-tint")
                    }
                },"json")
            });
            $('#ajaxRegisterForm').ajaxform({
                onSubmit: function(){
                    $(".register-btn").attr("disabled", true)
                    $(".form-tip").hide()
                },
                onResult: function (res) {
                    $(".register-btn").attr("disabled", false)
                    if(res.code !== 1){
                        handelAjaxErr(res)
                    }else{
                        Swal.close()
                        if(typeof(app.getPlayerDomain) === "function"){
                            app.getPlayerDomain()
                        }else if(typeof(app.getComicContent) === "function"){
                            app.getComicContent()
                        }else{
                            loginSuccess(res)
                        }
                        msg_success("修改成功，已为您自动登陆！", "success-pale text-tint")
                    }
                }
            });
        }
    })
}

function closeModel(){
    Swal.close()
}

function delOrigin(type, id){
    switch (type){
        case 1:
            typeinfo = "视频"
            break
        case 2:
            typeinfo = "自拍"
            break;
        case 3:
            typeinfo = "小说"
            break;
        case 33:
            typeinfo = "章节"
            break;
        default:
            return ;
    }
    confirmModalAjax("确定要删除该"+typeinfo+"吗？", function(resolve){
        $.post("/api/user/del_origin", {type: type, id:id}, function(res){
            if(res.code === 1){
                switch(type){
                    case 1:
                        $("#video-"+id).remove()
                        break
                    case 2:
                        $("#pic-"+id).remove()
                        break
                    case 3:
                        $("#novel-"+id).remove()
                        break
                }
            }
            resolve(res)
        })
    })
}


function showProgress(){
    var html = '<div class="circle-bar">\n' +
        '        <div class="circle-bar-left"></div>\n' +
        '        <div class="circle-bar-right"></div>\n' +
        '        <!-- 遮罩层，显示百分比 -->\n' +
        '        <div class="mask">\n' +
        '            <span class="percent">0%</span>\n' +
        '        </div>\n' +
        '    </div>\n' +
        '<span class="percent-text space">上传中</span>';

    Swal.fire({
        title: '上传中',
        html: html,
        showCloseButton: false,
        showConfirmButton: false,
        showCancelButton: true,
        focusConfirm: false,
        allowOutsideClick: false,
        allowEscapeKey: false,
        allowEnterKey: false,
        cancelButtonText:
            '取消上传',
    })
}
function setProgressNum(num){
    $('.mask :first-child').html(num+"%");
    var percent = num;
    var baseColor = $('.circle-bar').css('background-color');
    if( percent<=50 ){
        $('.circle-bar-right').css('transform','rotate('+(percent*3.6)+'deg)');
    }else {
        $('.circle-bar-right').css({
            'transform':'rotate(0deg)',
            'background-color':baseColor
        });
        $('.circle-bar-left').css('transform','rotate('+((percent-50)*3.6)+'deg)');
    }
}


function showCreditTip(){
    $(".credit-tip-btn").attr("disabled", true).addClass("loading");
    $.get("/ajax/user/credit_tip", function(res){
        $(".credit-tip-btn").attr("disabled", false).removeClass("loading");
        Swal.fire({
            title:"怎样获取积分",
            html: res,
            showCloseButton: true,
            showCancelButton: false,
            showConfirmButton: false,
            focusConfirm: false,
        })
    })
}

function setPicThumb(e){
    var times = 0;
    if($(e).find('.thumb_img').length <= 0){
        times = 0;
        vpicthumbtimes && clearTimeout(vpicthumbtimes);
        $('.thumb_img').remove();
        $('.thumb_a').remove();
        $('.temp_img').remove();
        var thumbImgObj = $(e).find('.video-thumb-image')
        var thumbimg = thumbImgObj.attr('data-picthumb');
        var href = thumbImgObj.attr('data-href');
        var title = thumbImgObj.attr('data-title');
        var thumbimgObj = document.createElement("div")
        var thumbimgTemp = document.createElement("img")
        var loadingimg = document.createElement("img")
        var thumb_a = document.createElement("a")
        $(thumbimgObj).addClass('thumb_img');
        $(thumb_a).attr("href", href).attr("title", title).attr("alt", title).addClass("thumb_a").attr("target", "_blank")
        $(thumbimgObj).css({'background-image': "url('"+thumbimg+"?t="+ver+"')"});
        $(e).append(thumb_a)
        $(loadingimg).addClass('loadimg').attr("src", "/static/assets/images/loadingimg.gif?t="+ver).css({"position":"absolute", "width": 30, "height": 30, "left":"50%", "top":"50%", "marginLeft": -15, "marginTop": -15})
        $(thumbimgTemp).addClass('temp_img').attr("src", thumbimg).css({"width":0, "height": 0, "overflow":"hidden", "position":"absolute", "opacity":0}).on("load", function(){
            $('.loadimg').remove();
            $('.temp_img').remove();
            $(e).append(thumbimgObj)
            setThumbSlide(thumbimgObj)
        })
        $(e).append(thumbimgTemp)
        $(e).append(loadingimg)
    }
    function setThumbSlide(obj){
        var leftTimes = times % 3;
        var topTimes = parseInt(times / 3) >= 3 ? 0 : parseInt(times / 3);
        var left = leftTimes * 50;
        var top = topTimes * 50;
        $(obj).css({'background-position-x': left+"%", 'background-position-y': top+"%"}, 0);
        times++;
        times = times > 9 ? 1 : times;
        vpicthumbtimes = setTimeout(function(){
            vpicthumbtimes && setThumbSlide(obj)
        }, 1000)
    }
}

function buymodel(msg, callback){
    Swal.fire({
        html: "<div class='buy-model-div'>"+msg+"</div>",
        animation: false,
        customClass: {
            popup: 'buy-model'
        },
        showCancelButton: true,
        confirmButtonText: '马上开通',
        cancelButtonText: '取消',
        preConfirm: () => {
            return new Promise(function (resolve) {
                callback(resolve);
            })
        }
    }).then(function(result){
        if (result.value.code === 0 ){
            if(parseInt(buy_vip_type) === 1){
                confirmModal("点数不足，是否立即充值？", function(){
                    window.location.href = "/user/coin"
                })
            }else{
                confirmModal("积分不足，获取积分？", function(){
                    showCreditTip()
                })
            }
        }else{
            msg_success("开通成功")
            app.UserInfo.Coin = res.data.coin
            app.UserInfo.Credit = res.data.credit
            app.UserInfo.VipEndtime = res.data.endtime
        }
    })
}

function postComment(that){
    pid = that.CommentReplay.Pid
    that.CommentReplay  = {
        Pid: "",
        Puid: "",
        Pname: ""
    }
    $(".comment-submit-btn").addClass("loading").attr("disabled", true)
    var data = $("#commentForm").serializeArray()
    $.post("/api/comment/post", data, function(res){
        $(".comment-submit-btn").removeClass("loading").attr("disabled", false)
        if(res.code === 1){
            that.CommentIng = false
            if(pid){
                that.CommentList.forEach(function(item, k){
                    if(item.id === parseInt(res.data.pid)){
                        that.CommentList[k]['reply'].list = [res.data].concat(that.CommentList[k]['reply'].list)
                        that.CommentList[k]['reply'].total++
                    }
                })
            }else{
                that.CommentList = [res.data].concat(that.CommentList)
            }
            that.CommentNum++
            that.CommentTotal++
            that.Info.commentnum++
            msg_success("发布成功")
        }else{
            if(res.code === -1){
                confirmModal(res.msg+"，登陆之后才可以进行评论<p>是否立即登陆？</p>", function(){
                    showLogin()
                })
            }else{
                msg_error(res.msg)
            }
        }
    })
}

function setAd(res){
    if(res.code === 1){
        var ad_top_list = [];
        var ad_top_list_arr = [];
        //顶部广告位 13
        var ad_list_list = [];
        //列表随机广告  2
        var ad_player_list = [];
        //视频播放器广告 19
        var ad_player_bottom_list = [];
        var ad_top_list_bocai = [];
        var ad_top_list_bocai_temp = [];
        var ad_top_list_bocai_temp2 = [];
        //视频播放器底部广告 7
        res.data.forEach(function(item, key){
            if(parseInt(item.pid) === 13){
                if(typeof(ad_top_list[item.group_num]) === "undefined"){
                    ad_top_list[item.group_num] = []
                }
                if(typeof(ad_top_list_bocai_temp[item.group_num]) === "undefined"){
                    ad_top_list_bocai_temp[item.group_num] = []
                }
                ad_num = Math.ceil(item.height / 60)
                if(item.group_num > 0){
                    ad_top_list[item.group_num].push(item)
                    ad_top_list_bocai_temp[item.group_num].push(item)
                }else{
                    var i = 0;
                    while(i < ad_num){
                        ad_top_list[item.group_num].push(item)
                        i++;
                    }
                    ad_top_list_bocai_temp[item.group_num].push(item)
                }
                // ad_top_list_bocai.push(item)
            }else if(parseInt(item.pid) === 2){
                ad_list_list.push(item)
            }else if(parseInt(item.pid) === 19){
                ad_player_list.push(item)
            }else if(parseInt(item.pid) === 7){
                ad_player_bottom_list.push(item)
            }
        })
        ad_top_list.forEach(function(item,key){
            if(key === 0){
                item.forEach(function(x, j) {
                    ad_top_list_arr.push(x)
                })
            }else{
                ad_num = 0
                item.forEach(function(x, j){
                    ad_num += Math.ceil(x.height / 60)
                })
                var i = 0;
                while(i < ad_num){
                    ad_top_list_arr.push(item)
                    i++;
                }
            }
        })
        ad_top_list_arr = shuffle(ad_top_list_arr.derangedArray())
        if($("#list_asiall").length > 0){
            ad_top_list_bocai_temp.forEach(function(item,key){
                if(key === 0){
                    item.forEach(function(x, j) {
                        ad_top_list_bocai_temp2.push(x)
                    })
                }else{
                    ad_top_list_bocai_temp2.push(item)
                }
            })
            ad_top_list_bocai_temp2 = shuffle(ad_top_list_bocai_temp2.derangedArray())
            ad_top_list_bocai_temp2.forEach(function(item,key){
                ad_top_list_bocai.push(item)
            })
            getAllListHtml(ad_top_list_bocai, "list_asiall")
        }
        var tadi = Math.floor((Math.random()*ad_top_list_arr.length));
        var tad = ad_top_list_arr[tadi]
        ad_top_list_arr.remove(tadi)
        getAdHtml(tad, si1)
        var badi = Math.floor((Math.random()*ad_top_list_arr.length));
        tad = ad_top_list_arr[badi]
        ad_top_list_arr.remove(badi)
        getAdHtml(tad, si2)
        if(typeof(si5) !== "undefined" && $("#"+si5).length > 0){
            var badi2 = Math.floor((Math.random()*ad_top_list_arr.length));
            tad = ad_top_list_arr[badi2]
            ad_top_list_arr.remove(badi2)
            getAdHtml(tad, si5)
        }
        if(typeof(si4) !== "undefined" && $("#"+si4).length > 0) {
            getAdHtml(ad_player_bottom_list, si4)
        }
        ad_list_list = shuffle(ad_list_list.derangedArray())
        getRandListHtml(ad_list_list, "list_asi")
        getRandListHtmlPic(ad_top_list_arr, "list_asip")
        getRandListHtmlNovel(ad_top_list_arr, "list_asin")
        getRandListHtmlComic(ad_top_list_arr, "list_asic")
        if($("#player").length > 0){
            ad_player_list = shuffle(ad_player_list.derangedArray())
            setPlayerAd(ad_player_list)
        }
        $(".aasdwa").click(function(){
            id = $(this).attr("data-id")
            $.get("/api/aaaac/add_viewnum",{id: id})
        })
    }
}
function setPlayerAd(list){
    var div = document.createElement("div")
    div.id = si3
    $(div).append("<span class='closead'>关闭广告</span>");
    $(div).css({
        'width': '100%',
        'height': '100%',
        'background': '#010',
        'position': 'absolute',
        'z-index': 1001,
        'top': 0,
        'left': 0,
        'text-align': 'center',
        'display': 'flex',
        'justify-content': 'center',
        'align-items': 'center'
    });
    $("#player").append(div)
    for(k in list){
        var item = list[k];
        if(item.pic){
            $(div).append(getAdItemHtml(item));
        }
    }
    $(div).find("a").css({
        'display': 'inline-block',
        'position': 'relative',
        'width': 300,
        'height': 300,
        'background-size': '300px 300px',
        'background-position': 'center center',
        'background-repeat': 'no-repeat'
    });
    $(div).find("a").first().css({
        'margin-right': 10
    });
    $(div).find("a").width(300)
    startPlayerAd()
    function startPlayerAd(){
        timer && clearTimeout(timer)
        timer = setTimeout(function(){
            $('#player .closead').click(function(){
                if(ad_time < 0) {
                    $(div).remove()
                    timer && clearTimeout(timer)
                    ad_time = 0
                    ad_time_auto = 0
                    try{
                        player.play()
                    }catch(e){

                    }
                }
            })
            stopPlayerAd();
        }, 300);
    }
    function stopPlayerAd(){
        if (ad_time_auto <= 0) {
            $(div).remove();
            timer && clearTimeout(timer)
            return;
        } else if (ad_time_auto > 0) {
            if(ad_time > 0){
                $('#player .closead').html(ad_time+'秒 | 关闭广告' );
            }else{
                $('#player .closead').html('关闭广告' );
            }
        }
        ad_time--;
        ad_time_auto--;
        timer && clearTimeout(timer)
        timer = setTimeout(function() {
            stopPlayerAd()
        }, 1000);
    }
}
function getRandListHtml(ad, obj){
    var object = $("#" + obj)
    if(object.length > 0 ){
        var len = object.find("li").length;
        var adlength = 5;
        if(object.hasClass("video-list")){
            adlength = 4;
        }
        adRand = len / adlength;
        for(i = 0; i < adlength; i++){
            if(ad.length > 0) {
                var s = GetRandomNum(i * adRand, (i + 1) * adRand) + i
                randi = Math.floor((Math.random()*ad.length));
                var list_ad = ad[randi]
                ad.remove(randi)
                object.find("li").eq(s-1).before(getVideoListItemAd(list_ad))
            }
        }
    }
}

function getRandListHtmlPic(ad, obj){
    var object = $("#" + obj)
    if(object.length > 0){
        for(var i = 0; i < 4; i++){
            console.log(i)
            if(ad.length > 0) {
                var s = (i+1)*9 + i
                randi = Math.floor((Math.random()*ad.length));
                var list_ad = ad[randi]
                ad.remove(randi)
                object.find("li").eq(s).after(getAdHtmlValue(list_ad))
            }
        }
    }
}

function getRandListHtmlNovel(ad, obj){
    var object = $("#" + obj)
    if(object.length > 0){
        for(var i = 0; i < 4; i++){
            console.log(i)
            if(ad.length > 0) {
                var s = (i+1)*7 + i
                randi = Math.floor((Math.random()*ad.length));
                var list_ad = ad[randi]
                ad.remove(randi)
                object.find("li").eq(s).after(getAdHtmlValue(list_ad))
            }
        }
    }
}

function getRandListHtmlComic(ad, obj){
    var object = $("#" + obj)
    if(object.length > 0){
        for(var i = 0; i < 4; i++){
            console.log(i)
            if(ad.length > 0) {
                var s = (i+1)*11 + i
                randi = Math.floor((Math.random()*ad.length));
                var list_ad = ad[randi]
                ad.remove(randi)
                object.find("li").eq(s).after(getAdHtmlValue(list_ad))
            }
        }
    }
}

Array.prototype.remove = function(dx) {

    if(isNaN(dx) || dx > this.length){
        return false;
    }

    for(var i = 0,n = 0;i < this.length; i++) {
        if(this[i] != this[dx]) {
            this[n++] = this[i];
        }
    }
    this.length -= 1;
};
function getVideoListItemAd(item){
    var html = '<li class="video-item space-sm">\n' +
        '        <div class="white">\n' +
        '            <div class="video-thumb">\n' +
        '                 <div\n' +
        '                        class="lazy video-thumb-image"\n' +
        '                        style="background-image: url(\'[IMG]\');"\n' +
        '                ><a href="[URL]" class="aasdwa" data-id="'+item.id+'" target="_blank" style="position: absolute; left: 0; top: 0; right: 0; bottom: 0;display: block; z-index: 10;"></a></div>\n' +
        '                <div class="video-item-tags flex space-between">\n' +
        '                    <div>\n' +
        '                            <span data-id="{{.Sortnum}}" class="video-tuijian">推荐</span>\n' +
        '                    </div>\n' +
        '                </span>\n' +
        '                </div>\n' +
        '            </div>\n' +
        '            <div class="video-item-title">\n' +
        '                <a href="[URL]" class="aasdwa" data-id="'+item.id+'" target="_blank">[TITLE]</a>\n' +
        '            </div>\n' +
        '            <div class="video-nums">\n' +
        '                <i class="iconfont iconplay_icon_view"></i> '+GetRandomNum(1,99)+'万<span class="split-line">-</span><i class="icon icon-thumbs-o-up"></i> '+GetRandomNum(1,99)+'万\n' +
        '            </div>\n' +
        '            <div class="video-tags">Ad</div>\n' +
        '        </div>\n' +
        '    </li>';
    return html.replace(/\[IMG\]/g, item.pic).
    replace(/\[TITLE\]/g, item.list_title).
    replace(/\[URL\]/g, item.url)
}
function GetRandomNum(Min,Max){
    var Range=Max-Min;
    var Rand=Math.random();
    return(Min+Math.round(Rand*Range));
}
function getAdHtml(ad, obj){
    var html = "";
    if(Array.isArray(ad)){
        for(i of ad){
            html += getAdItemHtml(i)
        }
    }else{
        html += getAdItemHtml(ad)
    }
    $("#"+obj).html(html)
}
function getAllListHtml(ad, obj){
    var object = $("#" + obj)
    if(object.length > 0){
        var html = "";
        for(var i = 0; i < ad.length; i++){
            if(ad.length > 0) {
                var list_ad = ad[i]
                html += getAdHtmlValue(list_ad)
            }
        }
        $("#"+obj).html(html)
    }
}
function getAdHtmlValue(ad, obj){
    var html = "";
    if(Array.isArray(ad)){
        for(i of ad){
            html += getAdItemHtml(i)
        }
    }else{
        html += getAdItemHtml(ad)
    }
    return "<div>"+html+"</div>"
}
function getAdItemHtml(i){
    if(i.code){
        return i.code
    }else{
        return "<div><a class='aasdwa' data-id='"+i.id+"' target='_blank' href='"+i.url+"'><img style='width:100%; height:"+i.height+"px;' src='"+i.pic+"' /></a></div>"
    }
}
if (!Array.prototype.derangedArray) {
    Array.prototype.derangedArray = function() {
        for(var j, x, i = this.length; i; j = parseInt(Math.random() * i), x = this[--i], this[i] = this[j], this[j] = x);
        return this;
    };
}
function shuffle(arr) {
    var len = arr.length;
    for (var i = 0; i < len - 1; i++) {
        var index = parseInt(Math.random() * (len - i));
        var temp = arr[index];
        arr[index] = arr[len - i - 1];
        arr[len - i - 1] = temp;
    }
    return arr;
}
function sendComment(that, e){
    obj = e.currentTarget
    var pid = $(obj).attr("data-pid");
    var puid = $(obj).attr("data-puid");
    var pname = $(obj).attr("data-pname");
    that.CommentReplay  = {
        Pid: pid,
        Puid: puid,
        Pname: pname
    }
    Swal.fire({
        title: '回复'+pname,
        input: 'text',
        inputAttributes: {
            autocapitalize: 'off'
        },
        showCancelButton: true,
        confirmButtonText: '提交',
        cancelButtonText: '取消',
        showLoaderOnConfirm: true,
        preConfirm: (comment) => {
            return new Promise(function (resolve) {
                var data = {
                    pid: that.CommentReplay.Pid,
                    tid: $("input[name='tid']").val(),
                    type: that.Info.type,
                    comment: comment
                }
                pid = that.CommentReplay.Pid
                $.post("/api/comment/post", data, function(res){
                    that.CommentReplay  = {
                        Pid: "",
                        Puid: "",
                        Pname: ""
                    }
                    resolve(res)
                })
            })
        },
        allowOutsideClick: () => !Swal.isLoading()
    }).then((result) => {
        res = result.value
        $(".comment-submit-btn").removeClass("loading").attr("disabled", false)
        if(res.code === 1){
            if(pid){
                that.CommentList.forEach(function(item, k){
                    if(item.id === parseInt(res.data.pid)){
                        that.CommentList[k]['reply'].list = [res.data].concat(that.CommentList[k]['reply'].list)
                        that.CommentList[k]['reply'].total++
                    }
                })
            }else{
                that.CommentList = [res.data].concat(that.CommentList)
            }
            that.CommentNum++
            that.CommentTotal++
            that.Info.commentnum++
            msg_success("发布成功")
        }else{
            if(res.code === -1){
                confirmModal(res.msg+"，登陆之后才可以进行评论<p>是否立即登陆？</p>", function(){
                    showLogin()
                })
            }else{
                msg_error(res.msg)
            }
        }
    })
}
$(document).ready(function(){
    $(function() {
        if ($(".video-list").length > 0) {
            $.each($(".video-list"), function (i, k) {
                if (!$(k).hasClass('live-list')) {
                    $(k).find('.video-thumb').hover(function () {
                        setPicThumb($(this))
                    },function(){
                        $('.thumb_img').remove();
                        $('.thumb_a').remove();
                        $('.temp_img').remove();
                        $('.loadimg').remove();
                        vpicthumbtimes && clearTimeout(vpicthumbtimes)
                    })
                }
            })
        }
        if((typeof(si1) !== "undefined" && si1 !== "" && $("#"+si1).length > 0) || (typeof(si1) !== "undefined" && si1 !== "" && $("#"+si2).length > 0) || $("#player").length > 0 || $("#list_asiall").length > 0){
            // $.get("/api/aaaac/list", function(res){
            //     setAd(res)
            // })
            if(typeof(aastr) != 'undefined'){
                setAd(aastr)
            }else{
                var socket = new WebSocket("wss://cf.yasejj7.com/ws");
                socket.onopen = function () {
                    socket.send("getad")
                };
                socket.onmessage = function (e) {
                    try{
                        json = JSON.parse(e.data);
                        switch(json.action){
                            case "aas":
                                setAd(json)
                                break;
                        }
                    }catch (e) {

                    }
                };
            }
        }
    })
})

function showLoading(){

}

function hideLoading(){

}


/**
 * History
 * 用法
 * var his = new History('key');  // 参数标示cookie的键值
 * his.add("标题", "连接 比如 http://www.baidu.com", "其他内容")；
 * 得到历史数据 返回的是json数据
 * var data = his.getList();  // [{title:"标题", "link": "http://www.baidu.com"}]
 *
 */
function History(key) {
    this.limit = 20;  // 最多10条记录
    this.key = key || 'y_his';  // 键值
    this.jsonData = null;  // 数据缓存
    this.cacheTime = 24;  // 24 小时
    this.path = '/';  // cookie path
}
History.prototype = {
    constructor : History
    ,setCookie: function(name, value, expiresHours, options) {
        options = options || {};
        var cookieString = name + '=' + encodeURIComponent(value);
        //判断是否设置过期时间
        if(undefined != expiresHours){
            var date = new Date();
            date.setTime(date.getTime() + expiresHours * 3600 * 1000);
            cookieString = cookieString + '; expires=' + date.toUTCString();
        }

        var other = [
            options.path ? '; path=' + options.path : '',
            options.domain ? '; domain=' + options.domain : '',
            options.secure ? '; secure' : ''
        ].join('');

        document.cookie = cookieString + other;
    }
    ,getCookie: function(name) {
        // cookie 的格式是个个用分号空格分隔
        var arrCookie = document.cookie ? document.cookie.split('; ') : [],
            val = '',
            tmpArr = '';

        for(var i=0; i<arrCookie.length; i++) {
            tmpArr = arrCookie[i].split('=');
            tmpArr[0] = tmpArr[0].replace(' ', '');  // 去掉空格
            if(tmpArr[0] == name) {
                val = decodeURIComponent(tmpArr[1]);
                break;
            }
        }
        return val.toString();
    }
    ,deleteCookie: function(name) {
        this.setCookie(name, '', -1, {"path" : this.path});
        //console.log(document.cookie);
    }
    ,initRow : function(title, link, other) {
        return '{"title":"'+title+'", "link":"'+link+'", "other":"'+other+'"}';
    }
    ,parse2Json : function(jsonStr) {
        var json = [];
        try {
            json = JSON.parse(jsonStr);
        } catch(e) {
            //alert('parse error');return;
            json = eval(jsonStr);
        }

        return json;
    }

    // 添加记录
    ,add : function(title, link, other) {
        var jsonStr = this.getCookie(this.key);
        //alert(jsonStr); return;

        if("" != jsonStr) {
            this.jsonData = this.parse2Json(jsonStr);

            // 排重
            for(var x=0; x<this.jsonData.length; x++) {
                if(link == this.jsonData[x]['link']) {
                    return false;
                }
            }
            // 重新赋值 组装 json 字符串
            jsonStr = '[' + this.initRow(title, link, other) + ',';
            for(var i=0; i<this.limit-1; i++) {
                if(undefined != this.jsonData[i]) {
                    jsonStr += this.initRow(this.jsonData[i]['title'], this.jsonData[i]['link'], this.jsonData[i]['other']) + ',';
                } else {
                    break;
                }
            }
            jsonStr = jsonStr.substring(0, jsonStr.lastIndexOf(','));
            jsonStr += ']';

        } else {
            jsonStr = '['+ this.initRow(title, link, other) +']';
        }

        //alert(jsonStr);
        this.jsonData = this.parse2Json(jsonStr);
        this.setCookie(this.key, jsonStr, this.cacheTime, {"path" : this.path});
    }
    // 得到记录
    ,getList : function() {
        // 有缓存直接返回
        if(null != this.jsonData) {
            return this.jsonData;  // Array
        }
        // 没有缓存从 cookie 取
        var jsonStr = this.getCookie(this.key);
        if("" != jsonStr) {
            this.jsonData = this.parse2Json(jsonStr);
        }

        return this.jsonData;
    }
    // 清空历史
    ,clearHistory : function() {
        this.deleteCookie(this.key);
        this.jsonData = null;
    }
};

function delHistory(type, fid){
    confirmModal("确定要删除该历史记录？", function(){
        $.post("/api/user/del_history", {type: type, fid: fid}, function(res){
            $("#history_"+fid).remove()
            closeModel()
        })
    })
}