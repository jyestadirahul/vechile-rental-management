
<html>

<head>

<title><?php include_once('title.php');?></title>

    <link href="StyleSheet.css" rel="stylesheet" />
<style>
    p{
        font-size: 18px;
        line-height: 1.6;
    }
    table {
			  border-collapse: collapse;
			  border: 1px solid green;
			}
			table td{
				padding-left:5px;
				height:30px;
				font-size: 14px;
			}
    </style>
</head>

<body>
    <?php
    include_once('header3.php');
    session_start();
    ?>
    <div class="content">
        <div id="head1">CANCEL MY BOOKING VEHICLE</div>
        <div class="content1">
        <ul style="line-height: 280%;">
        <li>There could be one to many reasons for cancellation of booking. We are not going into debate </li>
        <li>is it legal for dealers to take cancellation charges (as car is still in there stock) or</li>
        <li>why to pay cancellation when car is not registered or</li>
        <li>is the car custom built to pay cancellation charges</li>
        <li>or any other reasons, as we are firm on our view as mentioned in the last para of this article post.</li>
            
        </ul>
        <center><b style="color:green;font-size: 18px;">!Your Amount Return Shortly!</b></center>
    If You have any proble in our booking Service Please Review 
    <a href="review.php">Click here</a>     
    </div>
    </div>
   

</body>

</html>
<?php
    include_once('footer.php');
    ?>

<?php
include_once('config.php');
if(isset($_GET["bid"]))
{
    $bid=$_GET["bid"];
    $cid=$_GET["cid"];
    
    $sql = "update car set st=0 where cid='$cid'";
                   if ($mysqli->query($sql) === TRUE) {
                    $sql = "update booking set st=0 where bid='$bid'";
                    if ($mysqli->query($sql) === TRUE) {
                    }
                   
                } else
                    echo "Error: " . $sql . "<br>" . $mysqli->error;
}
?>