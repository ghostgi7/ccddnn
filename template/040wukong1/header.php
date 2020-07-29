<header class="header">
	<div class="navbar-header">
		<div class="container">
			<h1 class="navbar-brand"><a href="/" title="{cms_title}"><img src="{cms_logo}" alt="{cms_title}"></a></h1>
			<a class="navbar-toggle primary-toggle visible-xs" href="javascript:;" data-toggle="owl" data-target="#navbar-primary"><i class="iconfont iconfont-menu"></i></a>
			<a class="navbar-toggle navbar-goback" href="javascript:;"><i class="iconfont iconfont-back"></i></a>
			<form class="ff-search" name="formsearch" id="formsearch" data-sid="0" data-limit="10">
			{cms_search}
				<div class="navbar-search hidden-xs">
					<input class="search-control ff-wd" type="text" name="TXT" id="keyword" placeholder="请输入影片名称" autocomplete="off" data-toggle="tooltip" data-placement="bottom" title="请输入关键字" data-original-title="请输入关键字">
					<button class="search-button" type="submit" data-action="/search/FFWD.html">搜索</button>
				</div>
			</form>
		</div>
	</div>
	<div class="navbar" id="navbar-primary">
		<div class="navbar-primary">
			<div class="container">
				<ul class="navbar-nav clearfix">
					<li id="nav-index"><a href="/">首页</a></li>
					
				{video_menu}  	<li id="nav-1"><a href="{menu_link}"> {menu_name} </a></li>{/video_menu}
					
				</ul>
			</div>
		</div>
		<div class="navbar-subnav">
			<div class="container">
				<ul class="navbar-nav clearfix">
					<li class="movie"><strong><nobr>高清专区</nobr></strong></li>
					
				{hd_menu}	<li id="nav-9"><a href="{menu_link}">{menu_name}</a></li>{/hd_menu}
				</ul>
			</div>
		</div>
			<div class="navbar-subnav">
			<div class="container">
				<ul class="navbar-nav clearfix">
					<li class="movie"><strong><nobr>小说专区</nobr></strong></li>
					
				{book_menu}	<li id="nav-9"><a href="{menu_link}">{menu_name}</a></li>{/book_menu}
				</ul>
			</div>
		</div>
				<div class="navbar-subnav">
			<div class="container">
				<ul class="navbar-nav clearfix">
					<li class="movie"><strong><nobr>图片专区</nobr></strong></li>
					
				{pic_menu}	<li id="nav-9"><a href="{menu_link}">{menu_name}</a></li>{/pic_menu}
				</ul>
			</div>
		</div>
			<div class="navbar-subnav">
			<div class="container">
				<ul class="navbar-nav clearfix">
					<li class="movie"><strong><nobr>直播专区</nobr></strong></li>
					
				{live_menu}	<li id="nav-9"><a href="{menu_link}">{menu_name}</a></li>{/live_menu}
				</ul>
			</div>
		</div>
	</div>
</header>