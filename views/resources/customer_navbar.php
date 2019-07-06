<div id="nav_bar" class="nav_bar">
  <div class="nav_right">
    <div id="logo">
      <img src="../../../images/resources/logo.png">
      <a href="/E-Commerce/views/php/customer/home.php" style="outline:none;"><p>AtTheRate</p></a>
    </div>
  </div>
  <div id="nav_right">
    <div id="nav_bar_search">
      <input id="search" type="search" name="search" placeholder="search..." style="padding-left:15px;" onfocus="onit()" onfocusout="leave()">
      <button type="button" id="search_btn" name="button"><img src="../../../images/resources/icon_search.png"></button>
    </div>
    <div id="nav_bar_utilities">
      <div class="dropdown">
        <button class="dropbtn"><img id="user_img" src="../../../images/resources/icon_user.png">
        <?php
              session_start();
              if(isset($_SESSION['fname'])){
                echo $_SESSION['fname'];
              }
              else {
                echo "Profile";
              }
            ?>
        </button>
        <div class="dropdown-content">
          <a href="../customer/login.php">
            <?php
              if(isset($_SESSION['fname'])){
                echo "Logout";
              }
              else {
                echo "Login";
              }
            ?>
          </a>
        </div>
      </div>
      <a href="/E-Commerce/views/php/customer/mycart.php"><button id="home_cart"><img src="../../../images/resources/icon_shopping_cart.png"></button></a>
    </div>
  </div>
</div>


