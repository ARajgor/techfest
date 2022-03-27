<?php
$flag=0;
session_start();
if(isset($_SESSION['logged_in']))
{
    if($_SESSION['logged_in'] == 'true')
    {
        $user_id = $_SESSION['user_id'];

        echo '      <header class="transparent">

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!-- logo begin -->

                    <!-- logo close -->

                    <!-- small button begin -->
                    <span id="menu-btn"></span>
                    <!-- small button close -->

                    <!-- mainmenu begin -->
                        <nav>
                            <ul id="mainmenu" class="ms-2">
                                <li><a href="index.php">Home<span></span></a></li>
                                <li><a href="about_us.php">About<span></span></a></li>
                                <li><a href="Event.php">Events<span></span></a></li>
                                <li><a href="package.php">Packages<span></span></a></li>
                                <li><a href="accomodation_form.php">Accomodation<span></span></a></li>
                                <li><a href="dashboard.php"><input type="button" value="'.$user_id.'" style="background-color: #ec167f;color:white;border:none;height:40px; border-radius:10px;font-family: FontAwesome;""><span></span></a></li>
                                <li><a href="logout_user.php"><input type="button" value="logout" style="background-color: #ec167f;color:white;border:none;height:40px; border-radius:10px;font-family: FontAwesome;""><span></span></a></li>
                            </ul>
                        </nav>
                        
                        <!-- mainmenu close -->

                </div>
                

            </div>
        </div>
        </header>';
    }
    else{
        $flag=1;
    }
}
else
{
    $flag=1;
}

if($flag == 1)
{
    echo '      <header class="transparent">

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <!-- logo begin -->
 
            <!-- logo close -->

            <!-- small button begin -->
            <span id="menu-btn"></span>
            <!-- small button close -->

            <!-- mainmenu begin -->
                <nav>
                    <ul id="mainmenu" class="ms-2">
                        <li><a href="index.php">Home<span></span></a></li>
                        <li><a href="about_us.php">About<span></span></a></li>
                        <li><a href="Event.php">Events<span></span></a></li>
                        <li><a href="package.php">Packages<span></span></a></li>
                        <li><a href="accomodation_form.php">Accomodation<span></span></a></li>
                        <li><a href="login.php"><input type="button" value="Login" style="background-color: #ec167f;color:white;border:none;height:40px;border-radius:10px;font-family: FontAwesome;"><span></span></a></li>
                        <li><a href="sign_up.php"><input type="button" value="Sign Up" style="background-color: #ec167f;color:white;border:none;height:40px; border-radius:10px;font-family: FontAwesome;""><span></span></a></li>
                    </ul>
                </nav>
                
                <!-- mainmenu close -->

        </div>
        

    </div>
</div>
</header>';
}

?>