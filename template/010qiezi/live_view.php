<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>{cmsobj_name}正在直播中.... {cms_title}</title>
	<meta name="keywords" content="{cms_title}" />
	<meta name="description" content="{cms_title}" />
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
<div class="container">


	<div class="row">
			<!-- begin col-lg-8-->
			<div class="col-lg-12">
				<div class="row">
					<!-- Page Content UP AD-->

						<div class="col-md-12 center">

							<div class="col-lg-12">
								<h1 class="page-header">本直播为实时直播！</h1>
							</div>
						</div>
						
						<div class="col-md-12 center"id="cms_player">
								{cmsobj_content}
						</div>

		<div class="ad">
		{cms_banner_b}
	</div>

				</div>
			</div>
		</div>
	</div>















{include file="footer.php"}
 
</body>
</html>