<html>
<head>
	<title>{cmsobj_name}-{cmsobj_typename}-{cms_title}美图内容</title>
	<meta name="keywords" content="{cms_keywords},{cmsobj_typename},{cmsobj_name}" />
	<meta name="description" content="{cms_description},{cmsobj_typename},{cms_title}" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE10" />
	<meta name="renderer" content="webkit|ie-comp|ie-stand">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">				
{include file="include.php"}
<style>

.img-content{width:100%;position:relative}

.img-content img{max-width:100%}

</style>
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
<div class="img-content">

{cmsobj_content}

</div>
			<div class="stui-header__menu clearfix">
 {cms_banner_b}
			</div>
			
{include file="footer.php"}		
	</div>
</div>

 </body>
</html>



