<!-- 头部 -->
<div class="detail_title">
	<div class="width1200">
		<h1 ><a href="/"><img src="{cms_logo}" alt="{cms_title}"></a></h1>
        <div class="detail_submit">
        	<form name="search_form" action="" method="GET">
                {cms_search}
        	<input type="text" placeholder="请输入搜索关键字" id="wd" name="TXT" value=""/>
            <input type="submit" value=""/>
            </form>

        </div>
		
<div class="link">

	        <ul>
		        <li><a href="{cms_domain1}" target="_blank"><img src="{cms_template}/img/fb1.png"></a></li>
		        <li><a href="{cms_domain2}" target="_blank"><img src="{cms_template}/img/fb2.png"></a></li>
	        </ul>
        </div>

    </div>
</div>

<!-- 头部 -->
<!-- 正文 -->
<div class="detail">
	<div class="width1200">
        <div class="detail_left">
            <ul>
            	<li>
                	<h3>视频专区<span></span></h3>
                    <ol class="block">
						{video_menu}
						<li> <a class="type gold" href="{menu_link}">{menu_name}</a></li>
                        {/video_menu}
                    </ol>
                </li>

				<li>
					<h3>高清专区<span></span></h3>
					<ol>
						{hd_menu}
						<li> <a class="type gold" href="{menu_link}">{menu_name}</a></li>
                        {/hd_menu}
					</ol>
				</li>

				<li>
					<h3 class="book-box">小说专区<span></span></h3>
					<ol class="">
                        {book_menu}
						<li class="li2"> <a class="type gold" href="{menu_link}">{menu_name}</a></li>
                        {/book_menu}
					</ol>
				</li>

				<li>
					<h3 class="img-box">图片专区<span></span></h3>
					<ol class="">
                        {pic_menu}
						<li class="li3"> <a class="type gold" href="{menu_link}">{menu_name}</a></li>
                        {/pic_menu}
					</ol>
				</li>

                {if $cms_config['live_status']=='1'}

                    <li>
                        <h3 class="live-box">直播专区<span></span></h3>
                        <ol class="">

                            {live_menu}
                                <li class="menu_items"> <a class="type gold" href="{menu_link}">{menu_name}</a></li>

                            {/live_menu}

                        </ol>
                    </li>

                {/if}


            </ul>

            <div class="div1">广告邮箱：{cms_email}</div>


                   </div>

		<div class="detail_right">
            <div class="ps_2">
					{cms_banner_a}
			</div>
		</div>
		
		
		
	