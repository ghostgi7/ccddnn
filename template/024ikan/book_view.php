<!DOCTYPE html>
<html>
<head><title>{cmsobj_name}在线阅读 - {cms_title}</title>
    <meta name="keywords"
          content="{cmsobj_name}在线阅读,{cms_keywords}"/>
    <meta name="description"
          content="{cmsobj_name}在线阅读,{cms_description}"/>
    {include file="include.php"}
</head>
<body>
<div class="hot_banner">

    {include file="header.php"}

</div>
<div class="container">
    <div class="row">{cms_banner_a}</div>
    <div class="art_list_row">
        <div class="pannel article_box">
            <header class="article_header">
                <h1 class="article_title">{cmsobj_name}</h1>
                <div class="article_meta">
                    <span class="item">{cms_title}</span>
                    <span class="item">{cmsobj_time}</span>
                    <span class="item hidden_xs">{cmsobj_typename}</span>
                    <span class="item hidden_xs">阅读 {cmsobj_hit}</span>
                </div>
            </header>
            <article class="article_content">
                <div>
                    <!-- 政务处理 -->
                    {cmsobj_content}
                </div>
            </article>
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
                        <div class="artlr_tit"><p class="artlr_b">{list_name}</p>
                            <p class="artlr_name">{list_time}</p></div>
                        <div class="artlr_pic lazyload" data-original="{list_pic}"><span class="look hidden_xs"></span>
                        </div>
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