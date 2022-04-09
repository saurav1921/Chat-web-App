<?php
        session_start();
        if(isset($_SESSION['unique_id'])){ //if login then come to this page else go to login page
            include_once "config.php";
            $logout_id = mysqli_real_escape_string($conn, $_GET['logout_id']);
            if(isset($logout_id)){ //if logout id is set then update staus
                $status = "Offline";
                $sql = mysqli_query($conn, "UPDATE users SET status = '{$status}' WHERE unique_id = {$logout_id}");
                if($sql)
                {
                    session_unset();
                    session_destroy();
                    header("location: ../login.php");

                }
               
            }else
            {
                header("location:../users.php");
            }
               
        } else
             {
                   header("location:../login.php");
              }  

?>
