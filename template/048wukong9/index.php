<!DOCTYPE html>
<html mip>
<head>
<meta charset="utf-8">
<meta name="applicable-device" content="pc,mobile">
<meta name="MobileOptimized" content="width"/>
<meta name="HandheldFriendly" content="true"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon"/>
<title>{cms_title}</title>
<meta name="keywords" content="{cms_keywords}">
<meta name="description" content="{cms_description}">
{include file="include.php"}
<style mip-custom>
 .logo a{ font-size: 36px; font-weight: bold; } .wrap ul li:last-child::after{ background: none; } .menu ul li.on { color: #004c98; border-bottom: 1px solid #004c98; } .header1{ display: none; } .articlecon { text-indent: 2em; } @media screen and (max-width: 768px){ .menu ul li.on{ border-bottom: 1px solid #eee; } .menu ul li:last-child{ border-bottom: none; } .header{display: none;} .header1{display: block;} .articlecon{text-indent:0} } .pagination li{ width: 20px; margin: 10px; } .pagination li.active{ width: 20px; margin-top: 6px; margin-right: -5px; padding: 3px 4px 2px 4px; color: #fff; font-weight: bolder; border: 1px solid #e2e2e2; background: #004c98; } .articlecon mip-img{ width: 370px; height: auto; margin: auto; } .c-line-clamp1{ display: none; }
</style>
<link rel="canonical" href="/">
</head>
<body class="index">
<mip-shell disabled></mip-shell>
<div class="wrapper">
	<div class="header">
		<div class="head">
			<div class="wrap">
				<div class="logo">
					<a data-type="mip" href="/" data-title="{cms_title}">{cms_title}</a>
				</div>
				<div class=" schico menuico">
					<span></span><span></span><span></span>
				</div>
				<div class="sch schfixed">
					<mip-form name="search" method="get" class="schform">
						{cms_search}<input type="text" name="TXT" placeholder="搜索..." class="schtext"/><button type="submit" class="schbtn"><span class="schload"></span><span class="schlabel">搜索</span></button></mip-form>
				</div>
			</div>
		</div>
	</div>
	<div class="header1">
		<mip-accordion sessions-key="mip_1" animatetime='0.24'><section>
		<div class="head">
			<div class="wrap">
				<div class="logo">
					<a data-type="mip" href="/" data-title="{cms_title}">{cms_title}</a>
				</div>
				<div class=" schico menuico">
					<span></span><span></span><span></span>
				</div>
				<div class="sch schfixed">
					<mip-form name="search" method="get" url="/" class="schform"><input type="text" name="search" placeholder="搜索..." class="schtext"/><button type="submit" class="schbtn"><span class="schload"></span><span class="schlabel">搜索</span></button></mip-form>
				</div>
			</div>
		</div>
		<div class="menu mip-accordion-content">
			<div class="wrap">
				<ul>
					<li id="nvabar-item-index" class='on'><a href="/" data-type="mip" data-title="首页" title='首页'>首页</a></li>
{video_menu}
					<li id='navbar-page-2' class=''><a href="{menu_link} ">{menu_name}</a></li>
{/video_menu}
{hd_menu}
					<li id='navbar-page-2' class=''><a href="{menu_link} ">{menu_name}</a></li>
{/hd_menu}
{live_menu}
					<li id='navbar-page-2' class=''><a href="{menu_link} ">{menu_name}</a></li>
{/live_menu}
{pic_menu}
					<li id='navbar-page-2' class=''><a href="{menu_link} ">{menu_name}</a></li>
{/pic_menu}
{book_menu}
					<li id='navbar-page-2' class=''><a href="{menu_link} ">{menu_name}</a></li>
{/book_menu}
				</ul>
			</div>
		</div>
		</section></mip-accordion>
	</div>
	<!--首页头部横幅广告-->
{cms_banner_a}
	<main class="mipcms-main">
	<div class="main">
		<div class="wrap">
			<div class="tagnav">
				<ul>
					<li><label><a href="#" data-type="mip" target="_blank">视频专区</a></label>
					<dl>
{video_menu}
						<dd><a href="{menu_link} " data-type="mip" title="{menu_name}">{menu_name}</a></dd>
{/video_menu}
					</dl>
					</li>
					<li><label><a href="#" data-type="mip" target="_blank">高清专区</a></label>
					<dl>
{hd_menu}
						<dd><a href="{menu_link}" data-type="mip" title="{menu_name}">{menu_name}</a></dd>
{/hd_menu}
					</dl>
					</li>
					<li><label><a href="#" data-type="mip" target="_blank">直播专区</a></label>
					<dl>
{live_menu}
						<dd><a href="{menu_link} " data-type="mip" title="{menu_name}">{menu_name}</a></dd>
{/live_menu}
					</dl>
					</li>
					<li><label><a href="#" data-type="mip" target="_blank">小说资源</a></label>
					<dl>
{book_menu}
						<dd><a href="{menu_link} " data-type="mip" title="{menu_name}">{menu_name}</a></dd>
{/book_menu}
					</dl>
					</li>
					<li><label><a href="#" data-type="mip" target="_blank">美图专区</a></label>
					<dl>
{pic_menu}
						<dd><a href="{menu_link} " data-type="mip" title="{menu_name}">{menu_name}</a></dd>
{/pic_menu}
					</dl>
					</li>
				</ul>
			</div>
			<div class="item itemone fadebox">
				<div class="itemcon">
					<div class="itemlist">
						<div class="itemtitle">
							<h3>最近更新</h3>
						</div>
						<ul>
{new_list:vod,10}
							<li>
							<div class="itemimg">
								<a href="{list_detail}" data-type="mip" data-title="{list_name}" title="{list_name}"><mip-img layout="container" class="media-object" alt='{list_name}' src="{list_pic}"></mip-img>
								<div class="zoomimg">
								</div>
								</a>
							</div>
							<div class="itemname">
								<a href="{list_detail}" data-type="mip" data-title="{list_name}" title="{list_name}">{list_name}</a>
							</div>
							<div class="iteminfo">
								<span class="icoplay">{list_hit}次播放</span>
							</div>
							</li>
{/new_list}
						</ul>
					</div>
					<div class="itemtop">
						<div class="itemtitle">
							<h3>热门排行</h3>
						</div>
						<ul class="itemtoplist">
{rand_list:vod,5}
							<li>
							<div class="itemtopimg">
								<a href="{list_detail}" data-type="mip" data-title="{list_name}" title="{list_name}"><mip-img layout="container" class="media-object" alt='{list_name}' src="{list_pic}"></mip-img>
								<div class="zoomimg">
								</div>
								</a>
							</div>
							<div class="itemtopinfo">
								<div class="itemtopname">
									<a href="{9CCMS-Index:DUrl}" data-type="mip" data-title="{list_name}" title="{list_name}">{list_name}</a>
								</div>
								<span class="icoplay"> {list_hit}次播放</span>
							</div>
							</li>
{/rand_list}
						</ul>
					</div>
				</div>
			</div>
			{video_hot}
			<div class="item itemone fadebox">
							<div class="itemcon">
								<div class="itemlist">
									<div class="itemtitle">
										<h3><a href="{type_more}" data-type="mip" target="_blank">{type_name}</a></h3>
									</div>
									<ul>
			 {video_list:10}
										<li>
										<div class="itemimg">
											<a href="{list_detail}" data-type="mip" data-title="{list_name}" title="{list_name}"><mip-img layout="container" class="media-object" alt='{list_name}' src="{list_pic}"></mip-img>
											<div class="zoomimg">
											</div>
											</a>
										</div>
										<div class="itemname">
											<a href="{list_detail}" data-type="mip" data-title="{list_name}" title="{list_name}">{list_name}</a>
										</div>
										<div class="iteminfo">
											<span class="icoplay">{list_hit}次播放</span>
										</div>
										</li>
			 {/video_list}
									</ul>
								</div>
								<div class="itemtop">
									<div class="itemtitle">
										<h3>热门排行</h3>
									</div>
									<ul class="itemtoplist">
			{rand_list:vod,5}
										<li>
										<div class="itemtopimg">
											<a href="{list_detail}" data-type="mip" data-title="{list_name}" title="{list_name}"><mip-img layout="container" class="media-object" alt='{list_name}' src="{list_pic}"></mip-img>
											<div class="zoomimg">
											</div>
											</a>
										</div>
										<div class="itemtopinfo">
											<div class="itemtopname">
												<a href="{9CCMS-Index:DUrl}" data-type="mip" data-title="{list_name}" title="{list_name}">{list_name}</a>
											</div>
											<span class="icoplay"> {9CCMS-Index:Rand}次播放</span>
										</div>
										</li>
			{/rand_list}
									</ul>
								</div>
							</div>
						</div>
						{/video_hot}
			<div class="item itemone fadebox">
				<div class="itemcon">
					<div class="itemlist">
						<div class="itemtitle">
							<h3>直播专区</h3>
						</div>
						<ul>
{live_hot_list:10}
							<li>
							<div class="itemimg">
								<a href="{list_view}" data-type="mip" data-title="{list_name}" title="{list_name}"><mip-img layout="container" class="media-object" alt='{list_name}' src="{list_pic}"></mip-img>
								<div class="zoomimg">
								</div>
								</a>
							</div>
							<div class="itemname">
								<a href="{list_view}" data-type="mip" data-title="{list_name}" title="{list_name}">{list_name}</a>
							</div>
							<div class="iteminfo">
								<span class="icoplay">{list_hit}次播放</span>
							</div>
							</li>
{/live_hot_list}
						</ul>
					</div>
					<div class="itemtop">
						<div class="itemtitle">
							<h3>热门排行</h3>
						</div>
						<ul class="itemtoplist">
{rand_list:vod,5}
							<li>
							<div class="itemtopimg">
								<a href="{list_detail}" data-type="mip" data-title="{list_name}" title="{list_name}"><mip-img layout="container" class="media-object" alt='{list_name}' src="{list_pic}"></mip-img>
								<div class="zoomimg">
								</div>
								</a>
							</div>
							<div class="itemtopinfo">
								<div class="itemtopname">
									<a href="{9CCMS-Index:DUrl}" data-type="mip" data-title="{list_name}" title="{list_name}">{list_name}</a>
								</div>
								<span class="icoplay"> {list_hit}次播放</span>
							</div>
							</li>
{/rand_list}
						</ul>
					</div>
				</div>
			</div>
		<div class="wrap">
			<div class="friendlink fadebox">
				<h3>友情链接：</h3>
				<ul>
					<div class="friend-link hidden-xs">
						<ul>
							<li> 友情链接：</li>
							<li>{cms_link}</li>
						</ul>
					</div>
				</ul>
			</div>
		</div>
	</div>
	</main>
	<div class="footer">
		<div class="wrap">
			<div class="footnav">
				<ul>
					<li class="noline">{cms_title}</li>
				</ul>
			</div>
			<div class="copyright">
				<p>
					本站的部分内容来源于互联网，如不慎侵犯到您的权益，请联系我们会在36小时内删除。
				</p>
				<p>
					{cms_notice}
				</p>
			</div>
		</div>
	</div>
</div>
<mip-fixed type="gototop"><mip-gototop></mip-gototop></mip-fixed>{cms_tj}
<script src="https://c.mipcdn.com/static/v2/mip.js"></script>
<script src="https://c.mipcdn.com/static/v2/mip-stats-baidu/mip-stats-baidu.js"></script>
<script src="https://c.mipcdn.com/static/v2/mip-gototop/mip-gototop.js" type="text/javascript" charset="utf-8"></script>
<script src="https://c.mipcdn.com/static/v2/mip-history/mip-history.js" type="text/javascript" charset="utf-8"></script>
<script src="https://c.mipcdn.com/static/v2/mip-fixed/mip-fixed.js" type="text/javascript" charset="utf-8"></script>
<script src="https://c.mipcdn.com/static/v2/mip-cambrian/mip-cambrian.js"></script>
<script src="https://c.mipcdn.com/static/v2/mip-form/mip-form.js" type="text/javascript" charset="utf-8"></script>
<script src="https://c.mipcdn.com/static/v2/mip-accordion/mip-accordion.js" type="text/javascript" charset="utf-8"></script>
<script src="https://c.mipcdn.com/static/v2/mip-share/mip-share.js" type="text/javascript" charset="utf-8"></script>
</body>
</html>