<?php 
    session_start();
    if(!isset($_SESSION['unique_id'])){
        header("location: login.php");
    }
?>

<?php include_once "headers.php";?>
<body>
    <div class="wrapper">
       <div class="personal-chat">
           <header class=" header flex-start">
           <?php
               include_once "php/config.php";
               $user_id = mysqli_real_escape_string($conn,$_GET['user_id']);

                $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$user_id}");
                if(mysqli_num_rows($sql) > 0)
                {
                    $row = mysqli_fetch_assoc($sql);
                }
               ?>
           <a href="users.php" class="back-icon"><i class='bx bx-chevron-left left-arrow' ></i></a> 
               <div class="profile-details">
                   <div class="img">
                       <img src="php/images/<?php echo $row['image']?>" alt="" srcset="">
                   </div>
               <div class="status">
                <h3><?php echo $row['fname']." ".$row['lname'] ?></h3>
                <p><span><i class='bx bxs-circle'></i></span><?php echo $row['status'] ?></p>
               </div>
            </div>
           </header>
           <div class="chat-box">

               <!-- <div class="chat text-incoming">
                   <div class="img-chat">
                       <img src="https://images.unsplash.com/photo-1586297135537-94bc9ba060aa?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=580&q=80" alt="">
                   </div>
                   <div class="details">
                       <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eaque, tenetur!</p>
                   </div>
               </div>
               <div class="chat text-outgoing">
                   <div class="details">
                       <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
                   </div>
               </div> -->

             
           </div>
           <form class="input-form" action="#" autocomplete="off">
               <!-- <textarea name="" id="" cols="5" rows="1" ></textarea> -->
               <input type="text" name="outgoing_id" value="<?php echo $_SESSION['unique_id']; ?>" hidden>
               <input type="text" name="incoming_id" value="<?php echo $user_id; ?>" hidden>
               <input type="text" name="message" placeholder="Enter your message..." id="text" class="msg_input">
               <button class="msgSend" type="submit">Send</button>
           </form>
           </div>
       </div>
    </div>
    <script src="dist/js/chat.js"></script>
    <!-- <script src="dist/js/user.js"></script>
    <script src="dist/js/main.js"></script> -->
</body>
</html>