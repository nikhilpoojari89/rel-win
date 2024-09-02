/****************** Loader JS ********************/
$(window).on ('load', function (){
    // Site Preloader
    $('#site-preloader').fadeOut(); // will first fade out the loading animation
    $('#preloader').delay(350).fadeOut('slow'); // will fade out the white DIV that covers the website.
    $('body').delay(350).css({'overflow':'visible'});
});


/****************** Scroll To Top JS ********************/
$(window).on( 'scroll', function(){
    if ($(window).scrollTop() > 600) {
        $('.scrollToTop').fadeIn();
    } else {
        $('.scrollToTop').fadeOut();
    }
});

$(document.body).on('click', '.scrollToTop', function() {
    $('html, body').animate({
        scrollTop: 0
    }, 800);
    return false;
});


/****************** Navbar Fixed Header When Scroll JS ********************/
$(window).scroll(function(){
    if ($(window).scrollTop() >= 100) {
        $('header').addClass('fixed-header');
    }
    else {
        $('header').removeClass('fixed-header');
    }
});


/****************** Custom Select Box JS ********************/
$(".default_option").click(function(){
    $(this).parent().toggleClass("active");
});

$("#life_cover_dd .select_ul li").click(function(){
    var lifecover = $(this).html();
    $("#life_cover_dd .default_option li").html(lifecover);
    $(this).parents(".select_wrap").removeClass("active");
});

$("#upto_age_dd .select_ul li").click(function(){
    var uptoage = $(this).html();
    $("#upto_age_dd .default_option li").html(uptoage);
    $(this).parents(".select_wrap").removeClass("active");
});

$("#maturity_amt_dd .select_ul li").click(function(){
    var maturityamt = $(this).html();
    $("#maturity_amt_dd .default_option li").html(maturityamt);
    $(this).parents(".select_wrap").removeClass("active");
});

$("#pay_till_dd .select_ul li").click(function(){
    var maturityamt = $(this).html();
    $("#pay_till_dd .default_option li").html(maturityamt);
    $(this).parents(".select_wrap").removeClass("active");
});

$("#frequency_dd .select_ul li").click(function(){
    var maturityamt = $(this).html();
    $("#frequency_dd .default_option li").html(maturityamt);
    $(this).parents(".select_wrap").removeClass("active");
});


/****************** Custom Radio Button JS ********************/
$('#rdoPayEarly a').on('click', function(){
    var sel = $(this).data('title');
    var tog = $(this).data('toggle');
    $('#'+tog).prop('value', sel);
    
    $('a[data-toggle="'+tog+'"]').not('[data-title="'+sel+'"]').removeClass('active').addClass('notActive');
    $('a[data-toggle="'+tog+'"][data-title="'+sel+'"]').removeClass('notActive').addClass('active');
});


/****************** Next/Previous Tabs JS ********************/
    //Next Button Click JS
    $("#step_1").on("click", function(){
        $('#more_info_tabs a[href="#pills-personal-details"]').tab('show');
        //$('#more_info_tabs li:eq(1) a').tab('show');
    });
    //Prev Button Click JS
    $("#step_prev_1").on("click", function(){
        $('#more_info_tabs a[href="#pills-professional-details"]').tab('show');
    });

    //Next Button Click JS
    $("#btn_get_quotes").on("click", function(){
        $('#plan_booking_tabs a[href="#pills-step2"]').tab('show');
    });

    //Prev Button Click For Step3 JS
    $("#main_step_1").on("click", function(){
        $('#plan_booking_tabs a[href="#pills-step1"]').tab('show');
    });
    $("#main_step_2").on("click", function(){
        $('#plan_booking_tabs a[href="#pills-step2"]').tab('show');
    });


/****************** Product Overview Show/Hide JS ********************/
    $('#product_overview_page').hide();
    $('#product_booking_page').show();
    $("#btnContinue").on("click", function(){
        $('#product_booking_page').hide();
        $('#product_overview_page').show();
    });