$(function(){

   $('#sign_in_button').on('click', function(event) {
        event.preventDefault();

        var email = $('#login_email');
        var password = $('#login_password');

       
          $.ajax({
              url: '/E-Commerce/api/customer/login/login.php',
              method: 'POST',
              contentType: 'application/json',
              data: JSON.stringify({ email: email.val(), password: password.val() }),
              success: function(response) {
                if (response.message=='success') {
                    console.log("done");
                    window.location.href = "/E-Commerce/views/php/customer/home.php";

                } else if (response.message=='wrong password') {
                    $('#password_check').html("*password incorect");
                    login_email.val()="";
                    login_password.val()="";
                    
                } 
              }
          });

        

    });

});
