<?php
include_once 'dbConnection.php';
session_start();

// Ensure session is started before output
if (!isset($_SESSION['email'])) {
    header("location:index.php");
    exit();
} else {
    $name = $_SESSION['name'];
    $email = $_SESSION['email'];
}
?>
<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title> TEST YOUR SKILL || Online Examination System </title>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/bootstrap-theme.min.css" />
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/font.css">
    <link rel="icon" href="image/icon.png" type="image/x-icon">
    <script src="js/jquery.js" type="text/javascript"></script>

    
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    
    <!--alert message-->
    <?php if (@$_GET['w']) {
        echo '<script>alert("' . @$_GET['w'] . '");</script>';
    }
    ?>
    <!--alert message end-->
    <style>
        /* General Styles */
        body {
            font-family: 'Roboto', sans-serif;

            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: fixed;
            color: #333;
            margin: 0;
            padding: 0;
        }

        /* Header Styles */
        .header {
          background: linear-gradient(135deg, #43cea2, #185a9d);
            padding: 20px 0;
            color: #fff;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
        }

        .logo {
            font-size: 28px;
            font-weight: bold;
            color: #fff;
            margin-left: 20px;
        }

        /* Buttons */
        .btn.sub1 {
            background: #ff6f61;
            color: #fff;
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
            transition: background 0.3s ease, transform 0.2s ease;
        }

        .btn.sub1:hover {
            background: #ff3b2f;
            transform: scale(1.05);
        }

        /* Dashboard Navigation */
        .navbar {
            background: rgba(255, 255, 255, 0.95);
            border: none;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .navbar-brand {
            font-size: 20px;
            font-weight: bold;
        }

        .navbar-nav li a {
            font-size: 16px;
            color: #333;
            padding: 12px 20px;
            transition: background 0.3s ease, color 0.3s ease;
        }

        .navbar-nav li a:hover,
        .navbar-nav li.active a {
            background: #ff6f61;
            color: #fff;
            border-radius: 5px;
        }

        /* Panels for Home, History, Ranking, and Quiz */
        .panel {
            background: rgba(255, 255, 255, 0.95);
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
            margin: 20px 0;
            transition: all 0.3s ease-in-out;
        }

       /* .panel:hover {
            box-shadow: 0px 6px 15px rgba(0, 0, 0, 0.3);
            transform: translateY(-3px);
        } */

        /* Specific Styles for Home, History, Ranking & Quiz */
        .quiz-box,
        .history-box,
        .ranking-box {
            background: rgba(255, 255, 255, 0.95);
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.3);
            transition: all 0.3s ease-in-out;
            margin-bottom: 20px;
        }

        .quiz-box:hover,
        .history-box:hover,
        .ranking-box:hover {
            box-shadow: 0px 6px 15px rgba(0, 0, 0, 0.4);
            transform: translateY(-3px);
        }

        /* Tables inside Quiz, History, and Ranking */
        .table {
            border-radius: 10px;
            overflow: hidden;
            background: #fff;
        }

        .table thead {
            background: #ff6f61;
            color: #fff;
        }

        .table tbody tr {
            transition: background 0.3s ease;
        }

        .table tbody tr:hover {
            background: rgba(255, 111, 97, 0.1);
        }

        /* Form Styles */
        .form-container {
            background: rgba(255, 255, 255, 0.95);
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            max-width: 500px;
            margin: 50px auto;
        }

        .form-container h2 {
            text-align: center;
            color: #ff6f61;
            font-size: 28px;
            margin-bottom: 20px;
            font-weight: bold;
        }

        .form-horizontal .form-group {
            margin-bottom: 20px;
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
            box-shadow: 0px 4px 8px rgba(255, 111, 97, 0.3);
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



        /* Footer Styles */
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

        /* Developers Modal */
        #developers .modal-content {
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        }

        #developers .modal-header {
            background: #ff6f61;
            color: #fff;
            border-radius: 10px 10px 0 0;
        }

        #developers .modal-title {
            font-size: 24px;
            font-weight: bold;
        }

        #developers .modal-body {
            padding: 20px;
        }

        #developers img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: cover;
            margin-bottom: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s ease;
        }

        #developers img:hover {
            transform: scale(1.1);
        }

        #developers a {
            color: #333;
            text-decoration: none;
            font-size: 18px;
            margin-bottom: 20px;
            display: block;
        }

        /* Admin Login Modal */
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

        /* Responsive Adjustments */
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

        /* Sticky Footer */
        html,
        body {
            height: 100%;
            margin: 0;
            padding: 0;
        }

        .wrapper {
            min-height: 100%;
            display: flex;
            flex-direction: column;
        }

        .content {
            flex: 1;
        }

        .footer {
            background: rgba(0, 0, 0, 0.8);
            color: #fff;
            padding: 20px 0;
            text-align: center;
            position: relative;
            width: 100%;
            bottom: 0;
        }

        /* General Styles */
        html,
        body {
            height: 100%;
            margin: 0;
            padding: 0;
        }

        .wrapper {
            min-height: 100%;
            display: flex;
            flex-direction: column;
        }

        .content {
            flex: 1;
        }

        body {
            font-family: 'Roboto', sans-serif;
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: fixed;
            color: #333;
        }

        /* Header Styles */
        .header {
            background: rgba(0, 0, 0, 0.9);
            padding: 20px 0;
            color: #fff;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
        }

        .logo {
            font-size: 28px;
            font-weight: bold;
            color: #fff;
            margin-left: 20px;
        }

        /* Buttons */
        .btn.sub1 {
            background: #ff6f61;
            color: #fff;
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
            transition: background 0.3s ease, transform 0.2s ease;
        }

        .btn.sub1:hover {
            background: #ff3b2f;
            transform: scale(1.05);
        }

        /* Footer Styles */
        .footer {
            background: rgba(0, 0, 0, 0.8);
            color: #fff;
            padding: 20px 0;
            text-align: center;
            width: 100%;
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

        /* Remove extra margin and padding */
        .container {
            padding: 0;
            margin: 0 auto;
        }

        .row {
            margin: 0;
        }

        .panel {
            margin: 0;
            padding: 20px;
            background: rgba(255, 255, 255, 0.95);
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
        }

        /* Navbar Styles */
        .navbar {
            background: #333;
            border: none;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 10px 0;
        }

        .navbar-brand {
            font-size: 22px;
            font-weight: bold;
            color: black !important;
            transition: color 0.3s ease;
        }

        .navbar-brand:hover {
            color: #ff6f61 !important;
        }

        .navbar-nav {
            display: flex;
            align-items: center;
        }

        .navbar-nav li {
            margin-right: 15px;
        }

        .navbar-nav li a {
            font-size: 16px;
            color: white !important;
            padding: 12px 20px;
            transition: background 0.3s ease, color 0.3s ease;
            border-radius: 5px;
        }

        .navbar-nav li a:hover,
        .navbar-nav li.active a {
            background: #ff6f61;
            color: #ff6f61  !important;
        }

        /* Navbar Toggle (for mobile) */
        .navbar-toggle {
            border: none;
            background: transparent !important;
        }

        .navbar-toggle .icon-bar {
            background-color: #ff6f61 !important;
        }

        /* Responsive Adjustments */
        @media (max-width: 768px) {
            .navbar-nav {
                text-align: center;
            }

            .navbar-nav li {
                float: none;
                display: block;
            }

            .navbar-nav li a {
                display: block;
                width: 100%;
                padding: 10px;
            }

            .navbar-collapse {
                background: rgba(255, 255, 255, 0.95);
                padding: 10px 0;
            }
        }

        /* User Info and Links */
        .top {
            display: flex;
            align-items: center;
            gap: 15px;
            /* Space between elements */
        }

        /* "Hello, [User]" Styling */
        .log1 {
            display: flex;
            align-items: center;
            gap: 5px;
            color: #ecf0f1;
            /* Light text color */
            font-size: 16px;
            font-family: 'Poppins', sans-serif;
            /* Modern font */
        }

        .glyphicon-user {
            font-size: 18px;
            color: #3498db;
            /* Blue icon color */
        }

        /* Signout Button Styling */
        .log {
            color: #ecf0f1;
            /* Light text color */
            background-color: #e74c3c;
            /* Red background for the button */
            text-decoration: none;
            padding: 8px 15px;
            border-radius: 4px;
            font-size: 14px;
            font-weight: 500;
            font-family: 'Poppins', sans-serif;
            /* Modern font */
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            gap: 5px;
        }

        .log:hover {
            background-color: #c0392b;
            /* Darker red on hover */
            transform: translateY(-2px);
            /* Slight lift effect */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            /* Subtle shadow on hover */
        }

        .glyphicon-log-out {
            font-size: 16px;
            vertical-align: middle;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .top {
                flex-direction: column;
                gap: 10px;
            }

            .log {
                padding: 6px 12px;
                font-size: 13px;
            }
        }
        
    </style>
</head>

<body>
    <?php
    include_once 'dbConnection.php';
    ?>
    <div class="wrapper">
        <div class="header">
            <div class="row">
                <div class="col-lg-6">
                <img src="image/icon.png" alt="Logo" style="height: 50px; margin-right: 1px;">
                    <span class="logo">Online Test Your Skill</span>
                </div>
                <div class="col-md-4 col-md-offset-2">
                    <span class="pull-right top title1">
                        <span class="log1">
                            <span class="glyphicon glyphicon-user" aria-hidden="true"></span>&nbsp;Hello,
                        </span>
                        <a href="account.php?q=1" class="log log1"><?php echo $name; ?></a>&nbsp;&nbsp;
                        
                    </span>
                </div>
            </div>
        </div>


        <nav class="navbar navbar-default title1">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" ><b style="color: white;">Dashboard</b></a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li <?php if (@$_GET['q'] == 1)
                            echo 'class="active"'; ?>><a href="account.php?q=1">Home</a></li>
                        <li <?php if (@$_GET['q'] == 2)
                            echo 'class="active"'; ?>><a href="account.php?q=2">History</a>
                        </li>
                        <li <?php if (@$_GET['q'] == 3)
                            echo 'class="active"'; ?>><a href="account.php?q=3">Ranking</a>
                        </li>
                        <li class="pull-right"> <a href="logout.php?q=account.php"><span class="glyphicon glyphicon-log-out"
                        aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;&nbsp;Signout</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="content">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <?php
                        // Home Section
                        if (@$_GET['q'] == 1) {
                            $result = mysqli_query($con, "SELECT * FROM quiz ORDER BY date DESC") or die(mysqli_error($con));
                            echo '<div class="panel"><table class="table table-striped title1">
                            <tr><th>#</th><th>Topic</th><th>Total Questions</th><th>Marks</th><th>Time Limit</th><th>Action</th></tr>';
                            $c = 1;
                            while ($row = mysqli_fetch_array($result)) {
                                $title = $row['title'];
                                $total = $row['total'];
                                $sahi = $row['sahi'];
                                $time = $row['time'];
                                $eid = $row['eid'];
                                $q12 = mysqli_query($con, "SELECT score FROM history WHERE eid='$eid' AND email='$email'") or die(mysqli_error($con));
                                $rowcount = mysqli_num_rows($q12);
                                if ($rowcount == 0) {
                                    echo '<tr><td>' . $c++ . '</td><td>' . $title . '</td><td>' . $total . '</td><td>' . ($sahi * $total) . '</td><td>' . $time . ' min</td>
                                    <td><a href="account.php?q=quiz&step=2&eid=' . $eid . '&n=1&t=' . $total . '" class="btn btn-success">Start</a></td></tr>';
                                } else {
                                    echo '<tr style="color:green"><td>' . $c++ . '</td><td>' . $title . '</td><td>' . $total . '</td><td>' . ($sahi * $total) . '</td><td>' . $time . ' min</td>
                                    <td><a href="update.php?q=quizre&step=25&eid=' . $eid . '&n=1&t=' . $total . '" class="btn btn-danger">Restart</a></td></tr>';
                                }
                            }
                            echo '</table></div>';
                        }
                        ?>
                    </div>
                </div>
            </div>


            <!--home closed-->

            <?php
            if (@$_GET['q'] == 'quiz' && @$_GET['step'] == 2) {
                $eid = @$_GET['eid'];
                $sn = @$_GET['n'];
                $total = @$_GET['t'];
                $q = mysqli_query($con, "SELECT * FROM questions WHERE eid='$eid' AND sn='$sn'");
                echo '<div class="panel" style="margin: 20px 0;">'; // Adjusted margin
                echo '<div class="timer" style="font-size: 20px; font-weight: bold; color: #ff6f61; text-align: center; margin-bottom: 20px;">Time left: <span id="time">15</span> seconds</div>';
                while ($row = mysqli_fetch_array($q)) {
                    $qns = $row['qns'];
                    $qid = $row['qid'];
                    echo '<b>Question &nbsp;' . $sn . '&nbsp;::<br />' . $qns . '</b><br /><br />';
                }
                $q = mysqli_query($con, "SELECT * FROM options WHERE qid='$qid'");
                echo '<form action="update.php?q=quiz&step=2&eid=' . $eid . '&n=' . $sn . '&t=' . $total . '&qid=' . $qid . '" method="POST" class="form-horizontal">
    <br />';

                while ($row = mysqli_fetch_array($q)) {
                    $option = $row['option'];
                    $optionid = $row['optionid'];
                    echo '<input type="radio" name="ans" value="' . $optionid . '">' . $option . '<br /><br />';
                }
                echo '<br /><button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-lock" aria-hidden="true"></span>&nbsp;Submit</button></form></div>';
                echo '<script>
                let timeLeft = 15;
                const countdown = setInterval(() => {
                    timeLeft--;
                    document.getElementById("time").innerText = timeLeft;
                    if (timeLeft <= 0) {
                        clearInterval(countdown);
                        document.querySelector("form").submit();
                    }
                }, 1000);
                </script>';
            }
            //result display
            if (@$_GET['q'] == 'result' && @$_GET['eid']) {
                $eid = @$_GET['eid'];
                $q = mysqli_query($con, "SELECT * FROM history WHERE eid='$eid' AND email='$email' ") or die('Error157');
                echo '<div class="panel">
<center><h1 class="title" style="color:#660033">Result</h1><center><br /><table class="table table-striped title1" style="font-size:20px;font-weight:1000;">';

                while ($row = mysqli_fetch_array($q)) {
                    $s = $row['score'];
                    $w = $row['wrong'];
                    $r = $row['sahi'];
                    $qa = $row['level'];
                    echo '<tr style="color:#66CCFF"><td>Total Questions</td><td>' . $qa . '</td></tr>
      <tr style="color:#99cc32"><td>right Answer&nbsp;<span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span></td><td>' . $r . '</td></tr>
	  <tr style="color:red"><td>Wrong Answer&nbsp;<span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></td><td>' . $w . '</td></tr>
	  <tr style="color:#66CCFF"><td>Score&nbsp;<span class="glyphicon glyphicon-star" aria-hidden="true"></span></td><td>' . $s . '</td></tr>';
                }
                $q = mysqli_query($con, "SELECT * FROM rank WHERE  email='$email' ") or die('Error157');
                while ($row = mysqli_fetch_array($q)) {
                    $s = $row['score'];
                    echo '<tr style="color:#990000"><td>Overall Score&nbsp;<span class="glyphicon glyphicon-stats" aria-hidden="true"></span></td><td>' . $s . '</td></tr>';
                }
                echo '</table></div>';

            }
            ?>

            <!--quiz end-->
            <?php


            //history start
            
            if (@$_GET['q'] == 2) {
                $q = mysqli_query($con, "SELECT * FROM history WHERE email='$email' ORDER BY date DESC") or die('Error197');
                echo '<div class="panel" style="margin: 20px 0;">'; // Adjusted margin
                echo '<table class="table table-striped title1">
    <tr style="color:red"><td><b>S.N.</b></td><td><b>Quiz</b></td><td><b>Question Solved</b></td><td><b>Right</b></td><td><b>Wrong<b></td><td><b>Score</b></td>';
                $c = 0;
                while ($row = mysqli_fetch_array($q)) {
                    $eid = $row['eid'];
                    $s = $row['score'];
                    $w = $row['wrong'];
                    $r = $row['sahi'];
                    $qa = $row['level'];
                    $q23 = mysqli_query($con, "SELECT title FROM quiz WHERE eid='$eid'") or die('Error208');
                    while ($row = mysqli_fetch_array($q23)) {
                        $title = $row['title'];
                    }
                    $c++;
                    echo '<tr><td>' . $c . '</td><td>' . $title . '</td><td>' . $qa . '</td><td>' . $r . '</td><td>' . $w . '</td><td>' . $s . '</td></tr>';
                }
                echo '</table></div>';
            }
            ?>


            <?php
            //ranking start
            if (@$_GET['q'] == 3) {
                $q = mysqli_query($con, "SELECT * FROM rank ORDER BY score DESC") or die('Error223');
                echo '<div class="panel" style="margin: 20px 0;">'; // Adjusted margin
                echo '<div class="table-responsive">
    <table class="table table-striped title1">
    <tr style="color:red"><td><b>Rank</b></td><td><b>Name</b></td><td><b>Gender</b></td><td><b>College</b></td><td><b>Score</b></td></tr>';
                $c = 0;
                while ($row = mysqli_fetch_array($q)) {
                    $e = $row['email'];
                    $s = $row['score'];
                    $q12 = mysqli_query($con, "SELECT * FROM user WHERE email='$e'") or die('Error231');
                    while ($row = mysqli_fetch_array($q12)) {
                        $name = $row['name'];
                        $gender = $row['gender'];
                        $college = $row['college'];
                    }
                    $c++;
                    echo '<tr><td style="color:#99cc32"><b>' . $c . '</b></td><td>' . $name . '</td><td>' . $gender . '</td><td>' . $college . '</td><td>' . $s . '</td><td>';
                }
                echo '</table></div></div>';
            }
            ?>

        </div>
    </div>
    </div>
    </div>
    </div>
            
    <!--Footer start
    <div class="footer">
        <div class="row">
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
        </div>
    </div> -->

    <!-- Modal For Developers 
    <div class="modal fade title1" id="developers">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">&times;</span>
                        <span class="sr-only">Close></span>
                    </button>
                    <h4 class="modal-title" style="font-family:'typo'">
                        <span style="color:orange">Developers</span>
                    </h4>
                </div>
                <div class="modal-body">
                    <div class="row developers-container">
                        <div class="col-md-6 developer-card">
                            <img src="image/mehul.jpg" alt="Keyur Modiya">
                            <p>~ Mehul Chavda</p>
                        </div>
                        <div class="col-md-6 developer-card">
                            <img src="image/nand.jpeg" alt="Jaimin Darji">
                            <p>~ Nand Patel</p>
                        </div>
                    </div>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
        
    <!--Modal for admin login
    <div class="modal fade" id="login">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span
                            aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title"><span style="color:orange;font-family:'typo' ">ADMIN LOGIN</span></h4>
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
                <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>-->
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    <!--footer end--> 
        
    </div>

</body>

</html>