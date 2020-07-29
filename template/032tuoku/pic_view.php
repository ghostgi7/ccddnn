<html style="font-size: 53.3333px;">
<head>
    <title>
        {cmsobj_name}在线观看 - 图片区 - {cms_title}</title>
    <meta name="keywords" content="{cmsobj_name},{cms_keywords}"/>
    <meta name="description" content="{cmsobj_name}在线观看,{cms_description}"/>
    {include file="include.php"}
</head>
<body>
<div id="readNavel" class="page">
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
            <div class="container clearfix m-container">
                <div class="read-navel-wrap mt35" style="width: 100%">
                    <div class="pc-hide show-novel-menu"></div>
                    <div class="novel-title">
                        <div class="title high">{cmsobj_name}</div>
                    </div>
                    <div class="novel-content">
                        <style>
                            .novel-content img{
                                max-width: 100%;
                            }
                        </style>
                        {cmsobj_content}
                    </div>
                </div>
            </div>
            {include file="footer.php"}
        </div>
    </div>


</body>
</html>