<!DOCTYPE html>
<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>
		{cms_title}
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
			<div class="detail_right_div">
                {video_hot}
                    <h3>
					<span class="detail_right_span">
						{type_name}|公告：
						{cms_notice}</span>
                    </h3>

                    <ul>
                         {video_list:6}
                            <li>
                                <p class="img">
                                    <img class="lazy" src="{list_pic}" alt="{list_name}" title="{list_name}" onerror="this.src='{cms_template}/img/loading.gif'" />
                                    <a href="{list_view}"></a>
                                </p>
                                <p>
                                    {list_name}
                                </p>

                                <p>
                                    <i>
                                        {list_time}</i>
                                    <strong>
                                          {list_hit} 观看</strong>
                                </p>
                            </li>
                             {/video_list}

                    </ul>
                    
                {/video_hot}





                
                {if $cms_config['live_status']=='1'}

                    <h3>
					<span class="detail_right_span">时实直播|公告：{cms_notice}</span>
                    </h3>

                    <ul>
                    {live_hot_list:6}
                            <li>
                                <p class="img">
                                    <img class="lazy" src=" {list_pic}" onerror="this.src='{cms_template}/img/loading.gif'" />
                                    <a href=" {list_view}"></a>
                                </p>
                                <p>
                                     {list_name}
                                </p>

                                <p>
                                    <i>直播频道</i>
                                    <strong>
                                          {list_hit} 观看</strong>
                                </p>
                            </li>
                    {/live_hot_list}
                    </ul>
                {/if}

				<h3>
					<span class="detail_right_span">友情链接</span>
				</h3>

				<ul class="ylinks">
					 {cms_link}

				</ul>

			</div>

		</div>

	</div>


	</div>
	<div style="clear:both;"></div>
	</div>
	</div>

	{include file="footer.php"}
</body>

</html>