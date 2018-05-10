/*!
 * Bootstrap v3.3.7 (http://getbootstrap.com)
 * Copyright 2011-2016 Twitter, Inc.
 * Licensed under the MIT license
 */

$(function () {

    
var tech = getUrlParameter('caeli');
    
    
/* tech-specification */
    var hash = window.location.hash.substr(1);
    $('#tab-'+tech).click();
/*    $('#tab-'+hash).on('click',function(){
console.log('onclick '+hash);
        $("html, body").animate({ scrollTop: 0 }, "slow");
        window.scrollTo(0,0);
    });

    $(window).on('hashchange',function(){
        hash = location.hash.slice(1);
        $('#tab-'+hash).click();
console.log(hash);
    });*/

    
//    window.scrollTo(0,0);
/* /tech-specification */

})

function changeText(el) {
console.log(el);
    $('.banner .box h4').html($('#'+el+' .sub-label').html());
//    jQuery.param.querystring(window.location.href, 'valueA=321&valueB=123');
}

var getUrlParameter = function getUrlParameter(sParam) {
    var sPageURL = decodeURIComponent(window.location.search.substring(1)),
        sURLVariables = sPageURL.split('&'),
        sParameterName,
        i;

    for (i = 0; i < sURLVariables.length; i++) {
        sParameterName = sURLVariables[i].split('=');

        if (sParameterName[0] === sParam) {
            return sParameterName[1] === undefined ? true : sParameterName[1];
        }
    }
};
