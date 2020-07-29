<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>{type_name} - 文章列表 - {cms_title}</title>
	<meta name="keywords" content="{cms_keywords}" />
	<meta name="description" content="{cms_description}" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="{cms_template}/css/index.css" />
	<link rel="stylesheet" href="{cms_template}/css/style.css" />
	<link rel="stylesheet" href="{cms_template}/fonts/iconfont.css" />
</head>
<body>
{include file="header.php"}
<main id="main">   		
	<div class="container-fluid px-0">
	  <div class="row my-2">
		<h5 class="container-title col-60">图片专区-{type_name}</h5>
	  </div>
  
<div class="row">


	{pic_list:20}

	<div class="col-30">
		<a href="{list_view}">
		<div class="novelElem" click="redirect">
			<div class="container-title">{list_name}</div>

			<div class="vip">图片专区</div>
			<div class="type">{type_name}</div>
		</div>
		</a>
	</div>

			 {/pic_list}
		 




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
