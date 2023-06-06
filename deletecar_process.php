
<?php
session_start();
$_SESSION["cid"] =$_GET["cid"];
if(isset($_GET["cid"]))
{
    $cid=$_GET["cid"];
    $sql = "delete from car where cid='$cid'";
                   echo $rno;
                   
                   if ($mysqli->query($sql) === TRUE) {
                   echo '<script>alert("Car Delete Successfully")</script>';
                    header('Location: student_delete.php');
                    echo "";
                } else
                    echo "Error: " . $sql . "<br>" . $mysqli->error;
}
?>
<!DOCTYPE html>

<html>

<head>
<script scr="all.min.js"></script>
    <link href="StyleSheet.css" rel="stylesheet" />
    
    <title><?php include_once('title.php');?></title>

    <link rel="stylesheet" href="all.css">
   
    
</head>

<body>



    <div class="header">ONLINE SHOPPING SYSTEM
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
                    <a href="user_register.php">Register </a>
                    
                </button>


            </div>


        </div>


    </div>
    <div class="content">
        <div id="head1">USER LOGIN</div>
        <div class="content1">
            <form action="user_login.php" method="post">
                <table>
                    <tr></tr>
                    <tr>
                        <td>E-Mail ID
                        </td>
                        <td>
                            <input type="email" name="email" placeholder>
                        </td>
                        <td rowspan="4"><img width="180px" src="login.png" /></td>
                    </tr>
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