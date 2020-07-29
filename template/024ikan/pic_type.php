<!DOCTYPE html>
<html>
<head><title>{type_name} - {cms_title}</title>
    <meta name="keywords"
          content="{type_name},{cms_keywords}"/>
    <meta name="description"
          content="{type_name},{cms_description}"/>
    {include file="include.php"}
</head>
<body>
<div class="hot_banner">

    {include file="header.php"}

</div>
<div class="container">
    <div class="row">{cms_banner_a}</div>
    <div class="pannel clearfix">
        <div class="type_list_menu">
            <ul class="clearfix">
                <li class="type_all"><a href="/"><i class="iconfont pianku_i"></i>&nbsp;图片分类</a></li>
                {pic_menu}
                <li ><a href="{menu_link}">{menu_name}</a></li>
                {/pic_menu}
            </ul>
        </div>
    </div>
    <div class="art_list_row">
        <div class="pannel">
            <div class="art_banner swiper-container-horizontal">
                <ul class="swiper-wrapper clearfix" style="transform: translate3d(-1770px, 0px, 0px); transition-duration: 0ms;">
                    {rand_list:pic,5}
                    <li class="artbanner_item swiper-slide">
                        <div class="artbanner_img">
                            <a class="artbanner_thumb swiper-lazy" href="{list_view}" title="{list_name}" data-background="{list_pic}">
                                <span class="artbanner_title">{list_name}</span>
                            </a>
                        </div>
                    </li>
                    {/rand_list}
                </ul>
                <div class="swiper-pagination"></div>
                <div class="banner-arrow">
                    <a class="swiper-button-prev" href="javascript:;"><i class="iconfont"></i></a>
                    <a class="swiper-button-next" href="javascript:;"><i class="iconfont"></i></a>
                </div>
            </div>
        </div>

        <div class="pannel">
            <div class="pannel_head clearfix">
                <h2 class="title">{type_name}</h2>
            </div>
            <ul class="artlist clearfix">
                {pic_list:12}
                <li class="artlist_item">
                    <div class="artlist_txt">
                        <h4 class="artlist_title"><a href="{list_view}" title="{list_name}">{list_name}</a></h4>
                        <p class="artzy hidden_xs">{list_name}</p>
                        <p class="artty"><span class="name_text5 pic_text text_right">{type_name}</span><span>{list_time}</span><span class="artyd">{list_hit}阅读</span></p>
                    </div>
                    <div class="artlist_img">
                        <a class="artlist_thumb lazyload" href="{list_view}" title="{list_name}" data-original="{list_pic}" >
                            <span class="look hidden_xs"></span>
                        </a>
                    </div>
                </li>
                {/pic_list}

            </ul>
            <ul class="page text_center cleafix">
                <li ><a href="{cms_page:first}">首页</a></li>
                <li><a href="{cms_page:prev}">上一页</a></li>
                <li class="hidden_xs active"><a href="javascript:;">{cms_page:current}/{cms_page:count}</a></li>
                <li><a href="{cms_page:next}">下一页</a></li>
                <li ><a href="{cms_page:last}">尾页</a></li>
            </ul>
            <!-- 翻页-->
            <div class="page_tips hidden_mb">当前<span>第{cms_page:current}页</span>&nbsp;/&nbsp;共有{cms_page:count}页</div>
        </div>
    </div>

    <div class="art_sider_row hidden_xs hidden_mi">
        <div class="pannel clearfix">
            <div class="pannel_head clearfix">
                <h3 class="title">
                    热播电影
                </h3>
            </div>
            <ul class="ranklist_r clearfix">
                {rand_list:vod,10}
                <li class="part_eone">
                    <a href="{list_detail}">
                        <span class="part_nums part_num1">{$x+1}</span>{list_name}</a>
                </li>
                {/rand_list}
            </ul>
        </div>
        <div class="pannel clearfix">
            <div class="pannel_head clearfix">
                <h3 class="title">
                    推荐阅读
                </h3>
            </div>
            <ul class="art_relates clearfix">
                {rand_list:pic,10}
                <li>
                    <a href="{list_view}" title="{list_name}">
                        <div class="artlr_tit"><p class="artlr_b">{list_name}</p><p class="artlr_name">{list_time}</p></div>
                        <div class="artlr_pic lazyload" data-original="{list_pic}" ><span class="look hidden_xs"></span></div>
                    </a>
                </li>
                {/rand_list}
            </ul>
        </div>
    </div>
</div>
{include file="footer.php"}
</body>
</html>