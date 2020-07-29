<div class="navbar navbar-fixed-top bg-white drag-shadow" id="navbar" role="banner">
        <div class="container flexarea">
            <div class="navbar-header">
                <a href="javascript:;"><img height="30" style="margin-top:5px;" src="{cms_logo}"></a>
            </div>
            <nav class="pull-left main-nav">
                <ul class="nav navbar-nav nav-pills">
                    <li class="active"><a href="/">首页</a></li>
                    <li><a href="{:U('vod','type','3','1')}">视频</a></li>
                    <li><a href="{:U('book','type','25','1')}">小说</a></li>
                    <li><a href="{:U('live','type','26','1')}">直播</a></li>
                    <li><a href="{:U('pic','type','17','1')}">美图</a></li>
                    <li><a style="color:#e72525;" class="text-red" href="javascript:;">博彩推荐<img style="vertical-align: top;" src="{cms_template}/static/picture/tuijian.gif"></a></li>
                </ul>
            </nav>
            <div id="search" class="pull-left">
                <form id="searchForm">
					{cms_search}
                    <select name="type" style="position: absolute; background: #fff; border: 0; top: 6px; left: 25px; outline: 0!important;">
                        <option value="video">视频</option>
                    </select>
                    <input type="text" name="TXT"style="padding-left: 80px;" class="form-control" value="" id="searchInput" placeholder="输入关键词搜索">
                    <button id="searchHelpBtn" type="submit" class="btn btn-link"><i class="icon">搜索</i></button>
                </form>
            </div>
            <nav class="collapse navbar-collapse zui-navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="/">
                            <img class="header-user-ico user_avatar" src="{cms_template}/static/picture/home_icon_my@2x.png">
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>

<div class="top-category">
    <div class="container">
        <dl>
            <dd>
                
                    
                        <a href="javascript:;" class="btn btn-sm btn-primary">全部</a>
                    
                      {video_menu}  <a href="{menu_link}" class="btn btn-sm btn-link"> {menu_name}</a>{/video_menu}
            </dd>
        </dl>
    </div>
</div>
