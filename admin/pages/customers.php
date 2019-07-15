<!doctype html>
<html lang="en">

<head>
    <title>This is Ecommerce</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../../node_modules/bootstrap/dist/css/bootstrap.min.css">
</head>
<style>
    body {
        font-size: .875rem;
    }

    .feather {
        width: 16px;
        height: 16px;
        vertical-align: text-bottom;
    }

    .sidebar {
        position: fixed;
        top: 0;
        bottom: 0;
        left: 0;
        z-index: 100;
        padding: 40px 0 0;
        box-shadow: inset -1px 0 0 rgba(0, 0, 0, .1);
    }

    .sidebar-sticky {
        position: relative;
        top: 0;
        height: calc(100vh - 48px);
        padding-top: .5rem;
        overflow-x: hidden;
        overflow-y: auto;

    }

    @supports ((position: -webkit-sticky) or (position: sticky)) {
        .sidebar-sticky {
            position: -webkit-sticky;
            position: sticky;
        }
    }

    .sidebar .nav-link {
        font-weight: 500;
        color: #333;
    }

    .sidebar .nav-link .feather {
        margin-right: 4px;
        color: #999;
    }

    .sidebar .nav-link:hover .feather,
    .sidebar .nav-link.active .feather {
        color: inherit;
    }

    .sidebar-heading {
        font-size: .75rem;
        text-transform: uppercase;
    }

    [role="main"] {
        padding-top: 48px;
   
    }


    .navbar-brand {
        padding-top: .75rem;
        padding-bottom: .75rem;
        font-size: 1rem;
        background-color: rgba(0, 0, 0, .25);
        box-shadow: inset -1px 0 0 rgba(0, 0, 0, .25);
    }
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
                        <!-- <li class="nav-item">
                            <a class="nav-link" href="./order.php">
                                <span data-feather="file"></span>
                                Orders
                            </a>
                        </li> -->
                        <li class="nav-item">
                            <a class="nav-link" href="./allproduct.php">
                                <span data-feather="shopping-cart"></span>
                                <i class="fe fe-heart"></i> Products
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./customers.php">
                                <span data-feather="users"></span>
                                Customers
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="./addproduct.php">
                                <span data-feather="layers"></span>
                                Add product
                            </a>
                        </li>
                    </ul>

                    <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                        <span>Categories</span>
                    
                    </h6>
                    <ul class="nav flex-column mb-2">
                        <li class="nav-item">
                            <a class="nav-link" href="./mans.php">
                                <span data-feather="file-text"></span>
                                Men
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="womens.php">
                                <span data-feather="file-text"></span>
                                Women
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="kids.php">
                                <span data-feather="file-text"></span>
                                Kids
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="accessories.php">
                                <span data-feather="file-text"></span>
                                Accessories
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>

          
        <!-- </div> -->

            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
            <h5>This is customers list</h5>
            <div class="table-responsive">
                    <table class="table table-striped table-sm">
                        <thead>
                            <tr>
                                <th>#ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Password</th>
    
                            </tr>
                        </thead>
                        <tbody>

                            <?php include('../inc/connection.php');
                            $product_data = mysqli_query($connect, "SELECT * FROM user_info");
                            // $id = $product_slice['pid'];
                            while ($product_slice = mysqli_fetch_array($product_data)) : 
                                // $id = $product_slice['pid'];
                            ?>
                            
                                <tr>
                                    <th scope="row"><?php echo $product_slice['id']; ?></th>
                                    <td><?php echo $product_slice['user_name']; ?></td>
                                   
                                    <td><?php echo $product_slice['user_email']; ?></td>
                                   
                                    <td><?php echo $product_slice['pass']; ?></td>
                        
                                </tr>

                            <?php endwhile; ?>
                        </tbody>
                    </table>
                </div>
                
            </main>
        </div>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="../../node_modules/jquery/dist/jquery.min.js"></script>
    <script src="../../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- For icons -->
    <script src="../../node_modules/feather-icons/dist/feather.min.js"></script>
    <script>
        feather.replace()
    </script>
    <!-- / -->

</body>

</html>