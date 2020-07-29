<!DOCTYPE html>
<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>
		{cms_title}-图片阅读
	</title>
	<meta name="keywords" content="{cms_keywords}" />
	<meta name="description" content="{cms_description}" />
	<link rel="stylesheet" type="text/css" href="{cms_template}/css/reset.css" />
	<link rel="stylesheet" type="text/css" href="{cms_template}/css/base.css" />
	<link rel="stylesheet" type="text/css" href="{cms_template}/css/main.css" />
	<script type="text/javascript" src="{cms_template}/js/jquery-1.8.3.min.js"></script>
	<script type="text/javascript" src="{cms_template}/js/main.js"></script>
</head>

<body>
	{include file="header.php"}
	<div class="detail_right">
		<!-- 首页 -->
		<div class="detail_tab detail_tab2">
			<div class="detail_right_div_1">
				<h3 class="art_h3">
					{cmsobj_name}
				</h3>

				<div class="img-content">
						{cmsobj_content}
				</div>
			</div>

		</div>
		<!-- 首页 -->
	</div>


	</div>
	<div style="clear:both;"></div>
	</div>
	</div>
	<!-- 正文 -->
	{include file="footer.php"}
</body>

</html>