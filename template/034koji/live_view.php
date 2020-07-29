<!DOCTYPE html>


<html class="no-js" lang="zh-TW">

<head>
    <title>{cmsobj_name}在线观看 - 直播区 - {cms_title}</title>
    <meta name="keywords" content="{cmsobj_name},{cms_keywords}"/>
    <meta name="description" content="{cmsobj_name}在线观看,{cms_description}"/>
    {include file="include.php"}

</head>

<body class="home blog pagination-type-links">


<div id="site-wrapper">

    {include file="header.php"}

    <main id="site-content" role="main">
        {include file="typebar.php"}


        <article class="single-container bg-color-white post-11 page type-page status-publish hentry missing-thumbnail"
                 id="post-11">
            <div class="featured-media">
                <div style="width: 100%;padding-bottom:56.25%;position: relative">
                    <div style="position: absolute;top:0;bottom: 0;left: 0;right: 0">
                        {cmsobj_content}
                    </div>
                </div>
            </div>
            <div class="post-inner section-inner">
            <header class="post-header">

                <h1 class="post-title">{cmsobj_name}</h1>
            </header>
                {cms_banner_b}
            <div class="entry-content">
                <a href="{cmsobj_view}">在线播放</a>
            </div>
            </div>
        </article>
    </main><!-- #site-content -->

    {include file="footer.php"}

</div><!-- #site-wrapper -->

</body>
</html>
