<?php
        require_once("conn.php");
        $data = [
            'productname' => $product_name,
            'productinfo' => $product_info,
            'prijs' => $prijs,
            'image' => $image,
        ];
        $sql = "INSERT INTO products (productname, product_info, prijs, image) VALUES (:productname, :productinfo, :prijs, :image)";
        $stmt = $conn->prepare($sql);
        $stmt->execute($data);
?>