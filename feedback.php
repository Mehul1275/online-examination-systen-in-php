<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <title>FEEDBACK || Online Examination System</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/bootstrap-theme.min.css" />
    <link rel="stylesheet" href="css/main.css" />
    <link rel="stylesheet" href="css/font.css" />
    <link rel="icon" href="image/icon.png" type="image/x-icon">
    <script src="js/jquery.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    
    <!--alert message-->
    <?php if (@$_GET['w']) {
        echo '<script>alert("' . @$_GET['w'] . '");</script>';
    } ?>
    <!--alert message end-->
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
            line-height: 1.6;
        }

        /* Header Styles */
        .header {
            background: rgba(0, 0, 0, 0.8);
            padding: 20px 0;
            color: #fff;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .logo {
            font-size: 28px;
            font-weight: bold;
            color: #fff;
            margin-left: 20px;
        }

        .btn.sub1 {
            background: #ff6f61;
            color: #fff;
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
            transition: background 0.3s ease;
        }

        .btn.sub1:hover {
            background: #ff3b2f;
        }

        .logo {
            font-size: 24px;
            font-weight: bold;
            color: #fff;
            margin-left: 20px;
        }

        .pull-right {
            margin-right: 20px;
        }

        .btn.title3 {
            background-color: #ff6f61;
            color: #fff;
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
            transition: background 0.3s ease, transform 0.2s ease;
        }

        .btn.title3:hover {
            background-color: #ff3b2f;
            transform: scale(1.05);
        }

        /* Feedback Form Styles */
        .feedback-form {
            background: linear-gradient(135deg, #ffffff, #f9f9f9);
            border-radius: 15px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
            padding: 40px;
            max-width: 600px;
            margin: 0 auto;
            border: 1px solid rgba(255, 255, 255, 0.3);
            backdrop-filter: blur(10px);
        }

        .feedback-form h2 {
            font-size: 32px;
            font-weight: 700;
            color: #333;
            margin-bottom: 30px;
            text-align: center;
            position: relative;
        }

        .feedback-form h2::after {
            content: '';
            display: block;
            width: 60px;
            height: 4px;
            background: #ff6f61;
            margin: 10px auto 0;
            border-radius: 2px;
        }

        .feedback-form .form-group {
            margin-bottom: 25px;
        }

        .feedback-form .form-control {
            border-radius: 10px;
            border: 1px solid #ddd;
            padding: 14px 20px;
            font-size: 16px;
            transition: all 0.3s ease;
            width: 100%;
            box-sizing: border-box;
            background: rgba(255, 255, 255, 0.8);
        }

        .feedback-form .form-control:focus {
            border-color: #ff6f61;
            box-shadow: 0 0 12px rgba(255, 111, 97, 0.4);
            outline: none;
            background: rgba(255, 255, 255, 1);
        }

        .feedback-form textarea.form-control {
            resize: vertical;
            min-height: 150px;
        }

        .feedback-form .btn-primary {
            background: linear-gradient(135deg, #ff6f61, #ff3b2f);
            border: none;
            padding: 14px 20px;
            border-radius: 10px;
            font-size: 16px;
            color: #fff;
            cursor: pointer;
            transition: all 0.3s ease;
            width: 100%;
            box-shadow: 0 4px 10px rgba(255, 111, 97, 0.3);
        }

        .feedback-form .btn-primary:hover {
            background: linear-gradient(135deg, #ff3b2f, #ff6f61);
            transform: translateY(-2px);
            box-shadow: 0 6px 15px rgba(255, 111, 97, 0.4);
        }

        .feedback-form .btn-primary:active {
            transform: translateY(0);
            box-shadow: 0 4px 10px rgba(255, 111, 97, 0.3);
        }

        /* Label Styles */
        .feedback-form label {
            font-size: 16px;
            font-weight: 600;
            color: #555;
            margin-bottom: 10px;
            display: block;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .feedback-form {
                padding: 30px;
            }

            .feedback-form h2 {
                font-size: 28px;
            }

            .feedback-form .form-control {
                padding: 12px 15px;
                font-size: 14px;
            }

            .feedback-form .btn-primary {
                padding: 12px 15px;
                font-size: 14px;
            }
        }

        @media (max-width: 480px) {
            .feedback-form {
                padding: 20px;
            }

            .feedback-form h2 {
                font-size: 24px;
            }

            .feedback-form .form-control {
                padding: 10px 12px;
                font-size: 14px;
            }

            .feedback-form .btn-primary {
                padding: 10px 12px;
                font-size: 14px;
            }
        }

        /* Footer Styles */
        .footer a {
            color: #fff;
            text-decoration: none;
            margin: 0 10px;
            transition: color 0.3s ease;
        }

        .footer a:hover {
            color: #ff6f61;
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

        /* Responsive Design */
        @media (max-width: 768px) {
            .form-container {
                padding: 20px;
                margin: 20px auto;
            }

            .form-container h2 {
                font-size: 24px;
            }
        }

        @media (max-width: 480px) {
            .form-container {
                padding: 15px;
                margin: 10px auto;
            }

            .form-container h2 {
                font-size: 20px;
            }
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

        /* Adjusting Feedback Form Size */
        .feedback-form {
            padding: 20px;
            max-width: 450px;
            /* Reduced width */
        }

        .feedback-form h2 {
            font-size: 24px;
            /* Smaller font */
            margin-bottom: 0px;
        }

        .feedback-form .form-group {
            margin-bottom: 1px;
        }

        .feedback-form .form-control {
            padding: 10px;
            font-size: 14px;
            /* Smaller input fields */
        }

        .feedback-form textarea.form-control {
            min-height: 80px;
            /* Reduce height of textarea */
        }

        .feedback-form .btn-primary {
            padding: 10px;
            font-size: 14px;
            margin-top: 5px;
            /* Smaller button */
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
            padding-top: 70px;
            /* Adjust for the fixed header */
            padding-bottom: 80px;
            /* Adjust for the fixed footer */
        }

        body,
        html {
            overflow-x: hidden;
            overflow-y: hidden;
            /* Prevent horizontal scrollbar */
            width: 100%;
            /* Ensure the body takes full width */
            max-width: 100%;
            /* Prevent overflow */
        }

        .header,
        .form-container,
        .feedback-form {
            width: 100%;
            /* Ensure these elements don't exceed the viewport width */
            max-width: 100%;
            /* Prevent overflow */
            box-sizing: border-box;
            /* Include padding and border in the element's total width */
        }
    </style>
</head>

<body>
    <div class="header">
        <div class="row">
            <div class="col-lg-6">
                <img src="image/icon.png" alt="Logo" style="height: 50px; margin-right: 1px; margin-left:30px;">
                <span class="logo">Online Examination System</span>
            </div>
            <div class="col-md-4 col-md-offset-2 text-right">
                <a href="index.php" class="btn sub1 title3">
                    <span class="glyphicon glyphicon-home" aria-hidden="true"></span>&nbsp;Home
                </a>
                <a class="btn sub1" data-toggle="modal" data-target="#myModal">
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
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
    <!-- Feedback Form -->

    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <div class="feedback-form">
                <h2>FEEDBACK/REPORT A PROBLEM</h2>
                <div style="font-size:14px">
                    <?php if (@$_GET['q'])
                        echo '<span style="font-size:18px;"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span>&nbsp;' . @$_GET['q'] . '</span>';
                    else {
                        ?>
                        <form role="form" method="post" action="feed.php?q=feedback.php" onsubmit="return validateForm();">
                            <div class="form-group">
                                <label for="name">Name:</label>
                                <input id="name" name="name" placeholder="Enter your name" class="form-control" type="text" >
                                <span id="nameError" style="color:red;"></span>
                            </div>
                            <div class="form-group">
                                <label for="subject">Subject:</label>
                                <input id="subject" name="subject" placeholder="Enter subject" class="form-control"
                                    type="text" >
                                <span id="subjectError" style="color:red;"></span>
                            </div>
                            <div class="form-group">
                                <label for="email">E-Mail Address:</label>
                                <input id="email" name="email" placeholder="Enter your email-id" class="form-control"
                                    type="email" >
                                <span id="emailError" style="color:red;"></span>
                            </div>
                            <div class="form-group">
                                <label for="feedback">Feedback:</label>
                                <textarea id="feedback" name="feedback" class="form-control"
                                    placeholder="Write feedback here..." rows="0"></textarea>
                                <span id="feedbackError" style="color:red;"></span>
                            </div>
                            <div class="form-group" align="center">
                                <input type="submit" name="submit" value="Submit" class="btn btn-primary" />
                            </div>
                        </form>
                    <?php } ?>
                </div>
            </div>
        </div>
        <div class="col-md-3"></div>
    </div>
    </div>

    <!-- <div class="row footer">
        <div class="col-md-3 box">
            <a href="aboutus.php" target="_blank">About us</a>
        </div>
        <div class="col-md-3 box">
            <a href="#" data-toggle="modal" data-target="#login">Admin Login</a>
        </div>
        <div class="col-md-3 box">
            <a href="#" data-toggle="modal" data-target="#developers">Developers</a>
        </div>
        <div class="col-md-3 box">
            <a href="feedback.php" target="_blank">Feedback</a>
        </div>
    </div> -->

    <!-- Modal For Developers
    <div class="modal fade title1" id="developers">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span
                            aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title" style="font-family:'typo' "><span style="color:orange">Developers</span>
                    </h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                         <div class="col-md-4">
                        <a style="color:#202020; font-family:'typo' ; font-size:18px">~ Mehul Chavda <img src="image/mehul.jpg" width=200 height=200></a>
                    </div>
                    <div class="col-md-4">
                        <a style="color:#202020; font-family:'typo' ; font-size:18px">~ Nand Patel <img src="image/nand.jpeg" width=200 height=200></a>
                    </div> 
                        <div class="col-md-4">
                            <a style="color:#202020; font-family:'typo' ; font-size:18px">~ Keyur Modiya <img
                                    src="image/keyur.jpg" width=200 height=200></a>
                        </div>
                        <div class="col-md-4">
                            <a style="color:#202020; font-family:'typo' ; font-size:18px">~ Jaimin Darji <img
                                    src="image/jaimin.jpg" width=200 height=200></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->

    <!--Modal for admin login-->
    <div class="modal fade" id="login">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span
                            aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title"><span style="color:white;font-family:'typo' ">ADMIN LOGIN</span></h4>
                </div>
                <div class="modal-body title1">
                    <div class="row">
                        <div class="col-md-3"></div>
                        <div class="col-md-6">
                            <form role="form" method="post" action="admin.php?q=index.php">
                                <div class="form-group">
                                    <input type="text" name="uname" maxlength="20" placeholder="Admin user id"
                                        class="form-control" />
                                </div>
                                <div class="form-group">
                                    <input type="password" name="password" maxlength="15" placeholder="Password"
                                        class="form-control" />
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
    <script>
    function validateForm() {
        let name = document.getElementById("name").value.trim();
        let subject = document.getElementById("subject").value.trim();
        let email = document.getElementById("email").value.trim();
        let feedback = document.getElementById("feedback").value.trim();

        let nameError = document.getElementById("nameError");
        let subjectError = document.getElementById("subjectError");
        let emailError = document.getElementById("emailError");
        let feedbackError = document.getElementById("feedbackError");

        let isValid = true;

        // Name Validation
        if (name === "") {
            nameError.innerHTML = "Name is required";
            isValid = false;
        } else if (!/^[A-Za-z\s]+$/.test(name)) {
            nameError.innerHTML = "Only letters and spaces are allowed";
            isValid = false;
        } else if (name.length < 3) {
            nameError.innerHTML = "Name must be at least 3 characters";
            isValid = false;
        } else {
            nameError.innerHTML = "";
        }

        // Subject Validation
        if (subject === "") {
            subjectError.innerHTML = "Subject is required";
            isValid = false;
        } else if (subject.length < 3) {
            subjectError.innerHTML = "Subject must be at least 3 characters";
            isValid = false;
        } else {
            subjectError.innerHTML = "";
        }

        // Email Validation
        if (email === "") {
            emailError.innerHTML = "Email is required";
            isValid = false;
        } else if (!/^\S+@\S+\.\S+$/.test(email)) {
            emailError.innerHTML = "Invalid email format";
            isValid = false;
        } else {
            emailError.innerHTML = "";
        }

        // Feedback Validation
        if (feedback === "") {
            feedbackError.innerHTML = "Feedback is required";
            isValid = false;
        } else if (feedback.length < 6) {
            feedbackError.innerHTML = "Feedback must be at least 10 characters";
            isValid = false;
        } else {
            feedbackError.innerHTML = "";
        }

        return isValid; // Form submits only if true
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
</script>


</body>

</html>
