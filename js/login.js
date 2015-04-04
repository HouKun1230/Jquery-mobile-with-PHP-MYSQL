$(function(){
	$('#loginform').submit(function(){

	var username = $('input#username').val();
	var password = $('input#password').val();
		
	$.post("ajax/logincheck.php",{username: username,password:password},function(data){
		//alert(username);
			// alert(1111);
		})
	})
})