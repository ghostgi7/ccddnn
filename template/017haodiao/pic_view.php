<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	<title>
        {cmsobj_name} - {cms_title}
	</title>
	<meta name="keywords" content="{cms_keywords}" />
	<meta name="description" content="{cms_description}" />
	<link rel="stylesheet" href="{cms_template}/css/index.css" />

</head>

<body>

	{include file="header.php"}
	<div id="container">
		<div id="content">
			<div class="clear">
				<div class="span-755">
					<div class="clear">
						<div style="margin-top:10px;margin-bottom:10px;">
							<!-- new videos -->
							<div class="box">
								<div class="bmenu">
									<div class="bmenul" style="width:100%;">
										<h2 style="text-align: center;">
											{cmsobj_name}
										</h2>
									</div>
									<div class="clear"></div>
								</div>
								<div style="padding:14px;">
									<div class="img-content">
											{cmsobj_content}
									</div>
									<div class="clear_left"></div>
								</div>

							</div>
						</div>



					</div>
				</div>
			</div>
		</div>
	</div>

	{include file="footer.php"}
</body>

</html>