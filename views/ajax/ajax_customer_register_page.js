$(function(){

   $('#sign_up_button').on('click', function(event) {
        event.preventDefault();

        var fname = $('#fname');
        var lname = $('#lname');
        var email = $('#register_email');
        var password = $('#register_password');
        var retype = $('#retype_password');

        if (retype.val() == password.val()) {
          $.ajax({
              url: '/E-Commerce/api/customer/register/register.php',
              method: 'POST',
              contentType: 'application/json',
              data: JSON.stringify({ fname: fname.val(), lname: lname.val(), email: email.val(), password: password.val() }),
              success: function(response) {
                  window.location.replace("/E-Commerce/views/php/customer/add_address.php");
              
              }
          });
        } else {
          alert('Password did not match');
        }
        


    });
    

 });
