<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta name="viewport" content="maximum-scale=1.0,minimum-scale=1.0,user-scalable=0,width=device-width,initial-scale=1.0,user-scalable=no" /> 
  <meta name="renderer" content="webkit" /> 
  <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1" /> 
    <meta charset="utf-8" />
	<title>正在播放 {cmsobj_name}</title>
	<meta name="keywords" content="{cms_keywords}" />
	<meta name="description" content="{cms_description}" />
    <link rel="stylesheet" href="{cms_template}/css/index.css" />
</head>
<body>
{include file="header.php"}

  <div id="warp">
<div id="main">
		<div class="box">
			<div id="content1" class="border"><div class="title"><h4>{cmsobj_name}</h4></div></div>
	</div>


	<div class="box">

			<div id="content">
				<div class="intro">
					<div class="player" style="height:400px">
						{cmsobj_content}
					</div>
				</div>
	        </div>
	</div>
	<div class="top_js">
		{cms_banner_b}
        <div class="list">
            <div class="top_js"><div style="PADDING: 5px;FLOAT: left;FONT-SIZE: 14px;"><font color="red">视频推荐</div></div>

            <div class="cont" style="BORDER-TOP: #aac6eb 1px solid;">
                <div class="lit">
                    <ul class="right" >
                        {video_list:8}

                        <li>
                            <a href=" {list_view}"><img src="{list_pic}"/></a>
                            <dd> <a href=" {list_view}" ><font color="" title="">{list_name}</font></a></dd>
                            <dd><p>Date：<font color="red">时间：{list_time}</font></p></dd>
                        </li>
                        {/video_list}

                    </ul>
                </div>
            </div>

        </div>
	</div>
</div>

</div>



{include file="footer.php"}
</body>
</html>
