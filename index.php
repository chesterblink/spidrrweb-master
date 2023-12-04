<!-- connect file -->
<?php 
include('includes/connect.php');


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
          <a class="nav-link active" aria-current="page" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Products</a>
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
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
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
<div class="row">
  <div class="col-md-10">
    <!-- products -->
      <div class="row">
        <div class="col-md-4 mb-4">
        <div class="card">
  <img src="./images/71.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Add to Cart</a>
    <a href="#" class="btn btn-info">Buy Now</a>
  </div>
</div>
        </div>
       
  </div>
</div>
        </div>
        
  </div>
</div>
        </div>
        
  </div>
</div>
        </div>
        
  </div>
</div>
        </div>
        
  </div>
</div>
        </div>
      </div>
  </div>
  <div class="col-md-2 bg-secondary p-0">
    <!-- categories to be displayed -->
    <ul class="navbar-nav me-auto text-center">
      <li class="nav-item bg-info">
        <a href="#" class="nav-link text-light"><h5>Categories</h5></a>
      </li>
      
      <?php 
      
$select_categories="Select * from `categories`";
$result_categories=mysqli_query($con,$select_categories);
// $row_data=mysqli_fetch_assoc($result_categories);
// echo $row_data['category_title'];  
// echo $row_data['category_title'];  
while($row_data=mysqli_fetch_assoc($result_categories)){
  $category_title=$row_data['category_title'];
  $category_id=$row_data['category_id'];
  echo " <li class='nav-item'>
  <a href='index.php?category=$category_id' class='nav-link text-light'>$category_title</a></li>";
}  
      
?>
      <li class="nav-item bg-info">
        <a href="#" class="nav-link text-light"><h5>Brands</h5></a>
      </li>

      <?php 
      
$select_brands="Select * from `brands`";
$result_brands=mysqli_query($con,$select_brands);
// $row_data=mysqli_fetch_assoc($result_brands);
// echo $row_data['brands_title'];  
// echo $row_data['brands_title'];  
while($row_data=mysqli_fetch_assoc($result_brands)){
  $brand_title=$row_data['brand_title'];
  $brand_id=$row_data['brand_id'];
  echo " <li class='nav-item'>
  <a href='index.php?brand=$brand_id' class='nav-link text-light'>$brand_title</a></li>";
}  
            
?>
    </ul>

  </div>
</div>



<!-- last child -->
<div class="bg-info p-3 text-center">
  <p>All Rights Reserved SPIDRR LLC © 2023 </p>
</div>
    </div>

  <!-- bootstrap js link -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>


</body>
</html>