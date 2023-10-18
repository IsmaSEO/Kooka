(function( $ ) {
    'use strict';



    /* ***** Constantes durée de transition et positions initiales des nuages ***** */
    const transitionTime = 1500;
    const transitionTimeMenu = 500;
    const transitionTimeImages = 750;
    const transitionTimeFast = 200;
    const nuageGrandLeft = 780;
    const nuagePetitLeft = 380;



    /* ***** Apparition de la première section dès le chargement de la page ***** */
    $(".banner").animate({
        'top': '0',
        'opacity':'1'
    }, transitionTime);

    /* ***** Initialisation de la position du titre du site ***** */
    var imageOrigine = $(".site-header").height() + ($(".banner").height() / 5);
    $(".banner-img").css({
        'top': imageOrigine
    });

    /* ***** Initialisation de la position des nuages ***** */
    $(".nuage-grand").css({
        'top': 1420,
        'left': nuageGrandLeft,
    });
    $(".nuage-petit").css({
        'top': 1603,
        'left': nuagePetitLeft
    });



    /* ***** Création du swiper coverflow ***** */
    var swiper = new Swiper(".mySwiper", {
        effect: "coverflow",
        centeredSlides: true,
        slidesPerView: 5,
        grabCursor: true,
        //mousewheel: true,
        coverflowEffect: {
            rotate: 50,
            stretch: 0,
            depth: 100,
            modifier: 1,
            slideShadows: false,
        }
    });



    /* ***** Animation du menu burger ***** */

    // Etat initial du menu
    $(".opened-menu").slideToggle(0);
    var affichagePage = true;

    // Clic sur l'icône du menu
    $(".bouton-burger").on("click",".bars",function(){
        deroulementMenu();
    });
    // Clic sur un lien du menu
    $(".opened-menu").on("click","a",function(){
        deroulementMenu();
    });

    // Fonction animant le menu
    function deroulementMenu() {
        $(".opened-menu").slideToggle(transitionTimeMenu);
        $(".bars").toggleClass('change');
        // Si le menu n'est pas déroulé
        if (affichagePage) {
            $("#primary").animate({
                'opacity': '0'
            }, transitionTimeMenu);
            $(".images-menu img").delay(transitionTimeMenu).animate({
                'opacity': '1'
            }, transitionTimeImages);
            affichagePage = false;
        }
        // Si le menu est déjà déroulé
        else {
            $("#primary").delay(transitionTimeMenu).animate({
                'opacity': '1'
            }, transitionTimeFast);
            $(".images-menu img").animate({
                'opacity': '0'
            }, transitionTimeFast);
            affichagePage = true;
        }
    }



    /* ***** Gestion des évènements au scroll ***** */

    $(window).scroll(function() {

        // Variable calculant la position du visiteur sur la page
        var scrolledFromTop = $(window).scrollTop() + $(window).height();


        /* ***** Effet parallaxe titre ***** */
        var imageBot = imageOrigine + $('.banner-img').height() - $(".site-header").height();
        var videoVisible = $(".banner").height() - $(window).scrollTop() + $(".site-header").height();
        if (imageBot >= videoVisible - 22) {
            $(".banner-img").css({
                'bottom': $(".banner").height() - $(window).scrollTop()
            });
        }
        else {
            $(".banner-img").css({
                'top': imageOrigine + $(window).scrollTop()
            });
        }


        /* ***** Apparition des sections et des titres au scroll ***** */
        $("section, footer").each(function() {
            var distanceFromTop = $(this).offset().top;
            if (scrolledFromTop >= distanceFromTop) {
                $(this).animate({
                   'top': '0',
                   'opacity':'1'
                }, transitionTime);
            }
        });
        $("h2, h3").each(function() {
            var distanceFromTop = $(this).offset().top;
            if (scrolledFromTop >= distanceFromTop) {
                $(this).addClass('mouvementTitre');
                //$(this).slideDown(1500);
            }
        });
        
/* ***** Effet de déplacement des nuages ***** */

deplacementNuage($(".nuage-grand"), nuageGrandLeft, 2.6);
deplacementNuage($(".nuage-petit"), nuagePetitLeft, 3.3);

function deplacementNuage(nuage, nuageLeft, vitesse) {
    var nuageMAX = nuageLeft + 300;
    var distanceNuage;
    if (scrolledFromTop > nuage.offset().top /* + (nuage.height()/2) */) {
        distanceNuage = nuageLeft - ((scrolledFromTop - nuage.offset().top) / vitesse);
        if (distanceNuage >= 0 && distanceNuage < nuageLeft) {
            nuage.css({
                'left': distanceNuage
            });
        }
    }
}

    });

})( jQuery );