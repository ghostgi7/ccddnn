  <footer class="page_bottom"> 
   <div class="flex_row wapper_wide"> 
    <a href="/" class="logo logo_b"></a> 
    <div class="text">
	广告合作联系方式：{cms_email}<br>
     本站为综合资源类型站点，各种热门、优质、高清的资源是我们的追求，也是对广大用户的保障。本站集合在线播放，先锋缓存下载播放，优播急速缓存下载播放为一体，让广大用户有更多更优质的体验。您的认可和肯定就是对我们最好的赞赏，欢迎关注本站右侧微信公众号，让您过上一天N女友的幸福生活。
    </div> 

   </div> 
  </footer> 
  <div class="cover"></div> 

  <div class="left_bread"> 

   <a class="link iconfont icon_uptop" href="#top"></a> 
  </div>  
  <script src="{cms_template}/js/js.js"></script>

  
  <script>
    
    $(function(){
        var begin1=0;
        var rollDom=$('.scroll');
        var wideRoll=parseInt(rollDom.width());
        var begin2=0;
        var marquee=$('.marquee .p');
        var wideMarquee=parseInt(marquee.width());
        $('.banner .showcase').append(rollDom.clone(true)).append(rollDom.clone(true));
        $('.marquee').append(marquee.clone(true));
        var roll1=setInterval(function(){
            begin1-=2;
            rollDom.css({'margin-left': begin1+'px'}) 
            if(-begin1>=wideRoll){
                begin1=0;
            }
        },20)
        var roll2=setInterval(function(){
            begin2-=1;
            marquee.css({'margin-left': begin2+'px'}) 
            if(-begin2>=wideMarquee){
                begin2=0;
            }
        },20)
    });
    
</script>
  {cms_tj}

 