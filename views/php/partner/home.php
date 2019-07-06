<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AtTheRate - Home page</title>
  <link rel="icon" href="../../../images/resources/logo.ico" type="image/x-icon">
  <link rel="stylesheet" href="../../styles/styles_partner_navbar.css">
  <link rel="stylesheet" href="../../styles/styles_partner_footer.css">
  <link rel="stylesheet" href="../../styles/styles_partner_home_page.css">
  <link rel="stylesheet" href="../../styles/styles_partner_dropdown.css">
</head>

<body>
  <?php  include '../../resources/partner_navbar.php' ?>
  <form id="uploadform" action="home.php" method="post" enctype="multipart/form-data">
    <div id="form" style="display:<?php if(isset($_SESSION["name"])){echo "flex";} else {echo "none";}?> ">
      <div id="details">
        <div>
          <fieldset id="details_upload">
            <legend style="color:gray;font-size:13px;">Details of product</legend>
            <label for="name" style="display:block;">Name of Product:</label>
            <textarea name="name" id="" cols="50" rows="5"></textarea>
            <br>
            <label for="description" style="display:block;">Description:</label>
            <textarea name="description" id="" cols="50" rows="10"></textarea>
          </fieldset>
        </div>
        <div>
          <fieldset id="technical_details_upload">
            <label for="price" style="display:block;">Price</label>
            <input type="number" name="price" />
            <br>
            <legend style="color:darkgray;font-size:13px;">Details Of Product</legend>
            <label for="brand" style="display:block;">Brand</label>
            <input type="text" name="brand" />
            <br>
            <label for="model" style="display:block;">Model</label>
            <input type="text" name="model" />
            <br>
            <label for="model_name" style="display:block;">Model name</label>
            <input type="text" name="model_name" />
            <br>
            <label for="product_dimensions" style="display:block;">Product Dimensions</label>
            <input type="text" name="product_dimensions" />
            <br>
            <label for="batteries" style="display:block;">Batteries</label>
            <input type="text" name="batteries" />
            <br>
            <label for="item_model_no" style="display:block;">Item Model Number</label>
            <input type="text" name="item_model_no" />
            <br>
            <label for="included_components" style="display:block;">Included Components</label>
            <input type="text" name="included_components" />
            <br>
            <label for="no_of_items" style="display:block;">Numbers Of Items</label>
            <input type="number" name="no_of_items" />
            <br>
            <label for="battery_average_life" style="display:block;">Battery Average Life</label>
            <input type="text" name="battery_average_life" />
            <br>
            <label for="batteries_requried" style="display:block;">Batteries Required</label>
            <input type="text" name="batteries_requried" />
            <br>
            <label for="battery_cell_composition" style="display:block;">Battery Cell Composition</label>
            <input type="text" name="battery_cell_composition" />
            <br>
            <label for="colour" style="display:block;">Colour</label>
            <input type="text" name="colour" />
            <br>
            <label for="series" style="display:block;">Series</label>
            <input type="text" name="series" />
            <br>
            <label for="memory_size" style="display:block;">Memory</label>
            <input type="text" name="memory_size" />
            <br>
            <label for="ram_size" style="display:block;">RAM</label>
            <input type="text" name="ram_size" />
            <br>
            <label for="material" style="display:block;">Material</label>
            <input type="text" name="material" />
            <br>
            <label for="size" style="display:block;">Size</label>
            <input type="text" name="size" />
          </fieldset>
        </div>
      </div>
      <div>
        <fieldset id="image_upload">
          <legend style="color:darkgray;font-size:13px;">Upload Images</legend>
          <output id="list1"></output>
          <input type="file" accept="image/gif, image/jpeg, image/png ,video/*" id="image_upload_btn"  name="photo[]" multiple>
        </fieldset>
        <fieldset id="video_upload">
          <legend style="color:darkgray;font-size:13px;">Upload Videos</legend>
          <output id="list2"></output>
          <input type="file" id="video_btn" accept="video/mp4" name="video[]" multiple onchange="selectedVideo(this)" />
        </fieldset>
        <input type="submit" value="Upload" id="upload_btn">
        <h3 id="status"></h3>
        <p id="loaded_n_total"></p>
      </div>
    </div>
  </form>
  <div id="home_promt" style="display:<?php if(isset($_SESSION["name"])){echo "none";} else {echo "block";}?> ">
    <h3 id="home_promt_heading">Welcome! we are happy to do bussiness with you.</h3>
    <div id="home_promt_button">
      <a href="/E-Commerce/views/php/partner/login.php" id="home_promt_login">Login</a>
      <a href="/E-Commerce/views/php/partner/register.php" id="home_promt_register">Register</a>
    </div>
  </div>
  <?php  include '../../resources/partner_footer.php' ?>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>
<script type="text/javascript" src="../../../views/javascript/js_partner_navbar.js"></script>
<script type="text/javascript" src="../../../views/javascript/js_partner_details_form.js"></script>
</html>
<?php

if (isset($_POST["name"])) {
  $name=$_POST["name"];
} else {
  $name="null";
}

