$(document).ready(function () {
	$('.passport').hide();
	$('#city').change(function (  ) {
		$sport_city = 'Moscow';
		$user_city = $('#city').val();
		if ($user_city == $sport_city ) {
			$('.passport').show();
		}else {
			$('.passport').hide();
		}
	})
})