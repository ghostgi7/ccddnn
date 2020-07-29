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
    <script src="{cms_template}/static/js/vue-20200515.js"></script>
    <script src="{cms_template}/static/js/jquery-3.2.1.min-20200515.js"></script>
    <script src="{cms_template}/static/js/extend-20200515.js"></script>
    <script src="{cms_template}/static/js/jquery.cookie-20200515.js"></script>
    <script src="{cms_template}/static/js/jquery.lazyload.min-20200515.js"></script>
    <script src="{cms_template}/static/js/vcode-20200515.js"></script>
    <script>
        var si1 = "ojDoHGqiYa";
        var si2 = "iduCbDGvex";
        $("div.lazy").lazyload({
            threshold: 580
        });
        $("img.lazy").lazyload({
            threshold: 580
        });
        $(function(){
            $("div.lazy").lazyload({
                threshold: 580
            });
            $("img.lazy").lazyload({
                threshold: 580
            });
        })
        function getUserInfo(that){
            if($.cookie("v")){
                $.post("/api/user/get_userinfo", {
                    token: $.cookie("v")
                }, function(res){
                    if(that.UserInfo.Id !== res.Id){
                        res.HistoryList = []
                        that.UserInfo = res;
                        that.getUserHistory();
                    }
                })
            }else{
                that.UserInfo = {
                    Id: 0,
                    Name: "",
                    Avatar: "https:\/\/ww6.hyblhc.com\/assets/images/avatar1@2x.png",
                    Coin: 0,
                    Credit: 0,
                    Messagenum: 0,
                    Messagenum_Unread: 0,
                    IsVip: 0,
                    VipEndtime: "",
                    HistoryList: [],
                    Qiandao_Max: 0,
                    Qiandao_Lianxu: 0,
                    QiandaoToday: false
                }
            }
        }
        function formatSeconds(value) {

            var theTime = parseInt(value);
            var middle= 0;
            var hour= 0;

            if(theTime > 60) {
                middle= parseInt(theTime/60);
                theTime = parseInt(theTime%60);
                if(middle> 60) {
                    hour= parseInt(middle/60);
                    middle= parseInt(middle%60);
                }
            }
            var result = ""+parseInt(theTime);
            if(middle > 0) {
                result = ""+parseInt(middle)+":"+result;
            }
            if(hour> 0) {
                result = ""+parseInt(hour)+":"+result;
            }
            return result;
        }
    </script>
    <script src="{cms_template}/static/js/yase.min-20200515.js"></script>
    <div style="display: none">
        
        <script async="" src="{cms_template}/static/js/js-UA-156006727-1.js"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'UA-156006727-1');
        </script>
    </div>
    <script src="{cms_template}/static/js/hammer.min.js"></script>
    <script src="{cms_template}/static/js/jquery.hammer.js"></script>
    <script src="{cms_template}/static/js/swiper.min.js"></script>