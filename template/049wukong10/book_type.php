<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=gbk">
		<title>{type_name}分类{cms_title}在线视频列表页面</title>
		<meta name="keywords" content="{cms_keywords},{cms_title}" />
		<meta name="description" content="{cms_description},{cms_title}" />
		{include file="include.php"}
	</head>
	<body>
		{include file="header.php"}
			<style>
				h3 a:visited{color:#676767}
			</style>
			<div class="t3" style="margin:8px auto">
				<table width="100%" cellspacing="0" cellpadding="0" align="center">
					<tr>
						<td>分类&raquo; 
					{book_menu}<a href="{menu_link}"> {menu_name}</a>{/book_menu}

						</td>
					</tr>
				</table>
			</div>
			<div class="t" style="margin:3px auto">
				<table cellspacing="0" cellpadding="0" width="100%" id="ajaxtable">
					<tr>
						<th class="h" colspan="5" style="width:100%">
							<a href="/">{type_name}</a><span>　版主{cms_title} 
							</span></th>
					</tr>
					<tbody style="table-layout:fixed;">
						<tr></tr>
						<tr class="tr2 tac">
							<td>状态</td>
							<td style="width:62%">小说列表</td>
							<td style="width:10%">评分</td>
							<td style="width:6%">浏览量</td>
							<td style="width:17%">发布者</td>
						</tr>
						{book_list:18}
						<tr class="tr3 t_one tac">
							<td><a href="{list_view}" target="_blank">
									✔
								</a></td>
							<td class="tal" style="padding-left:8px" id="">
								<h3><a href="{list_view}" target="_blank" id=""><b>
											<font color="red">{list_name}</font>
										</b></a></h3>
							</td>
							<td><a href="{list_view}" class="bl"><?php echo rand(5,9) ?>.<?php echo rand(0,9) ?>分</a>
							</td>
							<td> {list_hit}</td>
							<td><a href="{list_view}" class="f10">{cms_title}</a>
						</tr>
						{/book_list}
						<tr>
							<td style="height:8px"></td>
						</tr>
					</tbody>
				</table>
			</div>
					<td align="left">
						<div class="pages">
							<a href="{cms_page:first}" id="last">首页</a>
							<a href="{cms_page:prev}" id="last">上一页</a>
							<a href="/" id="last">{cms_page:current}/{cms_page:count}</a>
							<a href="{cms_page:next}" id="last">下一页</a>
							<a href="{cms_page:last}" id="last">尾页</a>
						</div>
					</td>
			<table cellspacing="0" cellpadding="0" width="100%" align="center">
				<tr>
			{include file="footer.php"}
	</body>
</html>