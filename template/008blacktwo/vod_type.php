<!DOCTYPE html>
<html>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>{type_name} - {cms_title}</title>
	<meta name="keywords" content="{cms_keywords}" />
	<meta name="description" content="{cms_description}" />
    <meta name="googlebot" content="noindex,nofollow" />
		<link rel="stylesheet" href="{cms_template}/css/index.css" />
		<link rel="stylesheet" href="{cms_template}/css/style.css" />
		<link rel="stylesheet" href="{cms_template}/fonts/iconfont.css" />
</head>
<body>
 {include file="header.php"}
<main id="main">   		
	<div class="container-fluid px-0">
	  <div class="row my-2">
		<h5 class="container-title col-60">视频分类：{type_name}</h5>
	  </div>
		<div class="row">
			{video_list:16}
			<div class="col-15">
			  <div class="video-elem">
				<a class="display d-block" href="{list_view}">
					<img class="w-100" src="{list_pic}" />
					<small class="layer">{list_time}</small>
				 </a>
				<a class="title text-sub-title mt-2 mb-3" href="{list_view}">{list_name}</a>
			 </div>
			</div>
					 {/video_list}
		</div>
	 </div>
<div class="row">
    <div class="my-4 mx-auto">
    <ul class="pagination">
        <li class="page-item"><a class="page-link" href="{cms_page:first}">首页</a>
        <li class="page-item"><a class="page-link" href="{cms_page:prev}">上一页</a>

        <li class="page-item"><a class="page-link" href="javascript:;">共{cms_page:count}页</a>
        <li class="page-item"><a class="page-link" href="javascript:;">当前 {cms_page:current}页</a>

        <li class="page-item"><a class="page-link" href="{cms_page:next}">下一页</a>
        <li class="page-item"><a class="page-link" href="{cms_page:last}">尾页</a>

      </ul>
  </div>

  </div>

	
<hr />


</main>
 
 
{include file="footer.php"}
</body>
</html>		
