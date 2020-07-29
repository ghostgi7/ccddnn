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
                <li class="type_all"><a href="/"><i class="iconfont pianku_i"></i>&nbsp;小说分类</a></li>
                {book_menu}
                <li ><a href="{menu_link}">{menu_name}</a></li>
                {/book_menu}
            </ul>
        </div>
    </div>
    <div class="pannel clearfix">

        <div class="list_info">
            <div class="pannel_head clearfix">
                <h3 class="title">{type_name}</h3>
            </div>
            <ul class="part_rows">
                {book_list:24}
                <li class="part_eone">
                    <a href="{list_view}">
                        <span class="text_muted pull_right renqi">&nbsp;{list_time}</span>
                        {list_name}</a>
                </li>
                {/book_list}
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
</div>
{include file="footer.php"}
</body>
</html>