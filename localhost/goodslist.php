<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Goods List</title>
    <link rel="stylesheet" href="goods.css">
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

            <section class="container">


            <div class="popular-items">

                    <div class="often-buy-item">
                        <img src=<?=$row['Picture']?> alt="">
                        <p><?=$row['Subname']?></p>
                        <h4><?=$row['Name']?></h4>
                        <h4><?=$row['Price']?></h4>

                        <button class="addtocart-btn"><a href="/goodcard.php?id=<?=$row['ID']?>">Show More</a></button>
                    </div>
            </div>
            
            </section>

            <?
    
        }
           
    }
    ?>

</body>
</html>