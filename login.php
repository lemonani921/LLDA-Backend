﻿<?php
include 'php_login.php';



?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link rel="stylesheet" href="./global.css" />
    <link rel="stylesheet" href="./index.css" />
    <link rel="stylesheet" href="page-styles/login.css" />
    <link rel="stylesheet" href="./footer.css" />
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" />

</head>

<body>
    <div class="wrapper">
        <!-- header-->
        <header>
            <div class="header-navigation">
                <div class="items" id="itemsContainer">
                    <div class="button">
                        <div class="register-here">
                            <a href="register.php"
                               style=" text-decoration:none; color: #FFFFFF;">Register Here</a>
                        </div>
                    </div>
                </div>
                <img class="updated-logo-v5-no-bilog-1" alt="" src="assets/updated-logo-v-5-no-bilog-10.png">

                <img class="llda-logo-2" alt="" src="assets/llda-logo-21.png">

                <img class="bagong-pinas-1" alt="" src="assets/bagong-pinas-10.png">
            </div>
        </header>

        <div class="login-page">
            <!-- body content-->
            <div class="login-frame">
                <div class="frame-background">
                </div>
                <div class="forgot-password">
                    <a href="forgotpassword.php"
                       style=" text-decoration:none; color:#1b7019; font-weight: bold;">Forgot Password?</a>
                </div>
                <div class="not-a-user-container" id="notAUser" style=" text-decoration:none; color:#1b7019;">
                    <span>Not a user yet? </span>
                    <a href="register.php" style=" text-decoration:none; color: #1b7019;">
                        <b>Register Here</b>
                    </a>
                </div>
                <div class="login-via" style=" text-decoration:none; color: #1b7019;">Login Via:</div>
                <!-- Google Sign-In Button -->
                <div id="g_id_onload"
                     data-client_id="559225362339-dfnbc9trnkvn7hkm172gml9l6a9squ8i.apps.googleusercontent.com"
                     data-callback="handleCredentialResponse" class="google-1-icon">
                </div>
                <div class="g_id_signin" data-type="standard"> </div>
                <div class="login-here">Login Here</div>
                <div class="input-fields">
                    <form action="login.php" method="post" id="loginForm">
                        <input type="text" id="username" name="username" placeholder="Username" class="login-username-input-field" required />
                        <input type="password" id="password" name="password" placeholder="Password" class="login-password-input-field" required />

                    </form>
                    <img class="key-icon" alt="" src="assets/key0.svg">

                    <img class="person-icon" alt="" src="assets/person0.svg">

                </div>
                <div class="check-box-outline-blank">
                    <div class="remember-me" style=" text-decoration:none; color:#1b7019;">Remember Me</div>
                    <img class="check-box-outline-blank-icon" alt="" src="assets/check-box-outline-blank1.svg">

                </div>

                <div class="items2" id="itemsContainer">
                    <div class="button">
                        <div class="register-here" onclick="submitForm()"> Log In </div>
                    </div>
                </div>



                <script>
                    function submitForm() {
                        var form = document.getElementById("loginForm");
                        form.reportValidity();  // Triggers the native validation pop-up
                        if (form.checkValidity()) {
                            form.submit();  // Submits the form if valid
                        }
                    }
                </script>


                <script>
                    document.getElementById('customLoginButton').onclick = function () {
                        document.getElementById('loginForm').submit();
                    };
                </script>





                <script src="https://accounts.google.com/gsi/client" async defer></script>
                <script>
                    function handleCredentialResponse(response) {
                        // Send the response token to your server
                        var xhr = new XMLHttpRequest();
                        xhr.open('POST', 'google-login.php'); // Ensure this matches your PHP file name
                        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
                        //alert("Hello! I am an alert box!!");
                        xhr.onload = function () {
                            console.log('Signed in as: ' + xhr.responseText);
                            if (xhr.responseText.indexOf('successful') !== -1) {
                                window.location.href = 'home.php'; // Redirect after successful login
                            } else {
                                alert(xhr.responseText); // Display error message
                            }
                        };
                        xhr.send('id_token=' + response.credential);
                    }
                </script>

            </div>

        </div>

        <div class="login-foot">
            <footer>
                <div class="footer">
                    <div class="items1">
                        <div class="research-proponents">Research Proponents</div>
                        <div class="marcus-henson-l">Marcus Henson L. Garcia</div>
                        <div class="john-wilson-d">John Wilson D. Lorin</div>
                        <div class="joshua-a-rancap">Joshua A. Rancap</div>
                    </div>
                    <div class="laguna-lake-development">Laguna Lake Development Authority</div>
                    <div class="social-icons">
                        <img class="buttons-icon" alt="" src="Buttons/fb.png">

                        <img class="buttons-icon" alt="" src="Buttons/ig.png">

                        <img class="buttons-icon" alt="" src="Buttons/yt.png">

                    </div>
                    <div class="divider">
                    </div>
                    <div class="llda-all-rights">© 2024 LLDA. All Rights Reserved </div>
                </div>
            </footer>

        </div>
    </div>

    <script>
        var itemsContainer = document.getElementById("itemsContainer");
        if (itemsContainer) {
            itemsContainer.addEventListener("click", function (e) {
                // Add your code here
            });
        }

        var notAUser = document.getElementById("notAUser");
        if (notAUser) {
            notAUser.addEventListener("click", function (e) {
                // Add your code here
            });
        }

        var google1Image = document.getElementById("google1Image");
        if (google1Image) {
            google1Image.addEventListener("click", function (e) {
                // Add your code here
            });
        }
    </script>

</body>


</html>