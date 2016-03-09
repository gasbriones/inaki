(function ($) {

    $(document).ready(function () {
        $('.product-list').bxSlider({
            minSlides: 1,
            maxSlides: 3,
            slideWidth: 200,
            slideMargin: 122,
            pager: false,
            infiniteLoop: true,
            moveSlides: 1,
            onSliderLoad: function () {
                $('.product-list').css('opacity', 1);

                $('.prod-detail li a').click(function (e) {
                    e.preventDefault();

                    $('#product-container .content').load($(this).attr('href'), function () {

                        $('.bx-wrapper').hide();

                        $('#product-container').fadeIn();

                        $('.close').click(function () {
                            $('#product-container').hide();
                            $('.bx-wrapper').show();
                        });

                        $('.principal-img').zoom();

                        $('.thumbnails li').click(function () {
                            $('.principal-img').html('<img src="' + $(this).find('img').attr('src') + '" />')
                                .promise().done(function () {
                                $('.principal-img').zoom();
                            });
                        });
                    });
                    return false;
                });
            }
        });

    });


})(jQuery);