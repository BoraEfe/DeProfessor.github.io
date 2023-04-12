<?php
      require_once 'conn.php';
        $username = $_POST['username']; 
        $password = $_POST['password'];
        $sql = "INSERT INTO users (username, password) VALUES (?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$username, $password]);
       // echo $username . " " . $password;        header('Location: login.php')   
        header('Location: inlog.php');
     ?>