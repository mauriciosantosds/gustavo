

    console.log($('#serv-carousel').html());

    $('.teste').owlCarousel({
        rtl:true,
        loop:true,
        margin:10,
        nav:true,
        responsive:{
            0:{
                items:1
            },
            6:{
                items:3
            }
        }
    });