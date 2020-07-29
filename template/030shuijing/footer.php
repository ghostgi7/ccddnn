
<style>
    .bottom {
        margin-top: 20px;
        background-color: rgba(0, 0, 0, 0.3);
        padding: 10px 0;
    }

    .bottom .wrap p {
        color: #ccc;
        text-align: center;
        padding: 4px 0;
    }

    .return_top {
        display: none;
        z-index: 200;
        position: fixed;
        bottom: 200px;
        right: 5px;
        z-index: 2147483647;
    }

    .return_top i {
        border-radius: 50%;
        background-color: #1e9fff;
        font-size: 40px;
        color: #efefef;
        font-weight: bold;
    }

    @media screen and (max-device-width: 760px) {
        .bottom {
            margin-top: 0 !important;
        }

        .return_top i {
            font-size: 2.5rem;
        }
    }
</style>
<div class="bottom">
    <div class="wrap">
        <p>广告联系：{cms_email}</p>

        <p>【警告】本網站在海外離岸群島國建設和維護，已依網站內容分級規定處理。本站提供荿人在線影音服務，進入參觀之前，請先確定您已年滿法律許可之法定年齡。<br>如果您是未滿18歲者或對荿人凊脃反感，建議您勿參訪本站！嚴厲禁止任何中國籍人士訪問，請速離開，否則本站不負任何法律責任！
        </p>


        <p>Copyright @ 2020 {cms_title}</p>


        <div style="display:none">
            {cms_tj}
        </div>
        <p></p>

    </div>
</div>
<div class="return_top" style="display: block;"><i class="layui-icon layui-icon-top"></i></div>

<script src="{cms_template}/layui/layui.all.js" charset="utf-8"></script>

<!--[if lt IE 9]>
<script src="https://cdn.staticfile.org/html5shiv/r29/html5.min.js"></script>
<script src="https://cdn.staticfile.org/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
<script>

    var basePath = "";
    var jsPath = "/static/js";
    var cssPath = "/static/css";
    var imgPath = "/static/images";
    var layer;
    var element;
    var form;
    var rate;
    if (self != top) {
        top.location.href = location.href;
    }
    (function () {
        layui.use(['element','layer','form','rate','jquery'], function () {
            element = layui.element;
            layer = layui.layer;
            form = layui.form;
            rate = layui.form;
            $ = layui.jquery;
        });
        //图片懒加载
        $('img[data-src]').each(function () {
            addMark(this, 'layui-icon-loading layui-anim-rotate layui-anim-loop', 'load');
            var img = new Image();
            img.src = $(this).attr('data-src');
            var that = this;
            img.onload = function () {
                $(that).attr('src', img.src);
                removeMark(that, 'load');
            };
            $(this).parent().hover(function () {
                addMark(that, 'layui-icon-play', 'play');
            }, function () {
                removeMark(that, 'play');
            });
        });

        $(window).scroll(function () {
            var scroTop = $(window).scrollTop();
            if (scroTop > 500) {
                $('.return_top').fadeIn(500);
            } else {
                $('.return_top').fadeOut(500);
            }
        });
        $('.return_top').click(function () {
            //将当前窗口的内容区滚动高度改为0，即顶部
            $("html,body").animate({scrollTop: 0}, "fast");
        });

    })();

    function addMark(target, icon, mark) {
        var left = $(target).parent().css('padding-left');
        var width = $(target).css('width');
        var iconTop = $(target).attr('mark-top');
        var height = $(target).attr('h') ? $(target).attr('h') : $(target).css('height');
        var br = $(target).css('border-radius');
        $(target).attr('h', height);
        if (!iconTop) {
            var iconTop = (parseInt(height) - 50) / 2 + "px";
        }
        $(target).parent().append("<div style='position: absolute; top:0px;left:" + left + "; width: " + width + "; height:" + height + ";border-radius:" + br + ";"
            + "z-index: 98; text-align: center;opacity: 0.9;color: #fff;background: rgba(172, 148, 85, 0.4);' " + mark + ">"
            + "<i class='" + icon + " layui-icon layui-anim' style='font-size: 50px; color: orange;margin-top:" + iconTop + ";'></i></div>");
    }

    function removeMark(target, mark) {
        $(target).parent().find('div[' + mark + ']').remove();
    }

    function randomColor(s) {
        return '#' +
            (function (color) {
                return (color += s[Math.floor(Math.random() * s.length)]) &&
                (color.length == 6) ? color : arguments.callee(color);
            })('');
    }

    function hexToRgba(hex, a) {
        var rgb = [];
        hex.replace(/[0-9A-F]{2}/ig, function (kw) {
            rgb.push(eval('0x' + kw)); //十六进制转化为十进制并存如数组
        });
        return 'rgba(' + rgb.join(',') + ',' + a + ')'; //输出RGB格式颜色
    }

</script>

<script src="{cms_template}/js/base.js"></script>
<script>
    $(function () {
        layui.use('carousel', function () {
            var carousel = layui.carousel;
            carousel.render({
                elem: '#slide'
                , width: '100%'
                , interval: 3000
                , height: isPC() ? ($('#top-novel').css('height')) : "200px"
                , arrow: 'always'
            });
        });
        var showCats = false;
        $('#menuBtn').click(function () {
            if (showCats) {
                $('#cats').hide();
                $('#menuBtn').find('i').addClass('layui-icon-spread-right');
                $('#menuBtn').find('i').removeClass('layui-icon-spread-left');
                showCats = !showCats;
            } else {
                $('#cats').show();
                $('#menuBtn').find('i').removeClass('layui-icon-spread-right');
                $('#menuBtn').find('i').addClass('layui-icon-spread-left');
                showCats = !showCats;
            }
        });
        $('.group-box').each(function () {
            $(this).css('background', hexToRgba(randomColor('abcde'), 0.4));
        });
        if ($('.header-title').find('img').length == 0 && isPC()) {
            $('header').css('padding-top', '10px');
            $('header').css('padding-bottom', '15px');
        }
        var searchHeight = parseInt($('.search-wrap').css('height'));
        var headerHeight = parseInt($('header').css('height'));
        $('.search-wrap').css('margin-top', (headerHeight - searchHeight) / 2 + "px");
        $('.search-wrap').show();
    });
</script>