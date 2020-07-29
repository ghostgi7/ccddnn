<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>
		{cmsobj_name}在线阅读 - {cms_title}
	</title>
	<meta name="keywords" content="{cms_keywords}" />
	<meta name="description" content="{cms_description}" />
	<link rel="stylesheet" href="{cms_template}/css/index.css" />
</head>

<body>
	{include file="header.php"}
	<div id="warp">

		<!--頭部結束-->
		<div class="top_js">
			<div style="PADDING: 5px;FLOAT: left;FONT-SIZE: 14px;">
				<font color="red">重要通知：</font>
				{cms_notice}
			</div>
		</div>
		<div id="main">
			<div class="box">
				<div id="right">
					<div class="list">
						<div class="top_js">
							<div style="PADDING: 5px;FONT-SIZE: 14px;">
								<font color="red">
									<h3 class="art-h3">
										{cmsobj_name}
									</h3>
							</div>
						</div>

						<div class="cont" style="BORDER-TOP: #aac6eb 1px solid;">
							<div class="book-content">
									<span>{cmsobj_content}</span>
							</div>
						</div>

					</div>
				</div>
			</div>

		</div>


		{include file="footer.php"}

</body>

</html>