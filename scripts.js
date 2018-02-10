$(document).scroll( function()
{
	//console.log( $( window ).scrollTop() );

	if( $( window ).scrollTop() >= 10 )
	{
		$( '.menu' ).addClass( 'pinned' );
	}
	else
	{
		$( '.menu' ).removeClass( 'pinned' );
	}
} );

$(document).ready( function() 
{
	/*
	$( '.question' ).click( function()
	{

		$( '.answer', $('.item.bbb')).toggle( 1000 );
	} );
	*/

	$( '.faq-page .q' ).click( function()
	{
		//var thisItem = $( this ).closest( '.item' );

		$( '.a', $( this ).closest( '.item' ) ).toggleClass( 'opened' );
	} );
} );
