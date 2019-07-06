$(function(){

    $('#sign_up_button').on('click', function(event) {
         event.preventDefault();
 
         var partner_name = $('#partner_name');
         var register_email = $('#register_email');
         var register_password = $('#register_password');
         var retype_password = $('#retype_password');

         if (register_password.val() != retype_password.val()) {
            $('#password_check').attr("style", "visibility: visible");
            register_password.val("");
            retype_password.val("");
         } else {
            $.ajax({
                url: '/E-Commerce/api/partner/register/register.php',
                method: 'POST',
                contentType: 'application/json',
                data: JSON.stringify({ partner_name: partner_name.val(),register_email:register_email.val(),register_password:register_password.val(),retype_password:retype_password.val() }),
                success: function(response) {
                    if (response.message=='success') {
                        console.log("done");
                        window.location.href = "/E-Commerce/views/php/partner/login.php";

                    } else {
                        $('#form_card').hide();
                        console.log("no");
                        $('#response').html("<h1>"+response.message+"</h1>"); 
                    } 
                    
                },
                error: function(response){
                    $('#form_card').hide();
                    console.log("no");
                    $('#response').html("<h1>account already exists!</h1>");
                    setInterval(function(){ window.location.href = "/E-Commerce/views/php/partner/login.php";}, 3000);
                }
            });  
         }
         
     });
 
});
 