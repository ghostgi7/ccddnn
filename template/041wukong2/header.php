	<header class="stui-header__top clearfix">
	<div class="stui-header__bar clearfix">
		<div class="container">
	        <div class="row">
				<div class="stui-header__logo">
				<img src="{cms_logo}" width="100%"/>
				</div>				
					<div class="stui-header__search">
					<script type="text/javascript" src="/statics/js/jquery.autocomplete.js"></script>
					 <form id="search" name="search" method="get"  onSubmit="return qrsearch();" autocomplete="off">
					 {cms_search}
						<input type="text" id="wd" name="TXT" class="mac_wd form-control" value="" placeholder="请输入关键词..."/>
						<button class="submit" id="searchbutton" type="submit" name="submit"><i class="icon iconfont icon-search"></i></button>							
					</form>
				</div>
								<ul class="stui-header__user">
					<li class="hidden-xs">
						<a href="/"><i class="icon iconfont icon-clock"></i>男人不识本站，上遍色站也枉然</a>
					</li>
										<li>
						<a href="/"><i class="icon iconfont icon-comments"></i>  <span class="hidden-xs">联系我们</span></a>
						<div class="dropdown history">					
							<h5 class="margin-0 text-muted">
								邮箱:{cms_email}
							</h5>
						</div>
					</li>
							
				</ul>
			</div>
		</div>
	</div>
	<div class="stui-header__menu clearfix">
		<div class="container">
	        <div class="row">
				<span class="more hidden-xs">{cms_notice}</span>
				<ul class="type-slide clearfix">	  		
					<li class="active"><a href="/">首页</a></li>
								        <li ><a href="{:U('vod','type','10','1')}">国产</a></li>
			        			        <li ><a href="{:U('vod','type','7','1')}">欧美</a></li>
			        			        <li ><a href="{:U('vod','type','3','1')}">AV</a></li>
			        			        <li ><a href="{:U('book','type','25','1')}">小说</a></li>
			        			        <li class="hidden-md hidden-lg" ><a href="{:U('live','type','26','1')}"> 直播</a></li>
				</ul>
			</div>
		</div>
	</div>
</header>

<script type="text/javascript">
	$(".stui-header__user li,.stui-header__menu li").click(function(){
		$(this).find(".dropdown").toggle();
		if(!stui.browser.useragent.mobile){
			$(".MacPlayer").toggle();
		}
	});
</script>

    <div class="container">
        <div class="row">
        	<!-- D071 by  -->
<!-- <div class="stui-pannel stui-pannel-bg clearfix">
	<div class="stui-pannel-box clearfix">	
		<div class="stui-pannel-bd">
			<div class="carousel carousel_default flickity-page">
					
			</div>
		</div>	
		<div class="stui-pannel_bd clearfix">	
			<ul class="stui-vodlist clearfix">
					 
			</ul>															
		</div>
	</div>
</div>
 -->
<style type="text/css">
	.stui-vodlist__thumb.banner{ padding-top: 30%;}
	@media (max-width:767px){.stui-vodlist__thumb.banner{ padding-top: 45%;}}
</style><!-- 幻灯片 -->