<!-- connect file -->
<?php 
include('includes/connect.php');
include('functions/common_function.php');

try {
  $db = new mysqli($host, $user, $pass, $dbname); 
} catch (Exception $e) {
  echo "Error connecting to database: " . $e->getMessage();
  exit;
}



?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Spidrr</title>
      
    <!-- bootstrap CCS Link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- font awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer">

    <!-- css file -->
    <link rel="stylesheet" href="style.css">

  </head>
  <body>
    <!-- navbar -->
    <div class="container-fluid p-0">
      <!-- first child -->
      <nav class="navbar navbar-expand-lg navbar-light bg-info">
  <div class="container-fluid">
    <img src="./images/spidrrlogo.png" alt="" class="logo">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="display_all.php">Products</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Register</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"><i class="fa-solid fa-cart-shopping"></i></a>
        </li>
      </ul>
      <form class="d-flex" action="search_product.php" method="get">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="search_data">
        <input type="submit" value="Search" class="btn btn-outline-light" name="search_data_product">
      </form>
    </div>
  </div>
</nav>

<!-- second child -->
<nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
  <ul class="navbar-nav me-auto">
  <li class="nav-item">
          <a class="nav-link" href="#">Welcome Guest</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Login</a>
        </li>    
  </ul>
</nav>

<!-- third child -->
<div class="bg-light">
  <h3 class="text-center">Featured Products</h3>
</div>

<!-- fourth child -->
<div class="row px-1">
  <div class="col-md-10">
    <!-- products -->
      <div class="row">

        <div class="col-md-4">
            <!-- card -->
            <div class='card'>
              <img src='./images/994.jpg' class='card-img-top' 
              alt='$product_title'>
              <div class='card-body'>
                <h5 class='card-title'>$product_title</h5>
                <p class='card-text'>$product_description</p>
                <a href='#' class='btn btn-primary'>Add to Cart</a>
                <a href='product_details.php? product_id=$product_id' 
                class='btn btn-info'>Buy Now</a>
              </div>
    </div>
        </div>
          <div class="col-md-8">
            <!-- related images -->
            <div class="row">
              <div class="col-md-12">
                <h4 class="text-center text-info mb-5">Related 
                Products</h4>
              </div>
              <div class="col-md-6">
              <img src='./images/9.png' class='card-img-top' 
              alt='$product_title'>
              </div>
              <div class="col-md-6">
              <img src='./images/4.png' class='card-img-top' 
              alt='$product_title'>
              </div>
            </div>
        </div>
<!-- fetching products -->
    <?php
    // calling function
  view_details();
get_categories();
get_brands();
    ?>
<!-- row end -->
</div>
<!-- col end -->
</div>
  <div class="col-md-2 bg-secondary p-0">
    <!-- categories to be displayed -->
    <ul class="navbar-nav me-auto text-center">
      <li class="nav-item bg-info">
        <a href="#" class="nav-link text-light"><h5>Categories</h5></a>
      </li>
      
    <?php
getcategories();
    ?>
      <li class="nav-item bg-info">
        <a href="#" class="nav-link text-light"><h5>Brands</h5></a>
      </li>

      <?php 
getbrands(); 
?>
    </ul>

  </div>
</div>



<!-- last child -->
<!-- include footer -->
<?php include("./includes/footer.php") ?>
    </div>

  <!-- bootstrap js link -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>


</body>
</html>