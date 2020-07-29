<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	<title>
        {type_name} - {cms_title}
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
									<div class="bmenul" style="width:300px;">
										<h2 style="float:left;">
											图片专区-{type_name}
										</h2>
									</div>
									<div class="clear"></div>
								</div>
								<div style="padding:14px;">
									<!-- 图书列表页 -->
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
									<div class="clear_left"></div>
								</div>

								<div class="pagination">
									<ul>
                                        <li class="page-item"><a class="page-link" href="{cms_page:first}">首页</a>
                                        <li class="page-item"><a class="page-link" href="{cms_page:prev}">上一页</a>
                                        <li class="page-item"><a class="page-link" href="javascript:;">共{cms_page:count}页</a>
                                        <li class="page-item"><a class="page-link" href="javascript:;">当前第{cms_page:current}页</a>
                                        <li class="page-item"><a class="page-link" href="{cms_page:next}">下一页</a>
                                        <li class="page-item"><a class="page-link" href="{cms_page:last}">尾页</a>
									</ul>
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