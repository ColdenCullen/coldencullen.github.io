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

function toggleContact()
{
	$( '#contactbackground, #contactform' ).toggleClass( 'active' );
	$( '#contactlink' ).toggleClass( 'selected' );
}

// Setup form submission
function setupContactSubmit()
{
	$( '#emailform' ).submit( function( event )
	{
		// Stop actual submission
		event.preventDefault();

		jQuery.ajax(
			{
				url: "/php/sendmail.php",
				type: 'POST',
				data: $( '#emailform' ).serialize(),
				success: function( data, textStatus, jqXHR )
				{
					setTimeout( function()
					{
						$( '#contactform .content #spinner' ).hide( "puff", null, 1000, function()
						{
							$( '#contactform .content' ).html( successText );

							$( '#contactform .content #successtext' ).show( "puff", null, 200, function()
							{
								setTimeout( function()
								{
									toggleContact();

									setTimeout( function()
									{
										$( '#contactform .content #successtext' ).hide( "puff", null, 200, function()
										{
											$( '#contactform .content' ).html( formData );
											setupContactSubmit();
										} );
									}, 1000 );
								}, 1000 );
							} );
						} );
					}, 2900 );
				}
			} );

		formData = $( '#contactform .content' ).html();

		$( '#contactform .content' ).html( loadingSpinner );
	} );
}

function onload()
{
	prettyPrint();

	$( '#tabs' ).tabs();

	// Setup navbar
	$( '.navlink a' ).click( function( event )
	{
		// Stop from scrolling to page, then back, then animating
		event.preventDefault();

		// Element to scroll to
		var elementToScrollTo = $( this ).attr( 'href' ).substring( 1 );

		if( elementToScrollTo != "#contactform" )
		{
			var indexToScrollTo = $( '.main.page' + elementToScrollTo ).index();

			$( '.main.page' ).each( function( index, element )
			{
				$( element ).animate( { left: ( ( index - indexToScrollTo ) * 100 ) + '%' }, 500, checkScroll );
			} );
		}
		else
		{
			toggleContact();
		}
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

	setupContactSubmit();

	// Setup 404 removal
	if( window.location.hash != '#notfound' )
	{
		$( '#notfound' ).remove();
		notFoundRemoved = true;
	}

	// Setup form background click close
	$( '#contactbackground' ).click( toggleContact );

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
}