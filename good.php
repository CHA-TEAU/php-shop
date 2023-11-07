<?php

if($_GET)
{
    $id = $_GET['id'];
    $db = @new mysqli('localhost', 'root', '', 'shop');
    if ($db->connection_errno) 
    {
        echo "error: " . $db->connection_errno;
    } else {
            
        $query = $db -> query("SELECT * FROM `goods` WHERE `ID` = '$id'");
     

        while($row = $query -> fetch_assoc())
        {
            echo $row['Name'] . "<br>";
            echo $row['Price'] . "<br>";
        }
           
    }
}

?>