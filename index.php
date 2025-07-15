<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Online Examination System</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/bootstrap-theme.min.css" />
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/font.css">
    <link rel="icon" href="image/icon.png" type="image/x-icon">
    <script src="js/jquery.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>

    <style>
        /* General Styles */
        body {
            font-family: 'Roboto', sans-serif;
            background-image: url("image/bkg2.jpeg");
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: fixed;
            color: #333;
            margin: 0;
            padding: 0;
            padding-top: 80px;
            /* Adjust for the fixed header */
            padding-bottom: 80px;
            /* Adjust for the fixed footer */
        }

        /* Header Styles */
        .header {
            background: rgba(0, 0, 0, 0.8);
            padding: 10px 0;
            /* Reduced padding */
            color: #fff;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            position: fixed;
            /* Make the header stick to the top */
            top: 0;
            width: 100%;
            height: 60px;
            /* Reduced height */
            z-index: 1000;
            /* Ensure it stays above other content */
        }

        .logo {
            font-size: 24px;
            /* Reduced font size */
            font-weight: bold;
            color: #fff;
            margin-left: 20px;
        }

        .btn.sub1 {
            background: #ff6f61;
            color: #fff;
            padding: 8px 16px;
            /* Reduced padding */
            border-radius: 5px;
            text-decoration: none;
            transition: background 0.3s ease;
        }

        .btn.sub1:hover {
            background: #ff3b2f;
        }

        /* Form Container */
        .form-container {
            background: rgba(255, 255, 255, 0.9);
            padding: 10px;
            /* Reduced padding */
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            /* Reduced max-width */
            margin: 20px auto;
            /* Reduced margin */
            padding-bottom: 5px;
            /* Reduced padding */
        }

        .form-container h2 {
            text-align: center;
            color: #ff6f61;
            font-size: 28px;
            margin-bottom: 10px;
            font-weight: bold;
            margin-top: 0px;
        }

        /* Form Styles */
        .form-horizontal .form-group {
            margin-bottom: 10px;
        }

        .form-horizontal .form-control {
            border-radius: 5px;
            border: 1px solid #ddd;
            padding: 12px;
            font-size: 16px;
            transition: border-color 0.3s ease;

        }

        .form-horizontal .form-control:focus {
            border-color: #ff6f61;
            box-shadow: none;
        }

        .form-horizontal .btn-primary {
            background: #ff6f61;
            border: none;
            padding: 12px 20px;
            border-radius: 5px;
            font-size: 16px;
            transition: background 0.3s ease;
            width: 100%;
        }

        .form-horizontal .btn-primary:hover {
            background: #ff3b2f;
        }

        /* Error Message Styles */
        .error-message {
            color: red;
            font-size: 14px;
            margin-top: 5px;
        }

        /* Footer Styles */
        .footer {
            background: rgba(0, 0, 0, 0.8);
            color: #fff;
            padding: 20px 0;
            text-align: center;
            position: fixed;
            /* Make the footer stick to the bottom */
            bottom: 0;
            width: 100%;
            z-index: 1000;
            /* Ensure it stays above other content */
            display: flex;
            justify-content: space-around;
            /* Distribute space evenly */
            align-items: center;
        }

        .footer a {
            color: #fff;
            text-decoration: none;
            transition: color 0.3s ease;
            font-size: 16px;
        }

        .footer a:hover {
            color: #ff6f61;
        }

        .footer .box {
            flex: 1;
            /* Each box takes equal space */
            text-align: center;
        }

        /* Admin Login Modal Styles */
        #login .modal-content {
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        }

        #login .modal-header {
            background: #ff6f61;
            color: #fff;
            border-radius: 10px 10px 0 0;
        }

        #login .modal-title {
            font-size: 24px;
            font-weight: bold;
        }

        #login .modal-body {
            padding: 20px;
        }

        #login .btn-primary {
            background: #ff6f61;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            font-size: 16px;
            transition: background 0.3s ease;
        }

        #login .btn-primary:hover {
            background: #ff3b2f;
        }

        /* General Styles */
        body,
        html {
            margin: 0;
            padding: 0;
            overflow: hidden;
        /* Allow scrolling */
        height: auto;
        /* Ensure body and html take full height */

        }

        body {
            font-family: 'Roboto', sans-serif;
            background-image: url("image/bkg2.jpeg");
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: fixed;
            color: #333;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            /* Space out header, content, and footer */
            height: 100vh;
            /* Full viewport height */
        }

        /* Form Container */
        /* Form Container */
        .form-container {
            background: rgba(255, 255, 255, 0.9);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 90%;
            margin: 80px auto 20px;
            /* Adjusted margin */
            position: relative;
            z-index: 1000;
        }

        .form-container h2 {
            text-align: center;
            color: #ff6f61;
            font-size: 24px;
            margin-bottom: 10px;
            font-weight: bold;
        }

        /* Form Styles */
        .form-horizontal .form-group {
            margin-bottom: 5px;
        }

        .form-horizontal .form-control {
            border-radius: 5px;
            border: 1px solid #ddd;
            padding: 8px;
            font-size: 14px;
            transition: border-color 0.3s ease;
            width: 100%;
        }

        .form-horizontal .form-control:focus {
            border-color: #ff6f61;
            box-shadow: none;
        }

        .form-horizontal .btn-primary {
            background: #ff6f61;
            border: none;
            padding: 8px 16px;
            border-radius: 5px;
            font-size: 14px;
            transition: background 0.3s ease;
            width: 100%;
        }

        .form-horizontal .btn-primary:hover {
            background: #ff3b2f;
        }

        .footer {
            background: rgba(0, 0, 0, 0.8);
            color: #fff;
            padding: 20px 0;
            text-align: center;
            position: fixed;
            /* Make the footer stick to the bottom */
            bottom: 0;
            width: 110%;
            height: 0px;
            z-index: 1000;
            /* Ensure it stays above other content */
        }
        /* Adjustments for Registration Form */
