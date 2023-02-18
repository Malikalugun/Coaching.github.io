$(document).ready(function(){
	
//Admin Login Start.
$("#btnLogin").click(function(){
	 

   $(this).html("Login In...");
   $(this).prop('disabled', true);
   setInterval(function () {$("#btnLogin").prop('disabled', false);}, 3000);

   var username=$("#txtUserName").val();
   var password=$("#txtPassword").val(); 
	
		$.ajax({
			 type:'post',
			 url: 'index-action.php',
			 data: {'username':username,'password':password,'action':'Login'},
			 success: function(data)
			 {	 
			    $("#btnLogin").html("Login");
				
				 var x=data;
				 if(x== "Login Success")
				 {
				 	window.location="./dashboard.php";
				 }
				 else
				 { 
				 $("#msg").html(data); 
				 $("#msg").slideDown("slow");
				 $("#msg").slideUp(3000); 
			     } 
			  }
		 });
  });

//Admin Login End.

//Change Password Start.
	$("#btn_passchange").click(function(){
		$("#changepasstext").html("Loading...");
		var oldPass=$("#oldPass").val();
		var newpass=$("#newpass").val(); 
		var repass=$("#repass").val();
			$.ajax({
				 type:'post',
				 url: 'change-password-action.php',
				 data: {'oldPass':oldPass,'newpass':newpass,'repass':repass},
				 success: function(data)
				 {     $("#changepasstext").html("Save");
					   $("#errorChangePassword").html(data); 
					   $("#errorChangePassword").slideDown("slow");
					   $("#errorChangePassword").slideUp(3000,function(){
					       location.reload();
						 });
				
				 }
				
			 });
			
  	});
//Change Password End

});
 




