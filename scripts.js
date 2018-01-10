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