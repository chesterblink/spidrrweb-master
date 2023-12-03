<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible"content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>

    <!-- Bootstrap CSS link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer">

    <!-- CSS File -->
    <link rel="stylesheet" href="../style.css">
    <style>
.admin_image {
    width: 100px;
    object-fit: contain;
}
.footer{
    position: absolute;
    bottom: 0;
}
</style>

</head>
<body>
    <!-- Navbar -->
    <div class="container-fluid p-0">
        <!-- First Child -->
        <nav class="navbar navbar-expand-lg navbar-light bg-info">
            <div class="container-fluid">
                <img src="../images/spidrrlogo.png" alt="" class="logo">
                <nav class="navbar navbar-expand-lg">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="" class="nav-link">Welcome Guest</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </nav>
        <!-- Second Child -->
        <div class="bg-light">
            <h3 class="text-center p-2">Manage Details</h3>
        </div>

        <!-- Third Child -->
        <div class="row">
            <div class="col-md-12 bg-secondary p-1 d-flex align-items-center">
                <div class="p-3">
                    <a href="#"><img src="../images/2.png" alt="" class="admin_image"></a>
                    <p class="text-light text-center">Admin Name</p>
                </div>
                <!--button*10>a.nav-link.text-light.bg-info.my-1-->
                <div class="button text-center">
                    <button class="my-3"><a href="insert_product.php" class="nav-link text-light bg-info my-1">Insert Products</a></button>
                    <button><a href="" class="nav-link text-light bg-info my-1">View Products</a></button>
                    <button><a href="index.php?insert_category" class="nav-link text-light bg-info my-1">Insert Categories</a></button>
                    <button><a href="" class="nav-link text-light bg-info my-1">View Categories</a></button>
                    <button><a href="index.php?insert_brand" class="nav-link text-light bg-info my-1">Insert Brands</a></button>
                    <button><a href="" class="nav-link text-light bg-info my-1">View Brands</a></button>
                    <button><a href="" class="nav-link text-light bg-info my-1">All Orders</a></button>
                    <button><a href="" class="nav-link text-light bg-info my-1">All Payments</a></button>
                    <button><a href="" class="nav-link text-light bg-info my-1">List Users</a></button>
                    <button><a href="" class="nav-link text-light bg-info my-1">Logout</a></button>
                </div>
            </div>
        </div>
        &nbsp &nbsp &nbsp &nbsp;

        <!-- Fourth Child -->
        <div class="container my-3">
            <?php  
            if(isset($_GET['insert_category'])){
                include('insert_categories.php');            
            }
            if(isset($_GET['insert_brand'])){
                include('insert_brands.php');            
            }
            ?>
        </div>
        &nbsp &nbsp &nbsp &nbsp;

        <!-- last child -->
<div class="bg-info p-3 text-center">
  <p>All Rights Reserved SPIDRR LLC © 2023 </p>
</div>        
    </div>

<!-- Bootstrap JS link -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>