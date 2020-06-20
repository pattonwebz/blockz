/**
 * Blocks theme scripts
 *
 * @since  0.1.0
 */

(function () {
	var navToggleButton = document.getElementById( 'nav-toggle' );

	navToggleButton.onclick = function(){
		var navItemContainer = document.getElementById( 'header-nav-items' );
		if ( null !== navItemContainer ) {
			navItemContainer.classList.toggle( 'block' );
		}
	}
})();
