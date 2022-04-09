<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="dist/css/main.css">
    <title>Chaterr - A web based chatting App</title>
</head>
<body>
    <div class="wrapper">
        <div class="wrapper__image background-gradient">
            <a href="index.php">
                <div class="floating-text">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 icons-logo" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                  </svg>
                <h1>ChattX.</h1>
            </div>
            </a>  
        </div>

        <div class="wrapper__form">    
            <section class="form signup">
            <header>
                <h1>Register</h1>
                <h3>Chat with your loved ones.</h3>
                <p>Chattx is the easy way to connect with friends and family. Rather than using a personal account, Just create a room and share the URL with your chat partners.</p>
            </header>
            <form class="signupForm" action="#" enctype="multipart/form-data">
                <div class="err">
                    <div class="err__msg" id="error_usernpass">
                      <p></p>
                    </div>
                    <!-- <div class="err__msg" id="error_occured">
                        <p>Error Occured!</p>
                    </div> -->
                    <!-- <div class="err__msg green" id="success">
                        <p>Account Created Successfully!</p>
                    </div> -->
                </div>
                <div class="names">
                    <input  type="text"placeholder="First name" name="fname" id="firstName"required>
                    <input type="text"placeholder="Last name" name="lname" id="lastName">
                </div>
                <!-- <input type="text"placeholder="username" name="uname" id="username" required> -->
                <input type="email" placeholder="Enter your email" name="email" id="email" required>
                <div class="pass">
                    <div class="icons">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 iconsize" id="openEye" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                          </svg> 
                          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 iconsize" id="closeEye" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.88 9.88l-3.29-3.29m7.532 7.532l3.29 3.29M3 3l3.59 3.59m0 0A9.953 9.953 0 0112 5c4.478 0 8.268 2.943 9.543 7a10.025 10.025 0 01-4.132 5.411m0 0L21 21" />
                          </svg>
                    </div>

                    <input type="password" placeholder="Enter your password" name="password" id="password" required>

                </div>
                <label for="">Select image for profile</label>
                <input  class="nooutline"style="border-radius:0" type="file" name="image">
                <!-- <div class="check-box1">
                    <input class="check-box" type="checkbox" value="1"><span class="check-box-label">Yes, I want to receive all the updates.</span> 
                </div>
                <div class="check-box1">
                    <input class="check-box" required type="checkbox" value="1"><span class="check-box-label">I agree to all the <a href="#">Terms</a> and <a href="#">Privacy Policies</a> <span style="color: red;">*</span></span> 
                </div> -->
                <button class="createAc" type="submit">Create Account</button>
                <p>Already have an account? <a href="login.php">Login now</a></p>
            </form>

        </section>
    </div>
    </div>
    <script src="dist/js/signup.js"></script>
    <script src="dist/js/main.js"></script>
</body>
</html>