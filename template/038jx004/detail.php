<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="minimum-scale=0.5,maximum-scale=1.0,user-scalable=no, initial-scale=1.0"/>
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <meta name="renderer" content="webkit">
    <meta name="applicable-device" content="pc,mobile">
    <title>{cmsobj_name} - {cms_title}</title>
    <meta name="description" content="{cmsobj_name},{cms_description}" />
    <meta name="keywords" content="{cmsobj_name},{cms_keywords}" />
    {include file="include.php"}
</head>

<body>
{include file="header.php"}
            <div class="stui-pannel clearfix">
                <div class="stui-content col-pd clearfix">
                    <div class="stui-content__thumb fl-l">                                      
                        <a class="pic" href="{cmsobj_view}" title="{cmsobj_name}">
                            <img class="img-responsive" src="{cmsobj_pic}"/>
                        </a>                                        
                    </div>
                    <div class="stui-content__detail fl-l">
                        <h3 class="title">{cmsobj_name}</h3>
                        <p class="data"><span>分类：</span> 
                            {cmsobj_typename}
                        </p>
                        <p class="data"><span>更新时间：</span>{cmsobj_time}</p>
                        <p class="data"><span>播放次数：</span><?php  echo rand(5, 10000); ?></p>
                        <p class="data"><span>点赞次数：</span><?php  echo rand(5, 10000); ?></p> 

                        <div class="playbtn">
                            <a class="btn btn-primary" href="{cmsobj_view}">立即播放</a>
                            <a class="btn btn-primary" href="{cmsobj_view}#bofang">备用线路</a>
                        </div>
                        <div class="playbtn o-bg">
                        </div>
                    </div>  
                </div>              
            </div>

            <div class="partialViewSlider-outerwrapper">
                {cms_banner_b}
            </div>

    <div class="related-videos" id="list_videos_related_videos">
        <ul class="list-sort" id="list_videos_related_videos_filter_list">
            <li><span>猜你喜欢</span></li>
        </ul>
        <div class="box">
                    <div class="list-videos">
                        <div class="margin-fix" id="list_videos_videos_watched_right_now_items">
                        {video_list:12}
                        <div class="item">
                            <a href="{list_detail}" title="{list_name}">
                                <div class="img">
                                    <img class="thumb" src="{list_pic}" alt="{list_name}" style="height: 135px" ;/>
                                </div>
                                <strong class="title">
                                    {list_name}
                                </strong>
                                <div class="wrap">
                                    <!-- <div class="duration">
                                        {9CCMS-Index:Time}
                                    </div> -->
                                    <div class="rating negative">
                                        {list_hit}
                                    </div>
                                    <div class="rating positive">
                                        <?php  echo rand(5, 10000); ?>
                                    </div>
                                </div>
                            </a>
                        </div>
                        {/video_list}
                        </div>
                    </div>
                </div>
    </div>
</div>
{include file="footer.php"}

 </body>
</html>