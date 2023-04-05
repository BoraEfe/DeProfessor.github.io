
<?php
      require_once 'conn.php';
      var_dump($_POST);
        $username = $_POST['username']; 
        $password = $_POST['password'];
        $sql = "SELECT * FROM users WHERE username=:name AND password=:word";
        $stmt = $conn-> prepare($sql);
        $stmt->execute(['name' => $username, 'word' => $password]); 

        $user = $stmt->fetch();
       // echo $username . " " . $password;        header('Location: editor.php')   
        header('Location: editor.php');
        
        if($user)
        {
          session_start();
        }
        else(
          header('location: index.php')
        )
     ?>