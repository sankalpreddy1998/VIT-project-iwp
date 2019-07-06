var m,n;
var groupBy = function(xs, key) {
  return xs.reduce(function(rv, x) {
    (rv[x[key]] = rv[x[key]] || []).push(x);
    return rv;
  }, {});
};
var json_data,cart;
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
function checkout() {
  var x = "http://localhost/E-Commerce/views/php/customer/payment1.php";   
              console.log("ji");
                 
              window.location.href = x;
}
$(function(){
    function GetURLParameter(sParam)
    {
        var sPageURL = window.location.search.substring(1);
        var sURLVariables = sPageURL.split('&');
        for (var i = 0; i < sURLVariables.length; i++)
        {
            var sParameterName = sURLVariables[i].split('=');
            if (sParameterName[0] == sParam)
            {
                return decodeURIComponent(sParameterName[1]);
            }
        }
    
    }
    var p_id = GetURLParameter('p_id');
    var num = GetURLParameter('number');

    $.ajax({
      url:'/E-Commerce/api/customer/home_page/products_home.php',
      contentType:'application/json',
      success:function(response){
             json_data=response.data;
          }
    });
    


    $.ajax({
       url:'/E-Commerce/api/customer/cart/cart.php',
       method: 'POST',
       contentType: 'application/json',
       data: JSON.stringify({ product_id:p_id, number:num }),
       success:function(response){
            var tbodyEle = $('#table');
            var cart_data = response.data;
            var cart = groupBy(cart_data,'product_id');
            x=[];
            y=[];
            for(var i in cart){
              x.push(cart[i][0]['product_id']);
              n=0;
              for(let j=0;j<cart[i].length;j++){
                n += parseInt(cart[i][j]['no_of_items']);
              }
              y.push(n);
              
            }
            var total = 0;
            for (let index = 0; index < x.length; index++) {
              for (let i = 0; i < json_data.length; i++){
                if (json_data[i]['p_id']==x[index]) {
                  
                  tbodyEle.append('\
                  <tr>\
                  <td><img style="height:40px;width:40px;position:relative;top:18px;margin-right:20px;" src="/E-Commerce/images/product_images/'+ json_data[i]['p_id'] +'_0.jpeg"></td>\
                  <td>'+json_data[i]['name']+'</td>\
                  <td>'+json_data[i]['price']+'</td>\
                  <td>'+y[index]+'</td>\
                  <td>'+parseInt(json_data[i]['price'])*parseInt(y[index])+'</td>\
                  <tr>\
                  ');
                  total += parseInt(json_data[i]['price'])*parseInt(y[index]);
                }               
              }
            }
            console.log("hisa",total); 
            }
     });

     $('#search_list').on("change keyup paste click", function(){
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
