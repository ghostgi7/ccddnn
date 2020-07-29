<div class="top-nav-div"></div>
<div class="top-banner heading">
    
    <nav class="nav flex space-between align-middle fluid">
        <a class="logo" href="/"><img src="{cms_logo}"></a>
<div class="top-search flex-1">
            <form method="get">
				{cms_search}
                <div class="control has-icon-right">
                    <div class="search-select">
                        <select class="js-example-basic-single" name="type">
                            <option selected="" value="pic">视频</option>
                        </select>
                        <i class="icon icon-angle-down"></i>
                    </div>
                    <input type="text" name="TXT" class="input" value="" placeholder="请输入关键词">
                    <button class="btn top-search-btn" type="submit"><i class="icon icon-search"></i></button>
                </div>
            </form>
        </div>
        <a class="user-ico" href="/">
            <span><i class="icon icon-user"></i></span>
        </a>
    </nav>

    
    <div class="flex first-nav space-between has-more index">
        <nav class="nav white fluid" id="main-nav">
                     <a href="/">首页</a>
                     <a href="{:U('vod','type','3','1')}">视频</a>
                     <a href="{:U('book','type','25','1')}">小说</a>
                     <a href="{:U('live','type','26','1')}">直播</a>
                     <a href="{:U('pic','type','17','1')}">美图</a>
                     <a style="color:#e72525;" class="text-red" href="javascript:;">博彩推荐<img style="vertical-align: top;" src="{cms_template}/static/picture/tuijian.gif"></a>
        </nav>
        
    </div>

    <div class="child-nav flex space-between align-middle">
        
    
    
    
    
        
    
    <div class="nav-list" id="nav-list">
        

                    <a href="/">全部视频</a>
               {video_menu} <a href="{menu_link}">{menu_name}</a>{/video_menu}
              {hd_menu} <a href="{menu_link}">{menu_name}</a>{/hd_menu}
                 {live_menu} <a href="{menu_link}">{menu_name}</a>{/live_menu}
				  {pic_menu} <a href="{menu_link}">{menu_name}</a>{/pic_menu}
				   {book_menu} <a href="{menu_link}">{menu_name}</a>{/book_menu}
    </div>
    <script>
        var mainNav=document.getElementById("main-nav");
        var thismainNav = mainNav.getElementsByClassName("this");
        mainNav.scrollLeft = thismainNav[0].offsetLeft - ((mainNav.offsetWidth / 2) - (thismainNav[0].offsetWidth/ 2 + 5));
        var nav=document.getElementById("nav-list");
        var thisNav = nav.getElementsByClassName("this");
        if(thisNav.length > 0){
            nav.scrollLeft = thisNav[0].offsetLeft - ((nav.offsetWidth / 2) - (thisNav[0].offsetWidth/ 2 + 5));
        }
    </script>

    </div>
</div>