<?php
    include 'dbconnect.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="upload.css">
</head>
<body>


    <?


    
    session_start();



    if($_SESSION['role'] == 'admin') {
        
        if (($_POST['send'])) {


            $name = $_POST['description'];
            $art = $_POST['subname'];
    
            if (!empty($name) and !empty($art)) {
                    
                    $db = DB :: dbconn();
                    $query = $db->query("INSERT INTO `goods`(`ID`, `Picture`, `Article`, `Name`, `Price`) VALUES (NULL, 'https://basket-04.wb.ru/vol554/part55452/55452965/images/big/2.webp', '$art', '$name', '50')");



            }

              
        }
        
        ?>


        <div class="container">

            <form method="post">

                <div class="addform">
                    <div class="pic-name-sub">
                        
                        <label for="">Name</label> <br>
                        <input type="text"  name="name" class="name"><br>

                        <label for="">Subname</label> <br>
                        <input type="text" name="subname" class="name"> <br>

                        <label for="">Price</label> <br>
                        <input type="text" name="subname" class="name"> 

                        
                    </div>

                    <div class="des-res-lh">
                        <label for="">Description</label> <br>
                        <textarea name="description" class="desc"></textarea> <br>

                        <label for="">Result</label> <br>
                        <textarea name="result" class="res"></textarea><br>

                        <label for="">Lifehack</label> <br>
                        <textarea  name="lifehack" class="lh"></textarea>

                    </div>

                    <input type="submit" name="send" class="sendbtn">
 
                </div>

                

            </form>
        </div>


        

        <?
    } 
    
    ?>
    
</body>
</html>