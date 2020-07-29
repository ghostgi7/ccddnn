<html>
<head>
	<title>{cmsobj_name}-{cmsobj_typename}-{cms_title}小说内容</title>
	<meta name="keywords" content="{cms_keywords},{cmsobj_typename},{cmsobj_name}" />
	<meta name="description" content="{cms_description},{cmsobj_typename},{cmsobj_name}" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE10" />
	<meta name="renderer" content="webkit|ie-comp|ie-stand">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">				
{include file="include.php"}
</head>
<body>
<div class="container">
	<div class="row">
	{include file="header.php"} 
	<div class="stui-pannel clearfix">
				<div class="type-list-fl">
		    		<ul class="clearfix">
					{cms_notice}
		    		</ul>
		    	</div>
	</div>


			<div class="stui-pannel clearfix">
				<div class="stui-pannel__head clearfix">
					<span class="hidden-sm hidden-xs pull-right"></span>
					<h3 class="title">{cmsobj_name}</h3>
				</div>
			{cmsobj_content}
			
			<div  style="width:100%; height:100% >{cmsobj_content}</div>
			</div>
			<div class="stui-header__menu clearfix">
{cms_banner_b}
			</div>	
{include file="footer.php"}		
	</div>
</div>

 </body>
</html>
