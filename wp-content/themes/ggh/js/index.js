!function i(r,o,a){function c(t,e){if(!o[t]){if(!r[t]){var n="function"==typeof require&&require;if(!e&&n)return n(t,!0);if(s)return s(t,!0);throw(n=new Error("Cannot find module '"+t+"'")).code="MODULE_NOT_FOUND",n}n=o[t]={exports:{}},r[t][0].call(n.exports,function(e){return c(r[t][1][e]||e)},n,n.exports,i,r,o,a)}return o[t].exports}for(var s="function"==typeof require&&require,e=0;e<a.length;e++)c(a[e]);return c}({1:[function(e,t,n){"use strict";var i=document.querySelector(".mobile-menu-icon"),r=document.querySelector(".site-navigation-mobile"),o=document.getElementById("main");i.addEventListener("click",function(){r.classList.toggle("site-navigation-mobile--is-active")}),o.addEventListener("click",function(e){var t=document.querySelector(".site-navigation-mobile--is-active");e.target!=t&&r.classList.remove("site-navigation-mobile--is-active")})},{}],2:[function(e,t,n){"use strict";new Swiper(".slider",{direction:"horizontal",effect:"fade",loop:!0,slidesPerView:"auto",centeredSlides:!0,grabCursor:!0,autoplay:{delay:5e3,disableOnInteraction:!1},navigation:{prevEl:".swiper-button-prev",nextEl:".swiper-button-next"}})},{}],3:[function(e,t,n){"use strict";function i(e,t){for(var n,i=document.getElementsByClassName("nav-box__container"),r=0;r<i.length;r++)i[r].style.display="none";for(n=document.getElementsByClassName("nav-box__link"),r=0;r<n.length;r++)n[r].className=n[r].className.replace(" active-link","");document.getElementById(t).style.display="block",e.currentTarget.className+=" active-link"}var r=document.querySelector("#nav-tab-events"),o=document.querySelector("#nav-tab-news");r.addEventListener("click",function(){return i(event,"nav-content-events")}),o.addEventListener("click",function(){return i(event,"nav-content-news")}),r.click()},{}],4:[function(e,t,n){"use strict";var i=document.getElementById("news-events"),r=document.querySelector(".site-header__modal"),o=document.getElementById("main");i.addEventListener("click",function(){r.classList.toggle("site-header__modal--is-active"),i.classList.toggle("nav-item--is-active")}),o.addEventListener("click",function(e){var t=document.querySelector(".site-header__modal--is-active");e.target!=t&&(r.classList.remove("site-header__modal--is-active"),i.classList.remove("nav-item--is-active"))})},{}]},{},[2,1,3,4]);