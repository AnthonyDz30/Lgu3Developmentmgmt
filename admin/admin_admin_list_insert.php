<?php 
    include('../admin/assets/config/dbconn.php');

    extract($_POST);

    if(isset($_POST['fnameSend']) && isset($_POST['lnameSend']) && isset($_POST['emailSend']))
    {
        $sql = "INSERT INTO admin (fname, lname, email) 
                VALUES ('$fnameSend', '$lnameSend', '$emailSend')";

        $result = mysqli_query($conn, $sql);
    }
?>