.form-container {
    max-height: 80vh; /* Set a maximum height for the form container */
    overflow-y: auto; /* Allow vertical scrolling if content exceeds the height */
}

body {
    overflow: auto; /* Allow scrolling on the body */
}

    </style>
</head>

<body>
    <div class="header">
        <div class="row">
            <div class="col-lg-6">
                <img src="image/icon.png" alt="Logo" style="height: 50px; margin-right: 0px; margin-left: 30px;">
                <!-- Adjusted height -->
                <span class="logo">Online Examination System</span>
            </div>
            <div class="col-md-2 col-md-offset-4">
                <a class="pull-right btn sub1" data-toggle="modal" data-target="#myModal">
                    <span class="glyphicon glyphicon-log-in" aria-hidden="true"></span>&nbsp;<span
                        class="title1"><b>SIGN-IN</b></span>
                </a>
            </div>
        </div>
    </div>

   <!-- Sign In Modal -->
<div class="modal fade" id="myModal">
    <div class="modal-dialog">
        <div class="modal-content title1">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title title1"><span style="color:orange">LOG-IN</span></h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" action="login.php?q=index.php" method="POST" onsubmit="return validateLoginForm()">
                    <fieldset>
                        <!-- Email Input -->
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="login-email"></label>
                            <div class="col-md-6">
                                <input id="login-email" name="email" placeholder="Enter your email" class="form-control input-md" type="email">
                                <div id="login-email-error" class="error-message text-danger"></div>
                            </div>
                        </div>

                        <!-- Password Input -->
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="login-password"></label>
                            <div class="col-md-6">
                                <input id="login-password" name="password" placeholder="Enter your password" class="form-control input-md" type="password">
                                <div id="login-password-error" class="error-message text-danger"></div>
                            </div>
                        </div>
                    </fieldset>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Log in</button>
                        <a href="#" data-toggle="modal" data-target="#forgotPasswordModal" class="btn btn-link">Forgot Password?</a>
                    </div>
                </form>

                <!-- Forgot Password Modal -->
                <div class="modal fade" id="forgotPasswordModal">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <h4 class="modal-title">Reset Password</h4>
                            </div>
                            <div class="modal-body">
                                <form class="form-horizontal" action="reset_password.php" method="POST">
                                    <fieldset>
                                        <!-- Email Input -->
                                        <div class="form-group">
                                            <label class="col-md-3 control-label" for="reset-email"></label>
                                            <div class="col-md-6">
                                                <input id="reset-email" name="email" placeholder="Enter your email" class="form-control input-md" type="email" required>
                                                <div id="reset-email-error" class="error-message text-danger"></div>
                                            </div>
                                        </div>
                                    </fieldset>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-primary">Send Reset Link</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


    <!-- Registration Form -->
    <div class="form-container">
        <h2>Registration</h2>
        <form class="form-horizontal" name="form" action="sign.php?q=account.php" method="POST"
            onsubmit="return validateForm()" novalidate>
            <input type="hidden" name="csrf_token" value="<?php echo $_SESSION['csrf_token']; ?>">
            <fieldset>
                <!-- Name Input -->
                <div class="form-group">
                    <label class="col-md-12 control-label" for="name"></label>
                    <div class="col-md-12">
                        <input id="name" name="name" placeholder="Enter your name" class="form-control input-md"
                            style="padding: 8px; font-size: 14px;" type="text">
                        <div id="name-error" class="error-message"></div>
                    </div>
                </div>
                <!-- Gender Input -->
                <div class="form-group">
                    <label class="col-md-12 control-label" for="gender"></label>
                    <div class="col-md-12">
                        <select id="gender" style="font-size: small" name="gender" class="form-control input-md">
                            <option value="">Select Gender</option>
                            <option value="M">Male</option>
                            <option value="F">Female</option>
                        </select>
                        <div id="gender-error" class="error-message"></div>
                    </div>
                </div>
                <!-- College Input -->
                <div class="form-group">
                    <label class="col-md-12 control-label" for="college"></label>
                    <div class="col-md-12">
                        <input id="college" name="college" placeholder="Enter your college name"
                            class="form-control input-md" type="text">
                        <div id="college-error" class="error-message"></div>
                    </div>
                </div>
                <!-- Email Input -->
                <div class="form-group">
                    <label class="col-md-12 control-label" for="email"></label>
                    <div class="col-md-12">
                        <input id="email" name="email" placeholder="Enter your Email address"
                            class="form-control input-md" type="email">
                        <div id="email-error" class="error-message"></div>
                    </div>
                </div>
                <!-- Mobile Input -->
                <div class="form-group">
                    <label class="col-md-12 control-label" for="mob"></label>
                    <div class="col-md-12">
                        <input id="mob" name="mob" placeholder="Enter your mobile number" class="form-control input-md"
                            type="number" required>
                        <div id="mob-error" class="error-message"></div>
                    </div>
                </div>
                <!-- Password Input -->
                <div class="form-group">
                    <label class="col-md-12 control-label" for="password"></label>
                    <div class="col-md-12">
                        <input id="password" name="password" placeholder="Enter your password"
                            autocomplete="new-password" class="form-control input-md" type="password">
                        <div id="password-error" class="error-message"></div>
                    </div>
                </div>
                <!-- Confirm Password Input -->
                <div class="form-group">
                    <label class="col-md-12 control-label" for="cpassword"></label>
                    <div class="col-md-12">
                        <input id="cpassword" name="cpassword" placeholder="Confirm Password"
                            autocomplete="new-password" class="form-control input-md" type="password">
                        <div id="cpassword-error" class="error-message"></div>
                    </div>
                </div>
                
                <!-- Submit Button -->
                <div class="form-group">
                    <label class="col-md-12 control-label" for=""></label>
                    <div class="col-md-12">
                        <input type="submit" class="btn btn-primary" value="Sign Up"
                            style="padding: 8px; font-size: 14px;">
                    </div>
                </div>
            </fieldset>
        </form>
    </div>

    <!--Footer start-->
    <div class="row footer">
        <div class="col-md-4 box">
            <a href="aboutus.php">About us</a>
        </div>
        <div class="col-md-4 box">
            <a href="#" data-toggle="modal" data-target="#login">Admin Login</a>
        </div>
        <div class="col-md-4 box">
            <a href="feedback.php">Feedback</a>
        </div>
    </div>

    <!-- Modal for admin login -->
