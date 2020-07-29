<html>
<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="renderer" content="webkit|ie-comp|ie-stand">
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
		<meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
		<meta http-equiv="Pragma" content="no-cache" />
		<meta http-equiv="Expires" content="0" />
	<title>{cmsobj_name}-{cmsobj_typename}-{cms_title}</title>
	<meta name="keywords" content="{cmsobj_name},{cmsobj_typename},{cms_title}" />
	<meta name="description" content="{cmsobj_name},{cmsobj_typename},{cms_title}" />
		<meta http-equiv="Cache-Control" content="no-siteapp" />
		<meta http-equiv="Cache-Control" content="no-transform" />
		<meta name="applicable-device" content="pc,mobile" />
        {include file="include.php"}
		<script src="{cms_template}/static/js/jquery-3.3.1.min.js"></script>
		<script type="text/javascript" src="{cms_template}/static/js/bootstrap.min.js"></script>
</head>

<body>
		{include file="header.php"}
		<div class="container">
			<div class="row">
			
	<div class="layout-box clearfix">
			<div class="box-min-mcid clearfix">
				<div class="item clearfix">
					<dl class="clearfix">
						<!--<dt class="text-muted">频道</dt>-->
						<dd class="clearfix">
						<a href="#">直播专区</a>&nbsp;
						 {live_menu}<a  href="{menu_link}">{menu_name}&nbsp;</a>{/live_menu}
					</dl>
				</div>
			</div>
		</div>
		<div id="dtextlink" class="wrap border-gray fn-clear">
		  <div class="textlink fn-left">
		  <strong>您所在的位置：</strong><a>{cmsobj_typename}</a>&nbsp;>&nbsp;<a>{cmsobj_name}</a>&nbsp;>&nbsp;<a>视频播放</a></div>
		</div>		
            <div  class="border-gray clearfix">

			   		<div class="video-info fn-left">
			<div class="player">{cmsobj_content}</div></div>
			   

               </div>
							
<div class="ui-box border-gray clearfix">
               <div class="playfrom jsfrom tab1 clearfix" style="border-left-color:#0086cf;border-right-color:#0086cf;">
                  <span class="laiyuan">播放地址</span>
               </div>
               <div class="playlist jsplist clearfix">
                  <ul class="playul">
                     
                     <li><a title='在线播放' href= "{cmsobj_view}" target="_self">在线播放</a></li>
                     <li><a title='备用播放' href= "{cmsobj_view}" target="_self">备用播放</a></li>

                 </ul>
               </div>
            </div>			
	 <div class="ui-box border-gray clearfix">
     {cms_banner_b}
	</div>			
				<div class="layout-box clearfix">
					<div class="box-title">
						<h3 class="m-0"><i class="icon iconfont text-color"></i>同类推荐</h3>
					</div>
					<ul class="clearfix">
						{live_list:12}
							<li class="col-md-2 col-sm-3 col-xs-4 ">
							<a class="video-pic loading" style="background-image: url(https:{list_pic});" href="{list_view}" title="{list_name}">
							<span class="player"></span>
							<span class="note text-bg-r"></span>
							</a>
							<div class="title">
								<h5 class="text-overflow"><a href="{list_view}" title="{list_name}">{list_name}</a></h5>
							</div>
							<div class="subtitle text-time text-overflow">人气:{list_hit}</div>
						</li>
						{/live_list}
					</ul>					
				</div>
			</div>
		</div>
		{include file="footer.php"}	
 </body>
</html>