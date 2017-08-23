$(document).ready(function(){
    $("#mainslider").owlCarousel({
      nav : true,
      autoPlay: true,
      items:1,
      navText:['<i class="fa fa-chevron-left"></i>','<i class="fa fa-chevron-right"></i>'],
    });

    $("#brands_slider").owlCarousel({
        items:5,
        nav:true,
        navText:['<i class="fa fa-chevron-left"></i>','<i class="fa fa-chevron-right"></i>'],
    });


    console.log(copyrights);
}); 