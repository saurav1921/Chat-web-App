<?php 
    session_start();
    if(!isset($_SESSION['unique_id'])){
        header("location: login.php");
    }
?>


<?php include_once "headers.php";?>

<body>
    <div class="wrapper">
       <div class="chatWindow">
           <header class="header">
               <?php
               include_once "php/config.php";
                $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$_SESSION['unique_id']}");
                if(mysqli_num_rows($sql) > 0)
                {
                    $row = mysqli_fetch_assoc($sql);
                }
               
               ?>
               <div class="profile-details">
                   <div class="img">
                       <img src="php/images/<?php echo $row['image']?>" alt="" srcset="">
                   </div>
               <div class="status">
                <h3><?php echo $row['fname']." ".$row['lname'] ?></h3>
                <p><span><i class="bx bxs-circle"></i></span><?php echo $row['status'] ?> </p>
               </div>
            </div>
              <a href="php/logout.php?logout_id=<?php echo $row['unique_id'] ?> "> <div class="logout">
               Logout <i class='bx bx-log-out-circle'></i>
               </div></a>
           </header>
           <div class="search-box">
               <i class='bx bx-search' ></i> <input id="searchInput" type="text" placeholder="search...">
               <i class='bx bx-x right ' id="closeBtn"></i>
           </div>
           <div class="user-list">

           </div>
       </div>
    </div>
    
    <script src="dist/js/user.js"></script>
    <script src="dist/js/main.js"></script>
</body>
</html>