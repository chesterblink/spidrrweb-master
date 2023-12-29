<?php

// including connect file
include('./includes/connect.php');

// getting products
function get_products(){
    global $con;

    // condition to check isset or not
    if(!isset($_GET['category'])){
        if(!isset($_GET['brand'])){
    $select_query="Select * from `products` order by rand() LIMIT 0,9";
$result_query=mysqli_query($con,$select_query);
while($row=mysqli_fetch_assoc($result_query)){
  $product_id=$row['product_id'];
  $product_title=$row['product_title'];
  $product_description=$row['product_description'];
  $product_image1=$row['product_image1'];
  $product_image2=$row['product_image2'];
  $product_image3=$row['product_image3'];
  $product_image4=$row['product_image4'];
  $product_image5=$row['product_image5'];
  $product_price=$row['product_price'];
  $category_id=$row['category_id'];
  $brand_id=$row['brand_id'];
  echo "<div class='col-md-4 mb-2'>
  <div class='card'>
              <img src='./admin_area/product_images/$product_image1' 
              class='card-img-top' alt='$product_title'>
              <div class='card-body'>
                <h5 class='card-title'>$product_title</h5>
                <p class='card-text'>$product_description</p>
                <a href='#' class='btn btn-primary'>Add to Cart</a>
                <a href='product_details.php? product_id=$product_id' class='btn btn-info'>Buy Now</a>
              </div>
    </div>
 </div>";
}
}
}
}

// getting all products
function get_all_products(){
  global $con;

  // condition to check isset or not
  if(!isset($_GET['category'])){
      if(!isset($_GET['brand'])){
  $select_query="Select * from `products` order by rand()";
$result_query=mysqli_query($con,$select_query);
// $row=mysqli_fetch_assoc($result_query);
// echo $row['product_title'];
while($row=mysqli_fetch_assoc($result_query)){
$product_id=$row['product_id'];
$product_title=$row['product_title'];
$product_description=$row['product_description'];
$product_image1=$row['product_image1'];
$product_image2=$row['product_image2'];
$product_image3=$row['product_image3'];
$product_image4=$row['product_image4'];
$product_image5=$row['product_image5'];
$product_price=$row['product_price'];
$category_id=$row['category_id'];
$brand_id=$row['brand_id'];
echo "<div class='col-md-4 mb-2'>
<div class='card'>
            <img src='./admin_area/product_images/$product_image1' 
            class='card-img-top' alt='$product_title'>
            <div class='card-body'>
              <h5 class='card-title'>$product_title</h5>
              <p class='card-text'>$product_description</p>
              <a href='#' class='btn btn-primary'>Add to Cart</a>
              <a href='product_details.php? product_id=$product_id' class='btn btn-info'>Buy Now</a>
            </div>
  </div>
</div>";
}
}
}
}

// getting categories
function get_categories(){
    global $con;

    // condition to check isset or not
    if(isset($_GET['category'])){
        $category_id=$_GET['category'];
    $select_query="Select * from `products` where category_id=$category_id";
$result_query=mysqli_query($con,$select_query);
$num_of_rows=mysqli_num_rows($result_query);
if($num_of_rows==0){
    echo "<h5>No Products for this Category</h5>";
}
while($row=mysqli_fetch_assoc($result_query)){
  $product_id=$row['product_id'];
  $product_title=$row['product_title'];
  $product_description=$row['product_description'];
  $product_image1=$row['product_image1'];
  $product_image2=$row['product_image2'];
  $product_image3=$row['product_image3'];
  $product_image4=$row['product_image4'];
  $product_image5=$row['product_image5'];
  $product_price=$row['product_price'];
  $category_id=$row['category_id'];
  $brand_id=$row['brand_id'];
  echo "<div class='col-md-4 mb-2'>
  <div class='card'>
              <img src='./admin_area/product_images/$product_image1' 
              class='card-img-top' alt='$product_title'>
              <div class='card-body'>
                <h5 class='card-title'>$product_title</h5>
                <p class='card-text'>$product_description</p>
                <a href='#' class='btn btn-primary'>Add to Cart</a>
                <a href='product_details.php? product_id=$product_id' class='btn btn-info'>Buy Now</a>
              </div>
    </div>
 </div>";
}
}
}


// getting brands
function get_brands(){
    global $con;

    // condition to check isset or not
    if(isset($_GET['brand'])){
        $brand_id=$_GET['brand'];
    $select_query="Select * from `products` where brand_id=$brand_id";
$result_query=mysqli_query($con,$select_query);
$num_of_rows=mysqli_num_rows($result_query);
if($num_of_rows==0){
    echo "<h5>This Brand is not available for service</h5>";
}
while($row=mysqli_fetch_assoc($result_query)){
  $product_id=$row['product_id'];
  $product_title=$row['product_title'];
  $product_description=$row['product_description'];
  $product_image1=$row['product_image1'];
  $product_image2=$row['product_image2'];
  $product_image3=$row['product_image3'];
  $product_image4=$row['product_image4'];
  $product_image5=$row['product_image5'];
  $product_price=$row['product_price'];
  $category_id=$row['category_id'];
  $brand_id=$row['brand_id'];
  echo "<div class='col-md-4 mb-2'>
  <div class='card'>
              <img src='./admin_area/product_images/$product_image1' 
              class='card-img-top' alt='$product_title'>
              <div class='card-body'>
                <h5 class='card-title'>$product_title</h5>
                <p class='card-text'>$product_description</p>
                <a href='#' class='btn btn-primary'>Add to Cart</a>
                <a href='product_details.php? product_id=$product_id' class='btn btn-info'>Buy Now</a>
              </div>
    </div>
 </div>";
}
}
}



