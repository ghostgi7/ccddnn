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
            <!-- 详细信息 -->
            <div class="stui-pannel clearfix">
                <div class="stui-content col-pd clearfix">
                    <div class="stui-content__thumb fl-l">                                 
                        <a class="pic" href="{cmsobj_view}" title="{cmsobj_name}">
                            <img class="img-responsive lazyload" data-original="{cmsobj_pic}" src="{cms_template}/assets/images/load.gif" style="width: 414px;" />
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
                        </div>
                        <div class="playbtn">
                            <a class="btn btn-primary" href="{cmsobj_view}#bofang">备用线路</a>
                        </div>
                        <div class="playbtn o-bg">
                        </div>
                    </div>  
                </div>              
            </div>
            <!-- end 详细信息 -->

            <div class="partialViewSlider-outerwrapper">
                {cms_banner_b}
            </div>
            
            <!-- 猜你喜欢 -->
            <div class="stui-pannel clearfix">
                <div class="stui-pannel__head clearfix">
                    <h3 class="title">
                        猜你喜欢
                    </h3>                       
                </div>
                <ul class="stui-vodlist__bd clearfix">
                    {video_list:8}  
                    <li class="stui-vodlist__item">
                        <a class="stui-vodlist__thumb lazyload" href="{list_detail}" title="{list_name}" data-original="{list_pic}" style="background-image: url({cms_template}/assets/images/load.gif);">
                            <span class="play hidden-xs"></span>        
                        </a>                                    
                        <h4 class="stui-vodlist__title"><a href="{list_detail}" title="{list_name}">{list_name}</a></h4>       
                    </li>
                    {/video_list} 
                </ul>
            </div>
            <!-- end 猜你喜欢 -->
        </div>
    </div>

{include file="footer.php"}

</body>
</html>