<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <title>{cmsobj_name}正在直播 - {cms_title}</title>
    <meta name="keywords" content="{cmsobj_name}正在直播,{cms_keywords}">
    <meta name="description" content="{cmsobj_name}正在直播,{cms_description}">
    {include file="include.php"}
</head>
<body>

{include file="header.php"}
<div class="container">
    <div class="row">
        <div class="clearfix p-0 m-0">
            <div class="col-md-9 col-sm-12 col-xs-12 player_left max">
                <div class="player_title">
                    <div class="play_nav hidden-xs"><a href="/">首页</a><i class="icon iconfont"></i><a
                                href="{cmsobj_typemore}" title="{cmsobj_typename}" target="_blank">{cmsobj_typename}</a><i
                                class="icon iconfont"></i></div>
                    <h1>{cmsobj_name}正在直播</h1>
                </div>
                <div id="zanpiancms_player">
                    <div class="embed-responsive embed-responsive-16by9" id="video"
                         style="background-color: rgb(0, 0, 0); overflow: hidden; position: relative;">
                        <div class="ckplayerchifuoyhdcxihxuqbg"
                             style="background-color: rgb(0, 0, 0); position: absolute;left: 0;right: 0;top: 0;bottom: 0">
                                {cmsobj_content}

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="box-main-content" style="position:static">


            <div class="layout-box clearfix">
                <div class="box-title">
                    <h3 class="m-0">猜你喜欢</h3>
                </div>
                <div class="swiper-container vod-swiper-5 swiper-container-horizontal">
                    <ul class="swiper-wrapper">
                        {live_list:10}
                        <li class="swiper-slide"> <a class="video-pic swiper-lazy" href="{list_view}" title="{list_name}" data-background="{list_pic}"><span class="note text-bg-c"></span>
                                <div class="swiper-lazy-preloader"></div>
                            </a>
                            <div class="title">
                                <h5 class="text-overflow"><a href="{list_view}" title="{list_name}">{list_name}</a></h5>
                            </div>
                            <div class="subtitle text-muted text-overflow hidden-xs"></div>
                        </li>
                        {/live_list}
                    </ul>
                    <div class="swiper-button-next hidden-xs"><i class="icon iconfont icon-right"></i></div>
                    <div class="swiper-button-prev hidden-xs"><i class="icon iconfont icon-left"></i></div>
                </div>
            </div>
        </div>
    </div>
</div>
<style>
    #J_prismPlayer.prism-player{
        height: 100% !important;
    }
    video{
        height: 100% !important;
    }
</style>
<script>
    var swiper = new Swiper('.vod-swiper-5', {
        lazyLoading: true,
        slidesPerView: 5,
        spaceBetween: 0,
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev',
        breakpoints: {
            1200: {
                slidesPerView: 4,
                spaceBetween: 0
            },
            767: {
                slidesPerView: 3,
                spaceBetween: 0
            }
        }
    });
</script>
{include file="footer.php"}
</body>
</html>