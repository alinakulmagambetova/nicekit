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
	$( ".question" ).click( function()
	{

		$( ".answer", $('.item.bbb')).toggle( 1000 );
	} );
	*/

	$( ".faq-page .item" ).click( function()
	{

		$( ".answer", $( this ) ).toggleClass( 'opened' );
	} );
} );
