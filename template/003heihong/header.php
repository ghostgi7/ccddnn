<div class="nav_bar">
	<div class="wrap">
		<span class="domain">
			<div id="logo">
				<a href="/">
					<img src="{cms_logo}" style="width:263px;height:54px" alt="{cms_title}">
				</a>
			</div>
		</span>

		<div class="nav_bar_r">
			<font size="3">請使用Ctrl+D進行收藏本站</font>&nbsp;&nbsp;|
			<a href="{cms_domain1}" target="_blank">
				<font color="#FF0000"><strong>备用线路一</strong></font>
			</a>
			<a href="{cms_domain2}" target="_blank">
				<font color="#FF0000"><strong>备用线路二</strong></font>
			</a>
		</div>

	</div>
</div>


<div id="header_box">
	<div class="wrap mt10 nav">
		<ul class="nav_menu clearfix">
			<li class="active"><a target="" href="/" tppabs="/">高清专区</a></li>
			{hd_menu}
			<li> <a class="type gold" href="{menu_link}">{menu_name}</a></li>
            {/hd_menu}
		</ul>
		
        {if $cms_config['live_status']=='1'}
            
            <ul class="nav_menu clearfix">
                <li class="active"><a target="" href="/" tppabs="/">直播专区</a></li>
                {live_menu}
                    <li> <a class="type gold" href="{menu_link}">{menu_name}</a></li>
                {/live_menu}
            </ul>
            
        {/if}
        
		<ul class="nav_menu clearfix">
			<li class="active"><a target="" href="/" tppabs="/">视频专区</a></li>
			{video_menu}
			<li> <a class="type gold" href="{menu_link}">{menu_name}</a></li>
            {/video_menu}

		</ul>
		<ul class="nav_menu clearfix">
			<li class="active"><a target="" href="/" tppabs="/">小说专区</a></li>
			{book_menu}
			<li> <a class="type gold" href="{menu_link}">{menu_name}</a></li>
            {/book_menu}

		</ul>
		<ul class="nav_menu clearfix">
			<li class="active"><a target="" href="/" tppabs="/">图片专区</a></li>
			{pic_menu}
			<li> <a class="type gold" href="{menu_link}">{menu_name}</a></li>
            {/pic_menu}

		</ul>


	</div>
</div>
<div id="top_box">
	<div class="wrap mt10 clearfix">
		<div class="box top_box">
			<ul>
				{cms_banner_a}
			</ul>
		</div>
	</div>
</div>