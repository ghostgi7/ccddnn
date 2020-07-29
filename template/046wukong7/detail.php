<html lang="zh-cn">
<head>
<meta charset="utf-8">
<title>{cmsobj_name}-{cmsobj_typename}-{cms_title}</title>
<meta name="keywords" content="{cmsobj_name},{cms_keywords}">
<meta name="description" content="{cms_description}">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, viewport-fit=cover" name="viewport">
<meta content="yes" name="apple-mobile-web-app-capable">
<meta content="black" name="apple-mobile-web-app-status-bar-style">
<meta content="telephone=no" name="format-detection">
<meta name="layoutmode" content="standard">
<meta name="auto-transform" content="forbid">
 {include file="include.php"}
<style>
            @-webkit-keyframes video-load{
                0%{
                    opacity: 1;
                }
                100%{
                    opacity: 0;
                }
            }
</style>
</head>
<body class="has-ad scroll-up">
{include file="header.php"}
 <div class="novel-info">
 	<div class="container white flex space-between">
 		<div class="novel-info-thumb">
 			<div class="novel-info-img" style="background: url({cmsobj_pic});">
 			</div>
 		</div>
 		<div class="novel-info-desc">
 			<h3>{cmsobj_name}</h3>
 			<dl>
 				<dt>类型</dt>
 				<dd>{cmsobj_typename}</dd>
 			</dl>
 			<dl>
 				<dt>发布时间</dt>
 				<dd>{cmsobj_time}</dd>
 			</dl>
 			<dl>
 				<dt>热度:{cmsobj_hit}</dt>
 			</dl>
 			<div class="novel-info-btn">
 				<a href="{cmsobj_view}" class="btn danger circle">立即播放</a>
 			</div>
 		</div>
 	</div>
 	<div class="novel-info-desc-text space-sm hide">
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
						{video_list:12}
						<li class="video-item">
						<div class="video-item-info">
							<a href="{list_detail} " class="video-item-info-pic">
							<div class="video-thumb" style="background: url({list_pic});">
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
						{/video_list}
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<style>
        .footer {
            padding: 10px 0;
            text-align: center;
            background: #f6f6f6;
        }
        .footer ul{
            padding-left: 0;
        }
        .footer .footer-navs li {
            display: inline-block;
            margin: 0 5px;
        }
</style>
{include file="footer.php"}
</body>
</html>