<!-- 头部 开始-->
<div class="head uk-clearfix">
    <a href="/" class="logo  uk-float-left"><img src="{cms_logo}" alt="{cms_title}"></a>
    <div class="search uk-float-left uk-clearfix">
        <form id="ffsearch" name="ffsearch" method="GET" action="">
            {cms_search}
            <input class="uk-float-left uk-display-block" type="text" name="TXT" id="wd"  placeholder="影片名 / 演员名 / 导演">

            <button class="submit uk-float-left uk-display-block icon iconfont icon-sousuo" type="submit"></button>
        </form>
    </div>
</div>
<!--头部 结束 -->
<!-- 导航 开始 -->
<div class="nav-warp" >
    <ul class="nav">
        <li class="active"><a href="/" >首页</a></li>
        <li class="nav-parent"><a href="javascript:;" >视频专区</a></li>
        <li class="nav-parent"><a href="javascript:;" >高清专区</a></li>
        <li class="nav-parent"><a href="javascript:;" >小说专区</a></li>
        <li class="nav-parent"><a href="javascript:;" >图片专区</a></li>

        {if $cms_config['live_status']=='1'}
            
            <li class="nav-parent"><a href="javascript:;" >直播专区</a></li>

        {/if}
        
    </ul>
    <div class="nav-child-box">
        <ul class="nav-child uk-margin-remove uk-clearfix">

            {video_menu}
            <li> <a class="dd" href="{menu_link}">{menu_name}</a></li>
            {/video_menu}
        </ul>
        <ul class="nav-child uk-margin-remove uk-clearfix">

            {hd_menu}
            <li> <a class="dd" href="{menu_link}">{menu_name}</a></li>
            {/hd_menu}
        </ul>
        <ul class="nav-child uk-margin-remove uk-clearfix">
            {book_menu}
            <li> <a class="dd" href="{menu_link}">{menu_name}</a></li>
            {/book_menu}
        </ul>
        <ul class="nav-child uk-margin-remove uk-clearfix">
            {pic_menu}
            <li> <a class="dd" href="{menu_link}">{menu_name}</a></li>
            {/pic_menu}
        </ul>

            {if $cms_config['live_status']=='1'}
                
                <ul class="nav-child uk-margin-remove uk-clearfix">
                    {live_menu}
                        <li> <a class="dd" href="{menu_link}">{menu_name}</a></li>
                    {/live_menu}
                </ul>

            {/if}
        
    </div>

</div>
<!-- 导航 结束 -->