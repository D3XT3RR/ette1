<?php
require 'connect.php';
require 'session.php';
require 'page_format.php';
if(isset($_SESSION['user'])){
    if(isset($_POST['AdText']) && isset($_POST['AdTitle']) && isset($_POST['Category'])){
        $ad_text = preg_replace( "/\r\n/", "</br>", $_POST['AdText']);
        $ad_title = $_POST['AdTitle'];
        $ad_image1 = @addslashes(file_get_contents($_FILES['image1']['tmp_name']));
        $ad_image2 = @addslashes(file_get_contents($_FILES['image2']['tmp_name']));
        $ad_image3 = @addslashes(file_get_contents($_FILES['image3']['tmp_name']));
        $ad_image4 = @addslashes(file_get_contents($_FILES['image4']['tmp_name']));
        $ad_image5 = @addslashes(file_get_contents($_FILES['image5']['tmp_name']));
        $ad_image6 = @addslashes(file_get_contents($_FILES['image6']['tmp_name']));
        $ad_category = $_POST['Category'];
        $user_session_id = $_SESSION['user'];
        //$current_user_id = $_SESSION['user_id'];
        date_default_timezone_set('Europe/Berlin'); // CDT
        $current_date = date('Y-m-d');

        // Create connection
        $link->set_charset("utf8");

        //Insert our ad into the database
        if($ad_category == "Praca"){
            $result = mysqli_query($link, "INSERT INTO adverts (title,text,image1,image2,image3,image4,image5,image6,category,poster_id,posting_date,views,status,visibility) VALUES ('$ad_title','$ad_text','$ad_image1', '$ad_image2', '$ad_image3', '$ad_image4', '$ad_image5', '$ad_image6', '$ad_category', '$user_session_id', '$current_date', 0, 'pending', 'active')") or die(mysqli_error($link));
            $message = "Twoj post został wysłany do weryfikacji. Dostaniesz informacje, gdy zostanie zatwierdzony.";
            $last_id = mysqli_insert_id($link);

            $to="ette.de@onet.eu";
            $subject="Nowe ogłoszenie z kategorii: praca";
            $from = 'noreply@i-ette.de';
            $body="Nowe ogłoszenie o tytule: ".$ad_title.", zostało dodane w kategorii Praca <br><a target='_blank' href=http://i-ette.de/page/announView?id=".$last_id.">Link do ogłoszenia</a>";
            $headers = "From:".$from;
            $headers .= "MIME-Version: 1.0\r\n";
            $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
            mail($to,$subject,$body,$headers);

            echo "<script type='text/javascript'>alert('$message');window.location.href = '../index.php';</script>";
        }
        else{
            $result = mysqli_query($link, "INSERT INTO adverts (title,text,image1,image2,image3,image4,image5,image6,category,poster_id,posting_date,views,status,visibility) VALUES ('$ad_title','$ad_text','$ad_image1', '$ad_image2', '$ad_image3', '$ad_image4', '$ad_image5', '$ad_image6', '$ad_category', '$user_session_id', '$current_date', 0, 'approved', 'active')") or die(mysqli_error($link));
            $message = "Post został opublikowany!";
            echo "<script type='text/javascript'>alert('$message');window.location.href = '../index.php';</script>";
        }
    }
}
else{
    echo "Musisz się zalogować by dodać ogłoszenie";
}
?>