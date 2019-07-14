<?php

include ('connection.php');

echo $pname = $_POST['pname'];

echo $pcode = $_POST['pcode'];

echo $pcategory = $_POST['pcategory'];

echo $pprice = $_POST['pprice'];

echo $product_img_name = $_FILES['pimg']['name'];
echo $product_img_tmp = $_FILES['pimg']['tmp_name'];
move_uploaded_file($product_img_tmp, '../images/product/' . $product_img_name);

if ($pname && $pcode && $pcategory && $pprice) {
    $upostinsert =  mysqli_query($connect, "INSERT INTO products(p_name,p_code,p_category,p_price,p_img) VALUES('$pname','$pcode','$pcategory','$pprice','$product_img_name')");
    // header('location: ../pages/home.php?result=addproduct');

}else{
    // header('location: ../pages/home.php?result=productnotadd');
}

