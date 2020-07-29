<div class="nav_bar">
  <div class="wrap">
  	<a href="/"><img src="{cms_logo}" style="width:263px;height:54px" alt="{cms_title}"></a>
    <div class="nav_bar_r"> 
	<font color="#fff" size="4">记住本站地址：<script language="javascript">host = window.location.host;document.write(host)</script><--[收藏不迷路]</font>
		<a href="{cms_domain1}" target="_blank"><font color="#40e63e" size="4">发布地址一 </font></a>
		<a href="{cms_domain2}" target="_blank"><font color="#e4f305" size="4">发布地址二</font></a>
	</div>
	
  </div>
</div>
<div style="clear:both"></div>
<div class="maxbox">
  <div id="nav">
	  <ul class="dy">
		  <li class="sy"><a href="/">高清专区</a></li>
		  {hd_menu}
		  <li> <a class="type gold" href="{menu_link}">{menu_name}</a></li>
          {/hd_menu}
	  </ul>

      {if $cms_config['live_status']=='1'}
      
          <ul class="tp">
              <li class="sy"><a href="/">直播专区</a></li>
              {live_menu}
                  <li> <a class="type gold" href="{menu_link}">{menu_name}</a></li>
              {/live_menu}
          </ul>

        {/if}
        

	  <ul class="tp">
		<li class="sy"><a href="/">视频专区</a></li>
		{video_menu}
		<li> <a class="type gold" href="{menu_link}">{menu_name}</a></li>
          {/video_menu}

    </ul>

    <ul class="tp">
		<li class="sy"><a href="/">小说专区</a></li>
		{book_menu}
		<li> <a class="type gold" href="{menu_link}">{menu_name}</a></li>
        {/book_menu}
    </ul>
    <ul class="tp">
		<li class="sy"><a href="/">图片专区</a></li>
		{pic_menu}
		<li> <a class="type gold" href="{menu_link}">{menu_name}</a></li>
        {/pic_menu}
    </ul>
  </div>
  <div style="clear:both"></div>
</div>
<div class="maxbox" style="margin-top:5px;">
	<div class="listok">
	{cms_banner_a}
	</div>
  <div style="clear:both"></div>
</div>
<!--this-->
