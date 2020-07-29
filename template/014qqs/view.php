<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta name="viewport" content="maximum-scale=1.0,minimum-scale=1.0,user-scalable=0,width=device-width,initial-scale=1.0,user-scalable=no" />
	<meta name="renderer" content="webkit" />
	<meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1" />
	<meta charset="utf-8" />
	<title>正在播放
		{cmsobj_name}
	</title>
	<meta name="keywords" content="{cms_keywords}" />
	<meta name="description" content="{cms_description}" />
	<link rel="stylesheet" href="{cms_template}/css/index.css" />
</head>

<body>
	{include file="header.php"}
	<div class="wrap mt20">

		<div class="box pic_text" style="height:400px">
			<div class="title">
				<div style="color:#ffffff; background-color:#008b8b;text-align: center">
					<h3>{cmsobj_name}</h3>
				</div>
			</div>
			<div class="video-warp" style="height: 364px;">
				{cmsobj_content}
			</div>
			




			{cms_banner_b}

		</div>

	</div>

	<div class="wrap mt20">
		<div class="box movie2_list">
			<div class="title">
				<div style="color:#ffffff; background-color:#008b8b">
					<h3>&nbsp;&nbsp;&nbsp;<b>视频推荐</b></h3>
				</div>
			</div>

			<ul>
				 {video_list:6}

				<li><a href=" {list_view}" target="_blank"><img src="{list_pic}" />
						<h3>
							{list_name}
						</h3>
						<div align="center"><span class="movie_date">
								<!--[if lt IE 9 ]><span class="bg_top"><![endif]-->
								{list_time}
								<!--[if lt IE 9 ]></span></div><span class="bg_tail"></span><![endif]--></span>
					</a></li>

						{/video_list}



			</ul>
		</div>
	</div>




	{include file="footer.php"}
</body>

</html>