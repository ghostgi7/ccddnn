<html lang="zh-cn" class="os-windows screen-desktop-wide device-desktop"><head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>正在播放:{cmsobj_name} {cmsobj_typename} - {cms_title}</title>
    <meta name="keywords" content="{cms_keywords}">
    <meta name="description" content="{cms_description}">
 {include file="include.php"}
        <style>
            @-webkit-keyframes video-load{
                0%{
                    opacity: 1;
                }
                100%{
                    opacity: 0;
                }
            }
        </style>
</head>
    <body class="scroll-up has-ad" style="">
    

{include file="header.php"} 

    <div id="app">
      <div class="container mt20">
<div>{cms_banner_a}</div>
        <div class="video-view mt10">
          <div class="view-left">
            <div class="video-player">
        {cmsobj_content}
            </div>

            <h3>{cmsobj_name}
                    </h3>
					 <p class="text-gray">播放：{cmsobj_hit}万  发布日期：{cmsobj_time}</p>
					  <div class="mb20">
						  <div class="pull-left">
							  <div class="video-player-div-author">
								  <div class="video-player-div-author-img">
									  
								  </div> 
								  <div class="video-player-div-author-btn">
									  
								  </div>
								  </div>
								  </div> 
								  <div class="pull-right text-gray"></div> 
								  <i class="clearfix"></i></div> <div id="TWYSrFWwed"><div class="aasd-text">
</div>
</div> 

<div id="yeWtXmFwlq">
  <div>

   
  </div>
</div>
<div>{cms_banner_a}</div>
<div class="video-likes">
  <div class="list-title">
    <h3>视频推荐</h3>
    <div class="clearfix"></div>
  </div>
  <!---->
  <ul>
	  {rand_list:vod,6}
    <li class="video-item space-sm">
      <div class="white">
        <div class="video-thumb">
          <a target="_blank" href="{list_detail}" class="thumbnail">
            <div data-href="{list_detail}" class="lazy video-thumb-image" style="background-image: url({list_pic})"></div>
          </a>
          <div class="video-item-tags">
            <div class="video-item-tags-left">
              <!---->
              <span class="video-hd">HD</span></div>
            <span class="video-time text-shadow-black">{list_time}</span>
            <div class="clearfix"></div>
          </div>
        </div>
        <div class="video-item-title">
          <a href="{list_detail}">{list_name}</a></div>

      </div>
    </li>
{/rand_list}
    <i class="clearfix"></i>
  </ul>
</div>
</div>
<div class="view-right">
  <div class="list-title">
    <h3>随机推荐</h3>
    <div class="clearfix"></div>
  </div>
  <ul class="tuijian_list">
	  {rand_list:vod,12}
    <li>
      <a title="{list_name}" alt="{list_name}" target="_blank" href="{list_detail}" class="thumbnail">
        <div data-original="{list_pic}" class="lazy imgbg" style="display: block; background-image: url({cms_template}/static/image/thumb.png);"></div>
      </a>
      <a title="{list_name}" alt="{list_name}" target="_blank" href="{list_detail}" class="tuijian-list-item-title">{list_name}</a>
      <i class="clearfix"></i>
    </li>
	{/rand_list}
  </ul>
</div>
</body>
{include file="footer.php"}
</html>