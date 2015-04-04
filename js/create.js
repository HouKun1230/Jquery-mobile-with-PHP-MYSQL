$(function(){
	$('#createform').submit(function(){

		// if(validateUsername() && validatePassword()){
		// 	alert($('#username').val().length);
		// }else{
		// 	alert($('#username').val().length);
		// }

		var username = $('input#Cusername').val();
		//alert($('#Cusername').val().length == 0);
		var password = $('input#Cpassword').val();
		if(password !='' && username !=''){
		
		$.post("ajax/name.php",{username: username,password:password},function(data){
			
		})
		}else{
			alert('invalide username or password');
		}

	})
})