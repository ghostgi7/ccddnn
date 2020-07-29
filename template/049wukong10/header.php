<div id="header">
	<div class="banner" style="padding-left:5px;">
		<a href="/">
			<font size="7" color="white"><b>{cms_title}</b></font>
		</a>
		<style type="text/css">
					input[placeholder], [placeholder], *[placeholder] {
					   color:red !important;
					}
			        form {
			            position: relative;
			            width: 300px;
			            margin: 0 auto;
			        }
			
			        input, button {
			            border: none;
			            outline: none;
			        }
			
			        input {
			            width: 100%;
			            height: 42px;
			            padding-left: 13px;
			        }
			
			        button {
			            height: 43px;
			            width: 43px;
			            cursor: pointer;
			            position: absolute;
			        }
			 /*搜索框6*/
			        .bar6 {background: #0F7884;}
			        .bar6 input {
			            border: 2px solid #c5464a;
			            border-radius: 5px;
			            background: #0F7884;
			            top: 0;
			            right: 0;
			        }
			        .bar6 button {
			            background: #c5464a;
			            border-radius: 0 5px 5px 0;
			            width: 60px;
			            top: -13px;
			            right: 0;
			        }
			        .bar6 button:before {
			            content: "搜索";
			            font-size: 13px;
			            color: #F9F0DA;
			        }
		</style>
		<div class="search bar6" style="float: right;margin: 7px 0px;">
		        <form>
					{cms_search}
		            <input type="text" name="TXT" placeholder="请输入您要搜索的内容..." style="color: #FFF;">
		            <button type="submit"></button>
		        </form>
		    </div>
	</div>
	<div class="h guide" colspan="2">
		<a <?php echo $this->value['thisPage'] === 'index' ? 'style="color:red;"' : '' ?> href="/">首页</a>
		<a <?php echo strpos($_SERVER['QUERY_STRING'],'video_list') !==false ? 'style="color:red;"' : ' ' ; ?>
			href="{:U('vod','type','2','1')}"
			<?php echo rand(1,18) ?>*1">视频</a>
		| <a <?php echo strpos($_SERVER['QUERY_STRING'],'book_list') !==false ? 'style="color:red;"' : ' ' ; ?>
			href="{:U('vod','type','6','1')}"
			<?php echo rand(19,24) ?>*1">高清</a>
		| <a <?php echo strpos($_SERVER['QUERY_STRING'],'pic_list') !==false ? 'style="color:red;"' : ' ' ; ?>
			href="{:U('pic','type','17','1')}"
			<?php echo rand(25,30) ?>*1">美图</a>
		| <a <?php echo strpos($_SERVER['QUERY_STRING'],'radio_list') !==false ? 'style="color:red;"' : ' ' ; ?>
			href="{:U('live','type','26','1')}"
			<?php echo rand(31,34) ?>*1">直播</a>
		| <a <?php echo strpos($_SERVER['QUERY_STRING'],'bt_list') !==false ? 'style="color:red;"' : ' ' ; ?>
			href="{:U('book','type','25','1')}"
			<?php echo rand(35,36) ?>*1">小说</a>
	</div>
	<div id="blank" style="height:10px; clear:both"></div>
</div>
<div id="main">
	<div class="t">
		<table cellspacing="0" cellpadding="0" width="100%">
			<tr class="tr2">
				<td width="*" style="padding-right:8px; height:24px; border-top:0">
					<marquee direction="left" scrolldelay="1" scrollamount="2" onmouseout="if(document.all!=null){this.start()}"
					 onmouseover="if(document.all!=null){this.stop()}">
						<a href='notice--1.html#1'>■■■
							{cms_notice}
	</div>
	</a> &nbsp; &nbsp; &nbsp; &nbsp;
	</marquee>
	</td>
	</tr>
	<tr>
		<td></td>
	</tr>
	</table>
	<table cellspacing="0" cellpadding="0" width="100%">
{cms_banner_a}
	</table>
</div>
