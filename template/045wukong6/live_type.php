    <html lang="zh-cn">
    <head> 
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{type_name}-{cms_title}</title>
    <meta name="keywords" content="{type_name}-{cms_keywords} ">
    <meta name="description" content="{type_name}-{cms_description}">
{include file="include.php"}
    <script>ver = "20200515"</script>
    </head>
    <body class="scroll-up has-ad">
{include file="header.php"} 

    <div class="container mt20">
        <div>


        </div>
        <div id="app" class="mt10">
            <div class="video-filter">
                <dl>
                    <dt>
                        <span>直播专区</span>
                    </dt>
                    <dd>
        {live_menu} <a href="{menu_link}" class="btn btn-sm btn-primary">{menu_name}</a>{/live_menu}
                    </dd>
                </dl>
            </div>
            
                <div class="box">
                    <div class="head-title">
                        <h4 class="mb0">关键词：<span class="text-red">{type_name}</span></h4>
                    </div>
                </div>
            
            
                <div class="video-list">
                    <ul>
                        
                            
     {live_list:16}                           
    <li class="video-item space-sm">
        <div class="white">
            <div class="video-thumb">
                <div
                        data-original="{list_pic}"
                        data-picthumb="{list_pic}"
                        class="lazy video-thumb-image"
                        data-href="{list_view}"
                        style="background-image: url('{cms_template}/static/assets/images/thumb.png');"
                ><img src="" /></div>
                <div class="video-item-tags flex space-between">
                    <div>
                        
                            <span data-id="5061" class="video-tuijian">推荐</span>
                        
                        
                        
                            <span data-id="1" class="video-hd">HD</span>
                        
                    </div>
                    <span class="video-time text-shadow-black">
                      {list_time} 
                </span>
                </div>
                
                
                
            </div>
            <div class="video-item-title">
                <a href="{list_view}" target="_blank"> {list_name}</a>
            </div>
            <div class="video-nums">
                <i class="iconfont iconplay_icon_view"></i>{list_hit}万
            </div>
        </div>
    </li>
    {/live_list}
            </div>
			<div class="clearfix mb10">
			   <ul class="pager pull-right">
				   <li class="previous"><a href="{cms_page:first}">首页</a></li>
			        <li class="previous"><a href="{cms_page:prev}">«</a></li>
			        <li ><a href="{cms_page:next}">{cms_page:current}/{cms_page:count}</a></li>
			        <li class="next"><a href="{cms_page:next}">»</a></li>
					<li class="previous"><a href="{cms_page:last}">尾页</a></li>
			    </ul>
			</div>
{include file="footer.php"}
    </body>
    </html>