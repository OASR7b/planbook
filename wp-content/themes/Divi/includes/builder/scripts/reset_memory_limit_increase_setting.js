/*! This minified app bundle contains open source software from several third party developers. Please review CREDITS.md in the root directory or LICENSE.md in the current directory for complete licensing, copyright and patent information. This file and the included code may not be redistributed without the attributions listed in LICENSE.md, including associate copyright notices and licensing information. */!function(e){var t={};function n(r){if(t[r])return t[r].exports;var o=t[r]={i:r,l:!1,exports:{}};return e[r].call(o.exports,o,o.exports,n),o.l=!0,o.exports}n.m=e,n.c=t,n.d=function(e,t,r){n.o(e,t)||Object.defineProperty(e,t,{enumerable:!0,get:r})},n.r=function(e){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},n.t=function(e,t){if(1&t&&(e=n(e)),8&t)return e;if(4&t&&"object"==typeof e&&e&&e.__esModule)return e;var r=Object.create(null);if(n.r(r),Object.defineProperty(r,"default",{enumerable:!0,value:e}),2&t&&"string"!=typeof e)for(var o in e)n.d(r,o,function(t){return e[t]}.bind(null,o));return r},n.n=function(e){var t=e&&e.__esModule?function(){return e.default}:function(){return e};return n.d(t,"a",t),t},n.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},n.p="",n(n.s=603)}({19:function(e,t){e.exports=jQuery},603:function(e,t,n){(function(e){e(document).ready(function(){var t=e("#epanel-ajax-saving");e(".et_disable_memory_limit_increase").on("click",function(n){n.preventDefault(),e.ajax({type:"POST",url:ajaxurl,data:{action:"et_reset_memory_limit_increase",et_builder_reset_memory_limit_nonce:et_reset_memory_limit_increase.et_builder_reset_memory_limit_nonce},beforeSend:function(e){t.addClass("et_loading").removeClass("success-animation"),t.fadeIn("fast")},success:function(n){t.removeClass("et_loading").removeClass("success-animation"),setTimeout(function(){t.fadeOut("slow")},500),"success"===n&&(e(".et_disable_memory_limit_increase").closest(".epanel-box").hide(),t.addClass("success-animation"))}})})})}).call(this,n(19))}});
//# sourceMappingURL=reset_memory_limit_increase_setting.js.map