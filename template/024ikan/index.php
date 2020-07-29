<!DOCTYPE html>
<html>
<head><title>{cms_title}</title>
    <meta name="keywords"
          content="{cms_keywords}"/>
    <meta name="description"
          content="{cms_description}"/>
    {include file="include.php"}
</head>
<body>
<div class="hot_banner">
    <div class="bgi_box"><span id="bgimage" class="bgi"></span><span class="bgfd"></span></div>
    {include file="header.php"}

    <div class="hot_list">
        <div class="hot_banner_box">
            <div class="banner-top">
                <ul class="swiper-wrapper vodlist clearfix">
                    {new_list:vod,10}
                        <li class="balist_item swiper-slide"><a class="balist_thumb swiper-lazy" href="{list_detail}"
                                                            title="{list_name}"
                                                            data-background="{list_pic}"><span
                                    class="play hidden_xs"></span>
                            <div class="balist_titbox pic_text"><p class="vodlist_title">{list_name}</p>
                                <p class="vodlist_sub">{list_time}</p></div>
                            <span class="balist_bg"></span></a></li>
                    {/new_list}
                </ul>
            </div>
            <div class="banner-arrow"><a class="swiper-button-prev" href="javascript:;"><i class="iconfont">&#xe625;</i></a><a
                        class="swiper-button-next" href="javascript:;"><i class="iconfont">&#xe623;</i></a></div>
        </div>
    </div>
</div>
<div class="container">

    <div class="row">
        <div class="pannel">
            <ul class="hom_cms_list vodlist_wi">
                <li class="notice">
                    <div class="smlist_box">
                        <marquee scrollamount="4" behavior="scroll" onmouseover=this.stop() onmouseout=this.start()>
                            {cms_notice}
                        </marquee>
                        <i class="iconfont nico">&#xe62d;</i></div>
                </li>
                <li class="hidden_xs">
                    <div class="smlist_box list_m"><a class="text_muted" href="{:U('vod','type',$cms_menu['vod'][0]['id'],1)}" title="电影">电影</a>
                        {hd_menu}
                        <a href="{menu_link}" title="{menu_name}">{menu_name}</a>
                        {/hd_menu}

                    </div>
                </li>
                <li class="hidden_xs">
                    <div class="smlist_box list_m"><a class="text_muted" href="{:U('pic','type',$cms_menu['pic'][0]['id'],1)}" title="美图">美图</a>
                        {pic_menu}
                        <a href="{menu_link}" title="{menu_name}">{menu_name}</a>
                        {/pic_menu}
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <div class="row">{cms_banner_a}</div>
    <div class="vod_row">
        <div class="pannel">
            <div class="pannel_head clearfix">
                <h2 class="title"><i class="iconfont">&#xe631;</i>热播推荐</h2></div>
            <ul class="vodlist vodlist_wi clearfix">
                {rand_list:vod,12}
                    <li class="vodlist_item"><a class="vodlist_thumb lazyload" href="{list_detail}" title="{list_name}" data-original="{list_pic}" ><span class="play hidden_xs"></span><span class="pic_text text_right">HD</span></a>
                        <div class="vodlist_titbox"><p class="vodlist_title"><a href="{list_detail}" title="{list_name}">{list_name}</a>
                            </p>
                    </li>
                {/rand_list}
            </ul>
        </div>
    </div>
    <div class="vod_row">
        {video_hot}
        <div class="pannel">
            <div class="pannel_head clearfix"><a class="text_muted pull_right" href="{type_more}">更多<i
                            class="iconfont more_i">&#xe623;</i></a>
                <h2 class="title"><i class="iconfont">&#xe64a;</i>{type_name}</h2></div>
            <ul class="vodlist vodlist_wi vodlist_id1 list_v2 clearfix">
                {video_list:6}
                <li class="vodlist_item"><a class="vodlist_thumb lazyload" href="{list_detail}" title="{list_name}" data-original="{list_pic}" ><span class="play hidden_xs"></span><span class="pic_text text_right">HD</span></a>
                    <div class="vodlist_titbox"><p class="vodlist_title"><a href="{list_detail}" title="{list_name}">{list_name}</a>
                        </p>
                </li>
                {/video_list}
            </ul>
        </div>
        {/video_hot}
    </div>
</div>
{if $cms_config['live_status'] == '1'}
<div class="bg_light">
    <div class="container">
        <div class="row">
            <div class="pannel">
                <div class="pannel_head clearfix">
                    <h2 class="title"><i class="iconfont">&#xe630;</i>精选直播</h2></div>
                <ul class="arthom_list list_v2 clearfix">
                    {live_hot_list:8}
                    <li class="arthom_item"><a class="artlist_thumb lazyload"
                                               href="{list_view}"
                                               title="{list_name}"
                                               data-original="{list_pic}"><span
                                    class="look hidden_xs">{type_name}</span></a>
                        <div class="arthom_title"><a
                                    href="{list_view}"
                                    title="{list_name}">{list_name}</a></div>
                    </li>
                    {/live_hot_list}
                </ul>
            </div>
        </div>
    </div>
</div>
{/if}
<div class="container">

    <div class="link_row">
        <div class="pannel clearfix">
            <div class="pannel_head clearfix"><h3 class="title">友情链接</h3></div>
            <ul class="link_text list_scroll clearfix">
                {cms_link}
            </ul>
        </div>
    </div>
</div>
{include file="footer.php"}
</body>
</html>