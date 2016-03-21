(function ($) {

    $(document).ready(function () {
        $('.close').on('click', function(e){
            e.preventDefault();
            $('.mobile-menu-wrapper').animate({right:'-100%'},750)
        });

        $('.menu-icon').on('click',function(e){
            e.preventDefault();
            $('.mobile-menu-wrapper').animate({right:'0%'},750);

        })
    });

})(jQuery);