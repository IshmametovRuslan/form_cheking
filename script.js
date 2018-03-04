$(document).ready(function () {
	$('.passport').hide();
	$('.option-race').hide();
	$('#city').change(function (  ) {
		$sportCity = 'Moscow';
		$userCity = $('#city').val();
		if ($userCity == $sportCity ) {
			$('.passport').show();
		}else {
			$('.passport').hide();
			$('.option-race').show();
			$optionRace = $('input[name=customRadio]:checked').val;
		}
	})
})