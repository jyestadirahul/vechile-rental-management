<!DOCTYPE html>

<html>

<head>
<script scr="all.min.js"></script>
    <link href="StyleSheet.css" rel="stylesheet" />
    
    <title><?php include_once('title.php');?></title>

    <link rel="stylesheet" href="all.css">
   
    
</head>

<body>



    <div class="header">VEHICLE RENTAL MANAGEMENT SYSTEM
    </div>

    <div class="menu">
        <div class="navbar">


            <div class="dropdown">
                <button class="dropbtn">
                    <a href="index.php">Home </a>
                    
                </button>


            </div>

            <div class="dropdown">
                <button class="dropbtn">
                    <a href="registeremp.php">Register </a>
                    
                </button>


            </div>


        </div>


    </div>
    <div class="content">
        <div id="head1">DRIVER LOGIN</div>
        <div class="content1">
            <form action="driver_login.php" method="post">
                <table>
                    <tr></tr>
                    <tr>
                        <td>User Name
                        </td>
                        <td>
                            <input type="text" name="uname" placeholder>
                        </td>
                     
                    <tr>
                        <td>Password
                        </td>
                        <td>
                        
                            <input type="password" name="pass" placeholder><span class="fas fa-lock" style="padding-top:10px;font-size:20px;"></span>
                        </td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>
                        </td>
                        <td>
                            <input type="submit" value="Sign in" name="login" placeholder>
                        </td>

                    </tr>
                    <tr>
                        <td rowspan="4">

                        </td>
                    </tr>
                </table>
            </form>

        </div>
    </div>
    <div class="footer">Copyright@<?php echo date("Y"); ?></div>
</body>

</html>
<?php
if (isset($_POST["login"])) {
    include_once('config.php');
    session_start();
    $uname = $_POST["uname"];
    $pass = $_POST["pass"];
    
    $_SESSION["msg"] = "";
    echo "welcome";
    $sql = mysqli_query($mysqli, "SELECT * FROM employee where uname='$uname' and pass='$pass'");
    if ($rs = mysqli_fetch_array($sql)) {
        $_SESSION["uname"] = $rs['ename'];
        header('Location: home3.php');
    } else {
        echo '<script>alert("Invalid User Name/Password")</script>';
    }
}
?>