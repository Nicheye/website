
$(document).ready(function(){

    // wow initiation
    new WOW().init();

    // navigation bar toggle
    $('#navbar-toggler').click(function(){
        $('.navbar-collapse').slideToggle(400);
    });

    // navbar bg change on scroll
    $(window).scroll(function(){
        let pos = $(window).scrollTop();
        if(pos >= 100){
            $('.navbar').addClass('cng-navbar');
            
        } else {
            $('.navbar').removeClass('cng-navbar');
        }
    });

    

    // team carousel 
    $('.team .owl-carousel').owlCarousel({
        loop: true,
        margin: 10,
        autoplay: true,
        dots: true,
        nav: false,
        responsiveClass: true,
        responsive:{
            0:{
                items: 1
            }, 
            600:{
                items: 2
            },
            1000:{
                items: 3
            }
        }
    });
    function addEvent(element, event, callback) {
        let previousEventCallBack = element["on" + event];
        element["on" + event] = function (e) {
            let output = callback(e);
    
            if (output === false) return false;
    
            if (typeof previousEventCallBack === 'function') {
                output = previousEventCallBack(e);
                if (output === false) return false;
            }
        }
    }
    
    let form = document.getElementById('form');
    let successClose = document.getElementsByClassName('modal__window-close')[0];
    let successWindow = document.getElementById('window');
    
    successWindow.style.display = 'none';
    
    // Закрываем попап
    addEvent(successClose, "click", function () {
        successWindow.style.display = 'none';
    });
    
    //отображаем попап
    addEvent(form, "submit", function () {
        successWindow.style.display = 'flex';
        return false;
    });
    

   

});