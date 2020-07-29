<!-- 頁頭 -->
<div align="center">
	<div class="nav_bar">
		<div class="wrap">

			<span class="domain">
				<div id="logo"> <a href="/">&nbsp;&nbsp;
						{cms_title}</a></div>
			</span>
			<div class="nav_bar_r">&nbsp;&nbsp;&nbsp;&nbsp;
				<a href="{cms_domain1}" target="_blank">
					<font color="#ff0000"><b>发布地址一</b></font>
				</a>&nbsp;&nbsp;|&nbsp;&nbsp;
				<a href="{cms_domain2}" target="_blank">
					<font color="#ff0000"><b>发布地址二</b></font>
				</a>&nbsp;&nbsp;&nbsp;&nbsp;


			</div>
		</div>
	</div>
</div>


<div class="wrap mt20 nav" align="center">
	<div class="menu-warp clearfix">
		<nav class="menu">
			<ul>
				<li><a href="/">高清专区</a></li>
				{hd_menu}
				<li> <a class="type gold" href="{menu_link}">{menu_name}</a></li>
                {/hd_menu}
			</ul>

            {if $cms_config['live_status']=='1'}
                
                <ul>
                    <li><a href="/">直播专区</a></li>
                    {live_menu}
                        <li> <a class="type gold" href="{menu_link}">{menu_name}</a></li>
                    {/live_menu}
                </ul>

            {/if}
            


			<ul>
				<li><a href="/">视频专区</a></li>
				{video_menu}
				<li> <a class="type gold" href="{menu_link}">{menu_name}</a></li>
                {/video_menu}
			</ul>

			<ul>
				<li><a href="/">小说专区</a></li>
				{book_menu}
				<li> <a class="type gold" href="{menu_link}">{menu_name}</a></li>
                {/book_menu}
			</ul>
			<ul>
				<li><a href="/">图片专区</a></li>
				{pic_menu}
				<li> <a class="type gold" href="{menu_link}">{menu_name}</a></li>
                {/pic_menu}
			</ul>

		</nav>
	</div>
	
		{cms_banner_a}

</div>