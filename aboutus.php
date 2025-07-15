<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us || Online Examination System</title>

    <!-- Bootstrap & CSS Files -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/font.css">

    <!-- AOS Library for Scroll Animations -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Font Awesome for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="icon" href="image/icon.png" type="image/x-icon">

    <script src="js/jquery.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <style>
        /* General Styles */
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f9f9f9;
            color: #333;
            margin: 0;
            padding: 0;
            line-height: 1.6;
            overflow-x: hidden;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-weight: 700;
            color: #ff6f61;
        }

        p {
            font-size: 18px;
            color: #555;
        }

        /* Hero Section */
        .hero-section {
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('image/bkg2.jpeg') no-repeat center center/cover;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: #fff;
        }

        .hero-section h1 {
            color: white;
            font-size: 56px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 2px;
            animation: fadeIn 2s ease-in-out;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        /* About Section */
        .about-section {
            padding: 100px 20px;
            background: #fff;
        }

        .about-section h2 {
            font-size: 36px;
            margin-bottom: 20px;
            color: #ff6f61;
        }

        .about-section p {
            max-width: 800px;
            margin: 0 auto 20px;
            text-align: justify;
        }

        /* Online Exam Section */
        .exam-section {
            padding: 100px 20px;
            background: #f9f9f9;
        }

        .exam-section h2 {
            font-size: 36px;
            margin-bottom: 20px;
            color: #ff6f61;
        }

        .exam-section img {
            width: 100%;
            max-width: 600px;
            height: auto;
            border-radius: 10px;
            margin: 20px 0;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        /* Footer */
        .footer {
            background: rgba(0, 0, 0, 0.8);
            color: #fff;
            padding: 20px 0;
            text-align: center;
            margin-top: 20px;
        }

        .footer a {
            color: #fff;
            text-decoration: none;
            margin: 0 10px;
            transition: color 0.3s ease;
        }

        .footer a:hover {
            color: #ff6f61;
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

        .footer-btn {
            display: block;
            text-align: center;
            width: 100%;
            color: white;
            padding: 10px;
            border-radius: 5px;
            text-decoration: none;
            transition: background 0.3s ease;
        }

        /* Alternating Paragraph and Image Layout */
        .about-section .container,
        .exam-section .container {
            display: flex;
            flex-direction: column;
            gap: 40px;
        }

        .about-section .container h2,
        .exam-section .container h2 {
            text-align: center;
            margin-bottom: 40px;
        }

        .about-section .container .content-block,
        .exam-section .container .content-block {
            display: flex;
            align-items: center;
            gap: 20px;
        }

        .about-section .container .content-block.reverse,
        .exam-section .container .content-block.reverse {
            flex-direction: reverse;
        }

        .about-section .container .content-block p,
        .exam-section .container .content-block p {
            flex: 1;
            text-align: justify;
            margin: 0;
        }

        .about-section .container .content-block img,
        .exam-section .container .content-block img {
            flex: 1;
            max-width: 50%;
            height: auto;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        /* Hover Effect for Images */
        .about-section .container .content-block img:hover,
        .exam-section .container .content-block img:hover {
            transform: scale(1.05);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
        }
    </style>
</head>

<body>
    <!-- Hero Section -->
    <section class="hero-section" data-aos="fade-up">
        <h1>Welcome to OES</h1>
    </section>

    <!-- About Infotech Section -->
    <section class="about-section" data-aos="fade-up">
        <div class="container">
            <h2>About OES (Online Examination System)</h2>

            <!-- First Block: Image on Right, Text on Left -->
            <div class="content-block reverse">
                <p>
                    Our Online Examination System is designed to simplify the process of conducting exams. It provides a
                    user-friendly interface for both administrators and students. With features like automated grading,
                    real-time results, and secure exam environments, our system ensures a seamless experience for
                    educational
                    institutions and organizations.
                </p>
                <img src="image/wallp1.jpg" alt="Online Examination System">
            </div>

            <!-- Second Block: Image on Left, Text on Right -->
            <div class="content-block">
                <img src="image/wall2.jpg" alt="Online Examination System">
                <p>
                    Today Online Examination System in PHP has become a fast-growing examination method because of its
                    speed
                    and accuracy. It is also needed less manpower to execute the examination. Almost all organizations
                    now-a-days are conducting their objective exams by online examination system.Organizations can also easily check the performance of the student that they give in
                    an
                    examination. As a result of this, organizations are releasing results in less time. 
                </p>
            </div>
        </div>
    </section>

    <!-- Online Examination System Section -->
    <section class="exam-section" data-aos="fade-up">
        <div class="container">
            <h2>What is an Online Examination System?</h2>

            <!-- First Block: Image on Left, Text on Right -->
            <div class="content-block">

                <p>
                    In an online examination system, examinees get their user ID and password with their admit card.
                    This ID
                    is already saved in the examination server. When an examinee logs in to the server, they get their
                    profile
                    already registered. At a certain time, the examinee gets the message to start the examination. All
                    answers
                    given by the examinee are saved into the server with their profile information. The online
                    examination
                    system also allows correcting the answer if the examinee needs to change any answer during the
                    examination
                    time duration. However, after the time duration, any change will not be allowed. This also makes
                    checking
                    the answers easy and error-proof, as computers are more accurate than humans and provide fast
                    results too.
                    PHP is a web-based language, so we can create an online examination system in PHP.
                </p>
            </div>
    </section>

    <section class="exam-section" data-aos="fade-up">
        <h2 style="text-align: center;"> Purpose: </h2>
        <div class="container">
            <div class="content-block reverse">

                <p>
                    The purpose of an online examination system is to digitally administer and manage exams, allowing
                    for
                    automated grading, faster results, reduced manual work, and convenient remote access to assessments.
                    Essentially, it streamlines the entire examination process while minimizing human error and saving
                    time
                    for both students and administrators.
                </p>
            </div>
        </div>
        </div>
    </section>

    <!-- Footer -->
    <div class="row footer">
        <div class="col-md-3 box">
            <a href="index.php" target="_blank">Home</a>
        </div>

        <div class="col-md-3 box">
            <a href="#" data-toggle="modal" data-target="#login">Admin Login</a>
        </div>
        <div class="col-md-3 box">
            <a href="#" class="btn sub1 footer-btn" data-toggle="modal" data-target="#myModal">
                <span class="glyphicon glyphicon-log-in"></span> SIGN-IN
            </a>
        </div>

        <div class="col-md-3 box">
            <a href="feedback.php" target="_blank">Feedback</a>
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
                <h4 class="modal-title"><span style="font-family:'typo'; color: white; ">ADMIN LOGIN</span></h4>
            </div>
            <div class="modal-body title1">
                <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-6">
                        <form role="form" method="post" action="admin.php?q=index.php" onsubmit="return validateAdminLogin()">
                            <div class="form-group">
                                <input type="text" id="admin_uname" name="uname" maxlength="20" placeholder="Admin user id"
                                    class="form-control" />
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
    <!-- AOS Script -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 1000,
            once: true
        });
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