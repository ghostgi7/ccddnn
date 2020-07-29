<!DOCTYPE html>


<html class="no-js" lang="zh-TW">

<head>
    <title>{cms_title}</title>
    <meta name="description" content="{cms_description}"/>
    <meta name="keywords" content="{cms_keywords}"/>
{include file="include.php"}

</head>

<body class="home blog pagination-type-links">


<div id="site-wrapper">

{include file="header.php"}

    <main id="site-content" role="main">


        <div class="section-inner">

            <div class="posts load-more-target" id="posts" aria-live="polite">

                <div class="grid-sizer"></div>

                {video_hot}
                    {video_list:12}
                <article
                        class="preview preview-post do-spot post-35084 post type-post status-publish format-standard has-post-thumbnail hentry category-3 has-thumbnail"
                        id="post-35084">

                    <div class="preview-wrapper">


                        <a href="{list_detail}"
                           class="preview-image">

                            <img width="800" height="9999" data-src="{list_pic}"
                                 class="attachment-koji_preview_image_high_resolution size-koji_preview_image_high_resolution wp-post-image"
                                 alt=""/>
                        </a>


                        <div class="preview-inner">

                            <h2 class="preview-title"><a
                                        href="{list_detail}">{list_name}</a>
                            </h2>


                            <div class="post-meta-wrapper post-meta-preview">

                                <ul class="post-meta">

                                    <li class="post-categories meta-wrapper">
                                        <div class="meta-icon"><img aria-hidden="true"
                                                                    src="{cms_template}/picture/folder.svg"/></div>
                                        <span class="screen-reader-text">Posted in</span>
                                        <span class="meta-content"><a
                                                    href="{type_more}"
                                                    rel="category tag">{type_name}</a></span>
                                    </li>

                                </ul><!-- .post-meta -->

                            </div><!-- .post-meta-wrapper -->


                        </div><!-- .preview-inner -->

                    </div><!-- .preview-wrapper -->

                </article>
                    {/video_list}
                {/video_hot}



            </div><!-- .posts -->

        </div><!-- .section-inner -->

    </main><!-- #site-content -->

    {include file="footer.php"}

</div><!-- #site-wrapper -->

</body>
</html>
