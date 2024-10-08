﻿<?php
include 'php_register.php';



?>

<!DOCTYPE html>
<html lang="english">

<head>
    <title>Register Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8" />
    <meta property="twitter:card" content="summary_large_image" />

    <link rel="stylesheet" href="global.css" />
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="footer.css" />
    <link rel="stylesheet" href="index.css" />
    <link rel="stylesheet" href="page-styles/register.css" />

</head>

<body>
    <div class="wrapper">
        <!-- header-->
        <header>
            <div class="header-navigation">
                <div class="items" id="itemsContainer">
                    <div class="button">
                        <div class="register-here">
                            <a href="login.php" style=" text-decoration:none; color: #FFFFFF;">
                                Login
                                Here
                            </a>
                        </div>
                    </div>
                </div>
                <img class="updated-logo-v5-no-bilog-1" alt="" src="assets/updated-logo-v-5-no-bilog-10.png">

                <img class="llda-logo-2" alt="" src="assets/llda-logo-21.png">

                <img class="bagong-pinas-1" alt="" src="assets/bagong-pinas-10.png">

            </div>
        </header>
        <div>
            <!-- body content -->
            <div class="register-page-container">
                <div class="register-page-register-page">
                    <div class="register-page-loginframe">
                        <span class="register-page-text02">
                            <span class="register-page-text03">Already a user?</span>
                            <span>
                                <a href="login.php" style=" text-decoration:none; color:#1b7019; font-weight: bold;">
                                    Login
                                    Here
                                </a>
                            </span>
                        </span>
                        <span class="register-page-text05"><span>Register Via:</span></span>
                        <span class="register-page-text07"><span>Register Here</span></span>
                        <div class="register-page-input-fields">
                            <div class="register-page-key">
                                <img alt="key1512" src="assets/key0.svg" class="register-page-key1" />
                            </div>

                            <form action="register.php" method="post" id="registerForm">
                                <input type="text" name="username" placeholder="Username" class="register-page-frame01-username-input-field" required />
                                <input type="email" name="email" placeholder="Email" class="register-page-frame01-email-input-field" required />
                                <input type="password" name="password" placeholder="Password" class="register-page-frame01-password-input-field" required />
                                <input type="password" name="confirm_password" placeholder="Confirm Password" class="register-page-frame02-password-input-field" required />

                            </form>
                            <div class="register-page-alternateemail">
                                <img alt="alternateemail1523" src="assets/alternate_email.svg" class="register-page-alternateemail1" />
                            </div>
                            <div class="register-page-key2">
                                <img alt="key1526" src="assets/key0.svg" class="register-page-key3" />
                            </div>
                            <div class="register-page-person">
                                <img alt="person1529" src="assets/person0.svg" class="person-icon" />
                            </div>
                        </div>
                        <div class="register-page-items">
                            <button class="register-page-button1" onclick="submitForm()">
                                <span class="register-page-text09 Smalltext">
                                    <span><a href="javascript:void(0);" style="text-decoration:none; color: white;">Register</a></span>
                                </span>
                            </button>
                        </div>

                        <div id="g_id_onload"
                             data-client_id="559225362339-dfnbc9trnkvn7hkm172gml9l6a9squ8i.apps.googleusercontent.com"
                             data-callback="handleCredentialResponse">
                        </div>
                        <div class="g_id_signin" data-type="standard"> </div>


                        <script>
                            function submitForm() {
                                var form = document.getElementById("registerForm");
                                form.reportValidity();  // Triggers the native validation pop-up
                                if (form.checkValidity()) {
                                    form.submit();  // Submits the form if valid
                                }
                            }
                        </script>

                        <script>
                            document.getElementById('customRegisterButton').onclick = function () {

                                document.getElementById('registerForm').submit();
                            };
                        </script>
                    </div>


                    <script src="https://accounts.google.com/gsi/client" async defer></script>
                    <script>
                        function handleCredentialResponse(response) {
                            // Send the response token to your server
                            var xhr = new XMLHttpRequest();
                            xhr.open('POST', 'google-signup.php');
                            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
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
            <div class="foot">
                <!-- footer-->
                <footer>
                    <div class="footer">
                        <div class="items1">
                            <div class="research-proponents" style=" color: black; ">Research Proponents</div>
                            <div class="marcus-henson-l" style=" color: black; ">Marcus Henson L. Garcia</div>
                            <div class="john-wilson-d" style=" color: black; ">John Wilson D. Lorin</div>
                            <div class="joshua-a-rancap" style=" color: black; ">Joshua A. Rancap</div>
                        </div>
                        <div class="laguna-lake-development" style=" color: black; ">Laguna Lake Development Authority</div>
                        <div class="social-icons">
                            <img class="buttons-icon" alt="" src="./Buttons/fb.png">

                            <img class="buttons-icon" alt="" src="./Buttons/ig.png">

                            <img class="buttons-icon" alt="" src="./Buttons/yt.png">

                        </div>
                        <div class="divider">
                        </div>
                        <div class="llda-all-rights" style=" color: black; ">© 2024 LLDA. All Rights Reserved </div>
                    </div>
                </footer>
            </div>

        </div>

</body>

</html>