<?php
include '../inc/connection.php';
// All User
$result = mysqli_query($connect, "SELECT  COUNT(*) as id FROM add_product");
while ($row = mysqli_fetch_array($result)) {
    $activeorders = $row['id'];
    // echo "There are currently " .$activeorders. " users.";
}

// Total Products done
$result = mysqli_query($connect, "SELECT  COUNT(*) as id FROM add_product");
while ($row = mysqli_fetch_array($result)) {
    $totalproduct = $row['id'];
    // echo "There are currently " .$totalproduct. " users.";
  
}
// Active orders
$result = mysqli_query($connect, "SELECT  COUNT(*) as id FROM add_product");
while ($row = mysqli_fetch_array($result)) {
    $activeorders = $row['id'];
    // "There are currently " .$activeorders. " users.";
}
// Mens Product done
$result = mysqli_query($connect, "SELECT  COUNT(*) as p_category FROM add_product WHERE p_category='Man'");
while ($row = mysqli_fetch_array($result)) {
    $Mans = $row['p_category'];
    // echo "There are currently " .$Mans. " users.";
}
// WoMens Product done
$result = mysqli_query($connect, "SELECT  COUNT(*) as p_category FROM add_product WHERE p_category='Accessories'");
while ($row = mysqli_fetch_array($result)) {
    $womens = $row['p_category'];
    // echo "There are currently " .$womens. " users.";
}
// Kids Product done
$result = mysqli_query($connect, "SELECT  COUNT(*) as p_category FROM add_product WHERE p_category='Kids'");
while ($row = mysqli_fetch_array($result)) {
    $kids = $row['p_category'];
    // echo "There are currently " .$kids. " users.";
}
// Accessories Product done
$result = mysqli_query($connect, "SELECT  COUNT(*) as p_category FROM add_product WHERE p_category='Accessories'");
while ($row = mysqli_fetch_array($result)) {
    $accessories = $row['p_category'];
    // echo "There are currently " .$accessories. " users.";
}
?>

<!doctype html>
<html lang="en">

<head>
    <title>This is Ecommerce</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.min.css">
</head>
<style>
   body{font-size:.875rem}.feather{width:16px;height:16px;vertical-align:text-bottom}.sidebar{position:fixed;top:0;bottom:0;left:0;z-index:100;padding:30px 0 0;box-shadow:inset -1px 0 0 rgba(0,0,0,.1)}.sidebar-sticky{position:relative;top:0;height:100%;padding-top:.5rem;overflow-x:hidden;overflow-y:auto}@supports ((position:-webkit-sticky) or (position:sticky)){.sidebar-sticky{position:-webkit-sticky;position:sticky}}.sidebar .nav-link{font-weight:500;color:#333}.sidebar .nav-link .feather{margin-right:4px;color:#999}.sidebar .nav-link.active .feather,.sidebar .nav-link:hover .feather{color:inherit}.sidebar-heading{font-size:.75rem;text-transform:uppercase}[role=main]{padding-top:30px}.navbar-brand{padding-top:.75rem;padding-bottom:.75rem;font-size:1rem;background-color:rgba(0,0,0,.25);box-shadow:inset -1px 0 0 rgba(0,0,0,.25)}
</style>

<body>

    <div class="container-fluid">
        <div class="row">
            <nav class="col-md-2 d-none d-md-block bg-light sidebar text-white">
                <div class="sidebar-sticky">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link" href="./home.php">
                                <span data-feather="home"></span><i class="fe fe-heart"></i>
                                Dashboard <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span data-feather="file"></span>
                                Orders
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span data-feather="shopping-cart"></span>
                                <i class="fe fe-heart"></i> Products
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span data-feather="users"></span>
                                Customers
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span data-feather="layers"></span>
                                Add product
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span data-feather="bar-chart-2"></span>
                                Reports
                            </a>
                        </li>
                    </ul>

                    <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                        <span>Categories</span>
                        <!-- <a class="d-flex align-items-center text-muted" href="#">
                            <span data-feather="plus-circle"></span>
                        </a> -->
                    </h6>
                    <ul class="nav flex-column mb-2">
                        <li class="nav-item">
                            <a class="nav-link" href="#nav">
                                <span data-feather="file-text"></span>
                                Men
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#nav">
                                <span data-feather="file-text"></span>
                                Women
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#nav">
                                <span data-feather="file-text"></span>
                                Kids
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#nav">
                                <span data-feather="file-text"></span>
                                Accessories
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>

            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
                <!-- <h2>Section title</h2> -->
                <div class="row">

                    <div class="card text-white bg-dark m-3 col-md-4">
                        <div class="card-header">
                            <h5><b>Total User</b></h5>
                        </div>
                        <div class="card-body">
                            <h1> 100  <button type="button" class="btn btn-primary mt-2 float-right">Visit</button>
                                <h1>
                        </div>
                    </div>
                    <div class="card text-white bg-dark m-3 col-md-4">
                        <div class="card-header">
                            <h5><b>Total Products</b></h5>
                        </div>
                        <div class="card-body">
                            <h1><?php echo $totalproduct; ?> <button type="button" class="btn btn-primary mt-2 float-right">Visit</button>
                                <h1>
                        </div>
                    </div>
                    <div class="card text-white bg-dark m-3 col-md-4">
                        <div class="card-header">
                            <h5><b>Active orders</b></h5>
                        </div>
                        <div class="card-body">
                            <h1>25 <button type="button" class="btn btn-primary mt-2 float-right">Visit</button>
                                <h1>
                        </div>
                    </div>
                </div>


                <h4 class="d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">Product Categories :</h4>
                <div class="row">

                    <div class="card text-white bg-dark m-3 col-md-4">
                        <div class="card-header">
                            <h5><b>Man</b></h5>
                        </div>
                        <div class="card-body">
                            <h1>  <?php echo $Mans; ?> <button type="button" class="btn btn-primary mt-2 float-right">Visit</button>
                                <h1>
                        </div>
                    </div>
                    <div class="card text-white bg-dark m-3 col-md-4">
                        <div class="card-header">
                            <h5><b>Women</b></h5>
                        </div>
                        <div class="card-body">
                            <h1>  <?php echo $womens; ?><button type="button" class="btn btn-primary mt-2 float-right">Visit</button>
                                <h1>
                        </div>
                    </div>
                    <div class="card text-white bg-dark m-3 col-md-4">
                        <div class="card-header">
                            <h5><b>Kids</b></h5>
                        </div>
                        <div class="card-body">
                            <h1>  <?php echo $kids; ?><button type="button" class="btn btn-primary mt-2 float-right">Visit</button>
                                <h1>
                        </div>
                    </div>
                    <div class="card text-white bg-dark m-3 col-md-4">
                        <div class="card-header">
                            <h5><b>Accessories</b></h5>
                        </div>
                        <div class="card-body">
                            <h1>  <?php echo $accessories; ?> <button type="button" class="btn btn-primary mt-2 float-right">Visit</button>
                                <h1>
                        </div>
                    </div>
                </div>

            </main>
        </div>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="../node_modules/jquery/dist/jquery.min.js"></script>
    <script src="../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- For icons -->
    <script src="../node_modules/feather-icons/dist/feather.min.js"></script>
    <script>
        feather.replace()
    </script>
    <!-- / -->

</body>

</html>