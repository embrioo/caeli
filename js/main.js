/*!
 * Bootstrap v3.3.7 (http://getbootstrap.com)
 * Copyright 2011-2016 Twitter, Inc.
 * Licensed under the MIT license
 */

$(function () {

    var tech = getUrlParameter('caeli');
    var hash = window.location.hash.substr(1);
    $('.tab-'+tech).click();

})

function changeText(el, tv) {
    $('.tab-spec1').parent().removeClass('active');
    $('.tab-spec2').parent().removeClass('active');
    $('.tab-spec3').parent().removeClass('active');
    $('.tab-spec4').parent().removeClass('active');

    $('#spec1').removeClass('active');
    $('#spec2').removeClass('active');
    $('#spec3').removeClass('active');
    $('#spec4').removeClass('active');

    $('.tab-'+el).parent().addClass('active');
    $('.banner .box h4').html($('#'+el+' .sub-label').html());
    $('#'+el).addClass('active');

    if( tv == 1 ) {
        $("#top-view").focus();
    }
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
