$(document).scroll( function()
{
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
	$( '.faq .q' ).click( function()
	{
		$( this ).closest( '.item' ).toggleClass( 'opened' );
	} );

} );
