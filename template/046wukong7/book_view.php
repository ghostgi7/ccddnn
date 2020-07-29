<html lang="zh-cn">
<head>
<meta charset="utf-8">
<title>正在观看:{cmsobj_name}-{cmsobj_typename} - {cms_title}</title>
<meta name="keywords" content="{cms_keywords}">
<meta name="description" content="{cms_description}">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, viewport-fit=cover" name="viewport">
<meta content="yes" name="apple-mobile-web-app-capable">
<meta content="black" name="apple-mobile-web-app-status-bar-style">
<meta content="telephone=no" name="format-detection">
<meta name="layoutmode" content="standard">
<meta name="auto-transform" content="forbid">
    {include file="include.php"}
</head>
<body class="has-ad white in-scroll fixed-top scroll-up">
{include file="header.php"}
</div>
</div>
<div>{cms_banner_a}</div>
<div id="app">
<div class="container">
<h2 class="pic-view-title">{cmsobj_name}</h2>
<div class="video-player-div-author flex space-between align-middle">
</div>
</div>
<div id="gallery" class="pic-view-content spotlight-group thumbnails">
<p>
{cmsobj_content}
</p>
	<strong><br>
	</strong><br>
</p>
</div>
<div>{cms_banner_a}</div>
		<!---->
	</div>
</div>
</div>
</div>
<div id="comment_box" class="video-likes-comment">
		<div class="title flex space-around tabs-head">
			<h4 class="on">猜你喜欢</h4>
		</div>
		<div class="tabs-content">
			<div class="video-like">
				<div class="container">
					<p id="likeListLoading" class="listLoading" style="display: none;">
						<a><i class="icon spin icon-spinner-indicator"></i> 加载中...</a>
					</p>
					<ul id="likeList" style="">
						{book_list:12}
						<li class="video-item">
						<div class="video-item-info">
							<a href="{list_detail} " class="video-item-info-pic">
							<div class="video-thumb" style="background: url({cms_template}/static/image/aa.png)">
							</div>
							</a>
							<div class="video-item-info-desc">
								<h4><a href="{list_detail}">{list_name}</a></h4>
								<div class="video-item-meta">
									<a href="#" class="video-item-meta-author">热度:{list_hit}</a>
									<div class="video-item-meta-nums">
										<i class="iconfont"></i> 上传时间:{list_time}
									</div>
								</div>
							</div>
						</div>
						</li>
						{/book_list}
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
{include file="footer.php"} 
</body>
</html>