<div class="modal fade" id="login">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
                </button>
                <h4 class="modal-title"><span style="font-family:'typo' ">ADMIN LOGIN</span></h4>
            </div>
            <div class="modal-body title1">
                <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-6">
                        <form role="form" method="post" action="admin.php?q=index.php" onsubmit="return validateAdminLogin()">
                            <div class="form-group">
                                <input type="text" id="admin_uname" name="uname" maxlength="20" placeholder="Admin user id"
                                    class="form-control" type="email">
                                <small id="uname_error" class="text-danger"></small>
                            </div>
                            <div class="form-group">
                                <input type="password" id="admin_password" name="password" maxlength="15" placeholder="Password"
                                    class="form-control" />
                                <small id="password_error" class="text-danger"></small>
                            </div>
                            <div class="form-group" align="center">
                                <input type="submit" name="login" value="Login" class="btn btn-primary" />
                            </div>
                        </form>
                    </div>
                    <div class="col-md-3"></div>
                </div>
            </div>
        </div>
    </div>
</div>
    <!-- Validation Script -->
    <script>
        function validateForm() {

        let isValid = true;

        // Name validation
        let name = document.getElementById("name").value.trim();
        let nameError = document.getElementById("name-error");
        let nameRegex = /^[a-zA-Z\s]+$/;
        if (name === "" || !nameRegex.test(name)) {
            nameError.innerText = "Please enter a name.";
            isValid = false;
        } else {
            nameError.innerText = "";
        }

        // Gender validation
        let gender = document.getElementById("gender").value;
        let genderError = document.getElementById("gender-error");
        if (gender === "") {
            genderError.innerText = "Please select a gender.";
            isValid = false;
        } else {
            genderError.innerText = "";
        }

        // College validation
        let college = document.getElementById("college").value.trim();
        let collegeError = document.getElementById("college-error");
        if (college === "") {
            collegeError.innerText = "Please enter your college name.";
            isValid = false;
        } else {
            collegeError.innerText = "";
        }

        // Email validation
        let email = document.getElementById("email").value.trim();
        let emailError = document.getElementById("email-error");
        let emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailRegex.test(email)) {
            emailError.innerText = "Please enter a email address.";
            isValid = false;
        } else {
            emailError.innerText = "";
        }

        // Mobile number validation
        let mob = document.getElementById("mob").value.trim();
        let mobError = document.getElementById("mob-error");
        let mobRegex = /^[0-9]{10}$/;
        if (!mobRegex.test(mob)) {
            mobError.innerText = "Please enter a valid 10-digit mobile number.";
            isValid = false;
        } else {
            mobError.innerText = "";
        }

        // Password validation
        let password = document.getElementById("password").value;
        let passwordError = document.getElementById("password-error");
        if (password.length < 6) {
            passwordError.innerText = "Password must be at least 6 characters long.";
            isValid = false;
        } else {
            passwordError.innerText = "";
        }

        // Confirm password validation
        let cpassword = document.getElementById("cpassword").value;
        let cpasswordError = document.getElementById("cpassword-error");
        if (cpassword !== password) {
            cpasswordError.innerText = "Passwords do not match.";
            isValid = false;
        } else {
            cpasswordError.innerText = "";
        }

        return isValid;
    }
    
    // sign-in validation
        function validateLoginForm() {
        let email = document.getElementById("login-email").value.trim();
        let password = document.getElementById("login-password").value.trim();
        let emailError = document.getElementById("login-email-error");
        let passwordError = document.getElementById("login-password-error");
        let valid = true;

        // Reset error messages
        emailError.innerText = "";
        passwordError.innerText = "";

        // Email validation
        let emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
        if (email === "") {
            emailError.innerText = "Email is required.";
            valid = false;
        } else if (!emailPattern.test(email)) {
            emailError.innerText = "Invalid email format.";
            valid = false;
        }

        // Password validation
        if (password === "") {
            passwordError.innerText = "Password is required.";
            valid = false;
        } else if (password.length < 6) {
            passwordError.innerText = "Password must be at least 6 characters.";
            valid = false;
        }

        return valid;
    }

    // admin login validation
    function validateAdminLogin() {
        let valid = true;

        // Get input values
        let uname = document.getElementById("admin_uname").value.trim();
        let password = document.getElementById("admin_password").value.trim();

        // Error message elements
        let unameError = document.getElementById("uname_error");
        let passwordError = document.getElementById("password_error");

        // Reset previous errors
        unameError.innerHTML = "";
        passwordError.innerHTML = "";

        // Username validation
        let emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
        if (uname === "") {
            unameError.innerHTML = "User ID is required.";
            valid = false;
        } else if (!emailPattern.test(uname)) {
            unameError.innerHTML = "Invalid email format.";
            valid = false;
        }

        // Password validation
        if (password === "") {
            passwordError.innerHTML = "Password is required.";
            valid = false;
        } else if (password.length < 6) {
            passwordError.innerHTML = "Password must be at least 6 characters.";
            valid = false;
        }

        return valid;
    }
    </script>


</body>

</html>
