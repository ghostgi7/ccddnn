<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	<title>
		{cms_title}
	</title>
	<meta name="keywords" content="{cms_keywords}" />
	<meta name="description" content="{cms_description}" />
	<link rel="stylesheet" href="{cms_template}/css/index.css" />
	<script src="https://raw.github.com/HubSpot/pace/v1.0.0/pace.min.js"></script>
	<style>
		.pace {
			-webkit-pointer-events: none;
			pointer-events: none;

			-webkit-user-select: none;
			-moz-user-select: none;
			user-select: none;
		}

		.pace-inactive {
			display: none;
		}

		.pace .pace-progress {
			background: #29d;
			position: fixed;
			z-index: 2000;
			top: 0;
			right: 100%;
			width: 100%;
			height: 2px;
		}

	</style>
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

                            {video_hot}
                                <div class="box">
                                    <div class="bmenu">
                                        <div class="bmenul" style="width:300px;">
                                            <h2 style="float:left;">
                                                {type_name}
                                            </h2>
                                        </div>
                                        <div class="clear"></div>
                                    </div>
                                    <div style="margin-left:14px;">

                                         {video_list:10}
                                            <div class="video_box">
                                                <a href=" {list_view}" target="_blank"><img src="{list_pic}"
                                                                                                                                                     width="160" height="120"><br>
                                                    <span class="font-13 ">
												{list_name}</span><br></a>

                                                <div class="clear_right"></div>
                                                <div class="box_left">时间：
                                                    {list_time}
                                                </div>
                                            </div>
                                        		 {/video_list}

                                        <div class="clear_left"></div>
                                    </div>
                                </div>
                                
                            {/video_hot}

                            
                            {if $cms_config['live_status']=='1'}

                                <div class="box">
                                    <div class="bmenu">
                                        <div class="bmenul" style="width:300px;">
                                            <h2 style="float:left;">直播频道</h2>
                                        </div>
                                        <div class="clear"></div>
                                    </div>
                                    <div style="margin-left:14px;">
                                        
                                        {live_hot_list:10}


                                            <div class="video_box">
                                                <a href=" {list_view}" target="_blank"><img src=" {list_pic}"
                                                                                                                                           width="160" height="120"><br>
                                                    <span class="font-13 ">
												 {list_name} </span><br></a>

                                                <div class="clear_right"></div>
                                                <div class="box_left">时时直播</div>
                                            </div>
                                        		 {/live_hot_list}


                                        <div class="clear_left"></div>
                                    </div>
                                </div>
                                
                            {/if}





							<div align="center"></div>


							<div class="box">
								<div class="bmenu">
									<div class="bmenul" style="width:300px;">
										<h2 style="float:left;">友情链接</h2>
									</div>
									<div class="clear"></div>
								</div>
								<div style="margin-left:14px;">
									{cms_link}
									<div class="clear_left"></div>
								</div>
							</div>
							
						</div>



					</div>
				</div>
			</div>
		</div>
	</div>



	{include file="footer.php"}

</body>

</html>