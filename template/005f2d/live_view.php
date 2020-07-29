<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
	<title>{cmsobj_name}正在直播中.... {cms_title}</title>
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
                               <i class="icon iconfont icon-home"></i>
                                <span>您当前位置：</span>
                                <a href="javascript:;">{cms_title}</a>
                                <i class="icon iconfont icon-right"></i>
                                <a href="javascript:;" class="">直播频道</a>
                                <i class="icon iconfont icon-right"></i>
                                <span class="right">{cmsobj_name}直播中</span>
                </div>

                <div class="gc_video_content">
                    <div class="gc_vodeo_left">
								<div style="width:100%">
									 {cmsobj_content}
								</div>				
                        <div class="watch" style="width:initial">实时直播-直播接口由本站提供</div>
                        <div class="watch" style="width:initial">
                            <span class="title">夜深人静最适合看直播了</span>

                        </div>
                    </div>



							                     <div class="gc_vodeo_right">
                         <div class="ps_3" style="margin-top: 0"></div>
                         <p class="moreVideo">相关视频</p>
                         <div class="videoMore">
                            <ul>
							

                        	    <li><p class="img"><img class="lazy" src="{cms_template}/images/zb.jpg"/></p><p>{cms_title}</p></li>
								<li><p class="img"><img class="lazy" src="{cms_template}/images/zb1.jpg"/></p><p>{cms_title}</p></li>
								<li><p class="img"><img class="lazy" src="{cms_template}/images/zb2.jpg"/></p><p>{cms_title}</p></li>
							
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
			

			


        </div>
    </div>
</div>
<!-- 正文 -->
{include file="footer.php"}
 
</body>
</html>