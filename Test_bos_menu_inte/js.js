var currentSelectActif = null;


$(document).ready(function() {
	
	$.ajax({
			type: "POST",
			url: "php.php",
			data: "action=getIncident",
			success:
			function(json){
				if( json != null) {
					var jsonObj = JSON.parse(json);
					$('#numberofincident').empty();
					$('#numberofincident').append(jsonObj['count']);
					(jsonObj['count'] != '0') ? $('#incident').css('color', 'red') : null;
				}
			}
		});
});



function changeSelectActif(id)
{
	if (currentSelectActif != null)
	{
		$('#' + currentSelectActif).val(1);
		$('#' + currentSelectActif).css('background-color', '');
	}
	$('#' + id).css('background-color', '#FF3');
	currentSelectActif = id;
}

				