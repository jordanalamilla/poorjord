(function ($) {
    const header    = $('header');
    const body      = $('body');

    $(document).ready(function () {

        /**
         * Header: Hide on scroll
         */
        scrollDetect();
        $(window).scroll(function () { scrollDetect(); });

        /**
         * Slick Initialization: Multi-slide Slider
         */
        $('.slider-block.layout1 .slider').slick({
            centerMode: true,
            centerPadding: '60px',
            slidesToShow: 3,
            responsive: [
                {
                    breakpoint: 768,
                    settings: {
                        arrows: false,
                        centerMode: true,
                        centerPadding: '40px',
                        slidesToShow: 1
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        arrows: false,
                        centerMode: true,
                        centerPadding: '40px',
                        slidesToShow: 1
                    }
                }
            ]
        });

        /**
         * Slick Initialization: Big Slider
         */
        $('.slider-block.layout2 .slider').slick();

    });

    /**
     * Functions
     */

    function scrollDetect() {
        let scrollPosition = $(window).scrollTop();

        if (scrollPosition > 100) {
            body.addClass('scrolled');
        } else {
            body.removeClass('scrolled');
        }
    }
})(jQuery);