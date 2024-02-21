/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!********************************!*\
  !*** ./resources/js/common.js ***!
  \********************************/
$(function () {
  $('#input-search').keypress(function (e) {
    var key = e.which;
    if (key == 13) {
      $('#search').submit();
    }
  });
});
/******/ })()
;