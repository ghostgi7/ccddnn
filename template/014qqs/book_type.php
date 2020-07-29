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

	<div class="wrap mt20">
		<div class="box movie2_list art_list">
			<div class="title">
				<div style="color:#ffffff; background-color:#008b8b">
					<h3>
						小说专区-{type_name}
					</h3>
				</div>
			</div>

			<div>
				<ul class="art-list">
					   {book_list:20}
					<li>
						<p>
							<a href="{list_view}" target="_blank">
								{list_name}
							</a>
						</p>
						<span>{list_time}</span>
					</li>
					 {/book_list}
				</ul>
			</div>

			<div class="pagination" style="margin-bottom: 15px;">

				    <a href="{cms_page:first}">首页</a>
				    <a href="{cms_page:prev}">上一页</a>
					<a href="javascript:;">共{cms_page:count}页</a>
					<a href="javascript:;">当前第 {cms_page:current}页</a>
					<a href="{cms_page:next}">下一页</a>
					<a href="{cms_page:last}">尾页</a>

			</div>
		</div>

		
	</div>
	</div>
	</div>


	{include file="footer.php"}

</body>

</html>