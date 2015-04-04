$(function(){
	$('#list').submit(function(){

		// if(validateUsername() && validatePassword()){
		// 	alert($('#username').val().length);
		// }else{
		// 	alert($('#username').val().length);
		// }

		// var datef = $('input#datepicker').val();
		var title = $('input#title-1').val();
		var description = $('input#description-1').val();
		var time = $('input#time-1').val();
		// alert($('input#datepicker').val());
		// alert($('input#datepicker').val()+'\n'+'Date Comfirm');
		// alert($('input#title-1').val());

		if(title !='' && description !='' && time !=''){
		
		$.post("ajax/activitysend.php",{title: title, description: description, time: time},function(data){
			
		})
		}else{
			alert('invalide title, description or time');
		}

	})
})