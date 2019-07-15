<?php
session_start();
?>
<!doctype html>
<html lang="en">

<head>
    <title>Admin Sign in Page</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="./node_modules/bootstrap/dist/css/bootstrap.min.css">
</head>
<style>

</style>

<body>
    <!-- navbar -->
    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
        <h5 class="my-0 mr-md-auto font-weight-normal"><img src="./admin/images/ecom-store-logo.png" alt=""></h5>
        <nav class="my-2 my-md-0 mr-md-3">
            <a class="p-2 text-dark" href="./index.php">HOME</a>
            <a class="p-2 text-dark" href="./pages/shop.php">SHOP</a>
            <a class="p-2 text-dark" href="./pages/contact.php">CONTACT US</a>
        </nav>
<?php 

if (!isset($_SESSION['uemail'])) {

        echo '<a class="btn btn-outline-success mr-3" href="./pages/signin.php">Sign in</a>
        <a class="btn btn-outline-primary" href="./pages/signup.php">Sign up</a>';
}else{
    echo '<button type="button" class="btn btn-outline-dark text-uppercase  mr-3">HI '.$_SESSION["uname"].'</button>';
    echo '<a class="btn btn-outline-dark" href="./inc/logout.php">LOGOUT</a>';
}

?>
       
    </div>
    <!-- product area -->
    <div class="container">
        <h3 class="text-center">OUR LATEST COLLECTIONS</h3>
        <div class="row justify-content-around">


            <?php include('./admin/inc/connection.php');
            $product_data = mysqli_query($connect, "SELECT * FROM products");
            while ($product_slice = mysqli_fetch_array($product_data)) : ?>

                <div class="card m-3" style="width: 18rem;">
                    <img class="card-img-top" src="./admin/images/product/<?php echo $product_slice['p_img']; ?>" alt="Card image cap">
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
    <!-- footer -->
    <footer class="pt-4 my-md-5 pt-md-5 border-top container">
        <div class="row">
            <div class="col-12 col-md">
                <img class="mb-2" src="./admin/images/ecom-store-logo.png" alt="">
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
    <script src="./node_modules/jquery/dist/jquery.min.js"></script>
    <script src="./node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>