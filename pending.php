<html>

<head>

    <title><?php include_once('title.php'); ?></title>

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
    include_once('header3.php');
    session_start();
    ?>
    <div class="content">
        <div id="head1">EXTRA DAYS BALANCE AMOUNT</div>
        <div class="content1">
            <form action="payment.php" method="post">
            <table width=80%>
            <tr>
                <td>Starting Date</td>
                <td class="style1"><?php echo $_SESSION['sdate'] ?> </td>
                    
                </tr>
                <tr>
                <td>Ending Date</td>
                <td class="style1"><?php echo $_SESSION['edate'] ?></td>
                    
                </tr>
                <tr>
                <td>Current Date</td>
                <td class="style1"><?php echo $_SESSION['cdate'] ?></td>
                    
                </tr>
                <tr>
                <td>Fare</td>
                <td class="style1"><?php echo $_SESSION['fare'] ?></td>
                    
                </tr>
                <tr>
                <td>Pending Days</td>
                <td class="style1"><?php echo $_SESSION['days'] ?></td>
                    
                </tr>
                <tr>
                <td>Total Amount</td>
                <td class="style1"><?php echo $_SESSION['amt'] ?></td>
                    
                </tr>
                <tr>
                <td></td>
                <td> <input type="submit" name="pay" value="Payment Process"> </td>
                
                </tr>
                
            </table>
            </form>
        </div>
    </div>
</body>

</html>
<?php

if(isset($_POST["pay"]))
{
        echo '<script>alert("Amount Paid Successfully")</script>';
        header('Location: payment.php');
} 
?>
<style>
    .style1{
        font-weight: bold;
    }
</style>