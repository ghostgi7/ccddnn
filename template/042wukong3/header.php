<header class="stui-header__top clearfix" id="header-top">
	<div class="container">	
		<div class="row">
			<div class="stui-header_bd clearfix">					
			    <div class="stui-header__logo">
					<img src="{cms_logo}" width="70px" />									  
				</div>
				<div class="stui-header__side">					
					<ul class="stui-header__user">
												<li>
							<a href="javascript:;"><i class="icon iconfont icon-clock"></i></a>
							<div class="dropdown history">					
								<h5 class="margin-0 text-muted">
									联系方式
								</h5>
                                      联系邮箱:{cms_email}
							</div>
						</li>
											</ul>
					<script type="text/javascript" src="{cms_template}/static/js/jquery.autocomplete.js"></script>
					<div class="stui-header__search"> 
				        <form id="search" name="search" onsubmit="return qrsearch();">{cms_search}
	    					<input type="text" name="TXT" class="mac_wd form-control" value="" placeholder="请输入关键词..." autocomplete="off">
							<button class="submit" id="searchbutton" type="submit"><i class="icon iconfont icon-search"></i></button>							
						</form>
				  	</div>
				</div>									
				<ul class="stui-header__menu type-slide">
					<li><a href="/">首页</a></li>
						                <li><a href="{:U('vod','type','10','1')}">国产</a></li>
	                	                <li><a href="{:U('vod','type','3','1')}">AV</a></li>
	                	                <li><a href="{:U('vod','type','5','1')}">动漫</a></li>
	                	                <li><a href="{:U('book','type','25','1')}">小说</a></li>
	                	                 <li><a href="{:U('pic','type','19','1')}">图文</a></li>
	                	                 <li><a href="{:U('live','type','25','1')}">直播</a></li>
				</ul>				
			  </div>		 							    
		</div>
	</div>
</header>