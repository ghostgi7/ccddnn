<div class="footer">
        <div class="container">
			{cms_notice}  
            <div class="footer-navs">
                <ul>
                    <li>联系邮箱:{cms_email}</a></li>
                </ul>
            </div>
            <div class="footer-copyright">
                © 2017-2019 <a href="#">{cms_domain1}</a> 全新的世界 中文成人第一门户
            </div>
        </div>
    </div>
    <script src="{cms_template}/static/js/vue-20200514.js"></script>
    <script src="{cms_template}/static/js/jquery-20200514.js"></script>
    <script src="{cms_template}/static/js/jquery.cookie-20200514.js"></script>
    <script src="{cms_template}/static/js/zui-20200514.js"></script>
    <script src="{cms_template}/static/js/vcode-20200514.js"></script>
    <script src="{cms_template}/static/js/sweetalert-20200514.js"></script>
    <script src="{cms_template}/static/js/jquery.lazyload.min-20200514.js"></script>
    <script src="{cms_template}/static/js/extend-20200514.js"></script>
    <script>
        var si1 = "WdOPOyZJLw";
        var si2 = "NOmJaJsNXS";
        $(function () {
            $("div.lazy").lazyload({
                threshold: 280
            });
            $("img.lazy").lazyload({
                threshold: 280
            });
            setTimeout(function () {
                $(window).trigger("resize");
            }, 50);
        });
    </script>
    <div style="display: none">
        
        <script async="" src="{cms_template}/static/js/js-UA-156006727-1.js"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'UA-156006727-1');
        </script>
    </div>

<script>
    function gocategory(obj){
        if(obj === "body"){
            $("html,body").animate({scrollTop: 0}, 500);
        }else{
            $("html,body").animate({scrollTop: $("#"+obj).offset().top - 128}, 500);
        }
    }
</script>