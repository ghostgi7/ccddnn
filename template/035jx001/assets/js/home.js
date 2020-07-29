    // 二级导航 伸缩性
    $(".nav li").click(function(){
        if($(this).hasClass("nav-parent")){
            var liThis = $(".nav .nav-parent").index($(this));
            console.log(liThis);
            $(this).addClass('active').siblings().removeClass('active')
            var navChildThis = $(".nav-child-box .nav-child").eq(liThis);
            $(".nav-child-box .nav-child").css({'opacity':'0','height':'0','padding':'0'});
            navChildThis.css({'opacity':'1','height':'34px'});
            $(".v-type").addClass("v-type-down");
        }
        else{
            $(".nav-child-box .nav-child").css({'opacity':'0','height':'0','padding':'0'});
            $(".v-type").removeClass("v-type-down");

        };
    });

