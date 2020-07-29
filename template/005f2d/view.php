<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>正在播放 {cmsobj_name}</title>
	<meta name="keywords" content="{cms_keywords}" />
	<meta name="description" content="{cms_description}" />
	<meta name="keywords" content="{cms_keywords}" />
	<meta name="description" content="{cms_description}" />
	<link rel="stylesheet" type="text/css" href="{cms_template}/css/reset.css"/>
	<link rel="stylesheet" type="text/css" href="{cms_template}/css/base.css"/>
	<link rel="stylesheet" type="text/css" href="{cms_template}/css/main.css"/>
	<script type="text/javascript" src="{cms_template}/js/jquery-1.8.3.min.js"></script>
	<script type="text/javascript" src="{cms_template}/js/main.js"></script>
</head>
<body>
{include file="header.php"}
<div class="detail_right" style="overflow: hidden; background: #fff; margin-top:20px; padding-left:10px;">
                <div class="gc_vidoe_nav">
                    <i class="icon iconfont icon-home"></i>
                                <span>您当前位置：</span>
                                <a href="javascript:;">{cms_title}</a>
                                <i class="icon iconfont icon-right"></i>
                                <a href="javascript:;" class="">视频播放</a>
                                <i class="icon iconfont icon-right"></i>
                                <span class="right">{cmsobj_name}</span>
                </div>

                <div class="gc_video_content">
                    <div class="gc_vodeo_left">
								<div style="height:400px;width:100%">
										{cmsobj_content}
								</div>				
                        <div class="watch" style="width:initial">
                            <span class="title"> {cmsobj_name}</span>
                            <span class="people"><em>  {cmsobj_hit} </em>次观看</span>

                            <span id="likes_msg" style="color:red;"></span>
                        </div>
                        <div class="watch" style="width:initial">
                            <span class="title">如果无法播放请刷新或者更换其他视频</span>

                        </div>
                    </div>



							                     <div class="gc_vodeo_right">
                         <div class="ps_3" style="margin-top: 0"></div>
                         <p class="moreVideo">相关视频</p>
                         <div class="videoMore">
                            <ul>
							

                        	    <li><p class="img"><img class="lazy" src="{cms_template}/images/1.jpg"/></p><p>{cms_title}</p></li>
								<li><p class="img"><img class="lazy" src="{cms_template}/images/2.jpg"/></p><p>{cms_title}</p></li>
								<li><p class="img"><img class="lazy" src="{cms_template}/images/3.jpg"/></p><p>{cms_title}</p></li>
							
							</ul>
                         </div>
                                              </div>


                </div>

				
				



            </div>
			
					<div class="detail_right">
            <div class="ps_2">
					{cms_banner_b}
			</div>
		</div>
			

			
			
			
			
			
			<div class="detail_right">
				<div class="detail_tab detail_tab2">
					<div class="detail_right_div">
						<h3> <span class="detail_right_span">相关视频|公告： {cms_notice}</span></h3>
						<ul>

						{video_list:6}
							<li>
							<p class="img">
								<img class="lazy" src="{list_pic}"  alt="{list_name}" title="{list_name}" onerror="this.src='{cms_template}/img/loading.gif'"/>
								<a href="{list_view}"></a>
							</p>
							<p>{list_name}</p>

							<p>
								<i>{list_time}</i>
								<strong>  {list_hit} 观看</strong>
							</p>
						</li>
								 {/video_list}
								   
						</ul>
					</div>
				</div>
			</div>

        </div>
    </div>
</div>
<!-- 正文 -->











{include file="footer.php"}
 
</body>
</html>
