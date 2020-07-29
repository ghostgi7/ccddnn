<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE10" />
    <meta name="renderer" content="webkit|ie-comp|ie-stand">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <title>{cmsobj_name} - {cms_title}</title>
    <meta name="description" content="{cmsobj_name},{cms_description}" />
    <meta name="keywords" content="{cmsobj_name},{cms_keywords}" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    {include file="include.php"}
</head>
<body>

<div class="container">
        <div class="row">
            {include file="header.php"}     
            <!-- 播放器  -->
            <div class="pl-box">
                <div class="stui-pannel clearfix">
                    <div class="stui-player col-pd">
                        <div class="stui-player__detail detail">
                           <div class="video-title">
                              <h2 class="title">{cmsobj_name}</h2>
                           </div>
                        </div>
                        <div style="clear: both;">
                           <p class="data ms-p margin-0">
                                <span class="text-muted hidden-xs">分类：</span>
                                    {type_name}
                                <span class="split-line"></span>
                                <span class="text-muted hidden-xs">更新时间：</span>
                                    {cmsobj_time}
                                <span class="split-line"></span>
                                <span class="text-muted hidden-xs">播放次数：</span>
                                    <?php  echo rand(5, 10000); ?>
                                <span class="split-line"></span>
                                <span class="text-muted hidden-xs">点赞次数：</span>
                                    <?php  echo rand(5, 10000); ?>
                           </p>
                           <div class="no-b">
                              <a href="javascript:void(0)">无法观看请等待5-8秒或更换其他影片</a>
                           </div>
                        </div>
                    </div>                                                                      
                </div>

                <div class="embed-responsive embed-responsive-16by9 clearfix" style="color: #fff; height: auto;line-height: 32px;font-size: 15px;z-index: 0;">
                    {cmsobj_content}
                </div>
            </div>

            <!-- end 播放器  -->

        
            
            <!-- 猜你喜欢 -->
            <div class="stui-pannel clearfix">
                <div class="stui-pannel__head clearfix">
                    <h3 class="title">
                        猜你喜欢
                    </h3>                       
                </div>
                <ul class="stui-vodlist__bd clearfix">
                    {pic_list:8}  
                    <li class="stui-vodlist__item">
                        <a class="stui-vodlist__thumb lazyload" href="{list_view}" title="{list_name}" data-original="{list_pic}" style="background-image: url({cms_template}/assets/images/load.gif);">
                            <span class="play hidden-xs"></span>        
                        </a>                                    
                        <h4 class="stui-vodlist__title"><a href="{list_view}" title="{list_name}">{list_name}</a></h4>       
                    </li>
                    {/pic_list} 
                </ul>
            </div>
            <!-- end 猜你喜欢 -->
        </div>
    </div>

{include file="footer.php"}

</body>
</html>

