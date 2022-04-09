<?php
        while($row =  mysqli_fetch_assoc($sql)){
            $sql2 = "SELECT * FROM messages WHERE (incoming_msg_id = {$row['unique_id']}
            OR outgoing_msg_id = {$row['unique_id']}) AND (outgoing_msg_id = {$outgoing_id} 
            OR incoming_msg_id = {$outgoing_id}) ORDER BY msg_time  DESC LIMIT 1";
            $query2 = mysqli_query($conn, $sql2);
            $row2 = mysqli_fetch_assoc($query2);
    (mysqli_num_rows($query2) > 0) ? $result = $row2['msg'] : $result ="No message available";
    (strlen($result) > 28) ? $msg =  substr($result, 0, 28) . '...' : $msg = $result;

    (mysqli_num_rows($query2) > 0) ? $msg_time = substr($row2['msg_time'], 10, 12) : $msg_time = $row['status'];


    if(isset($row2['outgoing_msg_id'])){
        ($outgoing_id == $row2['outgoing_msg_id']) ? $you = "You: " : $you = "";
    }else{
        $you = "";
    }
    ($row['status'] == "Offline") ? $offline = "status-offline" : $offline = "";
    ($outgoing_id == $row['unique_id']) ? $hid_me = "hide" : $hid_me = "";

            $output .= '<a href="chat.php?user_id='.$row['unique_id'].'">
            <div class="content">
                <i class="bx bxs-circle '.$offline.' "></i>
            <div class="img">
                <img src="php/images/'. $row['image'] .'" alt="">
            </div>
            <div class="status">
                <h3> '. $row['fname'] . " " . $row['lname'] .'</h3>
                <p>'.$you. $msg.'</p>
            </div>
            </div>
            <div class="time">
                <p>' .$msg_time.'</p>
            </div>
            </a>';
    }
?>
