<html style="font-size: 53.3333px;">
<head>
    <title>{type_name} - 小说区 - {cms_title}</title>
    <meta name="keywords" content="{type_name},{cms_keywords}"/>
    <meta name="description" content="{type_name}在线观看,{cms_description}"/>
    {include file="include.php"}
</head>
<body>
<div id="novel" class="page">
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

                    <div class="novel-list-wrap">
                        <div class="video-item-row clearfix">
                            {book_list:20}
                            <div class="video-item-col col-2">
                                <div class="novel-item"  style="height: 44px">
                                    <div class="pc-novel-item">
                                        <a href="{list_view}">
                                            <div class="novel-item-title"><span class="title"><span
                                                        class="name">{list_name}</span></span>
                                                <div class="novel-item-desc"><span class="novel-item-desc__span">{list_time}</span><span
                                                        class="novel-item-desc__span">{list_hit}观看</span></div>
                                            </div>
                                        </a>

                                    </div>
                                    <div class="m-novel-item" style="height: 1rem">
                                        <div class="m-novel-item-wrap" >
                                            <div class="novel-item-content-desc" style="margin-left: unset;height: 0.76rem">
                                                <a href="{list_view}">
                                                    <div class="title"><span class="name">{list_name}</span>
                                                    </div>
                                                    <div class="novel-item-author">
                                                        <div class="novel-item-desc"><span class="novel-item-desc__span">{list_hit}观看</span><span
                                                                class="novel-item-desc__span">{list_time}</span><span
                                                                class="right author">作者：佚名</span></div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {/book_list}
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