<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>
		{cms_title}
	</title>
	<meta name="keywords" content="{cms_keywords}" />
	<meta name="description" content="{cms_description}" />
	<meta name="googlebot" content="noindex,nofollow" />
	<meta name="viewport" content="width = device-width, initial-scale = 1.0, maximum-scale = 1.0, user-scalable = 0" />
	<link rel="stylesheet" href="{cms_template}/css/index.css" />
	<link rel="stylesheet" href="{cms_template}/css/style.css" />
	<link rel="stylesheet" href="{cms_template}/fonts/iconfont.css" />
</head>

<body>
	{include file="header.php"}
	<main id="main">
		<div class="container-fluid mb-3 p-0">
			<div class="row">
				<div class="advInfoElem col-15">
					<a class="display d-block"><img class="w-100" src="{cms_template}/images/zb1.jpg" /></a>
					<a class="title text-sub-title">高速稳定、实时直播</a>
				</div>
				<div class="advInfoElem col-15">
					<a class="display d-block"><img class="w-100" src="{cms_template}/images/2.jpg" /></a>
					<a class="title text-sub-title">成人小说、免费阅读</a>
				</div>
				<div class="advInfoElem col-15">
					<a class="display d-block"><img class="w-100" src="{cms_template}/images/3.jpg" /></a>
					<a class="title text-sub-title">情色图片、免费浏览</a>
				</div>
				<div class="advInfoElem col-15">
					<a class="display d-block"><img class="w-100" src="{cms_template}/images/zb2.jpg" /></a>
					<a class="title text-sub-title">五大成人、内容分享</a>
				</div>
			</div>
		</div>
        {video_hot}
            <div class="container-fluid px-0">
                <div class="row my-2">
                    <h5 class="container-title col-60">
                        {type_name}
                    </h5>
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

        {/video_hot}




        {if $cms_config['live_status']=='1'}

            <div class="container-fluid px-0">
                <div class="row my-2">
                    <h5 class="container-title col-60">直播频道</h5>
                </div>
                <div class="row">
                {live_hot_list:8}
                        <div class="col-15">
                            <div class="video-elem">
                                <a class="display d-block" href=" {list_view}">
                                    <img class="w-100" src=" {list_pic}" />
                                    <small class="layer">时时直播</small>
                                </a>
                                <a class="title text-sub-title mt-2 mb-3" href=" {list_view}">
                                     {list_name} </a>
                            </div>
                        </div>
                    		 {/live_hot_list}
                </div>

            </div>

        {/if}



		<hr />
		<div class="container-fluid px-0">
			<div class="row my-2">
				<h5 class="container-title col-60">友情链接</h5>
			</div>
			<div class="row">
				<div class="col-60">
                    {cms_link}
				</div>
			</div>
		</div>

	</main>
	{include file="footer.php"}
</body>

</html>