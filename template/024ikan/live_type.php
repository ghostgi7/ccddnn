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
                <li class="type_all"><a href="/"><i class="iconfont pianku_i"></i>&nbsp;直播频道</a></li>
                {live_menu}
                <li ><a href="{menu_link}">{menu_name}</a></li>
                {/live_menu}
            </ul>
        </div>
    </div>
    <div class="pannel clearfix">
        <div class="pannel_head clearfix">
            <h2 class="title">{type_name}</h2>
        </div>
        <!-- 列表 -->
        <ul class="vodlist vodlist_wi clearfix">

            {live_list:24}
            <li class="vodlist_item">
                <a class="vodlist_thumb lazyload" href="{list_view}" title="{list_name}" data-original="{list_pic}" >
                    <span class="play hidden_xs"></span>
                    <span class="pic_text text_right">{list_time}</span>
                </a>
                <div class="vodlist_titbox">
                    <p class="vodlist_title"><a href="{list_view}" title="{list_name}">{list_name}</a></p>
                    <p class="vodlist_sub"></p>
                </div>
            </li>
            {/live_list}

        </ul>
        <!-- end 列表 -->

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
{include file="footer.php"}
</body>
</html>