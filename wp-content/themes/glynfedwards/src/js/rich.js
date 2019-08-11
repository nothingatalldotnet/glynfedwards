/*!
 * R.Jones
 * https://nothingatall.net
 */

/* globals jQuery, ajaxurl google $ */

// Init all

var Nav = {
    init: function() {
    	Nav.initNav();
    },

    initNav: function() {
    	$('.sidenav').sidenav();
    }
};

$(function(){
    GaEvents.init();
    Sizing.init();
    General.init();
});


jQuery(function(){
	'use strict';
	Nav.init();
});