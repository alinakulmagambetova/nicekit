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
	$( ".question" ).click( function()
	{
		$( ".answer" ).toggle( 1000 );
	} );
} );
