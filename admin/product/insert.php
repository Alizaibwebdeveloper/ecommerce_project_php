<?php

if(isset($_POST['submit'])){

    include 'config.php';

    $product_name = $_POST['Pname'];
    $product_price = $_POST['Pprice'];
    $product_image = $_FILES['Pimage'];
    $img_loc = $_FILES['Pimage']['tmp_name'];
    $img_name = $_FILES['Pimage']['name'];

    $img_des = "Uploadimage/".$img_name;


    $product_category = $_POST['pages'];

    move_uploaded_file($img_loc, "Uploadimage/".$img_name);

    // Insert product

    mysqli_query($conn , "INSERT INTO `tblproduct`(`PNAME`, `PPRICE`, `Pimage`, `PCategory`) VALUES ('$product_name',$product_price,'$img_des','$product_category')");
    
}


?>



