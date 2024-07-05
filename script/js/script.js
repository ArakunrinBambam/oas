$(function() {
	//action event for upload student data button

	
	

	$('#btnsubs').click(function(){
		$("#stdform").submit();
	});


	$("#stdform").ajaxForm(function(data){
		alert(data);
	})
});	