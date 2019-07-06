$(function(){

    var addr_list = new Array();
    var list = $('#list_section');
    $('#plus').on('click', function(event) {
         var x = $('#input_field').val();
         addr_list.push(x);
         list.append('\
               <div class="row">\
               <p>\
                    '+x+'\
                </p>\
                </div>\
               ');
 
     });
     $('#submit').on('click', function(event) {
        event.preventDefault();

        
          $.ajax({
              url: '/E-Commerce/api/customer/add_address/add_address.php',
              method: 'POST',
              contentType: 'application/json',
              data: JSON.stringify({ address: addr_list }),
              success: function(response) {
                if (response.message=='success') {
                    console.log("done");
                    window.location.href = "/E-Commerce/views/php/customer/home.php";

                } 
              
              }
          });
        
        


    });
 
  });