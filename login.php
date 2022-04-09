<?php include_once "headers.php";?>

<body>
    <div class="wrapper">
        <div class="wrapper__image image-side">
           <a href="index.php"> <div class="floating-text">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 icons-logo" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                  </svg>
                <h1>ChattX.</h1>
            </div>
            </a>
        </div>

        <div class="wrapper__form form-side">    
            <section class="form login">
            <header>
                <h1>Login</h1>
                <h3>Chat with your loved ones.</h3>
                <p>Just create a room and share the URL with your chat partners. All they need to do is navigate to your link.</p>
            </header>
            <form action="#" autocomplete="off">
                <div class="err">
                    <div class="err__msg" id="error_usernpass">
                        <p></p>
                    </div>
                </div>
                <input required type="text"placeholder="Username" name="email" id="login-email">
                <div class="pass">
                    <div class="icons">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 iconsize" fill="none" viewBox="0 0 24 24" id="openEye" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                          </svg> 
                          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 iconsize" fill="none" viewBox="0 0 24 24" id="closeEye" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.88 9.88l-3.29-3.29m7.532 7.532l3.29 3.29M3 3l3.59 3.59m0 0A9.953 9.953 0 0112 5c4.478 0 8.268 2.943 9.543 7a10.025 10.025 0 01-4.132 5.411m0 0L21 21" />
                          </svg>
                    </div>

                    <input type="password" placeholder="Enter your password" name="password" id="password" required>

                </div>

                <button type="submit" class="loginAc width100">Login</button>
                <p>Don't have an account? <a href="index.php">Signup now</a></p>
            </form>

        </section>
    </div>
    </div>
    <script src="dist/js/login.js"></script>
    <script src="dist/js/main.js"></script>
</body>
</html>