<html>

<head>

<title><?php include_once('title.php');?></title>

    <link href="StyleSheet.css" rel="stylesheet" />
    <style>
        p {
            font-size: 18px;
            line-height: 1.6;
        }

        
    </style>
</head>

<body>
    <?php
    ob_start();
    include_once('header3.php');
    include_once('config.php');
    session_start();
    ?>
    <div class="content">
        <div id="head1">VEHICAL BOOKING</div>
        <div class="content1">
            <form action="booking.php" method="post">
                <?php

                $x = 1;
                if(isset($_GET['cid']))
                {
                    $cid=$_GET['cid'];
                    $_SESSION['cid']=$cid;
                }
                else
                    $cid=$_SESSION['cid'];
                $sql = mysqli_query($mysqli, "SELECT * FROM car where cid='$cid'");
                if ($rs = mysqli_fetch_array($sql)) {
                ?>
                    <input type="hidden" id="custId" name="cid" value="<?php echo $rs['cid']; ?>">
                    <table>

                        <tr>
                            <td>Selected Car</td>
                            <td><?php echo $rs['cname']; ?></td>
                        </tr>
                        <tr>
                            <td>Number Plate</td>
                            <td><?php echo $rs['v1']; ?></td>
                        </tr>
                        <tr>
                            <td>Start Date</td>
                            <td><input type="date" name="sdate" required> </td>
                            <td>End Date</td>

                            <td><input type="date" name="edate" required></td>

                        </tr>
                        <tr>
                            <td>Choose your car type</td>
                            <td><input type="radio" name="type" value="With AC">With AC<input type="radio" name="type" value="With Out AC">With Out AC</td>

                        </tr>

                        <tr>
                            <td>Charge Type</td>
                            <td><input type="radio" value="Per KM" name="ctype">Per KM<input value="Per Day" type="radio" name="ctype">Per Day</td>

                        </tr>


                        <tr>
                            <td>Select a driver</td>
                            <td><select name="dname">
                            <option>-Select-</option>
                                    <?php
                                    $sql = mysqli_query($mysqli, "SELECT * FROM employee");
                                    while ($rs = mysqli_fetch_array($sql)) {
                                    ?>
                                        <option><?php echo $rs['ename']; ?></option>
                                    <?php
                                    }
                                    ?>
                                </select></td>

                        </tr>
                    <?php
                }
                    ?>
                    
                    <tr>
                        <td></td>
                        <td><input type="submit" value="booking" name="booking"></td>

                    </tr>
                    </table>
                   
                   
            </form>
        </div>
    </div>


</body>

</html>
<?php

include_once('footer.php');
if (isset($_POST["booking"])) {
    $sdate=$_POST["sdate"];
    $edate=$_POST["edate"];
    
    $date1_ts = strtotime($_POST["sdate"]);
    $date2_ts = strtotime($_POST["edate"]);
    $diff = $date2_ts - $date1_ts;
    $d1 =  round($diff / 86400);
    //echo $d1;
    $cid = $_POST["cid"];
    $type=$_POST["type"];
    //$ctype=$_POST["ctype"];
    $dname=$_POST["dname"];
    $uname=$_SESSION["uname"] ;
    $sql = mysqli_query($mysqli, "SELECT * FROM car where cid='$cid'");
    if ($rs = mysqli_fetch_array($sql)) {
        $car=$rs['cname'];
        $v1=$rs['v1'];
        if($type=="With AC")
        {
            $kmamt=$rs['v2'];
            $dayamt=$rs['v4'];
            
        }
        else
        {
            $kmamt=$rs['v3'];
            $dayamt=$rs['v5'];
        }
        $st=1;
        $dist="-";
        $dayamt=$dayamt*$d1;
        $v4=$rs['v4'];
        $str="Customer Name :$uname<br> Driver Name : $dname <br> Car Name : $car<br> Car Type :$type <br> Starting Date : $sdate <br> Ending Date : $edate <br> No. of Days : $d1<br> Total Amount :$dayamt";
        $_SESSION["str"] =$str;
        $sql="insert into booking (cname,car,v1,sdate,edate,fare,dist,d1,amt,dname,st,cid) values('$uname','$car','$v1','$sdate','$edate','$v4','$dist','$d1','$dayamt','$dname','$st','$cid')";
        $sql1="update car set st=1 where cid='$cid'";
        if ($mysqli->query($sql1) === TRUE) {
            //echo '<script>alert("Car Booking Successfully")</script>';
                echo "";
        } else
            echo "Error: " . $sql . "<br>" . $mysqli->error;
        if ($mysqli->query($sql) === TRUE) {
            //echo '<script>alert("Car Booking Successfully")</script>';
            header('Location: payment.php');
            echo "";
        } else
            echo "Error: " . $sql . "<br>" . $mysqli->error;
    }
}
ob_end_flush();
?>