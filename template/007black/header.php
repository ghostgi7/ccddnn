  <div class="headed"></div>
  <div id="header">
   <div id="header_top">
    <div id="logo">
     <a class="logo" target="_blank" href="/"><img src="{cms_logo}" alt="{cms_title}" style="width:240px" /></a>
    </div>
    <div id="search">

	
	
     <form method="GET">
         {cms_search}
      <div style="float:left;">
	  <a  id="dizhi" href="{cms_domain1}"  target="_blank" >发布地址一</a>
      </div>
      <div style="float:left;">
	  <a  id="dizhi" href="{cms_domain2}"  target="_blank" >发布地址二</a>
      </div>
	  
      <div style="float:left;">
       <input name="TXT" type="text" class="searchbox-input" id="wd" value="" />
      </div>
      <div style="float:left">
       <input type="submit" value="搜索" class="searchbox-button" />
      </div>
     </form>
    </div>
   </div>
   <div id="menu">
    <div id="nav">
        <ul class="nav-xfplay">
            <li class="nav_h"><a href="/" target="_blank">高清专区</a></li>
            {hd_menu}
            <li> <a class="type gold" href="{menu_link}">{menu_name}</a></li>
            {/hd_menu}
        </ul>

        {if $cms_config['live_status']=='1'}

            <ul class="nav-arc">
                <li class="nav_h"><a href="/" target="_blank">直播专区</a></li>
                {live_menu}
                    <li> <a class="type gold" href="{menu_link}">{menu_name}</a></li>
                {/live_menu}
            </ul>

        {/if}


     <ul class="nav-online">
      <li class="nav_h"><a href="/" target="_blank">视频专区</a></li>
         {video_menu}
         <li> <a class="type gold" href="{menu_link}">{menu_name}</a></li>
         {/video_menu}
     </ul>

     <ul class="nav-img">
      <li class="nav_h"><a href="/" target="_blank">小说专区</a></li>
         {book_menu}
         <li> <a class="type gold" href="{menu_link}">{menu_name}</a></li>
         {/book_menu}
     </ul>
     <ul class="nav-arc">
      <li class="nav_h"><a href="/" target="_blank">图片专区</a></li>
         {pic_menu}
         <li> <a class="type gold" href="{menu_link}">{menu_name}</a></li>
         {/pic_menu}
     </ul>

    </div>
	{cms_banner_a}
  
   </div>
 
  </div>
  <div class="toped"></div>

