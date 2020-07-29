<!DOCTYPE html>
<html>

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>
        {cmsobj_name} - {cms_title}
	</title>
	<meta name="keywords" content="{cms_keywords}" />
	<meta name="description" content="{cms_description}" />
	<link href="{cms_template}/images/bootstrap.css" rel="stylesheet">
	<link href="{cms_template}/images/nky.css" rel="stylesheet">
	<link href="{cms_template}/images/font-awesome.min.css" rel="stylesheet">
	<link href="{cms_template}/images/simple-line-icons.min.css" rel="stylesheet" type="text/css">
	<link href="{cms_template}/images/default.css" rel="stylesheet">
	<link href="{cms_template}/images/layout.css" rel="stylesheet" type="text/css">
	<link href="{cms_template}/images/custom.css" rel="stylesheet" type="text/css">
	<script src="{cms_template}/js/jquery.js"></script>
	<script src="{cms_template}/js/jq/jquery.lazyload.js"></script>
	<script src="{cms_template}/js/jq/jquery.autocomplete.js"></script>
	<script src="{cms_template}/js/home.js"></script>
	<script src="{cms_template}/js/tpl.js"></script>
</head>

<body class="ad-box">
	
	{include file="header.php"}
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">
				{cmsobj_name}
			</h1>
		</div>
	</div>
	<hr>
	<div class="row">
		<ul class="art-list">
			<div class="book-content">
					<span>{cmsobj_content}</span>
			</div>
			
		</ul>

		
	</div>

	{include file="footer.php"}
</body>

</html>