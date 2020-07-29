<div class="bgi_box"><span id="bgimage" class="bgi"></span><span class="bgfd"></span></div>
<div class="head_box">
    <div class="header">
        <meta name="referrer" content="never">
        <div class="head_a">
            <div class="head_logo"><a class="logo" href="/" ></a></div>
            <div class="head_menu_a hidden_xs hidden_mi">
                <ul class="top_nav clearfix">
                    <li class="{if $cms_controller == 'index'}active{/if}"><a href="/">首页</a></li>
                    <li class="{if $cms_controller == 'vod'}active{/if}"><a href="{:U('vod','type',$cms_menu['vod'][0]['id'],1)}">电影</a></li>
                    <li class="{if $cms_controller == 'pic'}active{/if}"><a href="{:U('pic','type',$cms_menu['pic'][0]['id'],1)}">图片</a></li>
                    <li class="{if $cms_controller == 'book'}active{/if}"><a href="{:U('book','type',$cms_menu['book'][0]['id'],1)}">小说</a></li>
                    {if $cms_config['live_status'] == '1'}
                    <li class="{if $cms_controller == 'live'}active{/if}"><a href="{:U('live','type',$cms_config['live'],'1')}">直播</a></li>
                    {/if}
                </ul>
            </div>
            <div class="head_user">
                <ul>
                    <li class="top_ico"><a class="top_ico btn_wxgzh" href="javascript:void(0)" title="二维码"><i
                                class="iconfont">&#xe614;</i></a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="header" id="topnav">
        <div class="head_b">
            <a class="bk_btn fl" href="javascript:MAC.GoBack()" title="返回"><i class="iconfont">&#xe625;</i></a>
            <a class="se_btn fr open-share" href="javascript:void(0)" title="分享"><i class="iconfont">&#xe615;</i></a>
            <a class="se_btn pl_btn fr" href="#pinglun" title="评论"><i class="iconfont">&#xe632;</i></a>
            <div class="head_menu_b">
                <a class="menu" href="javascript:void(0)" title="精选分类"><i class="iconfont menu_ico">&#xe640;</i><span class="hidden_xs">&nbsp;精选分类</span></a>
                <div class="all_menu">
                    <div class="all_menu_inner">
                        <div class="menu_top hidden_mb"><a class="close_menu" href="javascript:void(0)"><i class="iconfont">&#xe616;</i></a>精选分类</div>
                        <div class="all_menu_box">
                            <ul class="nav_list clearfix">
                                <li class="active"><a class="mob_btn mob_btnc" href="/" title="首页"><i class="iconfont hidden_mb">&#xe634;</i><span>首页</span></a></li>
                                {video_menu}
                                <li><a class="mob_btn mob_btn1"  href="{menu_link}" title="{menu_name}"><i class="iconfont hidden_mb">&#xe64a;</i><span>{menu_name}</span></a></li>
                                {/video_menu}
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="head_search">
                <form id="search" name="search" method="get">
                    {cms_search}
                    <i class="iconfont">&#xe633;</i><input id="txt" type="text"
                                                           name="TXT"
                                                           class="mac_wd form_control"
                                                           value=""
                                                           placeholder="输入搜索关键字">
                    <button class="submit" id="searchbutton" type="submit" name="submit">搜索</button>
                </form>
            </div>
            <div class="head_hot_search hidden_xs">
                <ul class="pops_list">
                    <li><span class="hot_search_tit"><i class="iconfont">&#xe631;</i>&nbsp;热门搜索</span></li>
                    <li><a href="{key:中出}"><span class="hot_name">中出</span></a></li>
                    <li><a href="{key:少女}"><span class="hot_name">少女</span></a></li>
                    <li><a href="{key:巨乳}"><span class="hot_name">巨乳</span></a></li>
                    <li><a href="{key:凌辱}"><span class="hot_name">凌辱</span></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>