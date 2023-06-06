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
    include_once('header4.php');
    session_start();
    ?>
    <div class="content">
        <div id="head1">CAR BOOKING LIST</div>
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
            
           
                    
            </tr>
            <?php
            include_once('config.php');
            $x = 1;
            $uname=$_SESSION['uname'];
           
            $sql = mysqli_query($mysqli, "SELECT * FROM booking where st=1 and dname='$uname'");
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

