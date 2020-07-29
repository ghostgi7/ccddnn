<!--广告联系方式调用方式
广告联系方式{cms_email}
-->

{cms_tj}

  <footer id="footer"> 
   <ul>
       <li><a href="/"><p><i class="fa fa-home fa-lg"></i></p><p>首页</p></a></li>
       <li><a href="{:U('vod','type',$cms_menu['vod'][0]['id'],1)}"><p><i class="fa fa-play-circle-o fa-lg"></i></p><p>视频</p></a></li>
       
       {if $cms_config['live_status']=='1'}

           <li><a href="{:U('live','type',$cms_menu['live'][0]['id'],1)}"><span><i class="fa fa-video-camera fa-lg"></i></span></a></li>
           
       {/if}


       <li><a href="{:U('pic','type',$cms_menu['pic'][0]['id'],1)}"><p><i class="fa fa-photo fa-lg"></i></p><p>图片</p></a></li>
       <li><a href="{:U('book','type',$cms_menu['book'][0]['id'],1)}"><p><i class="fa fa-book fa-lg"></i></p><p>小说</p></a></li>
   </ul>
  </footer> 