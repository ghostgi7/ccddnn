<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>
		{cms_title}
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

                        {video_hot}
                            <div class="top_js">
                                <div style="PADDING: 5px;FLOAT: left;FONT-SIZE: 14px;">
                                    <font color="red">
                                        {type_name}
                                </div>
                            </div>

                            <div class="cont" style="BORDER-TOP: #aac6eb 1px solid;">
                                <div class="lit">
                                    <ul class="right">
                                         {video_list:8}
                                            <li>
                                                <a href=" {list_view}"><img src="{list_pic}" /></a>
                                                <dd> <a href=" {list_view}">
                                                        <font color="" title="">
                                                            {list_name}
                                                        </font>
                                                    </a></dd>
                                                <dd>
                                                    <p>Date：<font color="red">时间：
                                                            {list_time}
                                                        </font>
                                                    </p>
                                                </dd>
                                            </li>
                                         {/video_list}

                                    </ul>
                                </div>
                            </div>

                        {/video_hot}



                        {if $cms_config['live_status']=='1'}

                            <div class="top_js">
                                <div style="PADDING: 5px;FLOAT: left;FONT-SIZE: 14px;">
                                    <font color="red">直播频道
                                </div>
                            </div>

                            <div class="cont" style="BORDER-TOP: #aac6eb 1px solid;">
                                <div class="lit">
                                    <ul class="right">
                                    {live_hot_list:8}
                                            <li>
                                                <a href=" {list_view}"><img src=" {list_pic}" /></a>
                                                <dd> <a href=" {list_view}">
                                                        <font color="" title="">
                                                             {list_name}
                                                        </font>
                                                    </a></dd>
                                                <dd>
                                                    <p>Date：<font color="red">时时直播</font>
                                                    </p>
                                                </dd>
                                            </li>
                                     {/live_hot_list}




                                    </ul>
                                </div>
                            </div>

                        {/if}




						<div class="top_js">
							<div style="PADDING: 5px;FLOAT: left;FONT-SIZE: 14px;">
								
									友情链接
							</div>
						</div>

						<div class="cont" style="BORDER-TOP: #aac6eb 1px solid;">
							<div class="lit">
								 {cms_link}
							</div>
						</div>

					</div>
				</div>
			</div>

		</div>


		{include file="footer.php"}

</body>

</html>