<header id="site-header" role="banner">

    <a class="skip-link" href="#site-content">Skip to the content</a>
    <a class="skip-link" href="#main-menu">Skip to the main menu</a>

    <div class="header-top section-inner">


        <h1 class="site-title"><a href="/">{cms_title}</a></h1>


        <button type="button" aria-pressed="false" class="toggle nav-toggle"
                data-toggle-target=".mobile-menu-wrapper" data-toggle-scroll-lock="true" data-toggle-attribute="">
            <label>
                <span class="show">Menu</span>
                <span class="hide">Close</span>
            </label>
            <div class="bars">
                <div class="bar"></div>
                <div class="bar"></div>
                <div class="bar"></div>
            </div><!-- .bars -->
        </button><!-- .nav-toggle -->

    </div><!-- .header-top -->

    <div class="header-inner section-inner">

        <div class="header-inner-top">
            <p class="site-description">{cms_notice}</p>

            <ul class="site-nav reset-list-style" id="main-menu" role="navigation">
            </ul>


            <div class="sidebar-widgets">
                <div id="nav_menu-2" class="widget widget_nav_menu">
                    <div class="widget-content">
                        <div class="menu-%e5%88%86%e9%a1%9e-container">
                            <ul id="menu-%e5%88%86%e9%a1%9e" class="menu">
                                <li id="menu-item-6012"
                                    class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-6012">
                                    <a href="/">首页</a>
                                </li>
                                <li id="menu-item-6012"
                                    class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-6012">
                                    <a href="{:U('vod','type',$cms_menu['vod'][0]['id'],1)}">高清影院</a>
                                </li>
                                <li id="menu-item-6012"
                                    class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-6012">
                                    <a href="{:U('pic','type',$cms_menu['pic'][0]['id'],1)}">美图专区</a>
                                </li>
                                <li id="menu-item-6012"
                                    class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-6012">
                                    <a href="{:U('book','type',$cms_menu['book'][0]['id'],1)}">小说爽文</a>
                                </li>
                                <li id="menu-item-6012"
                                    class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-6012">
                                    <a href="{:U('live','type',$cms_menu['live'][0]['id'],1)}">实时直播</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="clear"></div>
                </div>
            </div><!-- .sidebar-widgets -->


        </div><!-- .header-inner-top -->

        <div class="social-menu-wrapper">


            <ul class="social-menu reset-list-style social-icons s-icons">


                <li class="search-toggle-wrapper">
                    <button type="button" aria-pressed="false" data-toggle-target=".search-overlay"
                            data-set-focus=".search-overlay .search-field" class="toggle search-toggle"><span
                            class="screen-reader-text">Toggle the search field</span></button>
                </li>


            </ul><!-- .social-menu -->


        </div><!-- .social-menu-wrapper -->

    </div><!-- .header-inner -->

</header><!-- #site-header -->

<div class="mobile-menu-wrapper" aria-expanded="false">

    <div class="mobile-menu section-inner">

        <div class="mobile-menu-top">


            <ul class="site-nav reset-list-style" id="mobile-menu" role="navigation">
            </ul>


            <div class="sidebar-widgets">

                <div id="nav_menu-2" class="widget widget_nav_menu">
                    <div class="widget-content">
                        <div class="menu-%e5%88%86%e9%a1%9e-container">
                            <ul id="menu-%e5%88%86%e9%a1%9e-1" class="menu">
                                <li id="menu-item-6012"
                                    class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-6012">
                                    <a href="/">首页</a>
                                </li>
                                <li id="menu-item-6012"
                                    class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-6012">
                                    <a href="{:U('vod','type',$cms_menu['vod'][0]['id'],1)}">高清影院</a>
                                </li>
                                <li id="menu-item-6012"
                                    class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-6012">
                                    <a href="{:U('pic','type',$cms_menu['pic'][0]['id'],1)}">美图专区</a>
                                </li>
                                <li id="menu-item-6012"
                                    class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-6012">
                                    <a href="{:U('book','type',$cms_menu['book'][0]['id'],1)}">小说爽文</a>
                                </li>
                                <li id="menu-item-6012"
                                    class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-6012">
                                    <a href="{:U('live','type',$cms_menu['live'][0]['id'],1)}">实时直播</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="clear"></div>
                </div>
            </div><!-- .sidebar-widgets -->


        </div><!-- .mobile-menu-top -->

        <div class="social-menu-wrapper">


            <ul class="social-menu reset-list-style social-icons s-icons mobile">


                <li class="search-toggle-wrapper">
                    <button type="button" aria-pressed="false" data-toggle-target=".search-overlay"
                            data-set-focus=".search-overlay .search-field" class="toggle search-toggle"><span
                            class="screen-reader-text">Toggle the search field</span></button>
                </li>


            </ul><!-- .social-menu -->


        </div><!-- .social-menu-wrapper -->

    </div><!-- .mobile-menu -->

</div><!-- .mobile-menu-wrapper -->


<div class="search-overlay cover-modal" aria-expanded="false">

    <div class="section-inner search-overlay-form-wrapper">

        <form role="search" class="search-form" >
            {cms_search}
            <label for="search-form-5e8a0851f1bb7">
                <span class="screen-reader-text">Search for:</span>
                <img aria-hidden="true" src="{cms_template}/picture/spyglass.svg"/>
            </label>
            <input type="search" id="search-form-5e8a0851f1bb7" class="search-field"
                   placeholder="Enter your search query" value="" name="TXT"/>
            <button type="submit" class="search-submit screen-reader-text">Search</button>
        </form>
    </div><!-- .section-inner -->

    <button type="button" class="toggle search-untoggle" data-toggle-target=".search-overlay"
            data-set-focus=".search-toggle:visible">
        <div class="search-untoggle-inner">
            <img aria-hidden="true" src="{cms_template}/picture/cross.svg"/>
        </div>
        <span class="screen-reader-text">Hide the search overlay</span>
    </button><!-- .search-untoggle -->

</div><!-- .search-overlay -->
