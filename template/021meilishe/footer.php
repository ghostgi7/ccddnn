
<footer class="sticky-footer">
    <div class="container">
        <div class="row no-gutters">
            <div class="col-lg-6 col-sm-6">
                <p class="mt-1 mb-0">
                    &copy; Copyright 2018 <strong class="text-dark">{cms_title}</strong>. All Rights Reserved
                    <br />
                    <small class="mt-0 mb-0">Made with <i class="fas fa-heart text-danger"></i> by <a class="text-primary" target="_blank" href="/">{cms_title}</a> </small>
                    <br />
                    <small class="mt-0 mb-0">{cms_email}</small>
                </p>
            </div>
        </div>
    </div>
</footer>
<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top"> <i class="fas fa-angle-up"></i> </a>
<!-- Bootstrap core JavaScript-->
<script src="{cms_template}/js/bootstrap.bundle.min.js"></script>
<!-- Core plugin JavaScript-->
<script src="{cms_template}/js/jquery.easing.min.js"></script>
<!-- Owl Carousel -->
<script src="{cms_template}/js/owl.carousel.js"></script>
<!-- Custom scripts for all pages-->
<script src="{cms_template}/js/custom.js"></script>
{cms_tj}
<script>





    $(document).on('click','.nav-link.prop',function (e) {
        e.preventDefault();
        var data = $(this).attr('data');
        $("#"+data).slideToggle("fast");
        var slidelist = $('.ui-slide-block-pc');
        for (var i=0;i<slidelist.length;i++) {
            if(slidelist.eq(i).is(':visible')&&slidelist.eq(i).attr('id')!=data){
                slidelist.eq(i).slideToggle("fast");
            }
        }
    });
</script>