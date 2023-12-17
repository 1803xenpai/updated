<DOCTYPE.html>
    <html>
        <head>
            <title>Sign in/Sign up Area</title>
            <link rel="stylesheet" href="desus.css">
            <link rel='shortcut icon' href='https://wallpapers.com/images/hd/jiji-cat-933-x-1280-wallpaper-ykcwxr1k1ay8c70m.jpg' type='image/x-icon'>
            <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css'integrity='sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==' crossorigin='anonymous' referrerpolicy='no-referrer' />
      
        </head>
        <body>
        <!-- main -->
            <div class="container">
                <div class="forms-container">
                    <div class="signin_signup">
                        <form action='home.php' class="sign-in-form" id="sign-in-form" method="post" >
                            <h2 class="title">Sign in</h2>
                            <div class="input-field">
                                <i class="fas fas fa-user"></i>
                                <input type="text" name='uname' placeholder="Username">
                            </div>
        <!-- SIGN in -->
                            <div class="input-field">
                                <i class="fas fas fa-lock"></i>
                                <input type="password" name='pass' placeholder="Password">
                            </div>
                            <input type="submit" class="btn solid" value="Login" >
                            <p class="social-text">Or Sign in with social platform</p>
                            <div class="social-media">
 <!-- SOCIAL ICONS -->          <a href="#" class="social-icon"> 
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="#" class="social-icon">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a href="#" class="social-icon">
                                    <i class="fab fa-google"></i>
                                </a>
                                <a href="#" class="social-icon">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                            </div>
                        </form>
                        </div>

                        <div class="signup_signup">
                        <form action='registercon.php' class="sign-up-form" id="sign-up-form" method="post">
                            <h2 class="title">Sign Up</h2>
                            <div class="input-field">
                                <i class="fas fas fa-user"></i>
                                <input type="text" name='fullname' placeholder="Fullname">
                            </div>
        <!-- SIGN uP -->
                            <div class="input-field">
                                <i class="fas fas fa-envelope"></i>
                                <input type="email" name='email' placeholder="Email">
                            </div>

                            <div class="input-field">
                                <i class="fas fas fa-child"></i>
                                <input type="text" name='age' placeholder="age">
                            </div>

                            <div class="input-field">
                                <i class="fas fas fa-home"></i>
                                <input type="text" name='add' placeholder="Address">
                            </div>

                            <div class="input-field">
                                <i class="fas fas fa-user"></i>
                                <input type="text" name='uname' placeholder="Username">
                            </div>
        <!-- SIGN up -->
                            <div class="input-field">
                                <i class="fas fas fa-lock"></i>
                                <input type="password" name='pass' placeholder="Password">
                            </div>

                            <input type="submit" class="btn solid" value="Login">
                            </div>
                        </form>
                    </div>
                    </div>
                <div class="panels-container">
                    <div class="panel left-panel">
                        <div class="content2" id='content2'>
                            <h3>New Here?  ||  Already a User?</h3>
                            <p class='sign'>Ready to get full experience?   </p>
                            <button class="btn transparent" id="sign-up-button" onclick="toggleForm()">Sign up/ Sign in</button>
                        </div>
                              </div>
                    <div class="panel right-panel">
                    <div class="content2" id="content2">
                           
                        </div>
                           </div>
                </div>
            </div>
            <script src="script.js"></script>
            <script>

            // function toggleForm() {
            // var form = document.getElementById("sign-in-form");
            // var div = document.getElementById("content");
            // // var div2 = document.getElementsById("content2");
           
            // if (form.style.display === "none") {
            //     form.style.display = "block";
            //     div.style.display = "block";
                
            // } else {
            //     form.style.display = "none";
            //     div.style.display = "none";
            // }
          
        
        </script>
                <!-- <script>

        function toggleForm() {
        var form2 = document.getElementById("sign-in-form");
        var div2 = document.getElementById("content2");

        if (form.style.display === "none") {
            form.style.display = "block";
            div.style.display = "block";
        } else {
            form.style.display = "none";
            div.style.display = "none";
        } -->
        
            </script>
            
        </body>
    </html>