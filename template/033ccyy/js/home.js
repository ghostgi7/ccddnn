$(document).ready(function(){
    $("img.lazy").lazyload();
    $(".ff-hits").each(function(i){
        var $this = $(".ff-hits").eq(i);
        $.ajax({
            url: '/index.php?s=hits-show-id-'+$this.attr("data-id")+'-sid-'+$this.attr("data-sid")+'-type-'+$this.attr("data-type"),
            cache: true,
            dataType: 'json',
            success: function(json){
                $type = $this.attr('data-type');
                if($type != 'insert'){
                    $this.html(eval('(json.' + $type + ')'));
                }
            }
        });
    });
});