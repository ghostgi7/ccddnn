
<footer id="footer" class="py-5">
  <div class="container">

    <p class="text-center">广告合作联系方式：{cms_email}Copyright © 2018 {cms_title} All Rights Reserved.</p>
  </div>
</footer>


<script src="{cms_template}/js/zepto.min.js"></script>
<script src="{cms_template}/js/broadCaster.js"></script>

<script>
  (function(){
    // 运行该函数
    $('#broadcaster').broadCaster();

    // 公告栏 文字滚动
    var begin2 = 0;
    var marquee = $('.marquee p');
    var wideMarquee = parseInt(marquee.width());
    $('.marquee').append(marquee.clone(true));

        var roll2 = setInterval(function () {
        begin2 -= 1;
        marquee.css({ 'margin-left': begin2 + 'px' })
        if (-begin2 >= wideMarquee) {
            begin2 = 0;
        }
    }, 20);
    
  }());
</script>
{cms_tj}