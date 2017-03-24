$(document).ready(function () {

  setTimeout(function(){
    $('.page-transition').removeClass('page-transition-pop');
  },250);

  if ($('.tooltip').length > 0) {
    setTimeout(function(){
      $('.tooltip').addClass('tooltip-show');
    },400);
  }

  var previousFrame = $('.arrow-left').attr('target-frame');
  var nextFrame = $('.arrow-right').attr('target-frame');
  // console.log(nextFrame);

  // $('.arrow-left').click(function (e) {
  //   e.preventDefault();                   // prevent default anchor behavior
  //   if(typeof previousFrame != 'undefined'){
  //     $('.page-transition').addClass('page-transition-pop');
  //     setTimeout(function(){
  //         window.location.href = window.location.protocol + "//" + window.location.host;
  //     },250);
  //   }
  // });

  // $('.arrow-right').click(function (e) {
  //   e.preventDefault();                   // prevent default anchor behavior
  //   if(typeof nextFrame != 'undefined'){
  //     $('.page-transition').addClass('page-transition-pop');
  //     setTimeout(function(){
  //         window.location.href = nextFrame;
  //     },250);
  //   }
  // });

  $("body").keydown(function(e) {
    if(e.keyCode == 37) { // left
      if(typeof previousFrame != 'undefined'){
        $('.page-transition').addClass('page-transition-pop');
        setTimeout(function(){
            window.location.href = window.location.protocol + "//" + window.location.host + window.location.pathname + "?slide=" + previousFrame;
        },250);
      }
    }
    else if(e.keyCode == 39) { // right
      if(typeof nextFrame != 'undefined'){
        $('.page-transition').addClass('page-transition-pop');
        setTimeout(function(){
            window.location.href = window.location.protocol + "//" + window.location.host + window.location.pathname + "?slide=" + nextFrame;
        },250);
      }
    }
  });

  $('.presa-vid').click(function(){this.paused?this.play():this.pause();});
  // $('.presa-vid').hover(function toggleControls() {
  //   if (this.hasAttribute("controls")) {
  //       this.removeAttribute("controls")
  //   } else {
  //       this.setAttribute("controls", "controls")
  //   }
  // })

  // $( "body" ).mousemove(function( event ) {
  //   $('.nav').removeClass('nav-hide');
  //   setTimeout(function(){
  //     $('.nav').addClass('nav-hide');
  //   },2500);
  // });



  // var timeout = null;

  // $(document).on('mousemove', function() {
  //   if (timeout !== null) {
  //       $('.nav').removeClass('nav-hide');
  //       clearTimeout(timeout);
  //   }

  //   timeout = setTimeout(function() {
  //       $('.nav').addClass('nav-hide');
  //   }, 2500);
  // });



  // HAMMER

  var stage = document.getElementById('body');
  $stage = jQuery(stage);

  // create a manager for that element
  var manager = new Hammer.Manager(stage);

  var Swipe = new Hammer.Swipe();

  manager.add(Swipe);

  manager.on('swipeleft', function() {
    console.log('swipeleft');
    if(typeof nextFrame != 'undefined'){
      $('.page-transition').addClass('page-transition-pop');
      setTimeout(function(){
          window.location.href = window.location.protocol + "//" + window.location.host + window.location.pathname + "?slide=" + nextFrame;
      },250);
    }
  });

  manager.on('swiperight', function() {
    console.log('swiperight');
    if(typeof previousFrame != 'undefined'){
      $('.page-transition').addClass('page-transition-pop');
      setTimeout(function(){
          window.location.href = window.location.protocol + "//" + window.location.host + window.location.pathname + "?slide=" + previousFrame;
      },250);
    }
  });

  // scrollable

  setTimeout(function(){

    var imgSize = $('.presa-img').innerHeight();
    // console.log(imgSize);
    var imgContainer = $('.content-container').innerHeight();
    // console.log(imgContainer);

    if (imgSize > imgContainer) {
      $('.presa-img').addClass('presa-img-big');
      setTimeout(function(){
        $('.scrollable').addClass('scrollable-pop');
      },300);
    }

    $(window).resize(function(){
      var imgSize = $('.presa-img').innerHeight();
      var imgContainer = $('.content-container').innerHeight();
      if (imgSize > imgContainer) {
        // console.log('img bigger than container')
        $('.presa-img').addClass('presa-img-big');
        $('.scrollable').addClass('scrollable-pop');
      }else{
        // console.log('smaller')
        $('.presa-img').removeClass('presa-img-big');
        $('.scrollable').removeClass('scrollable-pop');
      }
    });

  },200);


  $(".content-container").scroll(function() {
  setTimeout(function(){
      $('.scrollable').removeClass('scrollable-pop');
    },100);
  });





  // END JS

});

