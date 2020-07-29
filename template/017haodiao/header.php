<div style="width:960px;margin-left: auto; margin-right:auto; margin-top:1px; margin-bottom:1px;overflow:hidden;">
	<div id="logo">
		<table border="0" width="100%">
			<tr>
				<td><a href="/"><img src="{cms_logo}" height="90"></a></td>
				<td width="568">
					<p align="center"><img src="{cms_template}/images/gg.gif" width="550" height="90" align="right">
				</td>
			</tr>
		</table>
	</div>
</div>
<div id="menu">
	<div id="slidetabsmenu" style="width:960px;">
		<ul>
			<li id="current"><a href="/"><span>高清专区</span></a></li>
			{hd_menu}
			<li> <a class="dd" href="{menu_link}">{menu_name}</a></li>
            {/hd_menu}
		</ul>

        {if $cms_config['live_status']=='1'}

            <ul>
                <li id="current"><a href="/"><span>直播专区</span></a></li>
                {live_menu}
                    <li> <a class="dd" href="{menu_link}">{menu_name}</a></li>
                {/live_menu}
            </ul>

        {/if}



		<ul>
			<li id="current"><a href="/"><span>视频专区</span></a></li>
			{video_menu}
			<li> <a class="dd" href="{menu_link}">{menu_name}</a></li>
            {/video_menu}
		</ul>

		<ul>
			<li id="current"><a href="/"><span>小说专区</span></a></li>
			{book_menu}
			<li> <a class="dd" href="{menu_link}">{menu_name}</a></li>
            {/book_menu}
		</ul>
		<ul>
			<li id="current"><a href="/"><span>图片专区</span></a></li>
			{pic_menu}
			<li> <a class="dd" href="{menu_link}">{menu_name}</a></li>
            {/pic_menu}
		</ul>

	</div>
</div>
<div id="container">
	<div align="center"></div>
	<div class="clear" style='margin-top:5px;'></div>

	<div class="msg">
		<span class="icon-msg">
			<img src="{cms_template}/images/ico-msg.png" alt="">
		</span>
		<div class="marquee ">
			<p>这里是公告。这里是公告。这里是公告。这里是公告。这里是公告。</p>
		</div>
	</div>
	
	<div id="searchbox" style="margin:0px auto;" class="searchbox-search">
		<div style='float:left;width:600px;'>
			<form method="GET">
                {cms_search}
				<div style="float:left;">
					<select name="type">
						<option value="">搜索视频</option>
					</select>
				</div>
				<div>
					<input name="TXT" type="text" class="searchbox-input" id="search_query" value="" size="41" />
				</div>
				<div>
					<font color="#FFFFFF"><input type="submit" value="搜索" class="searchbox-button" /></font>
				</div>
			</form>
		</div>

		<div class="addr-post">
			<a href="{cms_domain1}" class="btn">发布地址一</a>
			<a href="{cms_domain2}" class="btn">发布地址二</a>
		</div>
	</div>

	<div align="center">
			{cms_banner_a}
	</div>
</div>