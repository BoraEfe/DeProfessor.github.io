<?php
require 'conn.php';
echo $_GET['id'];
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = 'DELETE FROM products WHERE id = :id';
    $stmt = $conn->prepare($sql);
    $stmt->execute(['id' => $id]);
    header("location: beheerder.php");
}
?>