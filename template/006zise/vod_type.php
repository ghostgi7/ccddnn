<!DOCTYPE html>
<html>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>{cms_title}</title>
	<meta name="keywords" content="{cms_keywords}" />
	<meta name="description" content="{cms_description}" />
    <meta name="googlebot" content="noindex,nofollow" />
    <link rel="stylesheet" href="{cms_template}/css/index.css" />
</head>
<body>
 {include file="header.php"}
 <div id="warp">
	<div id="main">
	<div class="box">
	 <div id="right">
		<div class="list">
		<div class="top_js"><div style="PADDING: 5px;FLOAT: left;FONT-SIZE: 14px;"><font color="red">视频分类：{type_name}</div></div>

			<div class="cont" style="BORDER-TOP: #aac6eb 1px solid;">
			     <div class="lit">
				<ul class="right" >
                    {video_list:16}
					<li> 
						<a href=" {list_view}"><img src="{list_pic}"/></a>
                        <dd> <a href=" {list_view}" ><font color="" title="">{list_name}</font></a></dd>
                         <dd><p>Date：<font color="red">时间：{list_time}</font></p></dd>
                    </li>
					 {/video_list}
	
				</ul>
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
	
</div></div>
{include file="footer.php"}
</body>
</html>		
