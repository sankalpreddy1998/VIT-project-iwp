$(function(){

    $('#sign_in_button').on('click', function(event) {
         event.preventDefault();
 
         var login_email = $('#login_email');
         var login_password = $('#login_password');
 

         
            // $('#password_check').attr("style", "visibility: visible");
            // register_password.val("");
            // retype_password.val("");
         
            $.ajax({
                url: '/E-Commerce/api/partner/login/login.php',
                method: 'POST',
                contentType: 'application/json',
                data: JSON.stringify({ login_email:login_email.val(),login_password:login_password.val() }),
                success: function(response) {
                    if (response.message=='success') {
                        console.log("done");
                        window.location.href = "/E-Commerce/views/php/partner/home.php";

                    } else if (response.message=='wrong password') {
                        $('#password_check').html("*password incorect");
                        login_email.val()="";
                        login_password.val()="";
                        
                    } else if (response.message=='not registered') {
                        $('#password_check').html("*account does not exist");
                        login_email.val()="";
                        login_password.val()="";
                    }
                    
                }
            });  
         
         
     });
 
});
 