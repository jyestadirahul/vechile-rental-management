<html>
<head>
    <title><?php include_once('title.php'); ?></title>
    <link href="StyleSheet.css" rel="stylesheet" />
    <style>
        p {
            font-size: 18px;
            line-height: 1.6;
        }
        table {
            border-collapse: collapse;
            border: 1px solid green;
        }
        table td {
            padding-left: 5px;
            height: 30px;
            font-size: 14px;
        }
    </style>
</head>
<body>
    <?php
    ob_start();
    include_once('header3.php');
    session_start();
    ?>
    <div class="content">
        <div id="head1">VEHICAL BOOKING LIST</div>
        <div class="content1">
            <table border=1>
                <tr>
                    <td><b>BID</b></td>
                    <td><b>Car Name</b></td>
                    <td><b>Start Date</b></td>
                    <td><b>End Date</b></td>
                    <td><b>Fare</b></td>
                    <td><b>Amount</b></td>
                    <td><b>Driver Name</b></td>
                    <td colspan=3 style="text-align: center;"><b>Process</b></td>
                </tr>
                <?php
                include_once('config.php');
                $x = 1;
                $uname = $_SESSION['uname'];
                $sql = mysqli_query($mysqli, "SELECT * FROM booking where st=1 and cname='$uname'");
                while ($rs = mysqli_fetch_array($sql)) {
                ?>
                    <tr>
                        <td><?php echo $rs['bid']; ?></td>
                        <td><?php echo $rs['car']; ?></td>
                        <td><?php echo $rs['sdate']; ?></td>
                        <td><?php echo $rs['edate']; ?></td>
                        <td><?php echo $rs['fare']; ?></td>
                        <td><?php echo $rs['amt']; ?></td>
                        <td><?php echo $rs['dname']; ?></td>
                        <td><a style="color:green;" href="booking_list.php?bid=<?php echo $rs['bid']; ?>&cid=<?php echo $rs['cid']; ?>">Return</a> </td>
                        <td><a style="color:red;" href="cancellation.php?bid=<?php echo $rs['bid']; ?>&cid=<?php echo $rs['cid']; ?>">Cancel</a></td>
                        <td><a style="color:#F4A909;" href="review.php">Feedback</a></td>
                    
                    </tr>
                <?php
                }
                ?>
            </table>
        </div>
    </div>
</body>
</html>
<?php
include_once('footer.php');
?>
<?php
if (isset($_GET["bid"])) {
    $bid = $_GET["bid"];   
    $cid = $_GET["cid"];     
    $sql1 = mysqli_query($mysqli,"select *from booking where bid='$bid'");
    //echo $sql1;
    if ($rs = mysqli_fetch_array($sql1)) {
        $d1 = $rs['sdate'];
        $d2 = $rs['edate'];
        $fare = $rs['fare'];
        $cdate = date("Y-m-d");
        $date1_ts = strtotime($d2);
        $date2_ts = strtotime($cdate);
        $_SESSION['sdate']=$d1;
        $_SESSION['edate']=$d2;
        $_SESSION['cdate']=$cdate;  
        $_SESSION['fare']=$fare;  
              
        $diff = $date1_ts - $date2_ts;
    $d =  round($diff / 86400);
    $_SESSION['days']=abs($d);
    $_SESSION['amt']=abs($d)*$fare;
    $_SESSION['str']=$_SESSION['amt']."/- balance amount paid Successfuly";
    //echo '<script>alert("$d1")</script>';
    echo $d;
    }
    $sql = "update booking set st=0,rdate='$cdate' where bid='$bid'";
    if ($mysqli->query($sql) === TRUE) {
        $sql = "update car set st=0 where cid='$cid'";
        if ($mysqli->query($sql) === TRUE) {
        }
        //echo '<script>alert("Car Delete Successfully")</script>';
        
        if($d<0)
        {
           
        header("Location:pending.php",TRUE,307);
        //exit;
        //header('Location: pending.php');
        }
        else
        {
        //header('Location: booking_list.php');
        //header( "refresh:5;url=booking_list.php" );
        header("Location: booking_list.php");
        
        }
        //echo "";
    } else
        echo "Error: " . $sql . "<br>" . $mysqli->error;
        ob_end_flush();
}
?>
<style>
    td a:hover {

        color: hotpink !important;
        ;
    }
</style>