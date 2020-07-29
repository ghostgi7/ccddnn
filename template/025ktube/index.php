<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="{cms_description}">
    <meta name="keywords" content="{cms_keywords}">
    <title>{cms_title}</title>
	
   {include file="include.php"}
</head>

<body>

{include file="header.php"}

	<!-- /////////////////////////////////////////Content -->
	<div id="page-content" class="index-page">
	
		<div class="container">
			<div class="row">
                <div class="widget wid-banner">
                    {cms_banner_a}
                </div>
				<div class="featured">
					<div class="main-vid">
						<div class="col-md-6">
							{rand_list:vod,1}
                            <div class="zoom-container">
                                <div class="zoom-caption">
                                    <span>热门电影</span>
                                    <a href="{list_view}">
                                        <i class="fa fa-play-circle-o fa-5x" style="color: #fff"></i>
                                    </a>
                                    <p>{list_name}</p>
                                </div>
                                <img src="{list_pic}" />
                            </div>
							{/rand_list}
						</div>
					</div>
					<div class="sub-vid">
						<div class="col-md-3">
                            {rand_list:vod,2}
                            <div class="zoom-container">
                                <div class="zoom-caption">
                                    <span>热门电影</span>
                                    <a href="{list_view}">
                                        <i class="fa fa-play-circle-o fa-5x" style="color: #fff"></i>
                                    </a>
                                    <p>{list_name}</p>
                                </div>
                                <img src="{list_pic}" />
                            </div>
                            {/rand_list}
						</div>
						<div class="col-md-3">
                            {rand_list:vod,2}
                            <div class="zoom-container">
                                <div class="zoom-caption">
                                    <span>热门电影</span>
                                    <a href="{list_view}">
                                        <i class="fa fa-play-circle-o fa-5x" style="color: #fff"></i>
                                    </a>
                                    <p>{list_name}</p>
                                </div>
                                <img src="{list_pic}" />
                            </div>
                            {/rand_list}
						</div>
					</div>
					<div class="clear"></div>
				</div>
			</div>
			<div class="row">
				<div id="main-content" class="col-md-8">

					{video_hot}
                    <div class="box">
                        <div class="box-header">
                            <h2><i class="fa fa-globe"></i> {type_name}</h2>
                        </div>
                        <div class="box-content">
                            <div class="row">
                                {video_list:10}
                                <div class="col-md-6">
                                    <div class="wrap-vid">
                                        <div class="zoom-container">
                                            <div class="zoom-caption">
                                                <span>{type_name}</span>
                                                <a href="{list_view}">
                                                    <i class="fa fa-play-circle-o fa-5x" style="color: #fff"></i>
                                                </a>
                                                <p>{list_name}</p>
                                            </div>
                                            <img src="{list_pic}" />
                                        </div>
                                        <div class="info">
                                            <span><i class="fa fa-calendar"></i>{list_time}</span>
                                            <span><i class="fa fa-heart"></i>{list_hit}</span>
                                        </div>
                                    </div>
                                </div>
                                {/video_list}
                            </div>
                        </div>
                        <div class="line"></div>
                    </div>
					{/video_hot}
				</div>

				<div id="sidebar" class="col-md-4">
					<!---- Start Widget ---->
					<div class="widget wid-tags">
						<div class="heading"><h4><i class="fa fa-tags"></i> 热门标签</h4></div>
						<div class="content">
							<ul class="list-inline">
								<li><a href="{key:女同}">女同 ,</a></li>
								<li><a href="{key:胖女}">胖女 ,</a></li>
								<li><a href="{key:口交}">口交 ,</a></li>
								<li><a href="{key:巨乳}">巨乳 ,</a></li>
								<li><a href="{key:后入}">后入 ,</a></li>
								<li><a href="{key:颜射}">颜射 ,</a></li>
								<li><a href="{key:业余}">业余 ,</a></li>
								<li><a href="{key:中出}">中出，</a></li>
                                <li><a href="{key:小姨子}">小姨子,</a></li>
                                <li><a href="{key:自慰}">自慰,</a></li>
                                <li><a href="{key:肛交}">肛交,</a></li>
                                <li><a href="{key:香港}">香港,</a></li>
                                <li><a href="{key:喷出}">喷出,</a></li>
                                <li><a href="{key:大胸}">大胸</a></li>
							</ul>
						</div>
						<div class="line"></div>
					</div>
					<!---- Start Widget ---->
                    {if $cms_config['live_status'] == '1'}
					    <div class="widget wid-post">
						<div class="heading"><h4><i class="fa fa-globe"></i> 精选直播</h4></div>
						<div class="content">
							{live_hot_list:9}
                            <div class="post wrap-vid">
                                <div class="zoom-container">
                                    <div class="zoom-caption">
                                        <span>{type_name}</span>
                                        <a href="{list_view}">
                                            <i class="fa fa-play-circle-o fa-5x" style="color: #fff"></i>
                                        </a>
                                        <p>{list_name}</p>
                                    </div>
                                    <img src="{list_pic}" />
                                </div>
                                    <div class="info">
                                        <span><i class="fa fa-calendar"></i>{list_time}</span>
                                        <span><i class="fa fa-heart"></i>{list_hit}</span>
                                    </div>
                            </div>
							{/live_hot_list}
						</div>
						<div class="line"></div>
					</div>
                    {/if}

				</div>
			</div>
		</div>
		
	</div>

	<footer>
		<div class="top-footer">
			<ul class="footer-social list-inline">
				{cms_link}
			</ul>
		</div>
    </footer>
{include file="footer.php"}
	
</body>
</html>
