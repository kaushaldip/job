/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId])
/******/ 			return installedModules[moduleId].exports;
/******/
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// identity function for calling harmony imports with the correct context
/******/ 	__webpack_require__.i = function(value) { return value; };
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, {
/******/ 				configurable: false,
/******/ 				enumerable: true,
/******/ 				get: getter
/******/ 			});
/******/ 		}
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "";
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 42);
/******/ })
/************************************************************************/
/******/ ({

/***/ 14:
/***/ (function(module, exports, __webpack_require__) {

"use strict";

/* ==== Jquery Functions ==== */

(function ($) {

	/* ==== Tool Tip ==== */
	$('[data-toggle="tooltip"]').tooltip();

	/* ==== Testimonials Slider ==== */
	if ($('.testimonialsList').length > 0) {
		$(".testimonialsList").owlCarousel({
			loop: true,
			margin: 30,
			nav: false,
			responsiveClass: true,
			responsive: {
				0: {
					items: 1,
					nav: false
				},
				768: {
					items: 1,
					nav: false
				},
				1170: {
					items: 1,
					nav: false,
					loop: true
				}
			}
		});
	}

	/* ==== Revolution Slider ==== */
	if ($('.tp-banner').length > 0) {
		$('.tp-banner').show().revolution({
			delay: 6000,
			startheight: 550,
			startwidth: 1140,
			hideThumbs: 1000,
			navigationType: 'none',
			touchenabled: 'on',
			onHoverStop: 'on',
			navOffsetHorizontal: 0,
			navOffsetVertical: 0,
			dottedOverlay: 'none',
			fullWidth: 'on'
		});
	}
})(jQuery);"use strict";
/* ==== Jquery Functions ==== */
(function ($) {

	/* ==== Tool Tip ==== */
	$('[data-toggle="tooltip"]').tooltip();

	/* ==== Testimonials Slider ==== */
	if ($('.testimonialsList').length > 0) {
		$(".testimonialsList").owlCarousel({
			loop: true,
			margin: 30,
			nav: false,
			responsiveClass: true,
			responsive: {
				0: {
					items: 1,
					nav: false
				},
				768: {
					items: 1,
					nav: false
				},
				1170: {
					items: 1,
					nav: false,
					loop: true
				}
			}
		});
	}

	/* ==== Revolution Slider ==== */
	if ($('.tp-banner').length > 0) {
		$('.tp-banner').show().revolution({
			delay: 6000,
			startheight: 550,
			startwidth: 1140,
			hideThumbs: 1000,
			navigationType: 'none',
			touchenabled: 'on',
			onHoverStop: 'on',
			navOffsetHorizontal: 0,
			navOffsetVertical: 0,
			dottedOverlay: 'none',
			fullWidth: 'on'
		});
	}
})(jQuery);

/***/ }),

/***/ 42:
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(14);


/***/ })

/******/ });