// 导航弹出
$(".navbar-toggle").on(
    "click",
    function(){
        if($(".navbar-collapse").hasClass("in")){
            $(".navbar-collapse").removeClass("in");
        } else{
            $(".navbar-collapse").addClass("in");
        }
    }
);

$("#btn-search").on(
    "click",
    function(){
        if($(".search-area .search-input").width() == 0 ){
            $(".search-area .search-input").css({"width":"78px"});
            // $("#btn-search").css({"padding-right":"10px"});
        } else{
            $(".search-area .search-input").css({"width":"0px"});
        }
    }
)
var imgs = $('.album img');
var index = null;
$('.album .gif-item').on('click', function () { 
    index=$(this).index();
    $('.pop_up .img_wapper').html($(imgs[index]).clone());
    $('.pop_up').removeClass('hide')
})
$('.pop_up .close').on('click', function () { 
    $('.pop_up').addClass('hide')
})
$('.pop_up .next').on('click', function () { 
    if (index < imgs.length-1) { 
        index++;
        $('.pop_up .img_wapper').html($(imgs[index]).clone());
    }
    
})
$('.pop_up .prev').on('click', function () { 
    if (index > 0) { 
        index--;
        $('.pop_up .img_wapper').html($(imgs[index]).clone());
    }
    
})