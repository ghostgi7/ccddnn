<!DOCTYPE html>


<html class="no-js" lang="zh-TW">

<head>
    <title>{type_name} - 小说区 - {cms_title}</title>
    <meta name="keywords" content="{type_name},{cms_keywords}"/>
    <meta name="description" content="{type_name}在线观看,{cms_description}"/>
    {include file="include.php"}

</head>

<body class="home blog pagination-type-links">


<div id="site-wrapper">

    {include file="header.php"}

    <main id="site-content" role="main">
        {include file="typebar.php"}


        <article class="single-container bg-color-white post-11 page type-page status-publish hentry missing-thumbnail"
                 id="post-11">
            <table class="wp-block-table">
                <tbody>

                {book_list:24}
                <tr>
                    <td><a href="{list_view}">【{type_name}】{list_name}</a></td>

                    <td>{list_time}</td>
                </tr>
                {/book_list}
                </tbody>
            </table>


        </article>
        {include file="page.php"}
    </main><!-- #site-content -->

    {include file="footer.php"}

</div><!-- #site-wrapper -->

</body>
</html>
