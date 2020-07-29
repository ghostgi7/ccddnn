<div>
    <div class="header nav navbar-fixed ">
        <div class="container pc-header">
            <div class="header-menu clearfix">
                <ul>
                    <li><a href="/">
                            <div class="logo" style="background-image: url('{cms_logo}')"></div>
                        </a></li>
                    <li class="menu-item {if $cms_controller == 'index'}active{/if}"><a href="/">首页</a></li>
                    <li class="menu-item {if $cms_controller == 'vod'}active{/if}"><a href="{:U('vod','type',$cms_menu['vod'][0]['id'],1)}">视频</a></li>
                    <li class="menu-item {if $cms_controller == 'pic'}active{/if}"><a href="{:U('pic','type',$cms_menu['pic'][0]['id'],1)}">图片</a></li>
                    <li class="menu-item {if $cms_controller == 'book'}active{/if}"><a href="{:U('book','type',$cms_menu['book'][0]['id'],1)}">小说</a></li>
                    <li class="menu-item {if $cms_controller == 'live'}active{/if}"><a href="{:U('live','type',$cms_menu['live'][0]['id'],1)}">直播</a></li>
                    <li>
                        <div class="search-dev">
                            <form action="">
                                {cms_search}
                                <input placeholder="请输入关键词..." name="TXT" class="search-input">
                                <div class="search-btn" onclick="this.parentNode.submit()"><i class="iconfont icon-sousuo"></i></div>
                            </form>

                        </div>
                    </li>
                    <li class="right-menu-item">
                        <div class="user-info">
                            <!--<span class="login-btn empty">登录</span>
                            <span class="login-btn">注册</span>-->
                        </div>
                    </li>
                </ul>
            </div>

        </div>
        <div class="mobile-header">
            <nav>
                <div class="nav-wrapper">
                    <a href="javascript:void(0)" data-target="slide-out" class="sidenav-trigger left-icon">
                        <i class="iconfont icon-caidan- high"></i></a>
                    <a href="/" class="brand-logo center">
                        <div class="logo" style="background-image: url('{cms_logo}')"></div>
                    </a>
                    <a href="javascript:void(0)" onclick="showsearch()" class="right header-right-icon">
                        <i class="iconfont icon-sousuo"></i></a>
                    <!--<a href="javascript:void(0)"
                       data-target="slide-userInfo-out"
                       class="right header-right-user sidenav-trigger">
                        <i class="iconfont icon-yonghuming"></i></a>-->
                </div>
            </nav>
        </div>
    </div><!----><!---->
</div>
<div class="pc-hide header-menu sub-header-menu">
    <a href="{:U('vod','type',$cms_menu['vod'][0]['id'],1)}" class="header-menu-item">视频</a>
    <a href="{:U('pic','type',$cms_menu['pic'][0]['id'],1)}" class="header-menu-item">图片</a>
    <a href="{:U('book','type',$cms_menu['book'][0]['id'],1)}" class="header-menu-item">小说</a>
    <a href="{:U('live','type',$cms_menu['live'][0]['id'],1)}" class="header-menu-item">直播</a>
</div>
<ul id="slide-userInfo-out" class="userInfoLeftMenu sidenav"><!---->
    <!--<div class="slide-user-out-item"><i class="iconfont icon-yonghu"></i></div>
    <div class="slide-user-out-item"><span class="btn btn-empty">登录</span></div>
    <div class="slide-user-out-item"><span class="btn">注册</span></div>-->
</ul>
<ul id="slide-out" class="sidenav slide-out">
    <li>
        <div class="logo-div"><i class="iconfont icon-caidan- high"></i><a href="/">
                <div class="logo" style="background-image: url('{cms_logo}')"></div>
            </a></div>
    </li>
    <!--<li>
        <div class="login-div"><span class="btn btn-empty">登录</span><a href="./register.html" class="btn">注册</a></div>
    </li>-->

    <li class="menu-item {if $cms_controller == 'index'}active{/if}"><a href="/" class="waves-effect">
            <div class="menu-item-div">
                <div class="menu-item-div-wrap"><i class="icon-shouye iconfont icon-menu"></i>
                    首页
                </div>
            </div>
        </a></li>
    <li class="menu-item {if $cms_controller == 'vod'}active{/if}"><a href="{:U('vod','type',$cms_menu['vod'][0]['id'],1)}" class="waves-effect">
            <div class="menu-item-div">
                <div class="menu-item-div-wrap"><i class="icon-shexiangji iconfont icon-menu"></i>
                    视频
                </div>
            </div>
        </a></li>

    <li class="menu-item {if $cms_controller == 'pic'}active{/if}"><a href="{:U('pic','type',$cms_menu['pic'][0]['id'],1)}" class="waves-effect">
            <div class="menu-item-div">
                <div class="menu-item-div-wrap"><i class="icon-tupian1 iconfont icon-menu"></i>
                    图片
                </div>
            </div>
        </a></li>
    <li class="menu-item {if $cms_controller == 'book'}active{/if}"><a href="{:U('book','type',$cms_menu['book'][0]['id'],1)}" class="waves-effect">
            <div class="menu-item-div">
                <div class="menu-item-div-wrap"><i class="icon-shu iconfont icon-menu"></i>
                    小说
                </div>
            </div>
        </a></li>
    <li class="menu-item {if $cms_controller == 'live'}active{/if}"><a href="{:U('live','type',$cms_menu['live'][0]['id'],1)}" class="waves-effect">
            <div class="menu-item-div">
                <div class="menu-item-div-wrap"><i class="icon-xinggan iconfont icon-menu"></i>
                    直播
                </div>
            </div>
        </a></li>
</ul>
{cms_banner_a}