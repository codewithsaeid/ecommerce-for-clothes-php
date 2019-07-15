<?php
session_start();
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
    body {
        font-size: .875rem
    }

    /* .feather {
        width: 16px;
        height: 16px;
        vertical-align: text-bottom
    } */
</style>

<body>


    <!-- navbar -->
    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
        <h5 class="my-0 mr-md-auto font-weight-normal"><img src="../admin/images/ecom-store-logo.png" alt=""></h5>
        <nav class="my-2 my-md-0 mr-md-3">
            <a class="p-2 text-dark" href="../index.php">HOME</a>
            <a class="p-2 text-dark" href="./shop.php">SHOP</a>
            <a class="p-2 text-dark" href="./contact.php">CONTACT US</a>
        </nav>
        <?php

        if (!isset($_SESSION['uemail'])) {

            echo '<a class="btn btn-outline-success mr-3" href="./pages/signin.php">Sign in</a>
        <a class="btn btn-outline-primary" href="./pages/signup.php">Sign up</a>';
        } else {
            echo '<button type="button" class="btn btn-outline-dark text-uppercase  mr-3">HI ' . $_SESSION["uname"] . '</button>';
            echo '<a class="btn btn-outline-dark" href="./inc/logout.php">LOGOUT</a>';
        }

        ?>
    </div>


    <div class="container">
        <!-- breadcrumb -->
        <!-- <nav aria-label="breadcrumb bg-white">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Library</a></li>
                <li class="breadcrumb-item active" aria-current="page">Data</li>
            </ol>
        </nav> -->
        <div class="row">
            <div class="col-3">
                <div class="list-group" id="list-tab" role="tablist">
                    <a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" href="#list-allproduct" role="tab" aria-controls="allproducts">All PRODUCTS</a>
                    <a class="list-group-item list-group-item-action" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home">MANS</a>
                    <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile">WOMENS</a>
                    <a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list" href="#list-messages" role="tab" aria-controls="messages">KIDS</a>
                    <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-settings" role="tab" aria-controls="settings">ACCESSORIES</a>
                </div>
            </div>
            <div class="col-8">
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="list-allproduct" role="tabpanel" aria-labelledby="list-home-list">

                        <div class="row justify-content-around">
                            <?php include('../inc/connection.php');
                            $product_data = mysqli_query($connect, "SELECT * FROM products");
                            while ($product_slice = mysqli_fetch_array($product_data)) : ?>
                                <div class="card mb-3" style="width: 18rem;">
                                    <img class="card-img-top" src="../admin/images/product/<?php echo $product_slice['p_img']; ?>" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title text-center"><?php echo $product_slice['p_name']; ?></h5>
                                        <h6 class="card-title text-center"><?php echo $product_slice['p_price']; ?> $</h6>
                                        <?php

                                        if (!isset($_SESSION['uemail'])) {

                                            echo '<a class="btn btn-outline-success mr-3" href="./pages/signin.php">Sign in</a>
        <a class="btn btn-outline-primary" href="./pages/signup.php">Sign up</a>';
                                        } else {
                                            echo '<button type="button" class="btn btn-outline-dark text-uppercase  mr-3">HI ' . $_SESSION["uname"] . '</button>';
                                            echo '<a class="btn btn-outline-dark" href="./inc/logout.php">LOGOUT</a>';
                                        }

                                        ?>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        </div>

                    </div>
                    <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">

                        <div class="row justify-content-around">
                            <?php include('../inc/connection.php');
                            $product_data = mysqli_query($connect, "SELECT * FROM products WHERE p_category='Man'");
                            while ($product_slice = mysqli_fetch_array($product_data)) : ?>
                                <div class="card mb-3" style="width: 18rem;">
                                    <img class="card-img-top" src="../admin/images/product/<?php echo $product_slice['p_img']; ?>" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title text-center"><?php echo $product_slice['p_name']; ?></h5>
                                        <h6 class="card-title text-center"><?php echo $product_slice['p_price']; ?> $</h6>
                                        <a href="#" class="btn btn-primary float-left">Add to Cart</a>
                                        <a href="#" class="btn btn-primary float-right">Viwe details</a>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        </div>

                    </div>
                    <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">
                        <div class="row justify-content-around">
                            <?php include('../inc/connection.php');
                            $product_data = mysqli_query($connect, "SELECT * FROM products WHERE p_category='Women'");
                            while ($product_slice = mysqli_fetch_array($product_data)) : ?>
                                <div class="card mb-3" style="width: 18rem;">
                                    <img class="card-img-top" src="../admin/images/product/<?php echo $product_slice['p_img']; ?>" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title text-center"><?php echo $product_slice['p_name']; ?></h5>
                                        <h6 class="card-title text-center"><?php echo $product_slice['p_price']; ?> $</h6>
                                        <a href="#" class="btn btn-primary float-left">Add to Cart</a>
                                        <a href="#" class="btn btn-primary float-right">Viwe details</a>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">
                        <div class="row justify-content-around">
                            <?php include('../inc/connection.php');
                            $product_data = mysqli_query($connect, "SELECT * FROM products WHERE p_category='Kids'");
                            while ($product_slice = mysqli_fetch_array($product_data)) : ?>
                                <div class="card mb-3" style="width: 18rem;">
                                    <img class="card-img-top" src="../admin/images/product/<?php echo $product_slice['p_img']; ?>" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title text-center"><?php echo $product_slice['p_name']; ?></h5>
                                        <h6 class="card-title text-center"><?php echo $product_slice['p_price']; ?> $</h6>
                                        <a href="#" class="btn btn-primary float-left">Add to Cart</a>
                                        <a href="#" class="btn btn-primary float-right">Viwe details</a>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list">
                        <div class="row justify-content-around">
                            <?php include('../inc/connection.php');
                            $product_data = mysqli_query($connect, "SELECT * FROM products WHERE p_category='Accessories' ");
                            while ($product_slice = mysqli_fetch_array($product_data)) : ?>
                                <div class="card mb-3" style="width: 18rem;">
                                    <img class="card-img-top" src="../admin/images/product/<?php echo $product_slice['p_img']; ?>" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title text-center"><?php echo $product_slice['p_name']; ?></h5>
                                        <h6 class="card-title text-center"><?php echo $product_slice['p_price']; ?> $</h6>
                                        <a href="#" class="btn btn-primary float-left">Add to Cart</a>
                                        <a href="#" class="btn btn-primary float-right">Viwe details</a>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <footer class="pt-4 my-md-5 pt-md-5 border-top container">
        <div class="row">
            <div class="col-12 col-md">
                <img class="mb-2" src="../admin/images/ecom-store-logo.png" alt="">
                <small class="d-block mb-3 text-muted">&copy; 2017-2018</small>
            </div>
            <div class="col-6 col-md">
                <h5>Features</h5>
                <ul class="list-unstyled text-small">
                    <li><a class="text-muted" href="#">Cool stuff</a></li>
                    <li><a class="text-muted" href="#">Random feature</a></li>
                    <li><a class="text-muted" href="#">Team feature</a></li>
                    <li><a class="text-muted" href="#">Stuff for developers</a></li>
                    <li><a class="text-muted" href="#">Another one</a></li>
                    <li><a class="text-muted" href="#">Last time</a></li>
                </ul>
            </div>
            <div class="col-6 col-md">
                <h5>Resources</h5>
                <ul class="list-unstyled text-small">
                    <li><a class="text-muted" href="#">Resource</a></li>
                    <li><a class="text-muted" href="#">Resource name</a></li>
                    <li><a class="text-muted" href="#">Another resource</a></li>
                    <li><a class="text-muted" href="#">Final resource</a></li>
                </ul>
            </div>
            <div class="col-6 col-md">
                <h5>About</h5>
                <ul class="list-unstyled text-small">
                    <li><a class="text-muted" href="#">Team</a></li>
                    <li><a class="text-muted" href="#">Locations</a></li>
                    <li><a class="text-muted" href="#">Privacy</a></li>
                    <li><a class="text-muted" href="#">Terms</a></li>
                </ul>
            </div>
        </div>
    </footer>


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