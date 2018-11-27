<?php
require 'connect.php';
require 'secure_query.php';
mysqli_set_charset($link,"utf8");

$search = @$_GET['search'];
$category = @$_GET['kat'];

function DisplayResults($results){
    if(mysqli_num_rows($results) > 0)      
    {
        while($row = mysqli_fetch_assoc($results))
        {
            echo("<p><h3>".$row['title']."</h3>".$row['text']."</p>");
        }
              
    }
    else
    {
        echo "Nic nie znaleziono :(";
    }
}
if($category != null && $search != null)
{
    DisplayResults(secure_query($link, "SELECT * FROM adverts WHERE (((LOWER(title) LIKE LOWER('%?%')) OR (LOWER(text) LIKE LOWER('%?%'))) AND (LOWER(category) = LOWER('?')))", $t = array('sss'), $a = array(&$search, &$search, &$category)));
}
else if ($search != null)
{
    DisplayResults(secure_query($link, "SELECT * FROM adverts WHERE (LOWER(title) LIKE LOWER('%?%')) OR (LOWER(text) LIKE LOWER('%?%'))", $t = array("ss"), $a = array(&$search, &$search)));
    
}
else if($category != null){
    DisplayResults(secure_query($link, "SELECT * FROM adverts WHERE (LOWER(category) = LOWER('?'))", $t = array("s"), $a = array(&$category)));
}
else 
{
    echo "<script type='text/javascript'>alert('Brak kryteriów wyszukiwania');window.location = '../index.php';</script>";
}



?>