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
    var json_data;
    $.ajax({
       url:'/E-Commerce/api/customer/home_page/products_home.php',
       contentType:'application/json',
       success:function(response){
            //  var tbodyEle = $('#card_container');
             var name = $('#name');
             var price = $('#price_tag');
             var description = $('#description');
             var brand = $('#brand');
             var model = $('#model');
             var model_name = $('#model_name');
             var product_dimensions = $('#product_dimensions');
             var item_model_no = $('#item_model_no');
             var included_components = $('#included_components');
             var battery_average_life = $('#battery_average_life');
             var batteries_required = $('#batteries_required');
             var battery_cell_composition = $('#battery_cell_composition');
             var colour = $('#colour');
             var series = $('#series');
             var memory = $('#memory');
             var ram = $('#ram');
             var material = $('#material');
             var size = $('#size');
             var slideshow = $('.slideshow-container');
             

             name.html(''); 
             price.html(''); 
             description.html(''); 
              //to empty html:just to be sure
              json_data=response.data;
             response.data.forEach(function(data){
                console.log(response);
                if (p_id==data.p_id) {
                    json_data=data;
                    name.html(data.name);
                    price.html("Rs. "+data.price);
                    description.html(data.description);
                    brand.html(data.brand);
                    model.html(data.model);
                    model_name.html(data.model_name);
                    product_dimensions.html(data.product_dimensions);
                    item_model_no.html(data.item_model_no);
                    included_components.html(data.included_components);
                    battery_average_life.html(data.battery_average_life);
                    batteries_required.html(data.batteries_required);
                    battery_cell_composition.html(data.battery_cell_composition);
                    colour.html(data.colour);
                    series.html(data.series);
                    memory.html(data.memory_size);
                    ram.html(data.ram_size);
                    material.html(data.material);
                    size.html(data.size);

                    for (let indexp = 0; indexp < data.no_of_photos; indexp++) {
                        slideshow.append('\
                        <div class="mySlides fade" style="margin-bottom:600px;">\
                            <img class="slideshow_img" src="/E-Commerce/images/product_images/'+data.p_id+'_'+indexp+'.jpeg" style="width:100%;height:100%;"/>\
                            <div class="image_slider" style="text-align:center; height:0px;">\
                            </div>\
                        </div>\
                        ');
                        
                    }

                    for (let indexv = 0; indexv < data.no_of_videos; indexv++) {
                        slideshow.append('\
                        <div class="mySlides fade" style="margin-bottom:600px;">\
                            <video class="slideshow_img" style="width:100%" controls>\
                                <source src="/E-Commerce/videos/'+data.p_id+'_'+indexv+'.mp4" type="video/mp4">\
                            </video>\
                            <div class="image_slider" style="text-align:center; height:0px;">\
                            </div>\
                        </div>\
                        ');
                        
                    }
                    

                    var slider = $('.image_slider');
                    
                    for (let indexp = 0; indexp < data.no_of_photos; indexp++) {
                        slider.append('\
                        <img class="img_btn"  src="/E-Commerce/images/product_images/'+data.p_id+'_'+indexp+'.jpeg"  onclick="currentSlide('+(indexp+1)+')"/>\
                        ');                        
                    }

                    for (let indexv = 0; indexv < data.no_of_videos; indexv++) {
                        slider.append('\
                        <video class="video_btn" onclick="currentSlide('+(parseInt(data.no_of_photos)+indexv+1)+')" >\
                                <source src="/E-Commerce/videos/'+data.p_id+'_'+indexv+'.mp4" type="video/mp4">\
                        </video>\
                        ');                        
                    }

                    

                    showSlides(1);

                   

                }
               
             });
           }

           
     });


    $('#add_cart').on("click", function () {
        var x = "http://localhost/E-Commerce/views/php/customer/cart.php?p_id="+p_id;
        var y = "&number="+$('#cart_item_no').val();
        var z = x+y;
        console.log(z);
        
        window.location.href = z;
    })

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
