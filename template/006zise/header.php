<div id="warp">
	<div id="top" style="color: #ffffff">
		<table cellspacing="0" cellpadding="0" width="100%" style="background:#330033" border="0">
			<tr>
				<td width="64"><strong></strong></td>
				<td width="470" height="28">
					<a href="{cms_domain1}" target="_blank">
						<font color="#fff">发布地址一</font>
					</a>
					<a href="{cms_domain2}" target="_blank">
						<font color="#fff">发布地址二</font>
					</a>
				</td>
				<td width="400"> <STRONG></STRONG></td>
			</tr>
		</table>
	</div>
	<div id="head">
		<div class="logo"><a href="/"><img src="{cms_logo}" height="50"></a></div>
		<div class="top">
			<div class="search">
				<form method="GET">
                    {cms_search}
					<div class="inp"><input type="text" name="TXT" value="" /></div>
					<input class="but" type="submit"
					 value="搜索" />
				</form>
			</div>
		</div>
	</div>
	<div id="nav" style="MARGIN-BOTTOM: 1px;">
		<li class="active"><a href="/">高清专区</a></li>
		{hd_menu}
		<li> <a class="type gold" href="{menu_link}">{menu_name}</a></li>
        {/hd_menu}
	</div>

    {if $cms_config['live_status']=='1'}

        <div id="nav" style="MARGIN-BOTTOM: 1px;">
            <li class="active"><a href="/">直播专区</a></li>
            {live_menu}
                <li> <a class="type gold" href="{menu_link}">{menu_name}</a></li>
            {/live_menu}
        </div>

    {/if}


	<div id="nav" style="MARGIN-BOTTOM: 1px;">
		<li class="active"><a href="/">视频专区</a></li>
		{video_menu}
		<li> <a class="type gold" href="{menu_link}">{menu_name}</a></li>
        {/video_menu}
	</div>

	<div id="nav" style="MARGIN-BOTTOM: 1px;">
		<li class="active"><a href="/">小说专区</a></li>
		{book_menu}
		<li> <a class="type gold" href="{menu_link}">{menu_name}</a></li>
        {/book_menu}
	</div>
	<div id="nav" style="MARGIN-BOTTOM: 1px;">
		<li class="active"><a href="/">图片专区</a></li>
		{pic_menu}
		<li> <a class="type gold" href="{menu_link}">{menu_name}</a></li>
        {/pic_menu}
	</div>

	<div class="top_js">
			{cms_banner_a}
	</div>
</div>