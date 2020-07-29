<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
	<title>{cmsobj_name}-文章内容-{cms_title}</title>
	<meta name="keywords" content="{cms_keywords}" />
	<meta name="description" content="{cms_description}" />
    <link rel="stylesheet" href="{cms_template}/css/style.css" />
</head>
<body>
{include file="header.php"}
<div id="header_box"></div>
<div id="top_box"></div>
<div class="wrap mt10">
	<div class="box cat_pos clearfix">
		<span class="cat_pos_l">您的位置：图片专区<h1>{cmsobj_name}</h1></span>
	</div>
<div class="bdsharebuttonbox"><a href="javascript:;" class="bds_more" data-cmd="more">分享到：</a><a href="javascript:;" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间">QQ空间</a><a href="javascript:;" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博">新浪微博</a><a href="javascript:;" class="bds_tqq" data-cmd="tqq" title="分享到腾讯微博">腾讯微博</a><a href="javascript:;" class="bds_renren" data-cmd="renren" title="分享到人人网">人人网</a><a href="javascript:;" class="bds_weixin" data-cmd="weixin" title="分享到微信">微信</a><a href="javascript:;" class="bds_mshare" data-cmd="mshare" title="分享到一键分享">一键分享</a></div>
<script>window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdMiniList":false,"bdPic":"","bdStyle":"0","bdSize":"16"},"share":{"bdSize":16},"image":{"viewList":["qzone","tsina","tqq","renren","weixin","mshare"],"viewText":"分享到：","viewSize":"32"},"selectShare":{"bdContainerClass":null,"bdSelectMiniList":["qzone","tsina","tqq","renren","weixin","mshare"]}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];</script>
</div>
<div class="wrap mt10">
	<div class="box pic_text">
		<div class="page_title">{cmsobj_name}</div>
		<div id="pic_text_top"></div>
		<div class="content">{cmsobj_content} </div>
		<div id="pic_text_bottom"></div>

	</div>
</div>
<div id="bottom_box"></div>
<div id="footer_box"></div>



{include file="footer.php"}
 
</body>
</html>
