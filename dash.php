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

    <title>ADMIN DASHBOARD || Online Examination System </title>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/bootstrap-theme.min.css" />
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/font.css">
    <link rel="icon" href="image/icon.png" type="image/x-icon">
    <script src="js/jquery.js" type="text/javascript"></script>

    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>

    <style>
        /* Enhanced Professional CSS for Online Examination System Dashboard */

        /* General Styles */
        body {
            background: #f9f9f9;
            font-family: 'Roboto', sans-serif;
            color: #2c3e50;
            line-height: 1.8;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Header */
        .header {
            background: linear-gradient(135deg, #43cea2, #185a9d);
            padding: 20px 30px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15);
            display: flex;
            justify-content: space-between;
            align-items: center;
            overflow: hidden;
        }

        .logo {
            font-size: 24px;
            color: white;
            font-weight: 700;
            text-transform: uppercase;
            white-space: nowrap;
        }

        .top {
            color: white;
            font-size: 16px;
        }

        /* Navbar */
        .navbar-default {
            background: white;
            border: none;
            box-shadow: 0 3px 6px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
            padding: 10px 0;
        }

        .navbar-default .navbar-nav>li>a {
            color: #185a9d;
            font-weight: 600;
            font-size: 16px;
            padding: 12px 20px;
            transition: all 0.3s;
        }

        .navbar-default .navbar-nav>li.active>a,
        .navbar-default .navbar-nav>li>a:hover {
            color: white;
            background: #43cea2;
            border-radius: 8px;
        }

        /* Buttons */
        .btn-primary {
            background: linear-gradient(135deg, #43cea2, #185a9d);
            border: none;
            padding: 12px 25px;
            border-radius: 8px;
            color: white;
            font-weight: bold;
            transition: background 0.4s ease;
        }

        .btn-primary:hover {
            background: linear-gradient(135deg, #2E7D32, #43A047);
        }

        /* Tables */
        .table {
            background: white;
            box-shadow: 0 3px 6px rgba(0, 0, 0, 0.08);
            border-radius: 10px;
            overflow: hidden;
            margin-top: 20px;
        }

        .table thead tr {
            background: linear-gradient(135deg, #43cea2, #185a9d);
            color: white;
            text-transform: uppercase;
        }

        .table-striped tbody tr:nth-of-type(odd) {
            background: #f4f4f9;
        }

        .table-striped tbody tr:hover {
            background: #e1f5fe;
        }

        /* Panels */
        .panel {
            background: white;
            border-radius: 12px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 25px;
            margin-top: 30px;
        }

        /* Links */
        a {
            color: #185a9d;
            text-decoration: none;
            transition: color 0.3s;
        }

        a:hover {
            color: #43cea2;
        }

        /* Footer */
        .footer {
            text-align: center;
            padding: 20px 0;
            background: #185a9d;
            color: white;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .logo {
                font-size: 20px;
            }

            .navbar-brand {
                font-size: 18px;
            }

            .btn-primary {
                padding: 8px 16px;
            }

            .table-responsive {
                overflow-x: auto;
            }

            .header {
                flex-direction: column;
                text-align: center;
            }
        }
    </style>
    <script>
        function validateForm() {
            var title = document.forms["form"]["name"].value;
            var total = document.forms["form"]["total"].value;
            var right = document.forms["form"]["right"].value;
            var wrong = document.forms["form"]["wrong"].value;
            var time = document.forms["form"]["time"].value;

            // Clear previous error messages
            document.getElementById("titleError").innerText = "";
            document.getElementById("totalError").innerText = "";
            document.getElementById("rightError").innerText = "";
            document.getElementById("wrongError").innerText = "";
            document.getElementById("timeError").innerText = "";

            var isValid = true;

            if (title == "") {
                document.getElementById("titleError").innerText = "Quiz title must be filled out";
                isValid = false;
            }
            if (total <= 0) {
                document.getElementById("totalError").innerText = "Total questions must be a positive integer";
                isValid = false;
            }
            if (right === "" || right < 0) {
                document.getElementById("rightError").innerText = "Marks for correct answers must be a non-negative integer";
                isValid = false;
            }
            if (wrong === "" || wrong < 0) {
                document.getElementById("wrongError").innerText = "Minus marks for wrong answers must be a non-negative integer";
                isValid = false;
            }
            if (time <= 0) {
                document.getElementById("timeError").innerText = "Time limit must be a positive integer";
                isValid = false;
            } 
            return isValid;
        }

        
    </script>
</head>

<body style="background:#eee;">
    <div class="header">
        <div class="row">
            <div class="col-lg-6">
                <span class="logo">Online Examination System</span>
            </div>
        </div>
    </div>

    <!--navigation menu-->
    <nav class="navbar navbar-default title1">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand"><b> Dashboard</b></a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li <?php if (@$_GET['q'] == 0)
                        echo 'class="active"'; ?>><a href="dash.php?q=0">Home<span
                                class="sr-only">(current)</span></a></li>
                    <li <?php if (@$_GET['q'] == 1)
                        echo 'class="active"'; ?>><a href="dash.php?q=1">User</a></li>
                    <li <?php if (@$_GET['q'] == 2)
                        echo 'class="active"'; ?>><a href="dash.php?q=2">Ranking</a></li>
                    <li <?php if (@$_GET['q'] == 3)
                        echo 'class="active"'; ?>><a href="dash.php?q=3">Feedback</a></li>
                    <li class="dropdown <?php if (@$_GET['q'] == 4 || @$_GET['q'] == 5)
                        echo 'active"'; ?>">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                            aria-expanded="false">Quiz<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="dash.php?q=4">Add Quiz</a></li>
                            <li><a href="dash.php?q=5">Remove Quiz</a></li>
                        </ul>
                    </li>
                    <li class="pull-right"> <a href="logout.php?q=account.php"><span class="glyphicon glyphicon-log-out"
                                aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;&nbsp;Signout</a></li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
    <!--navigation menu closed-->

    <div class="container"><!--container start-->
        <div class="row">
            <div class="col-md-12">
                <!--home start-->
                <?php if (@$_GET['q'] == 0) {
                    $result = mysqli_query($con, "SELECT * FROM quiz ORDER BY date DESC") or die('Error');
                    echo '<div class="panel"><div class="table-responsive"><table class="table table-striped title1">
<tr><td><b>S.N.</b></td><td><b>Topic</b></td><td><b>Total question</b></td><td><b>Marks</b></td><td><b>Time limit</b></td><td></td></tr>';
                    $c = 1;
                    while ($row = mysqli_fetch_array($result)) {
                        $title = $row['title'];
                        $total = $row['total'];
                        $sahi = $row['sahi'];
                        $time = $row['time'];
                        $eid = $row['eid'];
                        $q12 = mysqli_query($con, "SELECT score FROM history WHERE eid='$eid' AND email='$email'") or die('Error98');
                        $rowcount = mysqli_num_rows($q12);
                        if ($rowcount == 0) {
                            echo '<tr><td>' . $c++ . '</td><td>' . $title . '</td><td>' . $total . '</td><td>' . $sahi * $total . '</td><td>' . $time . '&nbsp;min</td>
    <td></td></tr>';

                        } else {
                            echo '<tr style="color:#99cc32"><td>' . $c++ . '</td><td>' . $title . '&nbsp;<span title="This quiz is already solve by you" class="glyphicon glyphicon-ok" aria-hidden="true"></span></td><td>' . $total . '</td><td>' . $sahi * $total . '</td><td>' . $time . '&nbsp;min</td>
    <td></td></tr>';

                        }
                    }
                    $c = 0;
                    echo '</table></div></div>';
                }

                //ranking start
                if (@$_GET['q'] == 2) {
                    $q = mysqli_query($con, "SELECT * FROM rank  ORDER BY score DESC ") or die('Error223');
                    echo '<div class="panel title"><div class="table-responsive">
<table class="table table-striped title1" >
<tr style="color:red"><td><b>Rank</b></td><td><b>Name</b></td><td><b>Gender</b></td><td><b>College</b></td><td><b>Score</b></td></tr>';
                    $c = 0;
                    while ($row = mysqli_fetch_array($q)) {
                        $e = $row['email'];
                        $s = $row['score'];
                        $q12 = mysqli_query($con, "SELECT * FROM user WHERE email='$e' ") or die('Error231');
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
                <!--home closed-->

                <!--user quiz details start-->
                <?php if (@$_GET['q'] == 1) {
                    $result = mysqli_query($con, "SELECT * FROM user") or die('Error');
                    echo '<div class="panel"><div class="table-responsive"><table class="table table-striped title1">
<tr>
    <td><b>S.N.</b></td>
    <td><b>Name</b></td>
    <td><b>Gender</b></td>
    <td><b>College</b></td>
    <td><b>Email</b></td>
    <td><b>Mobile</b></td>
    <td><b>Quizzes Taken</b></td>
    <td><b>Scores</b></td>
    <td><b>Action</b></td>
</tr>';
                    $c = 1;
                    while ($row = mysqli_fetch_array($result)) {
                        $name = $row['name'];
                        $mob = $row['mob'];
                        $gender = $row['gender'];
                        $email = $row['email'];
                        $college = $row['college'];

                        // Fetch quizzes taken by the user
                        $quiz_result = mysqli_query($con, "SELECT quiz.title, history.score FROM history JOIN quiz ON history.eid = quiz.eid WHERE history.email='$email'") or die('Error');
                        $quizzes = [];
                        $scores = [];
                        while ($quiz_row = mysqli_fetch_array($quiz_result)) {
                            $quizzes[] = $quiz_row['title'];
                            $scores[] = $quiz_row['score'];
                        }

                        // Display user details and quiz information in columns
                        echo '<tr>
            <td>' . $c++ . '</td>
            <td>' . $name . '</td>
            <td>' . $gender . '</td>
            <td>' . $college . '</td>
            <td>' . $email . '</td>
            <td>' . $mob . '</td>
            <td>' . (empty($quizzes) ? 'No quizzes taken' : implode('<br>', $quizzes)) . '</td>
            <td>' . (empty($scores) ? 'N/A' : implode('<br>', $scores)) . '</td>
            <td><a title="Delete User" href="update.php?demail=' . $email . '"><b><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></b></a></td>
        </tr>';
                    }
                    echo '</table></div></div>';
                }
                ?>
                <!--user quiz details end-->

                <!--feedback start-->
                <?php if (@$_GET['q'] == 3) {
                    $result = mysqli_query($con, "SELECT * FROM feedback ORDER BY feedback.date DESC") or die('Error');
                    echo '<div class="panel"><div class="table-responsive"><table class="table table-striped title1">
<tr><td><b>S.N.</b></td><td><b>Subject</b></td><td><b>Email</b></td><td><b>Date</b></td><td><b>Time</b></td><td><b>By</b></td><td></td><td></td></tr>';
                    $c = 1;
                    while ($row = mysqli_fetch_array($result)) {
                        $date = $row['date'];
                        $date = date("d-m-Y", strtotime($date));
                        $time = $row['time'];
                        $subject = $row['subject'];
                        $name = $row['name'];
                        $email = $row['email'];
                        $id = $row['id'];
                        echo '<tr><td>' . $c++ . '</td>';
                        echo '<td><a title="Click to open feedback" href="dash.php?q=3&fid=' . $id . '">' . $subject . '</a></td><td>' . $email . '</td><td>' . $date . '</td><td>' . $time . '</td><td>' . $name . '</td>
	<td><a title="Open Feedback" href="dash.php?q=3&fid=' . $id . '"><b><span class="glyphicon glyphicon-folder-open" aria-hidden="true"></span></b></a></td>';
                        echo '<td><a title="Delete Feedback" href="update.php?fdid=' . $id . '"><b><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></b></a></td>
	</tr>';
                    }
                    echo '</table></div></div>';
                }
                ?>
                <!--feedback closed-->

                <!--feedback reading portion start-->
                <?php if (@$_GET['fid']) {
                    echo '<br />';
                    $id = @$_GET['fid'];
                    $result = mysqli_query($con, "SELECT * FROM feedback WHERE id='$id' ") or die('Error');
                    while ($row = mysqli_fetch_array($result)) {
                        $name = $row['name'];
                        $subject = $row['subject'];
                        $date = $row['date'];
                        $date = date("d-m-Y", strtotime($date));
                        $time = $row['time'];
                        $feedback = $row['feedback'];

                        echo '<div class="panel"<a title="Back to Archive" href="update.php?q1=2"><b><span class="glyphicon glyphicon-level-up" aria-hidden="true"></span></b></a><h2 style="text-align:center; margin-top:-15px;font-family: "Ubuntu", sans-serif;"><b>' . $subject . '</b></h1>';
                        echo '<div class="mCustomScrollbar" data-mcs-theme="dark" style="margin-left:10px;margin-right:10px; max-height:450px; line-height:35px;padding:5px;"><span style="line-height:35px;padding:5px;">-&nbsp;<b>DATE:</b>&nbsp;' . $date . '</span>
<span style="line-height:35px;padding:5px;">&nbsp;<b>Time:</b>&nbsp;' . $time . '</span><span style="line-height:35px;padding:5px;">&nbsp;<b>By:</b>&nbsp;' . $name . '</span><br />' . $feedback . '</div></div>';
                    }
                } ?>
                <!--Feedback reading portion closed-->

                <!--add quiz start-->
                <?php
                if (@$_GET['q'] == 4 && !(@$_GET['step'])) {
                    echo ' 
<div class="row">
<span class="title1" style="margin-left:40%;font-size:30px;"><b>Enter Quiz Details</b></span><br /><br />
 <div class="col-md-3"></div><div class="col-md-6">   <form class="form-horizontal title1" name="form" action="update.php?q=addquiz" method="POST" onsubmit="return validateForm()">
<fieldset>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-12 control-label" for="name"></label>  
  <div class="col-md-12">
  <input id="name" name="name" placeholder="Enter Quiz title" class="form-control input-md" type="text" >
  <span id="titleError" style="color:red;"></span>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-12 control-label" for="total"></label>  
  <div class="col-md-12">
  <input id="total" name="total" placeholder="Enter total number of questions" class="form-control input-md" type="number" >
  <span id="totalError" style="color:red;"></span>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-12 control-label" for="right"></label>  
  <div class="col-md-12">
  <input id="right" name="right" placeholder="Enter marks on right answer" class="form-control input-md" min="0" type="number" >
  <span id="rightError" style="color:red;"></span>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-12 control-label" for="wrong"></label>  
  <div class="col-md-12">
  <input id="wrong" name="wrong" placeholder="Enter minus marks on wrong answer without sign" class="form-control input-md" min="0" type="number" >
  <span id="wrongError" style="color:red;"></span>
  </div>
</div>

<!-- Text input -->
<div class="form-group">
  <label class="col-md-12 control-label" for="time"></label>  
  <div class="col-md-12">
  <input id="time" name="time" placeholder="Enter time limit for test in minute" class="form-control input-md" min="1" type="number" >
  <span id="timeError" style="color:red;"></span>
  </div>
</div>

<div class="form-group">
  <label class="col-md-12 control-label" for=""></label>
  <div class="col-md-12"> 
    <input  type="submit" style="margin-left:45%" class="btn btn-primary" value="Submit" class="btn btn-primary"/>
  </div>
</div>

</fieldset>
</form></div>';
                }
                ?>
                <!--add quiz end-->

                <!--add quiz step2 start-->
                <!-- Add Quiz Step 2 Start -->
<?php
if (@$_GET['q'] == 4 && (@$_GET['step']) == 2) {
    echo '
    <div class="row">
        <span class="title1" style="margin-left:40%;font-size:30px;"><b>Enter Question Details</b></span><br /><br />
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <form class="form-horizontal title1" name="quizForm" action="update.php?q=addqns&n=' . @$_GET['n'] . '&eid=' . @$_GET['eid'] . '&ch=4" method="POST" onsubmit="return validateQuizForm()">
                <fieldset>
';

    for ($i = 1; $i <= @$_GET['n']; $i++) {
        echo '<b>Question number&nbsp;' . $i . '&nbsp;:</b><br />
        <div class="form-group">
            <label class="col-md-12 control-label" for="qns' . $i . '"></label>  
            <div class="col-md-12">
                <textarea rows="3" cols="5" name="qns' . $i . '" id="qns' . $i . '" class="form-control" placeholder="Write question number ' . $i . ' here..."></textarea>
                <small id="qns' . $i . '_error" class="text-danger"></small>
            </div>
        </div>';

        // Options
        for ($j = 1; $j <= 4; $j++) {
            echo '<div class="form-group">
                <label class="col-md-12 control-label" for="' . $i . $j . '"></label>  
                <div class="col-md-12">
                    <input id="' . $i . $j . '" name="' . $i . $j . '" placeholder="Enter option ' . chr(96 + $j) . '" class="form-control input-md" type="text">
                    <small id="option' . $i . $j . '_error" class="text-danger"></small>
                </div>
            </div>';
        }

        // Correct answer selection
        echo '<br />
        <b>Correct answer</b>:<br />
        <div class="form-group">
            <div class="col-md-12">
                <select id="ans' . $i . '" name="ans' . $i . '" class="form-control input-md">
                    <option value="">Select answer for question ' . $i . '</option>
                    <option value="a">Option A</option>
                    <option value="b">Option B</option>
                    <option value="c">Option C</option>
                    <option value="d">Option D</option>
                </select>
                <small id="ans' . $i . '_error" class="text-danger"></small>
            </div>
        </div>';
    }

    echo '<div class="form-group">
            <label class="col-md-12 control-label" for=""></label>
            <div class="col-md-12"> 
                <input type="submit" style="margin-left:45%" class="btn btn-primary" value="Submit"/>
            </div>
        </div>
        </fieldset>
    </form>
    </div>

    <script>
    function validateQuizForm() {
        let totalQuestions = ' . @$_GET['n'] . ';
        let isValid = true;

        for (let i = 1; i <= totalQuestions; i++) {
            let question = document.getElementById("qns" + i);
            let options = [
                document.getElementById(i + "1"),
                document.getElementById(i + "2"),
                document.getElementById(i + "3"),
                document.getElementById(i + "4")
            ];
            let correctAnswer = document.getElementById("ans" + i);

            // Clear previous errors
            document.getElementById("qns" + i + "_error").innerHTML = "";
            document.getElementById("ans" + i + "_error").innerHTML = "";
            options.forEach((opt, index) => {
                document.getElementById("option" + i + (index + 1) + "_error").innerHTML = "";
            });

            // Validate question is required
            if (question.value.trim() === "") {
                document.getElementById("qns" + i + "_error").innerHTML = "Question is required.";
                isValid = false;
            }

            // Validate at least two options are provided
            let filledOptions = options.filter(option => option.value.trim() !== "").length;
            if (filledOptions < 2) {
                options.forEach((opt, index) => {
                    if (opt.value.trim() === "") {
                        document.getElementById("option" + i + (index + 1) + "_error").innerHTML = "At least two options are required.";
                    }
                });
                isValid = false;
            }

            // Validate correct answer is selected
            if (correctAnswer.value === "") {
                document.getElementById("ans" + i + "_error").innerHTML = "Please select a correct answer.";
                isValid = false;
            }
        }
        return isValid;
    }
    </script>';
}
?>
<!-- Add Quiz Step 2 End -->

                <!--add quiz step 2 end-->

                <!--remove quiz-->
                <?php if (@$_GET['q'] == 5) {
                    $result = mysqli_query($con, "SELECT * FROM quiz ORDER BY date DESC") or die('Error');
                    echo '<div class="panel"><div class="table-responsive"><table class="table table-striped title1">
<tr><td><b>S.N.</b></td><td><b>Topic</b></td><td><b>Total question</b></td><td><b>Marks</b></td><td><b>Time limit</b></td><td></td></tr>';
                    $c = 1;
                    while ($row = mysqli_fetch_array($result)) {
                        $title = $row['title'];
                        $total = $row['total'];
                        $sahi = $row['sahi'];
                        $time = $row['time'];
                        $eid = $row['eid'];
                        echo '<tr><td>' . $c++ . '</td><td>' . $title . '</td><td>' . $total . '</td><td>' . $sahi * $total . '</td><td>' . $time . '&nbsp;min</td>
	<td><b><a href="update.php?q=rmquiz&eid=' . $eid . '" class="pull-right btn sub1" style="margin:0px;background:red"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span>&nbsp;<span class="title1"><b>Remove</b></span></a></b></td></tr>';
                    }
                    $c = 0;
                    echo '</table></div></div>';
                }
                ?>
            </div><!--container closed-->
        </div>
    </div>
</body>

</html>
