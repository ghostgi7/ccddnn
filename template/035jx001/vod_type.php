<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE10" />
    <meta name="renderer" content="webkit|ie-comp|ie-stand">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <title>{type_name} - {cms_title}</title>
    <meta name="description" content="{type_name},{cms_description}" />
    <meta name="keywords" content="{type_name},{cms_keywords}" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    {include file="include.php"}
</head>
<body>
    <div class="container">
        <div class="row">
            {include file="header.php"}
            <div class="stui-pannel clearfix">
             <!-- 筛选 -->
                <div class="type-list-fl">
                    <ul class="clearfix">
                        <li><a href="javascript:(0)">视频专区-{type_name}</a></li>
                    </ul>
                </div>
             <!-- end 筛选 -->
    
                <!-- 列表 -->         
                <ul class="stui-vodlist clearfix">
                    {video_list:24}
                    <li class="stui-vodlist__item">
                        <a class="stui-vodlist__thumb lazyload" href="{list_detail}" title="{list_name}" data-original="{list_pic}" style="background-image: url({cms_template}/assets/images/load.gif);">   
                            <span class="play hidden-xs"></span>        
                        </a>                                    
                        <h4 class="stui-vodlist__title"><a href="{list_name}" title="{list_name}">{list_name}</a></h4>       
                    </li>
                    {/video_list}
                </ul>
                <!-- end 列表 -->

                
                <div id="wr-page">
                    {include file="page.php"}
                </div>

            </div>                          
        </div>
    </div>

{include file="footer.php"}

</body>
</html>