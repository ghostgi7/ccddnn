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
	<link rel="stylesheet" href="{cms_template}/css/style.css" />
	<link rel="stylesheet" href="{cms_template}/fonts/iconfont.css" />
</head>

<body>
	{include file="header.php"}
	<main id="main">
		<div class="container-fluid px-0">

			<div class="row my-2">
				<h5 class="container-title col-60">
					{cmsobj_name}
				</h5>
			</div>

			<div class="row">
				<div class="left col-40" style="height:400px">
					{cmsobj_content}
				</div>
				<div class="right container-fluid col-20">
					<div class="adv-pr mb-3">

						<a href="javascript:;" target="_blank" class="d-block mb-1"><img src="{cms_template}/images/zb1.jpg"></a>
						<a href="javascript:;" target="_blank" class="d-block mb-1"><img src="{cms_template}/images/zb.jpg"></a>

					</div>
				</div>
			</div>








			{cms_banner_b}


			<div class="row my-2">
				<h5 class="container-title col-60">视频推荐</h5>
			</div>
			<div class="row">
				 {video_list:8}
				<div class="col-15">
					<div class="video-elem">
						<a class="display d-block" href="{list_view}">
							<img class="w-100" src="{list_pic}" />
							<small class="layer">
								{list_time}</small>
						</a>
						<a class="title text-sub-title mt-2 mb-3" href="{list_view}">
							{list_name}</a>
					</div>
				</div>
						 {/video_list}
			</div>
		</div>



		<hr />


	</main>







	{include file="footer.php"}
</body>

</html>