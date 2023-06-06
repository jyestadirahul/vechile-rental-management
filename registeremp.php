<html>

<head>

<title><?php include_once('title.php');?></title>

    <link href="StyleSheet.css" rel="stylesheet" />

</head>

<body>
<div class="header">VEHICLE RENTAL MANAGEMENT SYSTEM
    </div>

<div class="menu">
        <div class="navbar">


            <div class="dropdown">
                <button class="dropbtn">
                    <a href="index.php">Home </a>
                    <i class="fa fa-caret-down"></i>
                </button>


            </div>
            <div class="dropdown">
                <button class="dropbtn">
                    <a href="driver_login.php">Login </a>
                    <i class="fa fa-caret-down"></i>
                </button>


            </div>


        </div>


    </div>
    <div class="content">
        <div id="head1">DRIVER SIGN UP</div>
        <div class="content1">
       
            
            <form action="registeremp.php" method="post">
                <table>
                <tr>
                
                    
                   
                    <td>Name</td>
                    <td><input type="text" name="name" placeholder="" required></td>
                    <td></td>
                     
                    </tr>
                    <tr> 
                    <td>DOB</td>
                    <td><input type="date" name="dob" placeholder="" required></td>
                    <td></td>
                        
                    </tr>
                    
                    <tr>
                    <td>Address</td>
                    <td><textarea name="addr" placeholder="" required></textarea></td>
                    <td></td>
                        
                    </tr>
                    <tr>
                    <td>Contact No</td>
                    <td><input min="1111111111" max="9999999999" type="number" name="cno" placeholder="" required></td>
                    <td></td>
                        
                    </tr>
                    
                    <tr>
                    <td>E-Mail ID</td>
                    <td><input type="email" name="email" placeholder="" required></td>
                    <td></td>
                        
                    </tr>
                    <tr>
                    <td>License No</td>
                    <td><input type="text" name="lic" placeholder="" required></td>
                    <td></td>
                        
                    </tr>
                    <tr>
                    <td>Aadhar No</td>
                    <td><input min="111111111111" max="999999999999" type="number" name="ano" placeholder="" required></td>
                    <td></td>
                        
                    </tr>
                    <tr>
                    <td>User Name</td>
                    <td><input type="text" name="uname" placeholder="" required></td>
                    <td></td>
                        
                    </tr>
                    <tr>
                    <td>Password</td>
                    <td><input type="password" name="pass" placeholder="" required></td>
                    <td></td>
                        
                    </tr>
                
                    <tr>
                    <td></td>
                    <td><input type="submit" name="sign" value="Sign Up" required></td>
                    <td></td>
                        
                    </tr>
                </table>
            </form>
        </div>
    </div>

</body>

</html>
<?php
include_once('footer.php');
 include_once('config.php');
if(isset($_POST["sign"]))
{
$name=$_POST["name"];
$dob=$_POST["dob"];
$addr=$_POST["addr"];
$cno=$_POST["cno"];
$email=$_POST["email"];
$lic=$_POST["lic"];
$ano=$_POST["ano"];
$uname=$_POST["uname"];
$pass=$_POST["pass"];

//$img=basename($_POST["img"]);
//echo $img;

 //echo $oprice;

$sql = "INSERT INTO employee(ename,dob,addr,cno,email,lic,ano,uname,pass) VALUES ('$name','$dob','$addr','$cno','$email','$lic','$ano','$uname','$pass')";
//$sql="INSERT INTO product (pname,qty,cat,brand,desc1,aprice,oprice,img) VALUES ('sgdfg','6','Furniture','dfsdf','fsdgfdg','4','54','images')";
//echo $sql;    
if ($mysqli->query($sql) === TRUE) {
        echo '<script>alert("Employee Sign Up Successfully")</script>';
        echo "";
    } else
        echo "Error: " . $sql . "<br>" . $mysqli->error;
}


?>