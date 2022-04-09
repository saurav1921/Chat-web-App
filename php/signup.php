<?php 
    session_start();
    include_once "config.php";
    $fname = mysqli_real_escape_string($conn,$_POST['fname']);
    $lname = mysqli_real_escape_string($conn,$_POST['lname']);
    $email = mysqli_real_escape_string($conn,$_POST['email']);
    // $username = mysqli_real_escape_string($conn,$_POST['uname']);
    $password = mysqli_real_escape_string($conn,$_POST['password']);

    if(!empty($fname) && !empty($lname) && !empty($email) && !empty($password))
    {
        if(filter_var($email,FILTER_VALIDATE_EMAIL))
        {
            $sql = mysqli_query($conn,"SELECT email FROM users WHERE email = '{$email}'");
            if(mysqli_num_rows($sql)>0){
                echo "$email -  This email already exist";
            }else{
                if(isset($_FILES['image']))
                {
                    $img_name = $_FILES['image']['name']; //getting user uploded img name
                    // $img_type = $_FILES['image']['type']; //getting user uploded img type
                    $tmp_name = $_FILES['image']['tmp_name']; //this is the temp name used to save in our folder


                    $img_explode = explode('.', $img_name);
                    $img_ext = end($img_explode);

                    $extensions = ['png', 'jpeg', 'jpg']; //valid img ext which e store them in array
                    if(in_array($img_ext, $extensions) === true)
                    {
                                $time = time(); //this will return current time. This will help us to rename the reuploaded img file with date.
                              $new_img_name =  $time.$img_name;
                              
                              if(move_uploaded_file($tmp_name,"images/".$new_img_name)) //if user upload img over to our folder successfull
                              {
                                  $status = "Online"; // after signing up user will be online
                                  $random_id = rand(time(),10000000); //random id for user

                                //   insert into table
                                $sql2 = mysqli_query($conn,"INSERT INTO users (unique_id, fname, lname, email, password, image, status) VALUES({$random_id},'{$fname}','{$lname}','{$email}','{$password}','{$new_img_name}','{$status}')");

                                if($sql2){ //if data inserted
                                    $sql3 = mysqli_query($conn, "SELECT * FROM users WHERE email = '{$email}'");
                                    if(mysqli_num_rows($sql3) > 0){
                                        $row = mysqli_fetch_assoc($sql3);
                                        $_SESSION['unique_id'] = $row['unique_id'];
                                        echo "success";
                                    }
                                }
                                else{
                                    echo "Something went wrong :/";
                                }



                              }
                    }
                    else{
                        echo "Please select an Image file - jpeg, jpg, png!";
                    }
                }
            }

        }
        else{
            echo "$email - This is not a valid email!";
        }
    }
    else{
        echo "All input fields are required";
    }
?>