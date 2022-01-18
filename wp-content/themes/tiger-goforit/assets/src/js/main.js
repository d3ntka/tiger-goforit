// Webpack Imports
import * as bootstrap from 'bootstrap';
import Swiper, { Scrollbar } from 'swiper';

( function () {
	'use strict';

	// Focus input if Searchform is empty
	[].forEach.call( document.querySelectorAll( '.search-form' ), ( el ) => {
		el.addEventListener( 'submit', function ( e ) {
			var search = el.querySelector( 'input' );
			if ( search.value.length < 1 ) {
				e.preventDefault();
				search.focus();
			}
		} );
	} );

	// Initialize Popovers: https://getbootstrap.com/docs/5.0/components/popovers
	var popoverTriggerList = [].slice.call( document.querySelectorAll( '[data-bs-toggle="popover"]' ) );
	var popoverList = popoverTriggerList.map( function ( popoverTriggerEl ) {
		return new bootstrap.Popover( popoverTriggerEl, {
			trigger: 'focus',
		} );
	} );


	Swiper.use([Scrollbar]);

	const swiper = new Swiper('.swiper', {
		// Optional parameters
		slidesPerView: "auto",
        spaceBetween: 20,

		// And if we need scrollbar
		scrollbar: {
		  el: '.swiper-scrollbar',
		  draggable: true,
		},
	  });
	  
} )();
