$('.teste').owlCarousel({
    rtl:true,
    loop:true,
    margin:10,
    autoplay:true,
    autoplayTimeout: 5000,
    responsiveClass:true,
    navText: ["<i class='fa fa-arrow-right'></i>","<i class='fa fa-arrow-left'></i>"],
    responsive:{
        0:{
            items:1,
            nav:true
        },
        600:{
            items:3,
            nav:true
        }
    }
});

$('.welcome-slides').owlCarousel({
    rtl:true,
    items: 1,
    loop:true,
    margin:0,
    autoplay:true,
    autoplayTimeout: 5000,
    responsiveClass:true,
    nav:true,
    navText: ["<i class='fa fa-arrow-right'></i>","<i class='fa fa-arrow-left'></i>"],
    
});