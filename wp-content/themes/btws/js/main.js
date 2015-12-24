/*
Auteur: Léo Taillard
*/
jQuery(document).ready(function(){
(function() {
	var triggerBttn = document.getElementById( 'trigger-overlay' ),
		overlay = document.querySelector( 'div.overlay' ),
		closeBttn = overlay.querySelector( 'button.overlay-close' );
		transEndEventNames = {
			'WebkitTransition': 'webkitTransitionEnd',
			'MozTransition': 'transitionend',
			'OTransition': 'oTransitionEnd',
			'msTransition': 'MSTransitionEnd',
			'transition': 'transitionend'
		},
		transEndEventName = transEndEventNames[ Modernizr.prefixed( 'transition' ) ],
		support = { transitions : Modernizr.csstransitions };

	function toggleOverlay() {
		if( classie.has( overlay, 'open' ) ) {
			classie.remove(triggerBttn, 'active');
			classie.remove( overlay, 'open' );
			classie.add( overlay, 'close' );
			var onEndTransitionFn = function( ev ) {
				if( support.transitions ) {
					if( ev.propertyName !== 'visibility' ) return;
					this.removeEventListener( transEndEventName, onEndTransitionFn );
				}
				classie.remove( overlay, 'close' );
			};
			if( support.transitions ) {
				overlay.addEventListener( transEndEventName, onEndTransitionFn );
			}
			else {
				onEndTransitionFn();
			}
		}
		else if( !classie.has( overlay, 'close' ) ) {
			classie.add( overlay, 'open' );
			classie.add(triggerBttn, 'active');
		}

	}

	triggerBttn.addEventListener( 'click', toggleOverlay );

		jQuery(document).keydown(function(e) {
	    if (e.keyCode == 27) {
	    	if(classie.has( overlay, 'open' )){
	        toggleOverlay();
		    }
	    }
	});

})();

//opacity menu

// jQuery(".btws-frontpage-menu-item article").hover(function(){
// 	//
// 	jQuery(".btws-frontpage-menu-item article").not(this).each(function(){
// 		jQuery(this).animate({'opacity':'0.5'},100);
// 	});

// },function(){
// 	jQuery(".btws-frontpage-menu-item article").not(this).each(function(){
// 		jQuery(this).animate({'opacity':'1'},50);
// 	});
// });

// randomize les images instagram sur la page bytheway
jQuery('#instafeed').click(function() {
	jQuery("#instafeed").randomize("li");
});

// revele le svg caché
jQuery('#btws-logo').hover(function() {
  jQuery(".btws-header .full-page").toggleClass('appear');
  jQuery(".btws-header #main-nav").toggleClass('disappear');

});

// ON RESIZE
jQuery(window).resize(function() {

	// timeout sinon la fonction se déclenche toute les resize
	// setTimeout(function() {
	//	equalizeHeights('.btws-nav ul li');
	//}, 120);
});

jQuery(window).scroll(function(){

	jQuery('h1.btws-the-title').css({'opacity' : 1-((jQuery(this).scrollTop())/350)});
	jQuery('#btws-logo').css({'opacity' : 1-((jQuery(this).scrollTop())/200)});
	jQuery('#btws-logo-little').css({'opacity' : 0+((jQuery(this).scrollTop())/800)});
});



jQuery.fn.randomize=function(a){(a?this.find(a):this).parent().each(function(){jQuery(this).children(a).sort(function(){return Math.random()-0.5}).detach().appendTo(this)});return this};

});

// FUNCTIONS

function equalizeHeights(selector) {
	var heights = new Array();
	var margin = 10;
	// Loop to get all element heights
	jQuery(selector).each(function() {

		// Need to let sizes be whatever they want so no overflow on resize
		jQuery(this).css('min-height', '0');
		jQuery(this).css('max-height', 'none');
		jQuery(this).css('height', 'auto');

		// Then add size (no units) to array
 		heights.push(jQuery(this).outerHeight());
	});

	// Find max height of all elements
	var max = Math.max.apply( Math, heights );

	// Set all heights to max height
	jQuery(selector).each(function() {
		jQuery(this).css('height', (max+margin) + 'px');
	});	
}

