<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=gbk">
		<title>{cmsobj_name} -{cmsobj_typename}-{cms_title}视频介绍</title>
		<meta name="keywords" content="{cms_keywords},{cms_title},{cmsobj_typename}" />
		<meta name="description" content="{cms_description},{cms_title},{cmsobj_typename}" />
		<meta name="referrer" content="no-referrer">
		{include file="include.php"}
	</head>
	<body>
		{include file="header.php"}
			<div class="t" style="margin-bottom:0; border-bottom:0">
				<table cellspacing="0" cellpadding="0" width="100%" align="center">
					<tr>
						<td class="h"> --> <b>本頁主題:</b>{cmsobj_name}</td>
						<td class="h" style="text-align:right;"></td>
					</tr>
				</table>
			</div>

			<a name="#tpc"></a>
			<div class="t t2" style="border-top:0">
				<table cellspacing="0" cellpadding="0" width="100%" align="center">
					<tr class="tr1 do_not_catch">
						<th height="100%" valign="top" style="padding:5px 15px 0 15px; border:0;width:80%; overflow:hidden">
							<table width="100%" align="center" cellspacing="0" cellpadding="0" style="WORD-WRAP: break-word; height:100%;">
								<tr height="100%">
									<td bgcolor="" valign="top">
										<h4>{cmsobj_name}</h4>
										<br>
										<div class="c"></div>
										<br>
										<div id="video-entry">
											<div id="javhd" class="jwplayer jw-reset jw-state-idle jw-stretch-uniform jw-flag-aspect-mode jw-skin-javhd jw-breakpoint-4 jw-flag-user-inactive"
											 tabindex="0" aria-label="Video Player" role="application" style="width: 100%;">
												 <style type="text/css">
													@media screen and (min-width:1000px){
														.playBox{
															height: 400px;
														}
													}
													@media screen and (max-width:1000px){
														.playBox{
															height: 200px;
														}
													}
												 </style>
												<div class="jw-aspect jw-reset playBox" align="center">
													{cmsobj_content}
												</div>
											</div>
										</div>
									</td>
								</tr>
							</table>
						</th>
					</tr>
					<div class="t" style="margin:3px auto">
						<table cellspacing="0" cellpadding="0" width="100%" id="ajaxtable">
							<tbody style="table-layout:fixed;">
								<tr>
			{cms_banner_b}
								</tr>
								<tr class="tr2 tac">
									<td>状态</td>
									<td style="width:62%">视频名称</td>
									<td style="width:10%">评分</td>
									<td style="width:6%">浏览量</td>
									<td style="width:17%">发布者</td>
								</tr>
								{video_list:18}
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
									<td>{list_hit}</td>
									<td><a href="{list_view}" class="f10">{cms_title}</a>
								</tr>
								{/video_list}
								<tr>
									<td style="height:8px"></td>
								</tr>
							</tbody>
						</table>
					</div>
				</table>
			</div>
		{include file="footer.php"}
	</body>
</html>
