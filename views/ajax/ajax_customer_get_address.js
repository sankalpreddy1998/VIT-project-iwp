var m,n;
function onit() {
  n=1;
  console.log(n+" left");
}
function leave() {
  // var search = document.getElementById('search_list');
  // search.innerHTML='';
  n=0;
  console.log(n+" left");
  if (m==0 && n==0) {
    var search = document.getElementById('search_list');
    search.innerHTML='';
  }
}
$('#search_list').hover(function () {
  m=1;
  console.log(m+" left");
});
$('#search_list').mouseleave(function () {
  m=0;
  console.log(m+" left");
});

$(function(){
    console.log("hi");
    
    var json_data;
    var search_list = $('#search_list');
    $.ajax({
       url:'/E-Commerce/api/customer/payment/get_address.php',
       contentType:'application/json',
       success:function(response){
             var tbodyEle = $('#list');
             console.log(response);
             
             tbodyEle.html('');
             response.data.forEach(function(data){
               tbodyEle.append('\
               <div class="rad"><input type="radio" name="address" value="'+data.address_name +'" checked> <p>'+data.address_name +'</p></div>\
               ');
             });
             tbodyEle.append('\
               <input class="button" type="submit" value="submit">\
               ');
           }
     });

    $('#search').on("change keyup paste click", function(){
      var list = new Array;
      var list_id = new Array;  
      json_data.forEach(function(data){
          var x = data.name.toLowerCase();
          var y = $('#search').val().toLowerCase();
          if(~x.indexOf(y)){
            list.push(x);
            list_id.push(data.p_id);
          }

        })

        search_list.html('');
        for (let index = 0; index < list.length; index++) {
          const element = list[index];
          search_list.append('\
               <a href="/E-Commerce/views/php/customer/product.php?p_id='+list_id[index]+'" style="outline: 0;">\
               <div style="display:flex;">\
                  <img style="height:40px;width:40px;position:relative;top:18px;margin-right:20px;" src="/E-Commerce/images/product_images/'+ list_id[index] +'_0.jpeg">\
                  <h6>'+element+'</h6>\
               </div>\
               </a>\
               ');
        }
        
        
    })


    $('#search_btn').on("click",function(){
      var x = "http://localhost/E-Commerce/views/php/customer/search.php?search=";
      var y = $('#search').val().toLowerCase();
      var z = x+y;
      console.log(z);
      
      window.location.href = z;
    })

    

 });
