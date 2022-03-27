<!DOCTYPE html>
<html>
<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">
    <link rel="stylesheet" type="text/css" href="style.css">


    <!-- Title Page-->
    <title>Registration</title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css2/main.css" rel="stylesheet" media="all">
</head>

<?php
session_start();
if(isset($_SESSION['logged_in']))
{
    if($_SESSION['logged_in'] == 'true')
    {
        if($_SERVER['REQUEST_METHOD'] == 'GET')
        {
            $f=0;
            foreach ($_GET as $key => $value) {
                if($key == 'event')
                {
                    $f = 1;
                }
            }
            if($f == 0)
            {
                exit;
            }
            require "database_connection.php";
            $sql = "SELECT * FROM `events`";
            $result = mysqli_query($connect, $sql);
            $flag = 0;
            while($r = mysqli_fetch_assoc($result))
            {
                $event_name = $r['event_name'];
                $event = $_GET['event'];
                if($event == $event_name)
                {
                    $flag = 1;
                }
            }
            if($flag == 0)
            {
                exit;
            }
        }
    }
    else
    {
        header("location: login.php");
    }
}
else
{
    header("location: login.php");
}

?>

<body>
    <div class="page-wrapper bg-gra-01 p-t-180 p-b-100 font-poppins">
        <div class="wrapper wrapper--w780">
            <div class="card card-3">
                <div class="card-heading"></div>
                <div class="card-body">
                    <div class="container">
                        <form action="group5_registration_validation.php" method="post" id="form1">
                            <h3><?php echo $event ?></h3><br>
                            <h3>
                                Enter User Id Of Group Member
                            </h3>
                            <br>
                            <input type="text" name="uid_member2" placeholder="User Id" maxlength="20" required>
                            <br>
                            <input type="text" name="uid_member3" placeholder="User Id" maxlength="20" required>
                            <br>
                            <input type="text" name="uid_member4" placeholder="User Id" maxlength="20" required>
                            <br>
                            <input type="text" name="uid_member5" placeholder="User Id" maxlength="20" required>

                            <input type="hidden" name="event" value="<?php echo $event ?>">

                            <div class="btn-box">
                                <button type="submit" id="next1">Register</button>
                            </div>
                        </form>

                        <!-- <form id="form2">
        <h3>Contact Details</h3><br>
        <input type="mail" placeholder="Email" required>
        <input type="phone" placeholder="Mobile No." required>

        <div class="btn-box">
            <button type="button" id="back1">Back</button>
            <button type="button" id="next2">Next</button>
        </div>
    </form>

    <form id="form3">
        <h3>Create Password</h3><br>
        <input type="password" placeholder="Create Password" required>
        <input type="password" placeholder="Confirm Password." required>

        <div class="btn-box">
            <button type="button" id="back2">Back</button>
            <button type="button">Submit</button>
        </div>
    </form>

    <div class="step-row">
        <div id="progress"></div>
        <div class="step-col"><small>Step 1</small></div>
        <div class="step-col"><small>Step 2</small></div>
        <div class="step-col"><small>Step 3</small></div>
    </div>
    </div>

    <script type="text/javascript">
        var form1=document.getElementById("form1");
        var form2=document.getElementById("form2");
        var form3=document.getElementById("form3");

        var next1=document.getElementById("next1");
        var next2=document.getElementById("next2");
        var back1=document.getElementById("back1");
        var back2=document.getElementById("back2");

        var progress=document.getElementById("progress");


        next1.onclick=function(){
            form1.style.left="-450px"
            form2.style.left="40px"
            progress.style.width="240px"
        }

        back1.onclick=function(){
            form1.style.left="40px"
            form2.style.left="450px"
            progress.style.width="120px"
        }

        next2.onclick=function(){
            form2.style.left="-450px"
            form3.style.left="40px"
            progress.style.width="360px"
        }

        back2.onclick=function(){
            form2.style.left="40px"
            form3.style.left="450px"
            progress.style.width="240px"
        }


    </script>
                </div>
            </div>
        </div>
    </div> -->




                        <!-- Jquery JS-->
                        <script src="vendor/jquery/jquery.min.js"></script>
                        <!-- Vendor JS-->
                        <script src="vendor/select2/select2.min.js"></script>
                        <script src="vendor/datepicker/moment.min.js"></script>
                        <script src="vendor/datepicker/daterangepicker.js"></script>

                        <!-- Main JS-->
                        <script src="js/global.js"></script>

</body>

</html>
