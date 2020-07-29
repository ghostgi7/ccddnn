<!DOCTYPE html>

<html>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>{type_name} - {cms_title}</title>
	<meta name="keywords" content="{cms_keywords}" />
	<meta name="description" content="{cms_description}" />
    <meta name="googlebot" content="noindex,nofollow" />
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
					<div class="bmenul" style="width:300px;"><h2 style="float:left;">直播分类：{type_name}</h2></div>
					<div class="clear"></div>
				  </div>
				  <div style="margin-left:14px;">
				  
						{live_list:20}

						<div class="video_box"> 
						<a href=" {list_view}" target="_blank"><img src=" {list_pic}" width="160" height="120"><br>
						<span class="font-13 "> {list_name} </span><br></a>
	
						<div class="clear_right"></div>
						<div class="box_left">时时直播</div>
						</div>
					 {/live_list}

				<div class="clear_left"></div>
				</div>
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



<div align="center"></div>
</div>



</div></div></div></div></div>
 
 
 
{include file="footer.php"}
</body>
</html>		
