<?php 
        session_start();
        if(isset($_SESSION['unique_id']))
        {
            include_once "config.php";
            $outgoing_id = $_SESSION['unique_id'];
            $incoming_id = mysqli_real_escape_string($conn, $_POST['incoming_id']);
            $output ="";
            $sql = "SELECT * FROM messages LEFT JOIN users ON users.unique_id = messages.outgoing_msg_id
            WHERE (outgoing_msg_id = {$outgoing_id} AND incoming_msg_id = {$incoming_id})
            OR (outgoing_msg_id = {$incoming_id} AND incoming_msg_id = {$outgoing_id}) ORDER BY msg_id";
            $query = mysqli_query($conn, $sql);
            if(mysqli_num_rows($query) > 0)
            {
             
                while($row = mysqli_fetch_assoc($query)){
                    if($row['outgoing_msg_id']=== $outgoing_id){ // if this condition is true then he is the sender.
                        $output .= '<div class="chat text-outgoing">
                        <div class="details">
                            <p>'. $row['msg'] .'</p>
                        </div>
                    </div>

                    ';
                    }
                    else{ //he is the reciever

                            $output .= '<div class="chat text-incoming">
                            <div class="img-chat">
                                <img src="php/images/'.$row['image'].'" alt="">
                            </div>
                            <div class="details">
                                <p>'. $row['msg'] .'</p>
                            </div>
                        </div>
                            ';
                    }
                   
                }
            }
            else{
                $output.='<div class="notice">No messages are available. Once you send message they will appear here.</div>';
            }
            echo $output;
        }
        else{
            header("../login.php");
        }

?>
