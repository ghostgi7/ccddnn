<header>
    <div class="container uk-padding-remove border-red clearfix">
        <!--头部左侧 logo 搜索框-->
        <div class="head-l uk-float-left clearfix">
            <!--logo-->
            <div class="uk-padding-remove uk-float-left">
                <a href="/"><img src="{cms_logo}" alt="logo" style="width:250px" /></a>
            </div>
            <!--slogan-->
            <div class="slogan uk-float-left"></div>
            <!--search-->
            <div class="uk-float-left uk-padding-remove uk-margin-top head-search-box">
                <form class="clearfix" method="GET" id="searchSubmit">
                    {cms_search}
                    <div class="uk-padding-remove uk-float-left">
                        <!--输入框-->
                        <div><input type="search" name="TXT" class="form-control head-search" placeholder="请输入关键字"value="" maxlength="20"></div>

                    </div>
                    <div class=" uk-padding-remove uk-float-left">
                        <input type='submit' class="submit-search" value="搜索"/>
                    </div>
                </form>
            </div>
            <div class="uk-float-left girl">
                <a href="/" ><img src="{cms_template}/images/nl.png" /></a>
            </div>
        </div>
        <!--头部右侧 登录状态-->
    </div>
</header>
<!--导航-->

<nav id="nav">
    <div class="container uk-padding-remove">
        <ul class="nav nav-pills" >
            <li class="active-nav"><a href="/#">视频专区</a></li>
            {video_menu}
            <li> <a class="type gold" href="{menu_link}">{menu_name}</a></li>
            {/video_menu}
            <li><a href="{cms_domain1}" target="_blank"><span>发布地址一</span></a></li>
            <li><a href="{cms_domain2}" target="_blank"><span>发布地址二</span></a></li>
		</ul>
        <!--鼠标移入 显示 最新条目-->
    </div>
</nav>

<nav class="sub_nav">
    <div class="container uk-padding-remove ">
        <ul class="nav nav-pills" >
            <li class="active-nav"><a href="javascript:;">高清专区</a></li>
            {hd_menu}
            <li> <a class="type gold" href="{menu_link}">{menu_name}</a></li>
            {/hd_menu}
        </ul>
        <ul class="nav nav-pills" >
                <li class="active-nav"><a href="javascript:;"><span>小说专区</span></a></li>
            {book_menu}
            <li> <a class="type gold" href="{menu_link}">{menu_name}</a></li>
            {/book_menu}
        </ul>

        <ul class="nav nav-pills" >
            <li class="active-nav"><a href="javascript:;"><span>图片专区</span></a></li>
            {pic_menu}
            <li> <a class="type gold" href="{menu_link}">{menu_name}</a></li>
            {/pic_menu}
        </ul>

        
        {if $cms_config['live_status']=='1'}

            <ul class="nav nav-pills" >
                <li class="active-nav"><a href="javascript:;"><span>直播专区</span></a></li>
                {live_menu}
                    <li> <a class="type gold" href="{menu_link}">{menu_name}</a></li>
                {/live_menu}
            </ul>
            
        {/if}


        <!--鼠标移入 显示 最新条目-->

    </div>
</nav>
<!--公告 开始-->
<div class="message uk-margin-bottom">
    <div class="container uk-padding-remove">
        <!--滚动文字-->
        <div class="message-box uk-float-left clearfix">
            <span class="uk-display-block uk-float-left icon-message"></span>
            <span class="uk-display-block uk-float-left">公告：</span>
        </div>
        <!--滚动内容-->
        <div class="uk-float-left message-content">
            <marquee  direction="left" behavior="scroll">
               公告：{cms_notice}
            </marquee>
        </div>
    </div>
</div>
<!--公告 结束-->
<div class="container uk-padding-remove">
{cms_banner_a}
</div>
