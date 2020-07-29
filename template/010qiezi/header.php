<div class="container">
	<div class="row">
		<div class="col-md-3 navbar-header">

			<div class="logo" height="90">
				<a  href="/"><img class="img-responsive" src="{cms_logo}" width="240"/></a>
			</div>


		</div>
		<div class="col-md-9 top-nav">
			<div class="flex_row flex_nowarp">
				<a href="/" class="btn btn-danger btn-lg this">&nbsp;&nbsp;&nbsp;首&nbsp;页&nbsp;&nbsp;&nbsp;</a>
				<a href="{cms_domain1}" target="_blank" class="btn btn-danger btn-lg this">发布地址一</a>
				<a href="{cms_domain2}" target="_blank" class="btn btn-danger btn-lg this">发布地址二</a>
			</div>


			<div class="row">
				<div class="col-lg-12">
					<div class="msg">
						<span class="ico-msg"><img src="{cms_template}/images/ico-msg.png" alt=""></span>
						<div class="marquee ">
							<p>{cms_notice}</p>
						</div>
					</div>
				</div>
			</div>



		</div>
	</div>
	<div align="center">
		<div class="ads">
			<!--AD-->
		</div>
	</div>


	<div class="row">

		<div class="col-md-12 class-feed-btn2">
			<!--高清专区-->


			<ul>
				<a href="javascript:;" class="btn btn-danger active">高清专区</a>
				{hd_menu}
				<a class="btn btn-danger btn-lg " href="{menu_link}">{menu_name}</a>
                {/hd_menu}
			</ul>

			<!--直播专区-->


            {if $cms_config['live_status']=='1'}

                <ul>
                    <a href="javascript:;" class="btn btn-danger active">直播专区</a>
                    {live_menu}
                        <a class="btn btn-danger btn-lg " href="{menu_link}">{menu_name}</a>
                    {/live_menu}
                </ul>

            {/if}


			<ul>
				<a  href="javascript:;"class="btn btn-danger active">视频专区</a>
				{video_menu}
				<a class="btn btn-danger btn-lg " href="{menu_link}">{menu_name}</a>
                {/video_menu}
			</ul>
			<ul>
				<a  href="javascript:;"class="btn btn-danger active">小说专区</a>
                {book_menu}
				<a class="btn btn-danger btn-lg" href="{menu_link}">{menu_name}</a>
                {/book_menu}
			</ul>
			<ul>
				<a  href="javascript:;"class="btn btn-danger active">图片专区</a>
                {pic_menu}
				<a class="btn btn-danger btn-lg" href="{menu_link}">{menu_name}</a>
                {/pic_menu}
			</ul>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-12">
			<form  method="GET" autocomplete="off">
				<div class="input-group">
                    {cms_search}
					<input type="text" class="form-control" id="wd" name="TXT" placeholder="万部影片任你搜索" value="">
					<span class="input-group-btn"><button class="btn btn-default" type="submit">搜索</button></span>
				</div>
			</form>
		</div>
	</div>
<div class="top_js">
	{cms_banner_a}
</div>
