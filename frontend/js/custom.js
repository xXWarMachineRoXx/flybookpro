function openCity(e,i){var a,n,t;for(n=document.getElementsByClassName("tabcontent"),a=0;a<n.length;a++)n[a].style.display="none";for(t=document.getElementsByClassName("tablinks"),a=0;a<t.length;a++)t[a].className=t[a].className.replace(" active","");document.getElementById(i).style.display="block",e.currentTarget.className+=" active"}jQuery(document).ready(function(e){e(".scrollup").click(function(){return e("html, body").animate({scrollTop:0},1e3),!1}),e(".accordion").on("show",function(i){e(i.target).prev(".accordion-heading").find(".accordion-toggle").addClass("active"),e(i.target).prev(".accordion-heading").find(".accordion-toggle i").removeClass("icon-plus"),e(i.target).prev(".accordion-heading").find(".accordion-toggle i").addClass("icon-minus")}),e(".accordion").on("hide",function(i){e(this).find(".accordion-toggle").not(e(i.target)).removeClass("active"),e(this).find(".accordion-toggle i").not(e(i.target)).removeClass("icon-minus"),e(this).find(".accordion-toggle i").not(e(i.target)).addClass("icon-plus")}),e(".navigation").onePageNav({begin:function(){console.log("start")},end:function(){console.log("stop")},scrollOffset:0}),e("a[data-pretty^='prettyPhoto']").prettyPhoto(),e("#menu-main, .brand").localScroll(),e("#menu-main li a").click(function(){var i=e("#menu-main li a");i.removeClass("selected"),e(this).addClass("selected")});var i=!1,a=navigator.platform;("iPad"===a||"iPhone"===a||"iPod"===a)&&(i=!0),i===!1&&(e(".flyIn").bind("inview",function(i,a){a===!0&&e(this).addClass("animated fadeInUp")}),e(".flyLeft").bind("inview",function(i,a){a===!0&&e(this).addClass("animated fadeInLeftBig")}),e(".flyRight").bind("inview",function(i,a){a===!0&&e(this).addClass("animated fadeInRightBig")})),e(".service-box").hover(function(){e(this).find("img").addClass("animated pulse"),e(this).find("h2").addClass("animated fadeInUp")},function(){e(this).find("img").removeClass("animated pulse"),e(this).find("h2").removeClass("animated fadeInUp")});var n=e("#portfolio-wrap");e.browser.safari=e.browser.webkit&&!/chrome/.test(navigator.userAgent.toLowerCase()),e.browser.safari?n.isotope({animationEngine:"jquery",animationOptions:{duration:200,queue:!1},layoutMode:"fitRows"}):(n.isotope({animationEngine:"best-available",animationOptions:{duration:200,queue:!1},layoutMode:"fitRows"}),e(window).resize(function(){n.isotope("reLayout")})),e("#filters a").click(function(){e("#filters a").removeClass("active"),e(this).addClass("active");var i=e(this).attr("data-filter");return n.isotope({filter:i}),!1}),e("#main-flexslider").flexslider({animation:"swing",direction:"vertical",slideshow:!0,slideshowSpeed:3500,animationDuration:1e3,directionNav:!0,prevText:'<i class="icon-angle-up icon-2x"></i>',nextText:'<i class="icon-angle-down icon-2x active"></i>',controlNav:!1,smootheHeight:!0,useCSS:!1})}),document.getElementById("defaultOpen").click();