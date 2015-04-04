$(function(){
	$('#postdate').submit(function(){

		// if(validateUsername() && validatePassword()){
		// 	alert($('#username').val().length);
		// }else{
		// 	alert($('#username').val().length);
		// }
		// alert('11111111111');
		var datef = $('input#datepicker').val();
		// alert($('input#datepicker').val());

		if(datef !=''){
		alert($('input#datepicker').val()+'\n'+'Date Comfirm');
		
		$.post("../ajax/postdate.php",{datef: datef},function(data){
			
		})
		}else{
			alert('Invalide date');
		}

	})
})