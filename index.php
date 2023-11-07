<?php

// include 'DBCrud.php';



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?
    
         $status = false;
         if($_POST['auth']){

             $login = $_POST['login'];
             $email = $_POST['email'];
             $pass = $_POST['pass'];
             $passrep = $_POST['pass-repeat'];

             if(!empty($login) and !empty($pass) and !empty($email) and !empty($passrep)){
                 $db = @new mysqli('localhost', 'root', '', 'shop');
                 if ($db->connection_errno) {
                     echo "error: " . $db->connection_errno;
                 } else {
                    $pass = md5($pass);
                        $query = $db -> query("INSERT INTO `users`(`login`, `pass`, `email`, `name`) VALUES ('$login','$pass','$email', 'hhhh')");
                    if($pass == $passrep)
                    {
                        
                    } 
                    //     if($query)
                    //     {
                    //         header("Location: /");
                    //     }else
                    //     {
                    //         echo "Username already exist!";
                    //     }
                    // }else
                    // {
                    //     echo "Passwords are not matching!";
                    // }

                 }
             }
         }
    ?>



    <form method="post" >

        <input type="text" name="login" placeholder="Login" require><br>
        <input type="text" name="email" placeholder ="Email Address" require><br>
        <input type="text" name="pass" placeholder ="Password" require><br>
        <input type="text" name="pass-repeat" placeholder ="Repeat password" require><br>
        <input type="submit" value="Send" name="auth">

    </form>
    
</body>
</html>
