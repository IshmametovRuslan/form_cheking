$( document ).ready( function () {
	$( '.passport' ).hide();
	$( '.option-race' ).hide();
	$( '.gps' ).hide();
	$( '#city' ).change( function () {
		$sportCity = 'Moscow';
		$userCity  = $( '#city' ).val();
		if ( $userCity == $sportCity ) {
			$( '.passport' ).show();
		} else {
			$( '.passport' ).hide();
			$( '.option-race' ).show();
			$( '[type="radio"]' ).click( function () {
				$optionRace = $( 'input[name=customRadio]:checked' ).val();
				if ( $optionRace == 'online' ) {
					$( '.gps' ).show();
					$( '.passport' ).show();
				} else {
					$( '.gps' ).hide();
				}
			} )
		}
	} )
	$.validate();
} );
