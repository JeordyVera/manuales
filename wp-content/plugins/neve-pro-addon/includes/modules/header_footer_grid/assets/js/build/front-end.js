!function(e){var t={};function o(r){if(t[r])return t[r].exports;var n=t[r]={i:r,l:!1,exports:{}};return e[r].call(n.exports,n,n.exports,o),n.l=!0,n.exports}o.m=e,o.c=t,o.d=function(e,t,r){o.o(e,t)||Object.defineProperty(e,t,{enumerable:!0,get:r})},o.r=function(e){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},o.t=function(e,t){if(1&t&&(e=o(e)),8&t)return e;if(4&t&&"object"==typeof e&&e&&e.__esModule)return e;var r=Object.create(null);if(o.r(r),Object.defineProperty(r,"default",{enumerable:!0,value:e}),2&t&&"string"!=typeof e)for(var n in e)o.d(r,n,function(t){return e[t]}.bind(null,n));return r},o.n=function(e){var t=e&&e.__esModule?function(){return e.default}:function(){return e};return o.d(t,"a",t),t},o.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},o.p="",o(o.s=35)}({35:function(e,t){function o(){const e=document.querySelectorAll(".header--row.hide-on-mobile.is_sticky"),t=document.querySelectorAll(".header--row.hide-on-desktop.is_sticky");if(e.length>0||t.length>0){!function(e=!1,t=!1){let o=document.querySelector(".sticky-header-placeholder");const r=document.querySelector(".hfg_header"),n=document.querySelector(".neve-transparent-header");null===o&&null===n&&(o=document.createElement("div"),o.classList.add("sticky-header-placeholder"),r.parentNode.insertBefore(o,r.nextSibling));!e&&o&&o.classList.add("hide-on-mobile","hide-on-tablet");!t&&o&&o.classList.add("hide-on-desktop");e&&r.classList.add("has-sticky-rows--mobile");t&&r.classList.add("has-sticky-rows--desktop");null!==o&&(o.style.height=r.offsetHeight+"px")}(t.length>0,e.length>0);r(document.querySelector(".hfg_header"),document.querySelector("header.header"))}}function r(e,t){new IntersectionObserver(t=>{if(!0===t[0].isIntersecting)return e.classList.remove("is-stuck"),!1;e.classList.add("is-stuck")},{rootMargin:"20px 0px 25px 0px"}).observe(t)}function n(){if(document.querySelectorAll(".footer--row.is_sticky").length>0){!function(){let e=document.querySelector(".sticky-footer-placeholder");const t=document.querySelector(".hfg_footer");null===e&&(e=document.createElement("div"),e.classList.add("sticky-footer-placeholder"),t.parentNode.insertBefore(e,t.nextSibling));t.classList.add("has-sticky-rows"),e.style.height=t.offsetHeight+"px"}();r(document.querySelector(".hfg_footer"),document.querySelector("footer"))}}let c;window.addEventListener("load",(function(){o(),n()})),window.addEventListener("selective-refresh-content-rendered",(function(e){if("hfg_header_layout_partial"===e.detail){const e=document.querySelector(".sticky-header-placeholder"),t=document.querySelector(".hfg_header");e&&e.remove(),t.classList.remove("has-sticky-rows--mobile","has-sticky-rows--desktop"),o()}if("hfg_footer_layout_partial"===e.detail){const e=document.querySelector(".hfg_footer"),t=document.querySelector(".sticky-footer-placeholder");t&&t.remove(),e.classList.remove("has-sticky-rows"),n()}})),window.addEventListener("resize",(function(){clearTimeout(c),c=setTimeout((function(){o(),n()}),500)}))}});