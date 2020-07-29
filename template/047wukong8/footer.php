<div class="stui-foot clearfix">
	<p><a href="/">返回首页</a><span class="split-line"></span><a href="javascript:scroll(0, 0)">返回顶部</a></p>
	<div class="hidden-xs fo-t">
		<p>联系方式：{cms_email}</p>
		<p>若本站收录内容无意侵犯了贵公司权益，请联系底部邮箱，我们将尽快处理相关内容。</p>
	</div>						
	<div class="visible-xs fo-t1">
	    <p>本站只提供WEB页面服务，不提供影片录制和储存服务</p>
        <p>若本站收录内容侵犯了贵公司权益{cms_tj}</p>

    </div>
</div>


<script type="text/javascript" src="{cms_template}/static/js/jquery_lazyload.js"></script>
<script type="text/javascript">
	$(".lazyload").lazyload({
		effect: "fadeIn",
		threshold: 200,
		failurelimit: 15,
		skip_invisible: false
	})
</script>
<script>
$(document).ready(function(){
	var partialView = $('#partial-view').partialViewSlider();

	$('#prev').on('click', function(){
		partialView.prev();
	});
	$('#next').on('click', function(){
		partialView.next();
	});
	$('#play').on('click', function(){
		partialView.play();
	});
	$('#pause').on('click', function(){
		partialView.pause();
	});
});
</script>

<script src="{cms_template}/static/js/dialog.js" type="text/javascript"></script>
