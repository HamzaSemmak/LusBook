// -----------------------------------------------------------------------------
// This file contains all code Jquery of webpages
// -----------------------------------------------------------------------------


$(document).ready(function(e) {
    /* 
    * -------------------------
    *   btn hover : 
    * -------------------------
    */
    $('.btn').on('mouseenter', function(e) {
        x = e.pageX - $(this).offset().left
        y = e.pageY - $(this).offset().top
        $(this).find('span').css({top:y , left:x})
    })
    $('.btn').on('mouseout', function(e) {
        x = e.pageX - $(this).offset().left
        y = e.pageY - $(this).offset().top
        $(this).find('span').css({top:y , left:x})
    })  
    /* 
    * -------------------------
    *   slick :
    *   the last carousel you'll ever need
    * -------------------------
    */
    $('.multiple-items').slick({
        infinite: true,
        slidesToShow: 5,
        slidesToScroll: 1,
        speed: 200,
        autoplay: true,
        autoplaySpeed: 3000,
        variableWidth: true,
        dots: false,
        fade: false,
        arrows: true,
        prevArrow: "<span class='slick-next'> <i class='fa-solid fa-angle-left'></i> </span>",
        nextArrow: "<span class='slick-prev'> <i class='fa-solid fa-angle-right'></i> </span>"
    })
});