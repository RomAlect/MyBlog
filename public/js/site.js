jQuery(document).ready(function ($) {
    if ($(window).width() < 992) {
        $('.abstract-box > .row > .col-8').removeClass('col-8').addClass('col-12');
        $('.abstract-box > .row > .col-4').removeClass('col-4').addClass('collapse');
    }

    $(window).resize(function () {
        if ($(window).width() < 992) {
            $('.abstract-box > .row > .col-8').removeClass('col-8').addClass('col-12');
            $('.abstract-box > .row > .col-4').removeClass('col-4').addClass('collapse');
        } else {
            $('.abstract-box > .row > .col-12').removeClass('col-12').addClass('col-8');
            $('.abstract-box > .row > .collapse').removeClass('collapse').addClass('col-4');
        }
    });

    $(window).scroll(function () {
        if ($(this).scrollTop() !== 0) {
            $('#toTop').fadeIn();
        } 
        else {
            $('#toTop').fadeOut();
        }
    });

    $('#toTop').click(function () {
        $('body,html').animate({scrollTop: 0}, 800);
    });
    
    
});

function selectTab(category){
        //jQuery('#' + category + '-tab').click();
        alert(category);
    }