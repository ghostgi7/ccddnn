<!DOCTYPE html><html mip><head><meta charset="utf-8"><meta name="applicable-device" content="pc,mobile"><meta name="MobileOptimized" content="width" /><meta name="HandheldFriendly" content="true" /><meta http-equiv="X-UA-Compatible" content="IE=edge"><meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0"><link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
<link rel="stylesheet" href="https://g.alicdn.com/de/prismplayer/2.8.8/skins/default/aliplayer-min.css" />
<script type="text/javascript" charset="utf-8" src="https://g.alicdn.com/de/prismplayer/2.8.8/aliplayer-min.js"></script>
<title>	{cmsobj_name} - {cms_title}</title>
{include file="include.php"}
{include file="header.php"} 
<div class="playtop"><div class="playtitle"><h2><span class="catetag"><a href="{cmsobj_typename}" title="{cmsobj_typename}" rel="category tag">{cmsobj_typename} </a></span>{cmsobj_name}</h2></div><div class="playviews">{cmsobj_hit}</div></div>
<div class="prism-player" id="player-con"></div>
<script>
var player = new Aliplayer({
  "id": "player-con",
  "source": "{cmsobj_url}",
  "width": "100%",
  "height": "500px",
  "autoplay": true,
  "isLive": false,
  "rePlay": false,
  "playsinline": true,
  "preload": true,
  "controlBarVisibility": "hover",
  "useH5Prism": true
}, function (player) {
    console.log("The player is created");
  }
);
</script>
</div>
<div class="playshare"></div>
{include file="footer.php"}