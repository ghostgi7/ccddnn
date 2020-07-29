<nav class="navbar navbar-inverse" role="navigation">
	<div class="container">
		<div class="row">
			<div class="navbar-header">
				<div class="navbar-toggle navbar-navmore" data-toggle="collapse" data-target="#example-navbar-collapse"><i class="icon iconfont">&#xe641; - 栏目</i></div>
				<span class="domain">
					<div id="logo">{cms_title}</div>
				</span>
			</div>
			<div class="collapse navbar-collapse" id="example-navbar-collapse">
				<ul class="nav navbar-nav navbar-left" style="display:block;">
					<li id="nav-index"><a href="/">首页</a></li>
					<li  id="nav-dianshiju"><a  href="{:U('vod','type','3','1')}">视频专区</a></li>
					<li  id="nav-dianshiju"><a  href="{:U('vod','type','10','1')}">高清专区</a></li>
					<li  id="nav-dianshiju"><a  href="{:U('pic','type','19','1')}">图片专区</a></li>
					<li  id="nav-dianshiju"><a  href="{:U('live','type','25','1')}">直播专区</a></li>
					<li  id="nav-dianshiju"><a  href="{:U('book','type','29','1')}">小说专区</a></li>
				</ul>
			</div>
		</div>
	</div>
</nav>
<div class="container">
				<li>{cms_banner_a}</li> 
</div>	
<div id="sihu"><div class="vticker"><li><b>{cms_title}: </b>  {cms_domain1} {cms_notice}</li></div></div>		