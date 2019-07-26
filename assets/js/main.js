"use strict";

$(function () {
  /*
      https://www.jqueryscript.net/animation/Smooth-Mouse-Wheel-Scrolling-Plugin-With-jQuery-easeScroll.html
      ===========================*/
  // $("html").easeScroll({
  //   frameRate: 60,
  //   animationTime: 1000,
  //   stepSize: 90,
  //   pulseAlgorithm: 1,
  //   pulseScale: 8,
  //   pulseNormalize: 1,
  //   accelerationDelta: 20,
  //   accelerationMax: 1,
  //   keyboardSupport: true,
  //   arrowScroll: 50,
  //   touchpadSupport: true,
  //   fixedBackground: true
  // });

  let popup = function popup() {
    let popupWindow = $('#js-popup');
    let overlay = $('#js-overlay');
    let body = $('body');
    $('#js-show-popup').on('click', function () {
      popupWindow.addClass('popup--active');
      overlay.addClass('overlay--active');
      body.addClass('hide');
    });
    $('#js-close-popup, #js-overlay').on('click', function () {
      body.removeClass('hide');
      popupWindow.removeClass('popup--active');
      overlay.removeClass('overlay--active');
    });
  };

  popup();
});





