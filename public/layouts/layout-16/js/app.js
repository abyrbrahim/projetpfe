"use strict";var _typeof="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(t){return typeof t}:function(t){return t&&"function"==typeof Symbol&&t.constructor===Symbol&&t!==Symbol.prototype?"symbol":typeof t},_createClass=function(){function n(t,e){for(var a=0;a<e.length;a++){var n=e[a];n.enumerable=n.enumerable||!1,n.configurable=!0,"value"in n&&(n.writable=!0),Object.defineProperty(t,n.key,n)}}return function(t,e,a){return e&&n(t.prototype,e),a&&n(t,a),t}}();function _classCallCheck(t,e){if(!(t instanceof e))throw new TypeError("Cannot call a class as a function")}window.formatMoney=function(t){return parseInt(t).formatMoney()},Number.prototype.formatMoney=function(t){var e=this,a=isNaN(a=Math.abs(a))?0:a,n=null==n?".":n,i=(t=null==t?",":t,e<0?"-":""),o=String(parseInt(e=Math.abs(Number(e)||0).toFixed(a))),s=3<(s=o.length)?s%3:0;return i+(s?o.substr(0,s)+t:"")+o.substr(s).replace(/(\d{3})(?=\d)/g,"$1"+t)+(a?n+Math.abs(e-o).toFixed(a).slice(2):"")},Number.prototype.num=function(){return this.formatMoney(",")},String.prototype.unNum=function(t){var e;return void 0!==t&&(e=parseFloat(this.replace(t,""))),e=parseFloat(this.replace(/,/g,"")),isNaN(e)&&(e=0),e},window.getConfig=function(t,e){var a={};for(var n in void 0===t&&(t={}),e)a[n]=e[n],void 0!==t[n]&&(a[n]=t[n]);return a},window.copyToClipboard=function(t){var e,a=!0,n=document.createRange();if(window.clipboardData)window.clipboardData.setData("Text",t);else{var i=$("<div>");i.css({position:"absolute",left:"-1000px",top:"-1000px"}),i.text(t),$("body").append(i),n.selectNodeContents(i.get(0)),(e=window.getSelection()).removeAllRanges(),e.addRange(n);try{a=document.execCommand("copy",!1,null)}catch(t){}a&&i.remove()}},$(".input-datepicker").datepicker({autoclose:!0,templates:{leftArrow:'<i class="fas fa-angle-left"></i>',rightArrow:'<i class="fas fa-angle-right"></i>'},format:"yyyy-mm-dd"}),$(".input-timepicker").clockpicker(),$(".clockpicker").clockpicker(),$(".date-timepicker .input-datepicker").on("change",function(t){$(this).closest(".date-timepicker").find(".input-timepicker").focus()}),$(".input-datetimepicker").each(function(t){var e=$(this).val(),a="",n="";1<e.split(" ").length&&(a=e.split(" ")[0],n=e.split(" ")[1]);var i=$(this).data("placement")||"bottom",o=$(this).data("align")||"left";$(this).parent().append('\n\t\t<input type="text" class="form-control input-datetimepicker-date" value="'+a+'">\n\t\t<input type="text" class="form-control input-datetimepicker-time" data-placement="'+i+'" data-align="'+o+'" data-autoclose="true" value="'+n+'">\n\t');var s=$(this).parent().find(".input-datetimepicker-date"),r=$(this).parent().find(".input-datetimepicker-time");s.datepicker({autoclose:!0,templates:{leftArrow:'<i class="fas fa-angle-left"></i>',rightArrow:'<i class="fas fa-angle-right"></i>'},format:s.data("format")||"yyyy-mm-dd"}),r.clockpicker()}),$(".input-datetimepicker").each(function(t){var e=$(this),i=e.parent().find(".input-datetimepicker-date"),o=e.parent().find(".input-datetimepicker-time");i.on("change",function(){e.val(i.val()+" "+o.val()),o.clockpicker("show")}),o.on("change",function(){e.val(i.val()+" "+o.val())}),e.on("focus",function(t){i.datepicker("show")}),e.on("change",function(t){var e=$(this).val(),a="",n="";1<e.split(" ").length&&(a=e.split(" ")[0],n=e.split(" ")[1],o.val(n),i.val(a).datepicker("setDate",a))})});var PRETTY_SELECTORS=[],PrettySelector=function(){function n(t,e,a){_classCallCheck(this,n),this.el=t,this.original_el=this.el.prev(),this.original_options=e,this.options=this.setOptions(this.original_el,e),this.triggerChangeAtInit=!1,this.instanceNumber=a,this.selectedItems={},this.original_el.hide(),this.prepareOriginalSelectBox(),this.build(),this.setEventListeners(),this.update()}return _createClass(n,[{key:"setOptions",value:function(i,t){return $.extend({el:i,template:!1,name:i.attr("name")||"selector",items:function(){for(var t=i.find("option"),e=[],a=0;a<t.length;a++){var n=$(t[a]);e.push({originalOption:n,value:n.attr("value")?n.attr("value"):n.text().trim(),label:n.text().trim(),isSelected:!(!n.prop("selected")&&!n.attr("selected")),isDisabled:n.prop("disabled"),image:n.attr("image"),icon:n.attr("icon")})}return e}(),separator:i.attr("separator")||", ",placeholder:i.attr("placeholder")||"Select one",color:i.data("color")||"light",multiple:void 0!==i.attr("multiple")},t)}},{key:"prepareOriginalSelectBox",value:function(){this.original_el.find("option").each(function(){var t=$(this);t.attr("value")||t.attr("value",t.text()),t.attr("selected")&&t.removeAttr("selected").prop("selected",!0)})}},{key:"build",value:function(){var t=void 0;t=this.buildOptions();var e='\n\t\t\t<div class="dropdown dropdown-select dropdown-select-'+this.options.color+' btn-block p-0">\n\t\t\t\t<button class="btn btn-'+this.options.color+' dropdown-toggle" id="customSelectorDropdown-'+this.instanceNumber+"-"+this.options.name+'" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">\n\t\t\t\t\t'+this.options.placeholder+'\n\t\t\t\t</button>\n\t\t\t\t<div class="dropdown-menu" aria-labelledby="customSelectorDropdown-'+this.options.name+'">\n\t\t\t\t\t'+t.join("\n")+"\n\t\t\t\t</div>\n\t\t\t</div>";this.el.html(e)}},{key:"buildOptions",value:function(){for(var t=[],e=0;e<this.options.items.length;e++){var a=this.options.items[e];t.push(this.template(a))}return t}},{key:"template",value:function(t){return this.options.template?this.options.template(t):'\n\t\t<div class="dropdown-item">\n\t\t\t<button type="button" data-value="'+t.value+'" data-label="'+t.label+'" '+(t.isDisabled?"disabled":"")+' class="button btn btn-block'+(t.isSelected&&!t.isDisabled?" active":"")+'">\n\t\t\t\t'+this.image(t)+"\n\t\t\t\t"+this.icon(t)+'\n\t\t\t\t<span class="content">'+t.label+"</span>\n\t\t\t</button>\n\t\t</div>"}},{key:"image",value:function(t){return void 0!==t.image?'\n\t\t\t\t\t\t<div class="avatar-group select-thumbnail">\n\t\t\t\t\t\t\t<a href="#" class="avatar avatar-sm">\n\t\t\t\t\t\t\t\t<img alt="Option image" src="'+t.image+'" class="rounded-circle">\n\t\t\t\t\t\t\t</a>\n\t\t\t\t\t\t</div>':""}},{key:"icon",value:function(t){return void 0!==t.icon?'<i class="'+t.icon+'"></i>':""}},{key:"update",value:function(){var n=this,t=this.original_el.find("option:selected, option[selected]");this.el.find(".dropdown-item .button.active").removeClass("active"),this.selectedItems={},n.options.multiple||(t=this.original_el.find("option:selected, option[selected]").prop("selected",!1).last().prop("selected",!0)),t.each(function(){var t=$(this),e=t.attr("value"),a=t.text().trim();n.el.find('.dropdown-item .button[data-value="'+e+'"]').addClass("active"),n.options.multiple||(n.el.find('.dropdown-item .button[data-value="'+e+'"]').addClass("active"),n.selectedItems={}),n.selectedItems[e]=a});var e=[],a=[];for(var i in this.selectedItems){var o=this.selectedItems[i];!1!==o&&(e.push(o.trim()),a.push(i))}this.el.find(".dropdown-toggle").text(0==e.length?this.options.placeholder:e.join(this.options.separator)),this.original_el.trigger("change.customselect",[this.options.multiple?a:a[0]])}},{key:"setEventListeners",value:function(){var i=this;this.original_el.on("change",function(t){i.update()}),this.el.find(".dropdown-select .dropdown-item>.button").on("click",function(t){var e=$(this),a=e.data("value"),n=i.original_el.find("option[value='"+a+"']");i.options.multiple?e.hasClass("active")?n.prop("selected",!1):n.prop("selected",!0):(i.original_el.find("option:selected").prop("selected",!1),n.prop("selected",!0)),i.original_el.trigger("change"),i.update()}),i.options.multiple&&this.el.find(".dropdown-menu").on("click",function(t){return t.stopPropagation()}),this.triggerChangeAtInit&&this.original_el.trigger("change")}},{key:"dispose",value:function(){this.original_el.show(),PRETTY_SELECTORS[this.original_el.data("instance-index")]=void 0,PRETTY_SELECTORS=PRETTY_SELECTORS.filter(function(t){return void 0!==t}),this.el.detach()}},{key:"reset",value:function(){var t=this.original_el.data("instance-index");this.el.detach(),this.original_el.after('<div class="pretty-selector-el"></div>'),PRETTY_SELECTORS[t]=new n(this.original_el.next(),this.original_options||{},t)}}],[{key:"init",value:function(t,e){t.after('<div class="pretty-selector-el"></div>'),t.data("instance-index",PRETTY_SELECTORS.length);var a=new n(t.next(),e||{},PRETTY_SELECTORS.length);PRETTY_SELECTORS.push(a)}}]),n}(),prettySelectorElements=$("[data-toggle='selector']");!function(l){var c={update:!0,dispose:!0,reset:!0};l.fn.selector=function(o,s){var r=this;return this.each(function(t,e){var a=l(e);if(c[o]){var n=o,i=PRETTY_SELECTORS[a.data("instance-index")];return i&&i[n](s),r}if("object"!==(void 0===o?"undefined":_typeof(o))&&o)throw new TypeError('Method named "'+o+'" does not exist on jQuery.prettySelector');return PrettySelector.init(a,o),r})}}(jQuery),$(document).ready(function(){$("[data-toggle='class']").on("click",function(t){t.preventDefault();var e=$(this).data("target")||$(this).attr("href");(e=e&&"self"!=e?"parent"==e?$(this).parent():$($(this).data("target")||$(this).attr("href")):$(this)).toggleClass($(this).data("class")),e.trigger("toggled.class",[$(this).data("class")])})}),$(document).ready(function(){$(".table-checkbox-all").on("change",function(t){var e=$(this).closest("table").find("td .custom-checkbox");$(this).is(":checked")?e.checkboxes("check"):e.checkboxes("uncheck"),e.find("input").trigger("change")}),$(".table-checklist-toggler>tbody>tr").on("click",function(t){t.preventDefault();var e=$(this).find("input[type='checkbox']");e.is(":checked")?e.prop("checked",!1):e.prop("checked",!0),e.trigger("change")}),$(".table-checklist-toggler>tbody>tr input[type='checkbox']").on("change",function(t){$(this).is(":checked")?$(this).closest("tr").addClass("row-selected"):$(this).closest("tr").removeClass("row-selected")}),$("[data-toggle='checkbox']").on("click",function(t){$(this).is("input")||t.preventDefault();var e=$($(this).data("target")),a=$(this).data("value");"toggle"==a?e.checkboxes("toggle"):(a=void 0===a?$(this).is(":checked"):a,e.find("input").prop("checked",a)),e.find("input").trigger("change")})}),$(document).ready(function(){$(".table-accordion .accordian-body").on("show.bs.collapse",function(t){$(this).closest("table").find(".collapse.show").not(this).collapse("toggle")})}),$(document).ready(function(){$(".smooth-link").on("click",function(t){var e=$($(this).attr("href"));$("html, body").animate({scrollTop:e.offset().top},500)})}),$(document).ready(function(){$(".input-group-password-toggle .btn-password-toggle").on("click",function(t){var e=$(this).closest(".input-group-password-toggle");$(this).hasClass("seeing")?(e.find("input").attr("type","password"),$(this).removeClass("seeing")):(e.find("input").attr("type","text"),$(this).addClass("seeing"))})}),$(document).ready(function(){$(".form-group-material .form-control").on("blur",function(t){var e=$(this).closest(".form-group-material");0<$(this).val().length?e.addClass("filled"):e.hasClass("filled")&&e.removeClass("filled")}).trigger("blur")});var LineChart=function(){function i(t,e,a){for(var n in _classCallCheck(this,i),this.options={height:"200px",width:"100%",circle_fill:"red",stroke_color:"rgb(255, 0, 0)",stroke_width:"2px",circle_radius:"3px"},this.el=t,this.data=e,this.builtData=[],this.svgData=[],this.options)void 0!==a[n]&&(this.options[n]=a[n]);this.buildData(),this.buildSvg()}return _createClass(i,[{key:"buildData",value:function(){for(var t=Math.max.apply(Math,this.data),e=.8*Math.min.apply(Math,this.data),a=e-.05*(t-e),n=(100/(t+.05*(t-e)-a)).toFixed(2),i=(100/(this.data.length-1)).toFixed(2),o=0;o<this.data.length;o++){var s=this.data[o]-a,r={x:(o*i).toFixed(2),y:(s*n).toFixed(2)};this.builtData.push(r)}}},{key:"buildSvg",value:function(){this.lines=[],this.circles=[];for(var t={},e=0;e<this.builtData.length-1;e++){var a=this.builtData[e];t={cx:a.x,cy:a.y,x1:a.x,y1:a.y,x2:this.builtData[e+1].x,y2:this.builtData[e+1].y},this.svgData.push(t),this.lines.push(['<line x1="'+t.x1+'%" y1="'+t.y1+'%" x2="'+t.x2+'%" y2="'+t.y2+'%" style="stroke: '+this.options.stroke_color+" ; stroke-width: "+this.options.stroke_width+' ;" />']),this.circles.push(['<circle cx="'+t.cx+'%" cy="'+t.cy+'%" r="'+this.options.circle_radius+'" fill="'+this.options.circle_fill+'"/>\n\t\t\t\t <circle cx="'+t.cx+'%" cy="'+t.cy+'%" r="15px" fill="transparent" title="'+this.data[e]+'"/>'])}this.circles.push(['<circle cx="'+t.x2+'%" cy="'+t.y2+'%" r="'+this.options.circle_radius+'" fill="'+this.options.circle_fill+'"/>\n\t\t\t <circle cx="'+t.cx+'%" cy="'+t.cy+'%" r="15px" fill="transparent" title="'+this.data[this.builtData.length-1]+'"/>']),this.svg=this.lines.concat(this.circles)}},{key:"build",value:function(){this.el.html('\n\t\t<svg height="'+this.options.height+'" width="'+this.options.width+'" style="transform: scaleY(-1);">\n\t\t\t'+this.svg.join("")+"\n\t\t</svg>\n\t\t"),this.el.find("circle,line").tooltip()}}]),i}();window.setRadialProgreeBarValue=function(t){t.each(function(){var t=$(this),e=t.find("svg path:last-child"),a=e[0].getTotalLength(),n=parseFloat(t.attr("data-value")),i=a*((100-(n=isNaN(n)||100<n||n<0?0:n))/100);e[0].getBoundingClientRect(),e.css({strokeDashoffset:i})})},function(){function n(t){t.removeClass("show")}$(".navbar .navbar-toggler").is(":visible")?$(".navbar-bottom .dropdown-menu").parent().find(">a").on("click",function(t){t.preventDefault(),t.stopPropagation(),n($(this).closest(".dropdown-menu").find(".dropdown-menu").not($(this).parent().find(".dropdown-menu"))),$(this).parent().find(">.dropdown-menu").toggleClass("show")}):$(".navbar-bottom .navbar-nav>.nav-item.dropdown>.dropdown-menu .dropdown-menu").parent().hover(function(t){var e,a;t.preventDefault(),t.stopPropagation(),e=$(this),a=e.find(">.dropdown-menu"),n(e.siblings(".navbar-dropdown").find(".dropdown-menu.show")),new Popper(e.find(".dropdown-toggle")[0],a[0],{placement:"right-start"}),a.toggleClass("show"),a.hasClass("show")&&$(document).one("click",function(t){return n(a)})},function(t){n($(this).find(".dropdown-menu"))})}();var el=$(".custom-range");window.listenForChangeInHelperInput=function(o,s){var r=parseInt(o.val());o.on("input",function(t){t.stopPropagation();var e=o.val(),a=e,n=s.attr("max"),i=s.attr("min");a=parseInt(e),isNaN(a)?a=0:n<a?a=n:a<i&&(a=i),a!==r&&(s.val(a),o.parent().trigger("input")),r=a})},el.each(function(){var t=$(this),e=t.parent().find(".range-value>input");t.on("input",function(t){e.val($(this).val())}),listenForChangeInHelperInput(e,t)}),window.showHeaderSearchResults=function(){var a=$(".navbar-search .input-group"),t=a.find(".live-search-results");t.addClass("is-loading"),a.addClass("editing has-results"),setTimeout(function(){t.removeClass("is-loading")},700);$("body").on("click",function t(e){$(e.target).hasClass("navbar-search")||$(e.target).closest(".navbar-search").length||($("body").off("click",t),a.removeClass("has-results"))})},$(".input-close-btn").on("click",function(t){$(this).closest(".form-group").removeClass("navbar-search-active").find("input").val("").focus().trigger("input")}),$(".navbar-search .input-group input").on("focus",function(t){var e=$(this).parent();0<$(this).val().length&&!e.hasClass("editing")&&showHeaderSearchResults()}),$(".navbar-search .bind-to-edit-indicator").on("input",function(t){var e=$(this).parent();0==$(this).val().length?e.removeClass("editing").removeClass("has-results"):showHeaderSearchResults()}),$(".alert-dismissible[data-animation]").on("close.bs.alert",function(t){t.preventDefault(),"slideUp"==$(this).data("animation")?$(this).slideUp(300):animateCSS($(this),$(this).data("animation"),function(t){t.detach()})}),$(".modal[data-animation]").on("shown.bs.modal",function(t){t.preventDefault();var e=$(this),a=e.data("animation");e.css({display:"block"}),animateCSS(e,a,function(){e.addClass("show")})}),$(".modal[data-animation-out]").on("hide.bs.modal",function(t){if($(this).data("force-hide"))return $(this).data("force-hide",!1),!0;t.preventDefault();var e=$(this),a=e.data("animation-out");animateCSS(e,a,function(){e.data("force-hide",!0),e.modal("hide")})}),$(".modal[data-effect]").on("show.bs.modal",function(t){$("body").addClass("body-"+$(this).data("effect"))}),$(".modal[data-effect]").on("hide.bs.modal",function(t){$("body").removeClass("body-"+$(this).data("effect"))}),$(".btn-panel-minimize").on("click",function(t){var e=$(this).closest(".panel"),a=e.find(">.panel-body");0==a.length&&(a=e.find(">.panel-minimizable")),e.hasClass("panel-collapsed")?(e.removeClass("panel-collapsed"),a.slideDown(300)):(e.addClass("panel-collapsing"),a.slideUp(300,function(){e.addClass("panel-collapsed"),e.removeClass("panel-collapsing")}))}),$(".btn-panel-close").on("click",function(t){var e=$(this).closest(".panel");$(this).hasClass("panel-fade")?e.fadeOut(400,function(){e.detach()}):e.detach()}),$(".btn-panel-print").on("click",function(t){window.print()}),window.animateTabFloorToPosition=function(t){var e=t.width(),a=t.height(),n=t.position(),i=t.closest(".nav-tabs-animated").find(".nav-floor"),o=i.data("position"),s={};s.left=n.left,s.width=e,i.data("full-height")&&(s.height=a),s.top="top"==o?n.top:n.top+a-3,i.addClass("moving").css(s).one("transitionend",function(t){$(this).removeClass("moving")})},$(".nav-tabs-animated").length&&($(".nav-tabs-animated:not(.nav-tabs-bg-animated) a").on("click",function(){animateTabFloorToPosition($(this).parent())}),$(".nav-tabs-animated:not(.nav-tabs-bg-animated)").each(function(){animateTabFloorToPosition($(this).find(".active").parent()),$(this).find(".active").parent().on("resize",function(){animateTabFloorToPosition($(this).parent())})})),window.animateTabBGToPosition=function(t){var e=t.width(),a=t.height(),n=t.position(),i=t.closest(".nav-tabs-animated").find(".nav-floor"),o={};o.left=n.left,o.width=e,o.height=a,o.top=n.top,i.addClass("moving").css(o).one("transitionend",function(t){$(this).removeClass("moving")})},$(".nav-tabs-bg-animated").length&&($(".nav-tabs-bg-animated a").on("click",function(){animateTabBGToPosition($(this).parent())}),$(".nav-tabs-bg-animated").each(function(){animateTabBGToPosition($(this).find(".active").parent()),$(this).find(".active").parent().on("resize",function(){animateTabBGToPosition($(this).parent())})})),window.animateTabWallToPosition=function(t){var e=t.height(),a=t.position();t.closest(".nav-vertical-tabs-animated").find(".nav-wall").addClass("moving").css({top:+a.top,height:e}).one("transitionend",function(t){$(this).removeClass("moving")})},$(".nav-vertical-tabs-animated").length&&($(".nav-vertical-tabs-animated a").on("click",function(){animateTabWallToPosition($(this).parent())}),$(".nav-vertical-tabs-animated").each(function(){animateTabWallToPosition($(this).find(".active").parent()),$(this).find(".active").parent().on("resize",function(){animateTabWallToPosition($(this).parent())})})),$(".toast[data-animation-out]").on("hide.bs.toast",function(t){if($(this).data("force-hide"))return $(this).data("force-hide",!1),!0;t.preventDefault();var e=$(this),a=e.data("animation-out");animateCSS(e,a,function(){e.data("force-hide",!0),e.toast("hide")})}),window.showDropdown=function(t){var e=t.find(">.dropdown-menu");new Popper(t[0],e[0],{placement:"right-start"}),e.toggleClass("show"),e.hasClass("show")&&$(document).one("click",function(t){return hideDropdown(e)})},window.hideDropdown=function(t){t.removeClass("show dropdown-menu-left dropdown-menu-right").find(".dropdown-menu").removeClass("dropdown-menu-left dropdown-menu-right")},$(".navbar .navbar-toggler:not(.sidebar-toggler)").is(":visible")?$(".navbar-top .dropdown .dropdown-item.dropdown>.dropdown-toggle").on("click",function(t){t.preventDefault(),t.stopPropagation(),hideDropdown($(this).closest(".dropdown-menu").find(".dropdown-menu").not($(this).parent().find(".dropdown-menu"))),$(this).parent().find(">.dropdown-menu").toggleClass("show")}):$(".navbar-top .dropdown .dropdown-item.dropdown").hover(function(t){t.preventDefault(),t.stopPropagation(),showDropdown($(this))},function(t){hideDropdown($(this).find(".dropdown-menu"))}),$(document).ready(function(){var o=!1;$("[data-toggle='off-canvas']").on("click",function(t){t.preventDefault();var n=this,i=$(this).data("target");if(!(i=i?$(i):$($(this).attr("href"))).hasClass("active")){var e=$.Event("show.off-canvas");if(i.trigger(e),!e.isDefaultPrevented()){i.addClass("active"),$("body").addClass("off-canvas-open"),i.hasClass("has-overlay")&&$("body").append('<div class="modal-backdrop show"></div>'),i.hasClass("no-animation")?i.trigger("shown.off-canvas"):i.one("transitionend",function(t){i.trigger("shown.off-canvas"),o=!0});i.hasClass("off-canvas-static")||$("body").on("click",function t(e){if(!$(e.target).hasClass("off-canvas")&&!$(e.target).closest(".off-canvas").length&&!$(e.target).is($(n))){$("body").off("click",t);var a=$.Event("hide.off-canvas");if(i.trigger(a),a.isDefaultPrevented())return;i.removeClass("active"),i.hasClass("has-overlay")&&$("body").find(".modal-backdrop").last().detach(),o&&!i.hasClass("no-animation")?i.one("transitionend",function(t){o&&(i.trigger("hidden.off-canvas"),$("body").removeClass("off-canvas-open")),o=!1}):(i.trigger("hidden.off-canvas"),$("body").removeClass("off-canvas-open"),o=!1)}})}}}),$("[data-dismiss='off-canvas']").on("click",function(t){var e=$(this).closest(".off-canvas"),a=$.Event("hide.off-canvas");e.trigger(a),a.isDefaultPrevented()||(e.removeClass("active"),e.hasClass("has-overlay")&&$("body").find(".modal-backdrop").last().detach(),$("body").removeClass("off-canvas-open"),e.trigger("hidden.off-canvas"))}),$(".off-canvas[data-effect]").on("show.off-canvas",function(t){for(var e=$(this).data("effect").split(" "),a=0;a<e.length;a++){var n=e[a];$("body").addClass("body-"+n)}}),$(".off-canvas[data-effect]").on("hidden.off-canvas",function(t){for(var e=$(this).data("effect").split(" "),a=0;a<e.length;a++){var n=e[a];$("body").removeClass("body-"+n)}})}),$(document).ready(function(){$(".custom-file").length&&bsCustomFileInput.init()}),$(document).ready(function(){$('[data-toggle="tooltip"]').each(function(){var t=$(this),e={};t.data("position")&&(e.placement=t.data("position")),t.data("type")&&(e.template='<div class="tooltip tooltip-'+t.data("type")+'" role="tooltip"><div class="arrow"></div><div class="tooltip-inner bg-'+t.data("type")+'"></div></div>'),t.tooltip(e)});for(var t=["top","bottom","left","right"],e=0;e<t.length;e++){var a=t[e];$(".tooltip-"+a).length&&$(".tooltip-"+a).tooltip({placement:a})}}),$(document).ready(function(){$('[data-toggle="popover"]').each(function(){var t=$(this),e={};t.data("type")&&(e.template='<div class="popover bg-'+t.data("type")+'" role="tooltip"><div class="arrow"></div><h3 class="popover-header"></h3><div class="popover-body"></div></div>'),t.popover(e)})}),$(document).ready(function(){$(".toast").length&&$(".toast").toast()}),window.animateCSS=function(t,e,a){t[0].classList.add("animated",e),t[0].addEventListener("animationend",function t(){this.classList.remove("animated",e),this.removeEventListener("animationend",t),"function"==typeof a&&a($(this))})},jQuery.fn.extend({tinymce:function(e){function t(t){return e.apply(this,arguments)}return t.toString=function(){return e.toString()},t}(function(t){return t.target=this[0],tinymce.init(t)})}),window.exonNotify=function(t,e,a){var n=getConfig(a,{type:"primary",icon:"fas fa-exclamation",title:t,message:e,allow_dismiss:"on",mouse_over:"on",newest_on_top:!1,progressbar:!1,spacing:10,"offset-x":20,"offset-y":20,delay:1e4,"z-index":1031,position:"top-right"});$.notify({icon:n.icon,title:n.title,message:n.message,url:"",target:"_blank"},{type:n.type,allow_dismiss:"on"==n.allow_dismiss,newest_on_top:"on"==n.newest_on_top,placement:{from:n.position.split("-")[0],align:n.position.split("-")[1]},offset:{x:n["offset-x"],y:n["offset-y"]},animate:{enter:"animated fadeInDown",exit:"animated fadeOutUp"},showProgressbar:"on"==n.progressbar,spacing:n.spacing,z_index:n.z_index,delay:n.delay,mouse_over:!1!==["on","pause"].indexOf(n.mouse_over)?"pause":null,icon_type:"class",template:'<div data-notify="container" class="col-xs-12 col-sm-8 alert alert-{0} animated fadeInDown" role="alert"> \n\t<div class="row no-gutters"> \n \n\t\t<div class="col col-icon"> \n\t\t\t<span class="notification-icon"> \n\t\t\t\t<i data-notify="icon"></i> \n\t\t\t</span> \n\t\t</div> \n \n\t\t<div class="col col-content"> \n\t\t\t<button type="button" aria-hidden="true" class="close" data-notify="dismiss"> \n\t\t\t\t<svg fill="#ffffff" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path class="heroicon-ui" d="M16.24 14.83a1 1 0 0 1-1.41 1.41L12 13.41l-2.83 2.83a1 1 0 0 1-1.41-1.41L10.59 12 7.76 9.17a1 1 0 0 1 1.41-1.41L12 10.59l2.83-2.83a1 1 0 0 1 1.41 1.41L13.41 12l2.83 2.83z"></path></svg> \n\t\t\t</button> \n\t\t\t<h5 data-notify="title">{1}</h5> \n\t\t\t<p data-notify="message">{2}</p> \n\t\t\t<a href="{3}" target="{4}" data-notify="url"></a> \n\t\t\t<div class="progress squared" data-notify="progressbar"> \n\t\t\t\t<div class="progress-bar bg-{0}" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div> \n\t\t\t</div> \n\t\t</div> \n \n\t</div> \n\t\t \n</div> \n'})},$(document).ready(function(){var t=$("notification"),h=["type","icon","title","message","allow_dismiss","mouse_over","newest_on_top","progressbar","spacing","offset-x","offset-y","delay","z-index","position"];t.each(function(t,e){var a=$(e),n=a.find("title"),i=a.find("message"),o=a.find("i"),s={};0<n.length&&(s.title=n.text()),0<i.length&&(s.message=i.text()),0<o.length&&(s.icon=o.attr("class"));var r=a.attr("type");void 0!==r&&(s.type=r);for(var l=0;l<h.length;l++){var c=h[l],d=a.data(c);void 0!==d&&(s[c]=d)}exonNotify("","",s),a.detach()})}),$(document).ready(function(){$(".switchery").each(function(){new Switchery(this,{color:"#64bd63",secondaryColor:"#dfdfdf",className:$(this).attr("class"),jackColor:"#fff",speed:"0.5s"})}),$(".switchery-small").each(function(){new Switchery(this,{color:"#64bd63",secondaryColor:"#dfdfdf",jackColor:"#fff",size:"small"})}),$(".switchery-large").each(function(){new Switchery(this,{color:"#64bd63",secondaryColor:"#dfdfdf",jackColor:"#fff",size:"large"})})}),$(document).ready(function(){$(".switchery-primary").each(function(){new Switchery(this,{color:"#5780f7",secondaryColor:"#dfdfdf",className:$(this).attr("class")+" switchery",jackColor:"#fff",speed:"0.5s"})}),$(".switchery-secondary").each(function(){new Switchery(this,{color:"#efefef",secondaryColor:"#dfdfdf",className:$(this).attr("class")+" switchery",jackColor:"#fff",speed:"0.5s"})}),$(".switchery-success").each(function(){new Switchery(this,{color:"#06c48c",secondaryColor:"#dfdfdf",className:$(this).attr("class")+" switchery",jackColor:"#fff",speed:"0.5s"})}),$(".switchery-danger").each(function(){new Switchery(this,{color:"#ed3472",secondaryColor:"#dfdfdf",className:$(this).attr("class")+" switchery",jackColor:"#fff",speed:"0.5s"})}),$(".switchery-warning").each(function(){new Switchery(this,{color:"#fab72b",secondaryColor:"#dfdfdf",className:$(this).attr("class")+" switchery",jackColor:"#fff",speed:"0.5s"})}),$(".switchery-info").each(function(){new Switchery(this,{color:"#4cacff",secondaryColor:"#dfdfdf",className:$(this).attr("class")+" switchery",jackColor:"#fff",speed:"0.5s"})}),$(".switchery-light").each(function(){new Switchery(this,{color:"#fafafa",secondaryColor:"#dfdfdf",className:$(this).attr("class")+" switchery",jackColor:"#fff",speed:"0.5s"})}),$(".switchery-dark").each(function(){new Switchery(this,{color:"#393b51",secondaryColor:"#dfdfdf",className:$(this).attr("class")+" switchery",jackColor:"#fff",speed:"0.5s"})})}),$(document).ready(function(){$("input.input-spinner").length&&$("input.input-spinner").inputSpinner()}),$(document).ready(function(){$("[data-toggle='selector']").length&&$("[data-toggle='selector']").selector()}),$(document).ready(function(t){t(".counter").length&&t(".counter").counterUp({delay:10,time:1e3})}),$(document).ready(function(){if($(".colorpicker-sliders").length){var n=document.querySelector(".colorpicker-sliders .result"),t=document.querySelectorAll(".colorpicker-sliders .red,.colorpicker-sliders .blue,.colorpicker-sliders .green"),i=[0,0,0];[].slice.call(t).forEach(function(e,a){noUiSlider.create(e,{start:127,connect:[!0,!1],orientation:"vertical",range:{min:0,max:255}}),e.noUiSlider.on("update",function(){i[a]=e.noUiSlider.get();var t="rgb("+i.join(",")+")";n.style.background=t,n.style.color=t})})}}),$(document).ready(function(){if($(".colorpicker-sliders-hor").length){var n=document.querySelector(".colorpicker-sliders-hor .result"),t=document.querySelectorAll(".colorpicker-sliders-hor .red,.colorpicker-sliders-hor .blue,.colorpicker-sliders-hor .green"),i=[0,0,0];[].slice.call(t).forEach(function(e,a){noUiSlider.create(e,{start:127,connect:[!0,!1],range:{min:0,max:255}}),e.noUiSlider.on("update",function(){i[a]=e.noUiSlider.get();var t="rgb("+i.join(",")+")";n.style.background=t,n.style.color=t})})}});