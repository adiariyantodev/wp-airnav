!function(e){var r={};function t(n){if(r[n])return r[n].exports;var a=r[n]={i:n,l:!1,exports:{}};return e[n].call(a.exports,a,a.exports,t),a.l=!0,a.exports}t.m=e,t.c=r,t.d=function(e,r,n){t.o(e,r)||Object.defineProperty(e,r,{enumerable:!0,get:n})},t.r=function(e){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},t.t=function(e,r){if(1&r&&(e=t(e)),8&r)return e;if(4&r&&"object"==typeof e&&e&&e.__esModule)return e;var n=Object.create(null);if(t.r(n),Object.defineProperty(n,"default",{enumerable:!0,value:e}),2&r&&"string"!=typeof e)for(var a in e)t.d(n,a,function(r){return e[r]}.bind(null,a));return n},t.n=function(e){var r=e&&e.__esModule?function(){return e.default}:function(){return e};return t.d(r,"a",r),r},t.o=function(e,r){return Object.prototype.hasOwnProperty.call(e,r)},t.p="/",t(t.s=441)}({441:function(e,r,t){e.exports=t(442)},442:function(e,r){jQuery(document).ready((function(e){var r=e(".wpsr-album-cover-photo-wrapper-inner"),t=[];r.each((function(r,n){n.addEventListener("click",(function(r){r.preventDefault();var n=e(r.target).closest(".wpsr-album-cover-photo-wrapper-inner");n.hasClass("active")||n.addClass("active");var a=e(n).attr("id"),o=e(n).attr("data-template-id");e(".wpsr-album-cover-photo , .wpsr-fb-albums-feed-info").hide(),e(".wpsr-album-cover-photo-wrapper").each((function(r,t){0===e(t).find("div.wpsr-album-cover-photo-wrapper-inner.active").length&&e(t).parent().hide()})),e("#wpsr-album-".concat(a)).css("display","block");var p=e(r.target).closest(".wpsr-album-cover-photo-wrapper");p.length>0&&(t=p.parent().attr("class").split(" "),p.parent().removeClass(),p.parent().removeAttr("class"),p.parent().css("width","100%")),document.getElementById("wpsr-album-feed-".concat(a)).childElementCount<1&&jQuery.get(wpsr_ajax_params.ajax_url,{action:"wpsr_facebook_album_photo",template_id:o,feed_id:a}).then((function(r){r&&(e("#wpsr-album-feed-".concat(a))[0].innerHTML=r)})).catch((function(e){console.error(e)})).always((function(){}))}))})),e(".wpsr-album-cover-photo-wrapper").each((function(r,t){e(t).on("click",".wpsr-fb-feed-bread-crumbs-album",(function(e){n(e)}))}));var n=function(r){r.preventDefault(),e(".wpsr-fb-feed-image , .wpsr-fb-albums-feed-info").show(),e(".wpsr-fb-feed-album-wrapper").css("display","none"),e(".wpsr-album-cover-photo-wrapper-inner.active").each((function(r,t){e(t).removeClass("active")})),e(".wpsr-album-cover-photo-wrapper").each((function(r,t){e(t).parent().show()}));var n=e(r.target).closest(".wpsr-album-cover-photo-wrapper");n.length>0&&(n.parent().removeClass(),n.parent().addClass(t.join(" ")))}}))}});