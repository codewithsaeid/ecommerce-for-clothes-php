<?php

include './connection.php';

if (isset($_REQUEST['epid'])) {
	
    echo $epid = mysql_real_escape_string($_REQUEST['epid']);
}else {
    header('location: index.php');
}


echo $_SERVER['REQUEST_URI'];

echo "<br>";
echo $pname = $_POST['pname'];
echo "<br>";

echo $pcode = $_POST['pcode'];
echo "<br>";

echo $pcategory = $_POST['pcategory'];

echo $pprice = $_POST['pprice'];

echo $product_img_name = $_FILES['pimg']['name'];
echo $product_img_tmp = $_FILES['pimg']['tmp_name'];
move_uploaded_file($product_img_tmp, '../images/product/' . $product_img_name);

// $result = mysqli_query($connect, "UPDATE SET add_product WHERE pid=$id ");

// header('location: ../pages/home.php');'


if ($pname || $pcode || $pcategory || $pprice) {
    $result = mysqli_query($connect, "UPDATE SET add_product p_name=$pname p_code=$pcode p_category='$pcategory', p_price='$pprice', p_img='$pprice' WHERE pid=$id");
    echo "ok";
} else {
    // header('location: ../pages/home.php?result=productnotadd');
    echo "not";
}