if (isset($_POST["description"])) {
  $description=$_POST["description"];
} else {
  $description="null";
}

if (isset($_POST["price"])) {
  $price=$_POST["price"];
} else {
  $price="null";
}

if (isset($_POST["brand"])) {
  $brand=$_POST["brand"];
} else {
  $brand="null";
}

if (isset($_POST["model"])) {
  $model=$_POST["model"];
} else {
  $model="null";
}

if (isset($_POST["model_name"])) {
  $model_name=$_POST["model_name"];
} else {
  $model_name="null";
}

if (isset($_POST["product_dimensions"])) {
  $product_dimensions=$_POST["product_dimensions"];
} else {
  $product_dimensions="null";
}

if (isset($_POST["batteries"])) {
  $batteries=$_POST["batteries"];
} else {
  $batteries="null";
}

if (isset($_POST["item_model_no"])) {
  $item_model_no=$_POST["item_model_no"];
} else {
  $item_model_no="null";
}

if (isset($_POST["product_dimensions"])) {
  $product_dimensions=$_POST["product_dimensions"];
} else {
  $product_dimensions="null";
}

if (isset($_POST["included_components"])) {
  $included_components=$_POST["included_components"];
} else {
  $included_components="null";
}

if (isset($_POST["no_of_items"])) {
  $no_of_items=$_POST["no_of_items"];
} else {
  $no_of_items="null";
}

if (isset($_POST["included_components"])) {
  $included_components=$_POST["included_components"];
} else {
  $included_components="null";
}

if (isset($_POST["battery_average_life"])) {
  $battery_average_life=$_POST["battery_average_life"];
} else {
  $battery_average_life="null";
}

if (isset($_POST["batteries_requried"])) {
  $batteries_requried=$_POST["batteries_requried"];
} else {
  $batteries_requried="null";
}

if (isset($_POST["battery_cell_composition"])) {
  $battery_cell_composition=$_POST["battery_cell_composition"];
} else {
  $battery_cell_composition="null";
}

if (isset($_POST["colour"])) {
  $colour=$_POST["colour"];
} else {
  $colour="null";
}

if (isset($_POST["series"])) {
  $series=$_POST["series"];
} else {
  $series="null";
}

if (isset($_POST["memory_size"])) {
  $memory_size=$_POST["memory_size"];
} else {
  $memory_size="null";
}

if (isset($_POST["ram_size"])) {
  $ram_size=$_POST["ram_size"];
} else {
  $ram_size="null";
}

if (isset($_POST["material"])) {
  $material=$_POST["material"];
} else {
  $material="null";
}

if (isset($_POST["size"])) {
  $size=$_POST["size"];
} else {
  $size="null";
}

$conn = mysqli_connect("localhost","admin","Welcome","iwp");

$p_id = uniqid();
$type = "normal";





$sql_read = "SELECT partner_id FROM ecommerce_db.partner_table WHERE partner_name='".$_SESSION["name"]."';";

$result_read = $conn->query($sql_read) or die($conn->error);
$row_read = $result_read->fetch_assoc();


$partner_id=$row_read['partner_id'];
$no_of_photos=count($_FILES['photo']['name']);
$no_of_videos=count($_FILES['video']['name']);

$sql = "INSERT INTO ecommerce_db.products VALUE(
  '".$p_id."',
  '".$name."',
  '".$description."',
  '".$price."',
  '".$brand."',
  '".$model."',
  '".$model_name."',
  '".$product_dimensions."',
  '".$item_model_no."',
  '".$included_components."',
  '".$no_of_items."',
  '".$battery_average_life."',
  '".$batteries_requried."',
  '".$battery_cell_composition."',
  '".$colour."',
  '".$series."',
  '".$memory_size."',
  '".$ram_size."',
  '".$material."',
  '".$size."',
  '".$type."',
  '".$partner_id."',
  '".$no_of_photos."',
  '".$no_of_videos."',
  'submitted'
);";



$result = $conn->query($sql) or die($conn->error);




if (!empty($_FILES)) {
  for ($i=0; $i < count($_FILES['photo']['name']) ; $i++) {  
      if (is_uploaded_file($_FILES['photo']['tmp_name'][$i])) {
          $srcPath=$_FILES['photo']['tmp_name'][$i];
          $ext=pathinfo($_FILES['photo']['name'][$i],PATHINFO_EXTENSION);
          $trgPath="/var/www/html/E-Commerce/images/product_images/".$p_id."_".$i.".".$ext;
          move_uploaded_file($srcPath,$trgPath);
      }
    }
}
if (!empty($_FILES)) {
  for ($i=0; $i < count($_FILES['video']['name']) ; $i++) {  
      if (is_uploaded_file($_FILES['video']['tmp_name'][$i])) {
        $srcPath=$_FILES['video']['tmp_name'][$i];
        $ext=pathinfo($_FILES['video']['name'][$i],PATHINFO_EXTENSION);
        $trgPath="/var/www/html/E-Commerce/videos/".$p_id."_".$i.".".$ext;
        move_uploaded_file($srcPath,$trgPath);
    }
  }
}


if (mysqli_connect_errno())
{
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

?>
