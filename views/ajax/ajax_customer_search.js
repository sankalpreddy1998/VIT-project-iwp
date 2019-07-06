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
    var search = GetURLParameter('search');


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


    var json_data;
    var search_list = $('#search_list');

    
    $.ajax({
       url:'/E-Commerce/api/customer/home_page/products_home.php',
       contentType:'application/json',
       success:function(response){
             var tbodyEle = $('#search_page');
             tbodyEle.html('');
             console.log(response.data[0].p_id);
              //to empty html:just to be sure
              json_data=response.data;
             response.data.forEach(function(data){
                var x = data.name.toLowerCase();
                var y = search.toLowerCase();
                if(~x.indexOf(y)){
                       tbodyEle.append('\
                       <a style="text-decoration: none;" href="/E-Commerce/views/php/customer/product.php?p_id='+data.p_id+'">\
                        <div class="card">\
                            <img class="prod_card_img" src="/E-Commerce/images/product_images/'+ data.p_id +'_0.jpeg">\
                            <div class="container">\
                            <h3>'+ data.name+'</h3>\
                            <p>Rs. '+ data.price+'</p>\
                            </div>\
                        </div>\
                       </a>\
                       ');
                    
                }
             });
             console.log(json_data);
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
