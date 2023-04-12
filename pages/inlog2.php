<?php
require_once 'conn.php';
$username = $_POST['username'];
$password = $_POST['password'];
$sql = "SELECT * FROM users WHERE username=:name AND password=:word";
$stmt = $conn->prepare($sql);
$stmt->execute(['name' => $username, 'word' => $password]);

$user = $stmt->fetch(); 
// echo $username . " " . $password;   header('Location: editor.php')   
if ($user) {
  //inloggegevens zijn correct
  header('location: editor.php');
} else{
  // inloggegevens zijn onjuist
  header('Location: ../index.php');
}
?>