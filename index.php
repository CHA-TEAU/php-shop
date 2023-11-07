<?php

// include 'DBCrud.php';



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <?
    
    
    $db = @new mysqli('localhost', 'root', '', 'shop');
    if ($db->connection_errno) 
    {
        echo "error: " . $db->connection_errno;
    } else {
            
        $query = $db -> query("SELECT * FROM `goods` ");
       

        while ( $row = $query -> fetch_assoc())
        {
        
            ?>

            <div class="card">
                <span><?=$row['Article']?></span>
                <h2><?=$row['Name']?></h2>
                <p><?=$row['Price']?></p>

                <a href="/good.php?id=<?=$row['ID']?>">Show More</a>
            </div>
            <?
    
        }
           
    }
    ?>


</body>
</html>