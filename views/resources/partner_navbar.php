<?php
  session_start();
?>

<div id="nav_bar" class="nav_bar">
  <div class="nav_right">
    <div id="logo">
      <img src="../../../images/resources/logo.png">
      <p>AtTheRate : Partner</p>
    </div>
  </div>
  <div id="nav_right">
    <div id="nav_bar_utilities">
      <div class="dropdown">
        <button class="dropbtn"><img id="user_img" src="../../../images/resources/icon_user.png">
        <?php
          if (isset($_SESSION["name"])) {
            echo $_SESSION["name"];
          } else {
            echo "MyProfile";
          }
          
        ?>
        </button>
        <div class="dropdown-content">
          <a href="
              <?php
              if (isset($_SESSION["name"])) {
                echo "/E-Commerce/views/php/partner/logout.php";
              } else {
                echo "/E-Commerce/views/php/partner/login.php";
              }
              ?>
          ">
              <?php
              if (isset($_SESSION["name"])) {
                echo "Logout";
              } else {
                echo "Login";
              }
              ?>
          </a>
        </div>
      </div>
    </div>
  </div>
</div>

