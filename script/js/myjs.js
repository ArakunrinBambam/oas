// JavaScript Document
$(document).ready(function(e) {
    $(function() {

    	$("#frmlg").ajaxForm(function(data){
    		if(data=="fail") {
				$("#err").html("Wrong MatricNo/Email or Password");
				clear();
			}else if (data=="success") {
				window.location="s_dashboard.php";								
			}else if(data=="admin"){
				window.location="admin_page.php";
			}else {
				alert(data);
			}

    	});


		$("#lgbt").click(function() {
				var matno = $("#matno").val();
				var pass = $("#pass").val();
				
				if ((matno=="") && (pass=="")) {
					$("#matno").addClass("blank");
					$("#pass").addClass("blank");
					$("#err").html("MatricNo/Email and Password Missing");
				}else if (matno=="") {
					$("#matno").addClass("blank");
					$("#err").html("MatricNo/Email Missing");
				}else if (pass=="") {
					$("#pass").addClass("blank");
					$("#err").html("Password Missing");
				}else {
					$("#err").html("");
					$("#matno").removeClass("blank");
					$("#pass").removeClass("blank");
					/*$.post("processlogin.php",{matno:matno,pass:pass},function(data){
						
						if(data=="fail") {
							$("#err").html("Wrong MatricNo/Email or Password");
							clear();
						}else if (data=="success") {
								window.location="s_dashboard.php";								
						}else if(data=="admin"){
								window.location="admin_page.php";
						}else {
							alert(data);
						}*/

						$("#frmlg").submit();

						//window.location = "processlogin.php";
										
						
					//});
				}
				
				
		});
		//clear login 
	function clear()  {
		$("#matno").val("");
		$("#pass").val("");
	}

		
	
	

	
	$('#cssmenu > ul > li > a').click(function() {
	  $('#cssmenu li').removeClass('active');
	  $(this).closest('li').addClass('active');	
	  var checkElement = $(this).next();
	  if((checkElement.is('ul')) && (checkElement.is(':visible'))) {
	    $(this).closest('li').removeClass('active');
	    checkElement.slideUp('normal');
	  }
	  if((checkElement.is('ul')) && (!checkElement.is(':visible'))) {
	    $('#cssmenu ul ul:visible').slideUp('normal');
	    checkElement.slideDown('normal');
	  }
	  if($(this).closest('li').find('ul').children().length == 0) {
	    return true;
	  } else {
	    return false;	
	  }		
	});


	//side bar navigations

	$('#usd').click(function() {
		$('#hme').load('admin/upload_studfile.php');
	})

	$("#uld").click(function() {
		$('#hme').load('admin/upload_lecfile.php');
	})

		
	});
});

