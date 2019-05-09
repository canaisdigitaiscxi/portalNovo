(function($) {

    // ========= Add Active Menu =========
  	if ( $( "#home" ).hasClass("institucional-active") ) {
  	    $( ".subnav ul li:nth-child(1)" ).addClass( "active" );
  	}
  	if ( $( "#home" ).hasClass("gestora-active") ) {
  	    $( ".subnav ul li:nth-child(3)" ).addClass( "active" );
  	}
  	if ( $( "#home" ).hasClass("mercado-active") ) {
  	    $( ".subnav ul li:nth-child(2)" ).addClass( "active" );
  	}


    $('.phone').mask('(00) 00000-0000');

    $(".resetForm").click(function(){ 
      $("#atendimentoForm")[0].reset();
      $("#atendimentoForm").removeClass("opacity");
      $("div.submitTrue").hide(500);
    });


    // ========= Validate Apresentação =========
    var theForm = $("#apresentacaoForm");

    theForm.validate({

        // Messages 
        messages:{
            name: {
                required: "Campo obrigatório",
            },

            email: {
                required: "Campo obrigatório",
                email: "Informe um e-mail válido"
            },

            phone: {
                required: "Campo obrigatório",
            },

            cidade: {
                required: "Campo obrigatório",
            },

            estado: {
                required: "Campo obrigatório",
            },

            mensagem: {
                required: "Campo obrigatório",
            },

        },

        // Submit Event
        submitHandler: function(theForm) {

            // loading
            $(".modal span.message").addClass('hidden');
            $(".modal span.loadingAction").removeClass('hidden');

            $.ajax({
                type: "POST",
                url: "sendApresentacao.php",
                data: $(theForm).serialize(),
                timeout: 20000,
                success: function(msg) {

                    var obj = $.parseJSON(msg);

                    if (obj['code'] == 200) {
                        $(".modal span.loadingAction").hide();
                        $(".modal span.message").removeClass('hidden');
                        $(".alert-success").removeClass('hidden');
                        $("#apresentacaoForm")[0].reset();
                    }

                    if (obj['code'] == 400) {
                        $(theForm).addClass('opacity');
                        $(".modal span.loadingAction").hide();
                        $(".modal span.message").removeClass('hidden');
                        $("div.submitError").fadeIn(500);
                    }

                },

                error: function() {
                    $('.msgErro').show();
                    return false;
                }

            });

        }

    });



    // ========= Validate Atendimento =========
    var theForm = $("#atendimentoForm");

    theForm.validate({

        // Messages 
        messages:{
            name: {
                required: "Campo obrigatório",
            },

            email: {
                required: "Campo obrigatório",
                email: "Informe um e-mail válido"
            },

            mensagem: {
                required: "Campo obrigatório",
            },

        },

        // Submit Event
        submitHandler: function(theForm) {

            // loading
            $("span.message").addClass('hidden');
            $("span.loadingAction").removeClass('hidden');

            $.ajax({
                type: "POST",
                url: "sendAtendimento.php",
                data: $(theForm).serialize(),
                timeout: 20000,
                success: function(msg) {

                    var obj = $.parseJSON(msg);


                    if (obj['code'] == 200) {

                        $(theForm).addClass('opacity');
                        $("span.loadingAction").hide();
                        $("span.message").removeClass('hidden');
                        $("div.submitTrue").fadeIn(500);

                    }

                    if (obj['code'] == 400) {

                        $(theForm).addClass('opacity');
                        $("span.loadingAction").hide();
                        $("span.message").removeClass('hidden');
                        $("div.submitError").fadeIn(500);

                    }

                },

                error: function() {
                    $('.msgErro').show();
                    return false;
                }

            });

        }

    });
    


    // ========= Carousel Valores =========
    $('.one.owl-carousel').owlCarousel({
        loop: true,
        stagePadding: 120,
        dots:false,
        responsive: {
          0: {
            items: 1,
            nav: false,
            stagePadding: 0,
            dots:true
          },
          600: {
            items: 2,
            nav: true,
            stagePadding: 0,
            margin: 10
          },
          1000: {
            items: 2,
            nav: true,
            loop: false,
            margin: 20
          }
        }
    });

    // ========= Carousel About =========
    $('.two.owl-carousel').owlCarousel({
        loop: true,
        dots:false,
        responsive: {
          0: {
            items: 1,
            nav: false,
            stagePadding: 0,
            dots:true
          },
          600: {
            items: 2,
            nav: true,
            stagePadding: 0,
            margin: 10
          },
          1000: {
            items: 3,
            nav: true,
            loop: false,
            margin: 20
          }
        }
    })

  	// ========= Scroll and menu Animation  =========
      "use strict";

  	$('a.js-scroll-trigger[href*="#"]:not([href="#"])').click(function() {
  	    if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
  	      var target = $(this.hash);
  	      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
  	      if (target.length) {
  	        $('html, body').animate({
  	          scrollTop: (target.offset().top - 54)
  	        }, 1000, "easeInOutExpo");
  	        return false;
  	      }
  		}
  	});

  	//  Animation Menu 
  	$(window).scroll(function() {
  		if ($(window).width() > 991) {
  		    var scroll = $(window).scrollTop();

  		    if (scroll > 250) {
  		        $("#mainNav").addClass("fixed-top");
  		    } else {
  		    	$("#mainNav").removeClass("fixed-top");
  		    }

  		}
  	});

  	// Closes responsive menu when a scroll trigger link is clicked 
  	$('.js-scroll-trigger').click(function() {
  	    $('.navbar-collapse').collapse('hide');
  	});

  	// Activate scrollspy to add active class to navbar items on scroll
  	$('body').scrollspy({
  	    target: '#mainNav',
  	    offset: 80
  	});

})(jQuery);