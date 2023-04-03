<?php
        require_once("conn.php");
        $productname = $_POST['productname'];
        $productinfo = $_POST['productinfo']; 
        $prijs = $_POST['prijs']; 
        $image = $_POST['image']; 
        $sql = "INSERT INTO products (product_name, product_info, prijs, image) VALUES ('$productname','$productinfo','$prijs','$image')";
        $conn->exec($sql);  
?>