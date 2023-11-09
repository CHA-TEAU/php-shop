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

            $picture = $_POST['pic'];
            $name = $_POST['name'];
            $sname = $_POST['subname'];
    
            if (!empty($email) and !empty($pass)) {
                $db = @new mysqli('localhost', 'root', '', 'shop');
    
    
                if ($db->connection_errno) {
                    echo "error: " . $db->connection_errno;
    
                } else {
    
                    $query = $db->query("INSERT INTO `goods`(`ID`, `Picture`, `Article`, `Name`, `Price`) VALUES (NULL, '$picture', '$sname', '$name', '50')");

                    $row = $query -> fetch_assoc();

                    
                    


                }

            }   
        }
        
        ?>




        <form method="post">

            <div class="addform">
                <div class="pic-name-sub">
                    <input type="file" name="pic"><br>
                    <input type="text" placeholder="Product name" name="name" class="name"><br>
                    <input type="text" placeholder="Product subname" name="subname" class="name"> <br>
                    <input type="text" placeholder="Price $$$" name="subname" class="name"> <br>
                    
                    <input type="submit" name="send">
                </div>

                <div class="des-res-lh">
                    <input type="text" name="description"  class="desc"> <br>
                    <input type="text" name="result" class="res"><br>
                    <input type="text" name="lifehack" class="lh">
                </div>

            </div>

            
        </form>

        <?
    } 
    
    ?>
    
</body>
</html>