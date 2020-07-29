<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=gbk">
		<title>{cms_title}</title>
		<meta name="keywords" content="{cms_keywords}" />
		<meta name="description" content="{cms_description}" />
		{include file="include.php"}
	</head>
	<body>
	{include file="header.php"}
			<div class="t">
				<table cellspacing="0" cellpadding="0" width="100%">
					<tr>
						<th class="h" colspan="6">
				
							&raquo; <h2><a href="index-1.html" class="cfont">最近更新</a></h2>
						</th>
					</tr>
					<tr></tr>
					<tr class="tr2 tac">
						<td width="*" colspan="2">分类</td>
						<td style="width:6%">视频数量</td>
						<td style="width:6%">评分</td>
						<td style="width:20%">最近发布</td>
						<td style="width:12%">版主</td>
					</tr>
					<tbody id="cate_1" style="">
						{new_list:vod,12}
						<tr class="tr3 f_one">
							<td class="icon tac" width="4%"><a href="thread0806-2.html" target="_blank">.:.</a></td>
							<th><a href="{list_detail}" target="_blank"></a>
								<h2><a href="{list_detail}">{list_name}</a></h2>
								<br><span class="smalltxt gray">{cms_description}</span>
							</th>
							<td class="tac"><span class="f12"><?php echo rand(50000,90000) ?></span><br></td>
							<td class="tac"><span class="f12"><?php echo rand(5,9) ?>.<?php echo rand(0,9) ?>分</span><br></td>
							<th>
								<a href="{list_detail}" class="a2" target="_blank"><?php echo $MYSQLVOD[$x]['d_name'] ?></a><br>
								<center> <span class="f10 gray"> {list_time}</span></center>
								&nbsp;</th>
							<td class="tac" style="word-break: keep-all;word-wrap:no-wrap">{cms_title}
								&nbsp;</td>
						</tr>
						{/new_list}
						<tr>
							<td style="height:8px"></td>
						</tr>
					</tbody>
				</table>
				{video_hot}
				<table cellspacing="0" cellpadding="0" width="100%">
					<tr>
						<th class="h" colspan="6">
				
							&raquo; <h2><a href="index-1.html" class="cfont">{type_name}</a></h2>
						</th>
					</tr>
					<tr></tr>
					<tr class="tr2 tac">
						<td width="*" colspan="2">分类</td>
						<td style="width:6%">视频数量</td>
						<td style="width:6%">评分</td>
						<td style="width:20%">最近发布</td>
						<td style="width:12%">版主</td>
					</tr>
					<tbody id="cate_1" style="">
						{video_list:12}
						<tr class="tr3 f_one">
							<td class="icon tac" width="4%"><a href="thread0806-2.html" target="_blank">.:.</a></td>
							<th><a href="{list_detail}" target="_blank"></a>
								<h2><a href="{list_detail}">{list_name}</a></h2>
								<br><span class="smalltxt gray">{cms_description}</span>
							</th>
							<td class="tac"><span class="f12"><?php echo rand(50000,90000) ?></span><br></td>
							<td class="tac"><span class="f12"><?php echo rand(5,9) ?>.<?php echo rand(0,9) ?>分</span><br></td>
							<th>
								<a href="{list_detail}" class="a2" target="_blank"><?php echo $MYSQLVOD[$x]['d_name'] ?></a><br>
								<center> <span class="f10 gray"> {list_time}</span></center>
								&nbsp;</th>
							<td class="tac" style="word-break: keep-all;word-wrap:no-wrap">{cms_title}
								&nbsp;</td>
						</tr>
						{/video_list}
						<tr>
							<td style="height:8px"></td>
						</tr>
					</tbody>
				</table>
				{/video_hot}
				<table cellspacing="0" cellpadding="0" width="100%">
					<tr>
						<th class="h" colspan="6">
				
							&raquo; <h2><a href="index-1.html" class="cfont">直播专区</a></h2>
						</th>
					</tr>
					<tr></tr>
					<tr class="tr2 tac">
						<td width="*" colspan="2">分类</td>
						<td style="width:6%">视频数量</td>
						<td style="width:6%">评分</td>
						<td style="width:20%">最近发布</td>
						<td style="width:12%">版主</td>
					</tr>
					<tbody id="cate_1" style="">
						{live_hot_list:12}
						<tr class="tr3 f_one">
							<td class="icon tac" width="4%"><a href="thread0806-2.html" target="_blank">.:.</a></td>
							<th><a href="{list_view}" target="_blank"></a>
								<h2><a href="{list_view}">{list_name}</a></h2>
								<br><span class="smalltxt gray">{cms_description}</span>
							</th>
							<td class="tac"><span class="f12"><?php echo rand(50000,90000) ?></span><br></td>
							<td class="tac"><span class="f12"><?php echo rand(5,9) ?>.<?php echo rand(0,9) ?>分</span><br></td>
							<th>
								<a href="{list_view}" class="a2" target="_blank"><?php echo $MYSQLVOD[$x]['d_name'] ?></a><br>
								<center> <span class="f10 gray"> {list_time}</span></center>
								&nbsp;</th>
							<td class="tac" style="word-break: keep-all;word-wrap:no-wrap">{cms_title}
								&nbsp;</td>
						</tr>
						{/live_hot_list}
						<tr>
							<td style="height:8px"></td>
						</tr>
					</tbody>
				</table>
			</div>
		{include file="footer.php"}
	</body>
</html>

.
