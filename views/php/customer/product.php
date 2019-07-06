<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AtTheRate - Home page</title>
    <link rel="icon" href="../../../images/resources/logo.ico" type="image/x-icon">
    <link rel="stylesheet" href="../../styles/styles_customer_home_page.css">
    <link rel="stylesheet" href="../../styles/styles_customer_navbar.css">
    <link rel="stylesheet" href="../../styles/styles_customer_dropdown.css">
    <link rel="stylesheet" href="../../styles/styles_customer_footer.css">
    <link rel="stylesheet" href="../../styles/styles_customer_navmenu.css">
    <style>
        video{
            outline:none;
        }
        #add_item{
            outline:none;
        }
    </style>
    <link rel="stylesheet" href="../../styles/styles_customer_product_&_slideshow.css">
</head>

<body>
    <?php  include '../../resources/customer_navbar.php' ?>
    <div id="search_list" onfocusout="leave()">

    </div>
    <div id="details">
        <div id="contain">
            <div class="slideshow-container" ">

                

                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>

            </div>

        </div>

        <div id="description_box">
            <div>
                <h3 id="name"></h3>
            </div>
            <div>
                <button id="add_cart">Add To Cart</button>
                <input type="number" name="num" id="cart_item_no" Value="1">
                <h4 id="price_tag"></h4>
            </div>
            <div >
                <p id="description"></p>
            </div>
        </div>
    </div>
    <h3 id="Technical_Details_Heading">Technical Details</h3>
    <div id="technical_details">
        <table>
            <tr>
                <th>Property</th>
                <th>Value</th>
            </tr>
            <tr>
                <td>Brand</td>
                <td id="brand"></td>
            </tr>
            <tr>
                <td>Size</td>
                <td id="size"></td>
            </tr>
            <tr>
                <td>Model</td>
                <td id="model"></td>
            </tr>
            <tr>
                <td>Model Name</td>
                <td id="model_name"></td>
            </tr>
            <tr>
                <td>Product Dimensions</td>
                <td id="product_dimensions"></td>
            </tr>
            <tr>
                <td>Item Model Number</td>
                <td id="item_model_no"></td>
            </tr>
            <tr>
                <td>Included Components</td>
                <td id="included_components"></td>
            </tr>
            <tr>
                <td>Battery Average Life</td>
                <td id="battery_average_life"></td>
            </tr>
            <tr>
                <td>Batteries Required</td>
                <td id="batteries_required"></td>
            </tr>
            <tr>
                <td>Battery Cell Composition</td>
                <td id="battery_cell_composition"></td>
            </tr>
            <tr>
                <td>Colour</td>
                <td id="colour"></td>
            </tr>
            <tr>
                <td>Series</td>
                <td id="series"></td>
            </tr>
            <tr>
                <td>Memory Size</td>
                <td id="memory"></td>
            </tr>
            <tr>
                <td>RAM Size</td>
                <td id="ram"></td>
            </tr>
            <tr>
                <td>Material</td>
                <td id="material"></td>
            </tr>
        </table>
    </div>
    
    <?php  include '../../resources/customer_footer.php' ?>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
    crossorigin="anonymous"></script>
<script type="text/javascript" src="../../javascript/js_customer_navbar.js"></script>
<script type="text/javascript" src="/E-Commerce/views/ajax/ajax_customer_home_page.js"></script>
<script type="text/javascript" src="../../javascript/js_customer_product_slideshow.js"></script>
<script type="text/javascript" src="/E-Commerce/views/ajax/ajax_customer_product.js"></script>

</html>