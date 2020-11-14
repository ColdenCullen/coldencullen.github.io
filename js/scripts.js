var notFoundRemoved = false;
var formData;
var loadingSpinner =
	'<div id="spinner" class="active">' + 
		'<span id="first" class="ball"></span>' +
		'<span id="second" class="ball"></span>' +
		'<span id="third" class="ball"></span>' +
	'</div>';
var successText = 
	'<div id="successtext">' +
		'<p>Success!</p>' +
	'</div>';

function checkScroll()
{
	// Update navbar
	var currentLink = '#' + $( '.main.page' ).filter( function( index )
		{
			return $( $( '.main.page' )[ index ] ).css( 'left' ) == '0px';
		} ).attr( 'id' ) + 'link';

	$( '.navlink:not( ' + currentLink + ' )' ).removeClass( 'selected' );
	$( currentLink ).addClass( 'selected' );
};

jQuery( function() {
	prettyPrint();

	$( '#tabs' ).tabs();

	// Setup navbar
	$( '.navlink:not(.outbound) a' ).click( function( event )
	{
		// Stop from scrolling to page, then back, then animating
		event.preventDefault();

		// Element to scroll to
		var elementToScrollTo = $( this ).attr( 'href' ).substring( 1 );

		var indexToScrollTo = $( '.main.page' + elementToScrollTo ).index();

		$( '.main.page' ).each( function( index, element )
		{
			$( element ).animate( { left: ( ( index - indexToScrollTo ) * 100 ) + '%' }, 500, checkScroll );
		} );
	} );

	// Setup portfolio links
	$( '#portfolio a' ).click( function( event )
	{
		event.preventDefault();
		
		var elementToScrollTo = $( this ).attr( 'href' ).substring( 1 );

		var portfolioScroll = $( elementToScrollTo ).offset().left - $( '#portfolio #index' ).offset().left;

		var current = $( '#portfolio .panel' ).scrollLeft();

		var time = Math.abs( portfolioScroll - current ) / 3;

		$( '#portfolio .panel' ).animate( { scrollLeft: portfolioScroll }, time );
	} );

	// Setup 404 removal
	if( window.location.hash != '#notfound' )
	{
		$( '#notfound' ).remove();
		notFoundRemoved = true;
	}

	checkScroll();

	$( window ).scroll( function()
	{
		// If notfound still exists and you scroll to the left, remove notfound
		if( !notFoundRemoved && $( window ).scrollLeft() <= window.innerWidth * 5 )
		{
			$( '#notfound' ).remove();
			notFoundRemoved = true;
		}

		checkScroll();
	} );
});
