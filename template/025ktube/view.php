<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="{cmsobj_name}在线播放,{cms_description}">
    <meta name="keywords" content="{cms_keywords}">
    <title>{cmsobj_name}在线播放 - {cms_title}</title>
	
   {include file="include.php"}
</head>

<body>
{include file="header.php"}
	
	<!-- /////////////////////////////////////////Content -->
	<div id="page-content" class="single-page">
		<div class="container">
			<div class="row">
                <div class="widget wid-banner">
                    {cms_banner_a}
                </div>
				<div id="main-content" class="col-md-8">
					<div class="wrap-vid">
						<div class="player-box">
                            <div class="player">
                                {cmsobj_content}
                            </div>
                        </div>
					</div>
					<div class="line"></div>
					<div class="box">
						<div class="box-header">
							<h2><i class="fa fa-globe"></i> 同类推荐</h2>
						</div>
						<div class="box-content">
							<div class="row">
								{video_list:18}
                                <div class="col-md-4">
                                    <div class="wrap-vid">
                                        <div class="zoom-container">
                                            <div class="zoom-caption">
                                                <span>{cmsobj_typename}</span>
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
					</div>
                    <div class="line"></div>
				</div>
				<div id="sidebar" class="col-md-4">
					<!---- Start Widget ---->
					<div class="widget wid-post">
						<div class="heading"><h4><i class="fa fa-globe"></i> 猜你喜欢</h4></div>
						<div class="content">
							{rand_list:vod,6}
                            <div class="post wrap-vid">
                                <div class="zoom-container">
                                    <div class="zoom-caption">
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
							{/rand_list}
						</div>
						<div class="line"></div>
					</div>

				</div>
                <div class="widget wid-banner">
                    {cms_banner_b}
                </div>
			</div>
		</div>
	</div>

	{include file="footer.php"}
	
</body>
</html>
