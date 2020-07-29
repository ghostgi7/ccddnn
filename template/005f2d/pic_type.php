<!DOCTYPE html>
<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>
		{cms_title}-文章列表
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
				<h3>
					<span class="detail_right_span">
						图片专区-{type_name}|公告：
						{cms_notice}
					</span>
				</h3>
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

				<!-- 分页 -->
				<ul class="nextPage">
                    <a href=" {cms_page:first}">首页</a>
                    <a href=" {cms_page:prev}">上一页</a>
                    <a href="javascript:;">共{cms_page:count}页</a>
                    <a href="javascript:;">当前{cms_page:current}页</a>
                    <a href=" {cms_page:next}">下一页</a>
                    <a href=" {cms_page:last}">尾页</a>
				</ul>
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