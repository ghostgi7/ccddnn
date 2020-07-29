    <!--[if lte IE 9]>
    <div class="mdui-text-center mdui-p-a-2 mdui-typo lteie9">您的浏览器版本太低了，为了能更好的体验本站，请升级您的浏览器。点击链接下载最新版本的浏览器：<a href="http://ie.microsoft.com" >IE</a>、<a href="http://www.google.cn/chrome/" >chrome(谷歌浏览器)</a>、<a href="http://www.firefox.com.cn/" >Firefox(火狐浏览器)</a>，推荐使用谷歌浏览器</div>
    <![endif]-->
    <div class="w1200 uk-clearfix">
        <!-- 左边 -->
        <div class="left-nav uk-float-left">
            <div class="logo">
                <a href="/">
                   <img src="{cms_logo}" alt="{cms_title}">
                </a>
            </div>
            <div class="line">
                <hr>
            </div>
            <div class="common-tab uk-flex">
                <a href="#" class="tab-a uk-flex-item-1" id="tab-tag">导航</a>
                <div class="tab-indicator"></div>
            </div>

            <div class="menu-tag" id="menu-tag">
                <ul class="uk-nav uk-nav-side uk-nav-parent-icon " data-uk-nav>
                    <li class="uk-parent uk-active">
                        <a href="#" class="icon">
                            <i class="icon iconfont icon-shipin"></i>
                            视频专区
                        </a>
                        <ul class="uk-nav-sub">

                            {video_menu}
                                    <li> <a class="dd" href="{menu_link}">{menu_name}</a></li>
                            {/video_menu}
                        </ul>
                    </li> 					
                    <li class="uk-parent  ">
                        <a href="#" class="icon">
                            <i class="icon iconfont icon-ruxianai"></i>
                            <span>高清专区</span>
                        </a>
                        <ul class="uk-nav-sub">

                            {hd_menu}
                            <li> <a class="dd" href="{menu_link}">{menu_name}</a></li>
                            {/hd_menu}
                        </ul>
                    </li>
            
                    <li class="uk-parent ">
                        <a href="#" class="icon">
                            <i class=" iconfont icon-tubiao1shuxiaoshuo"></i>
                            <span>小说专区</span>
                        </a>
                        <ul class="uk-nav-sub">

                            {book_menu}
                            <li> <a class="dd" href="{menu_link}">{menu_name}</a></li>
                            {/book_menu}
                        </ul>
                    </li>

                    <li class="uk-parent ">
                        <a href="#" class="icon">
                            <i class="iconfont icon-biyuntao1"></i>
                            <span>图片专区</span>
                            </a>
                        <ul class="uk-nav-sub">

                            {pic_menu}
                            <li> <a class="dd" href="{menu_link}">{menu_name}</a></li>
                            {/pic_menu}
                        </ul>
                    </li>

                        {if $cms_config['live_status']=='1'}
                            
                            <li class="uk-parent ">
                                <a href="#" class="icon">
                                    <i class=" iconfont icon-maikefeng"></i>
                                    <span>直播专区</span>
                                </a>

                                <ul class="uk-nav-sub">

                                    {live_menu}
                                        <li> <a class="dd" href="{menu_link}">{menu_name}</a></li>
                                    {/live_menu}
                                </ul>
                            </li>

                        {/if}
                    
                </ul>
            </div>

            


        </div>


        <!-- 右侧 -->
        <div class="right-content uk-float-left">
            <div class="uk-clearfix">
                <!-- 搜索 -->
                <div class="search">
                    <form action="/">
                        {cms_search}
                        <input type="text" name="TXT" class="search-input" placeholder="请输入影片名或演员名">
	
                       <button><i class="icon iconfont icon-sousuo"></i></button>
                    </form>
                </div>
                <button class="icon iconfont icon-shoucang uk-float-right">Ctrl+D收藏本站</button>
                <p class="h-tip uk-float-right uk-margin-right">提示：点击查看永久收藏和无法观看电影说明</p>
                <a href="{cms_domain1}" class="uk-button h-line uk-margin-small-left">备用线路一</a>
                <a href="{cms_domain2}" class="uk-button h-line uk-margin-small-left">备用线路二</a>
            </div>
            
            <!-- 分割线 -->
            <div class="line">
                <hr>
            </div>
			
			 <center>
				{cms_banner_a}
			</center>           
            <!-- 分割线 -->
            <div class="line">
                <hr>
            </div>