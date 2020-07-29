<div class="stui-header__top clearfix">					
	<div class="stui-header__logo">
	<a href="/"><center><font size="3" color="red"><h1>{cms_title}</h1></font>	</center>	</a>							  
	</div>
	<div class="stui-header__type">
		 	</div>				
	<div class="stui-header__search"> 
		 <form id="search" >
			 {cms_search}
			<input type="text" id="wd" name="TXT" class="mac_wd form-control" placeholder="请输入影片名..."/>
			<button class="submit" id="searchbutton" type="submit" name="submit"></button>							
		</form>
	</div>
	<ul class="stui-header__user hidden-xs">

	</ul>
</div>
<div class="stui-header__menu clearfix">
	  	
	<ul class="clearfix">	  		
		<li class="active"><a href="/">首页</a></li>
		{video_menu}<li><a  href="{menu_link}">{menu_name}</a></li>{/video_menu}
		  {hd_menu}<li><a  href="{menu_link}">{menu_name}</a></li>{/hd_menu}
		 {live_menu}<li><a  href="{menu_link}">{menu_name}</a></li>{/live_menu}
		 {pic_menu}<li><a  href="{menu_link}">{menu_name}</a></li>{/pic_menu}
		 {book_menu}<li><a  href="{menu_link}">{menu_name}</a></li>{/book_menu}
	</ul>
</div>
<div class="foornav">
				<ul>
		 {video_menu}<li><a  href="{menu_link}"><span><img src="{cms_template}/static/picture/video.png">{menu_name}</span></a></li>{/video_menu}
		 {hd_menu}<li><a  href="{menu_link}"><span><img src="{cms_template}/static/picture/video.png">{menu_name}</span></a></li>{/hd_menu}
		{live_menu}<li><a  href="{menu_link}"><span><img src="{cms_template}/static/picture/video.png">{menu_name}</span></a></li>{/live_menu}
		 {pic_menu}<li><a  href="{menu_link}"><span><img src="{cms_template}/static/picture/video.png">{menu_name}</span></a></li> {/pic_menu}
		 {book_menu}<li><a  href="{menu_link}"><span><img src="{cms_template}/static/picture/video.png">{menu_name}</span></a></li>{/book_menu}		

									</ul>
			</div>
<div class="stui-header__menu clearfix">			
{cms_banner_a}
</div>