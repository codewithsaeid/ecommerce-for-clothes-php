<?php

include './connection.php';

echo $pid = $_POST['userid']; 

echo $pname = $_POST['pname'];

echo $pcode = $_POST['pcode'];

echo $pcategory = $_POST['pcategory'];

echo $pprice = $_POST['pprice'];

echo $product_img_name = $_FILES['pimg']['name'];
echo $product_img_tmp = $_FILES['pimg']['tmp_name'];
move_uploaded_file($product_img_tmp, '../images/product/' . $product_img_name);


if ($pname && $pcode && $pcategory && $pprice) {
    $result = mysqli_query($connect, "UPDATE products SET p_name='$_POST[pname]', p_code='$_POST[pcode]', p_category='$_POST[pcategory]', p_price='$_POST[pprice]', p_img='$product_img_name' WHERE pid='$pid'");
    echo "ok";
    header("Location: ../pages/allproduct.php");

} else {
    // header('location: ../pages/home.php?result=productnotadd');
    echo "not";
}
