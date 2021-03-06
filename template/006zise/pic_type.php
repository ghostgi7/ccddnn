<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>
        {type_name} - {cms_title}
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
							<div style="PADDING: 5px;FLOAT: left;FONT-SIZE: 14px;">
								<font color="red">
									图片专区-{type_name}
							</div>
						</div>

						<div class="cont" style="BORDER-TOP: #aac6eb 1px solid;">
							<div class="lit">
								<div class="video-content">
									<ul class="art-list">
										{pic_list:20}
										<li>
											<p>
												<a href="{list_view}" target="_blank">
													{list_name}
												</a>
											</p>
											<span>{list_time}</span>
										</li>
										 {/pic_list}
					
									</ul>
								</div>	
							</div>
						</div>

						<div class="cont">
							<div class="page pabg">
								<div align="center">
                                    <a href="{cms_page:first}">首页</a>
                                    <a href="{cms_page:prev}">上一页</a>
                                    <a href="javascript:;">共{cms_page:count}页</a>
                                    <a href="javascript:;">当前第{cms_page:current}页</a>
                                    <a href="{cms_page:next}">下一页</a>
                                    <a href="{cms_page:last}">尾页</a>
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