// displaying brands in sidenav
function getbrands(){
    global $con;
    $select_brands="Select * from `brands`";
$result_brands=mysqli_query($con,$select_brands);  
while($row_data=mysqli_fetch_assoc($result_brands)){
  $brand_title=$row_data['brand_title'];
  $brand_id=$row_data['brand_id'];
  echo " <li class='nav-item'>
  <a href='index.php?brand=$brand_id' class='nav-link 
  text-light'>$brand_title</a>
  </li>";
} 
}


// displaying categories in sidenav
function getcategories(){
    global $con;
    $select_categories="Select * from `categories`";
$result_categories=mysqli_query($con,$select_categories); 
while($row_data=mysqli_fetch_assoc($result_categories)){
  $category_title=$row_data['category_title'];
  $category_id=$row_data['category_id'];
  echo " <li class='nav-item'>
  <a href='index.php?category=$category_id' class='nav-link
  text-light'>$category_title</a>
  </li>";
}  
}



// searching products function

function search_product(){
  global $con;
  if(isset($_GET['search_data_product'])){
    $search_data_value=$_GET['search_data'];
  $search_query="Select * from `products` where product_keywords like '%$search_data_value%'";
$result_query=mysqli_query($con,$search_query);
$num_of_rows=mysqli_num_rows($result_query);
if($num_of_rows==0){
    echo "<h5>No results match this query.</h5>";
}
while($row=mysqli_fetch_assoc($result_query)){
$product_id=$row['product_id'];
$product_title=$row['product_title'];
$product_description=$row['product_description'];
$product_image1=$row['product_image1'];
$product_image2=$row['product_image2'];
$product_image3=$row['product_image3'];
$product_image4=$row['product_image4'];
$product_image5=$row['product_image5'];
$product_price=$row['product_price'];
$category_id=$row['category_id'];
$brand_id=$row['brand_id'];
echo "<div class='col-md-4 mb-2'>
<div class='card'>
            <img src='./admin_area/product_images/$product_image1' 
            class='card-img-top' alt='$product_title'>
            <div class='card-body'>
              <h5 class='card-title'>$product_title</h5>
              <p class='card-text'>$product_description</p>
              <a href='#' class='btn btn-primary'>Add to Cart</a>
              <a href='product_details.php? product_id=$product_id' class='btn btn-info'>Buy Now</a>
            </div>
  </div>
</div>";
}
}
}


// view details function
function view_details(){
  global $con;

  // condition to check isset or not
  if(isset($GET['product_id'])){
  if(!isset($_GET['category'])){
      if(!isset($_GET['brand'])){
        $product_id=$_GET['$product_id'];
  $select_query="Select * from `products` where product_id=$product_id";
$result_query=mysqli_query($con,$select_query);
while($row=mysqli_fetch_assoc($result_query)){
$product_id=$row['product_id'];
$product_title=$row['product_title'];
$product_description=$row['product_description'];
$product_image1=$row['product_image1'];
$product_image2=$row['product_image2'];
$product_image3=$row['product_image3'];
$product_image4=$row['product_image4'];
$product_image5=$row['product_image5'];
$product_price=$row['product_price'];
$category_id=$row['category_id'];
$brand_id=$row['brand_id'];
echo "<div class='col-md-4 mb-2'>
<div class='card'>
            <img src='./admin_area/product_images/$product_image1' 
            class='card-img-top' alt='$product_title'>
            <div class='card-body'>
              <h5 class='card-title'>$product_title</h5>
              <p class='card-text'>$product_description</p>
              <a href='#' class='btn btn-primary'>Add to Cart</a>
              <a href='product_details.php? product_id=$product_id' class='btn btn-info'>Buy Now</a>
            </div>
  </div>
 </div>
 <div class='col-md-8'>
            <!-- related images -->
            <div class='row'>
              <div class='col-md-12'>
                <h4 class='text-center text-info mb-5'>Related 
                Products</h4>
              </div>
              <div class='col-md-6'>
              <img src='./admin_area/product_images/$product_image2' 
              alt='$product_title'>
              </div>
              <div class='col-md-6'>
              <img src='./admin_area/product_images/$product_image3' 
              alt='$product_title'>
              </div>
            </div>
          </div>";
}
}
} 
  } 
}
?>
