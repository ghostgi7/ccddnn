<div class="header-all">
    <div class="top clearfix">
        <ul class="sj-nav">
            <li class="sbtn1"><i class="sjbg-nav"></i></li>
        </ul>
        <ul class="logo">
            <a href="/"><img src="{cms_logo}" alt="{cms_title}"></a>
        </ul>
        <ul class="top-nav">
            <li><a href="/">首页</a></li>
            <li _t_nav="topnav-1">
                <a href="javascript:void(0)" title="在线视频">
                    在线视频
                    <i class="sjbgs"></i><i class="sjbgx"></i>
                </a>
            </li>
            <li _t_nav="topnav-2">
                <a href="javascript:void(0)" title="高清影院">
                    高清影院
                    <i class="sjbgs"></i><i class="sjbgx"></i>
                </a>
            </li>
            <li _t_nav="topnav-3">
                <a href="javascript:void(0)" title="图片自拍 ">
                    图片自拍 
                    <i class="sjbgs"></i><i class="sjbgx"></i>
                </a>
            </li>
            <li _t_nav="topnav-4">
                <a href="javascript:void(0)" title="小说阅读">
                    小说阅读
                    <i class="sjbgs"></i><i class="sjbgx"></i>
                </a>
            </li>
            {if $cms_config['live_status'] == '1'}
            <li _t_nav="topnav-5">
                <a href="javascript:void(0)" title="激情直播">
                    激情直播
                    <i class="sjbgs"></i><i class="sjbgx"></i>
                </a>
            </li>
            {/if}
            {if $cms_config['user_status'] == '1'}
            <li _t_nav="topnav-6">
                <a  href="{:U('user','info',1,1)}">
                    <i class="layui-icon layui-icon-user"></i> 个人中心
                </a>
            </li>
            {/if}
        </ul>
        <ul class="search clearfix">
            <form name="formsearch" id="formsearch" method="get"  target="_self" autocomplete="off" >
                {cms_search}
                <input class="input" type="text" id="wd"   name="TXT" placeholder="输入影片名或女友名字"/>
                <input class="imgbt" type="submit" value=""/>
            </form>
        </ul>
        <ul class="sj-search">
            <li class="sbtn2"><i class="sjbg-search"></i></li>
        </ul>
        
    </div>
    <div class="nav-down clearfix">
        <div id="topnav-1" class="nav-down-1" style="display:none;" _t_nav="topnav-1">
            <div class="nav-down-2 clearfix">
                <ul>
                  {video_menu}
                    <li><a  href="{menu_link}">{menu_name}</a></li>
                  {/video_menu}
                </ul>
            </div>
        </div>
        <div id="topnav-2" class="nav-down-1" style="display:none;" _t_nav="topnav-2">
            <div class="nav-down-2 clearfix">
                <ul>
                  {hd_menu}
                      <li><a  href="{menu_link}">{menu_name}</a></li>
                  {/hd_menu}
                </ul>
            </div>
        </div>
        <div id="topnav-3" class="nav-down-1" style="display:none;" _t_nav="topnav-3">
            <div class="nav-down-2 clearfix">
                <ul>
                  {pic_menu}
                      <li><a href="{menu_link}">{menu_name}</a></li>
                  {/pic_menu}
                </ul>
            </div>
        </div>
        <div id="topnav-4" class="nav-down-1" style="display:none;" _t_nav="topnav-4">
            <div class="nav-down-2 clearfix">
                <ul>
                  {book_menu}
                      <li><a href="{menu_link}">{menu_name}</a></li>
                  {/book_menu}
                </ul>
            </div>
        </div>

        {if $cms_config['live_status'] == '1'}
        <div id="topnav-5" class="nav-down-1" style="display:none;" _t_nav="topnav-5">
            <div class="nav-down-2 clearfix">
                <ul>
                  {live_menu}
                  <li><a href="{menu_link}">{menu_name}</a></li>
                  {/live_menu}
                </ul>
            </div>
        </div>
        {/if}


        <div id="sj-nav-1" class="nav-down-1 sy1 sj-noover" style="display:none;" _s_nav="sj-nav-1">
            <div class="nav-down-2 sj-nav-down-2 clearfix">
                {if $cms_config['user_status'] == '1'}
                <ul>
                  <li style="width: 100%;margin: 5px;">
                      <a  href="{:U('user','info',1,1)}">
                          <i class="layui-icon layui-icon-user"></i> 个人中心
                      </a>
                  </li>
                </ul>
                {/if}
                <ul>
                    <li><span>在线视频:</span></li>
                    {video_menu}
                    <li><a  href="{menu_link}">{menu_name}</a></li>
                    {/video_menu}
                    <div class="clearfix"></div>
                </ul>
                <ul>
                    <li><span>高清影院:</span></li>
                    {hd_menu}
                    <li><a  href="{menu_link}">{menu_name}</a></li>
                    {/hd_menu}
                    <div class="clearfix"></div>
                </ul>
                <ul>
                    <li><span>图片自拍:</span></li>
                    {pic_menu}
                    <li><a  href="{menu_link}">{menu_name}</a></li>
                    {/pic_menu}
                    <div class="clearfix"></div>
                </ul>
                <ul>
                    <li><span>小说阅读:</span></li>
                    {book_menu}
                    <li><a  href="{menu_link}">{menu_name}</a></li>
                    {/book_menu}
                    <div class="clearfix"></div>
                </ul>
                {if $cms_config['live_status'] == '1'}
                <ul>
                    <li><span>激情直播:</span></li>
                    {live_menu}
                        <li><a href="{menu_link}">{menu_name}</a></li>
                    {/live_menu}
                    <div class="clearfix"></div>
                </ul>
                {/if}
            </div>
        </div>
        <div id="sj-nav-search" class="nav-down-1 sy2 sj-noover" style="display:none;" _t_nav1="sj-nav-search">
            <div class="nav-down-2 sj-nav-down-search clearfix">
                <form name="formsearch" id="formsearch" action="" method="get"  target="_self" autocomplete="off">
                    <input class="input" type="text" id="wd" name="TXT" placeholder="输入影片名或女友名字"/>
                    <input class="imgbt" type="submit" value="搜索"/>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="topone clearfix"></div>
<div class="ads">
    {cms_banner_a}
</div>
