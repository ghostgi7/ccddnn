var reloaderplayer = function(){
	var player = getId('player');
	var width = parseFloat(getStyle(player.parentNode,'width'));
	var height = 9 / 16 * width;
	player.style.width = width + "px";
	player.style.height = height + "px";
}
window.onresize = reloaderplayer;
(function(){
var playnode = getId('player');
playnode.parentNode.style.width = "100%";
playnode.parentNode.style.height = "100%";
var width = getStyle(playnode.parentNode,'width');
var height = 9 / 16 * width;
playnode.style.width = width + "px";
playnode.style.height = height + "px";
var player = new Clappr.Player({
	width: '100%',
	height: '100%',
	autoPlay: true,
	preload: 'metadata',
	playInline: true,
	source: playUrl,
	poster: posterImg,
	parentId: "#player"
});
var evt = "onorientationchange" in window ? "orientationchange" : "resize";
window.addEventListener(evt,resize,false);
	function resize(fals) {
		if(window.orientation == 0 || window.orientation == 180) {
			reloaderplayer();
		}else {
			reloaderplayer();
		}
	}
resize(true);
})();