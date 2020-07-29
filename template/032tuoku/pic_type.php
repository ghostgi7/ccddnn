<html style="font-size: 53.3333px;">
<head>
    <title>
        {type_name} - 图片区 - {cms_title}</title>
    <meta name="keywords" content="{type_name},{cms_keywords}"/>
    <meta name="description" content="{type_name}在线观看,{cms_description}"/>
    {include file="include.php"}
</head>
<body>
<div id="picture" class="page">
    {include file="searchbar.php"}
    <div class="has-sub-header page-content">
        {include file="header.php"}
        <div class="page-content">
            <div class="container banner"><!----></div>
            <div id="notice" class="container notice"><!----><!----></div>
            <div class="container">
                <div class="category-wrap">

                    <div class="category-list">
                        {pic_menu}
                        <span class="category-item"><a href="{menu_link}">{menu_name}</a></span>
                        {/pic_menu}

                    </div>
                </div>
            </div>
            <div class="container first">
                <div class="main-title recommend-title"><a class="main-title-name">{type_name}</a>
                </div>
                <div class="container clearfix" style="">
                    <div class="picture-wrap">
                        <div class="picture-list">

                            {pic_list:24}
                            <div class="album-item">
                                <a href="{list_view}"><div class="album">
                                        <div class="album-img"><img
                                                data-src="{list_pic}"
                                                src="{list_pic}"
                                                lazy="loaded"></div>
                                        <div class="album-desc">
                                            <div class="album-name">{list_name}</div>
                                            <div class="album-comment"><span>{list_hit}观看</span><span class="right">{list_time}</span></div>
                                        </div>
                                    </div></a>

                            </div>
                            {/pic_list}


                        </div>
                    </div>
                </div>

                {include file="page.php"}
            </div><!----><!---->
            {include file="footer.php"}
        </div>
    </div>


</body>
</html>