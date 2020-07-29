
<!--header-->
<div class="header">
    <div class="logo" style="display: flex;">
        <a href="/" style="display: flex; justify-content: center; align-items: center;">
<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEgAAAA0CAYAAAApDX79AAAABGdBTUEAAK/INwWK6QAAABl0RVh0U29mdHdhcmUAQWRvYmUgSW1hZ2VSZWFkeXHJZTwAAANxSURBVHja7JtLaBNBGMdnt2mstolBY40PlPooCFaxWFDEg1AREXrwpIInhSKCgo+DDwTFx0F6EsSLgiCIgnhSRFAEoShYiCB4kB5aoTUaa6SkTdM06/9LZsPkVa26uzPN/OHXb2hJd/vr7GYeG4NNE8uyIiidYDNoAYtACMzndR5TI+PgJ0hw4mAAvAMvDcMYnNFvg5i14C6YsGZ/MuAhaKvkwqggZx/KbYV6x/9KGhxHb7pVVRDk7Ee5B0xWuzkGSTfKBEEO3WM+1GDPKU0GdEBSlJX0lAtaTi4+cLmoB6H3NKHEtKBCsmA5etGw3YP2ajlFIS8HxEusSzspS5d4idHl1aydFGUCBEzIWaLlVMwcsM7kUwidymkhQcu0h6pZSoIi2kPVRLwQ9AA8VkRQs8mXMNxMPwZgNO7aCl5JLihMgsJeHBmS3oAdaO4GUUkFLSRBC7w8A0h6htLOR679kgkKkaCQ12cBSRa4T+MOcBR8kURQkAQ1yfLvgqRJcBPNNeA8yy+Tepm5JKhRtgsfkpLgCpqrQQ9IeXQqDVIKEkR9B6fQbAV3wJQXgqRf5oCkz+AQmm0uj6FygupUGdZC0kc+htri0hjKVHJxHpLeujWGUnr3omQMNaQFVc4KsMupOaVPVSuWZdEU6Rw4wvKLW8wpQVmVehLfgTkB6O0/4PThSNCYTKPpacT4Ubr5CNutJeIUCUrKLAhi7C2YS8z95eGCIFnl7EG5CjZ4dApyCoKYbSjXwHaPTyUnKCGRmPUoNEmVZSNzlAT9kEDMSpSL4KBk76gJEhT3UAyth591eizzDxkhQd88Gsuc5ASYvImToJjLB90JDjM1tru/kqBhlw/aodCMJmY6NQueJRkiQQPaQ9UMGrhh0jNCI0yC7R/JQuvfQZP2pNDo1T7KEoWbMXtQ9lT7KMsT+mI/ghfmN+t67aWQVvSgT7kehEbcNqaTSy/JKfQg3os2ovQxhbaBHEwnBL1g4sQQ33iPcka7YT22HFY6c8YPrrP8Wm+mVuWA038ymWwHj0Daqo308dXLshi/EbUYhV64CdBi1iqW33/yK9pD6DNh4icO6Z77HFfO62ovMP5yuYKeCAmy/GJ/I68NJfgF6gV8AnVCtZ8ToHOyOFnOFCfDmeSkeaWn4lMCtFOTFBglMRAxPtO/9ZcAAwCpNLlagcMifwAAAABJRU5ErkJggg==" alt="Logo Image">        </a>
    </div>


    <div class="pull-right uplink hidden-xs" style="width:auto; margin-right: 15px;">
        <a href="{cms_domain1}" style="font-size:14px;color:#FFF;text-decoration:none">发布地址一</a>
		<a href="{cms_domain2}" style="font-size:14px;color:#FFF;text-decoration:none">发布地址二</a>
    </div>

    <h1 class="title"><a href="/" style="color:#FFF">{cms_title}</a></h1>

</div>
<!--header-->

<!--navs-->
<div class="navibar ">
    <a href="/" class="btn btn-link on"><small>首页</small></a>

					{video_menu}
                                <a class="btn btn-link on" href="{menu_link}"><small>{menu_name}</small></a>
                    {/video_menu}
    {hd_menu}
    <a class="btn btn-link on" href="{menu_link}"><small>{menu_name}</small></a>
    {/hd_menu}
    {book_menu}
    <a class="btn btn-link on" href="{menu_link}"><small>{menu_name}</small></a>
    {/book_menu}
    {pic_menu}
    <a class="btn btn-link on" href="{menu_link}"><small>{menu_name}</small></a>
    {/pic_menu}
    {if $cms_config['live_status'] == '1'}
    {live_menu}
    <a class="btn btn-link on" href="{menu_link}"><small>{menu_name}</small></a>
    {/live_menu}
    {/if}
</div>
<div class="alert alert-default text-center " style="margin:10px 4px 0 4px;padding:0" id="domaintip">  <div class="dropdown">公告：{cms_notice}</div></div>
	{cms_banner_a}
