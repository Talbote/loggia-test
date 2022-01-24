jQuery(document).ready(function ($) {
    /* ANIMATION DIV*/
    AOS.init();


    setTimeout(function() {
        $('#ctn-preloader').addClass('loaded');
        $('body').removeClass('no-scroll-y');
        if ($('#ctn-preloader').hasClass('loaded')) {
            $('#preloader').delay(2000).queue(function() {
                $(this).remove();
            });
        }
    }, 2000);


    /* BURGER ON CLICK */
    $('.first-button').on('click', function () {
        $('.animated-icon1').toggleClass('open');
        $('.animated-bg').toggleClass('open')
    });

    /* auto close burger menu if windows is  >= 992  */
    $(window).resize(function () {
        if ($(window).width() >= 992) {
            if ($(".animated-icon1").hasClass("open")) {
                $('.first-button').trigger('click');
            } else {

            }
        }
    } );


    /* FOOTER CONTACT RANGE SLIDER  */
    var $range = $(".js-range-slider");
    var min = 100000;
    var max = 500000;
    var marks = [100000, 200000, 300000, 400000, 500000];

    $range.ionRangeSlider({
        skin: "flat",
        type: "double",
        min: 100000,
        max: 500000,
        from: 160000,
        to: 320000,
        postfix: "€",
        onStart: function (data) {
            addMarks(data.slider);
        }
    });

    function convertToPercent(num) {
        var percent = (num - min) / (max - min) * 100;

        return percent;
    }

    function addMarks($slider) {
        var html = '';
        var left = 0;
        var i;

        for (i = 0; i < marks.length; i++) {
            left = convertToPercent(marks[i]);
            html += '<span class="mark" style="left: ' + left + '%">' + marks[i] + '€</span>';
        }

        $slider.append(html);
    }


});
