<div class="container">
    <div class="row">
        <div class="stui-header__menu clearfix" style="text-align:left;padding: 20px 30px;">
            <p style="line-height: 24px;margin-bottom: 0px;">警告：本网站明确包含成人内容。<br>
                        本网站严禁发表任何类型的儿童色情、兽交、强奸暴力，死亡或者其它不合法的内容。<br>
                        只有您年满18岁或者您在您的居住管辖区内属于成年人，您才能进入到本网站。<br>如果你不符合这些要求或者所在的地区法律不允许成人内容，那么你就没有权限使用本网站，请离开！<br>
                        本站只提供WEB页面服务，不提供影片录制和储存服务<br>
                        联系邮箱：{cms_email}
            </p> 
        </div>
    </div>
</div>

<div class="stui-foot clearfix">
    <p>
        <a href="/">返回首页</a><span class="split-line"></span>
        <a href="javascript:scroll(0, 0)">返回顶部</a>
    </p>
</div>
<script src="{cms_template}/assets/js/jquery-3.3.1.min.js"></script>
<script src="{cms_template}/assets/js/jquery.lazyload.min.js"></script>
<script src="{cms_template}/layui/layui.all.js"></script>

<script type="text/javascript">
    $(".nav li").click(function(){
        if($(this).hasClass("nav-parent")){
            var liThis = $(".nav .nav-parent").index($(this));
            console.log(liThis);
            $(this).addClass('active').siblings().removeClass('active')
            var navChildThis = $(".nav-child-box .nav-child").eq(liThis);
            $(".nav-child-box .nav-child").css({'opacity':'0','height':'0','padding':'0'});
            navChildThis.css({'opacity':'1','height':'34px'});
            $(".v-type").addClass("v-type-down");
        }
        else{
            $(".nav-child-box .nav-child").css({'opacity':'0','height':'0','padding':'0'});
            $(".v-type").removeClass("v-type-down");

        };
    });

    // 图片懒加载    
    $(".lazyload").lazyload({
        effect: "fadeIn",
        threshold: 200,
        failurelimit: 15,
        skip_invisible: false
    });
</script>
{cms_tj}