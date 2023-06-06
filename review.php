<head>
    <link href="StyleSheet.css" rel="stylesheet" />

    <title>
        <?php
        include_once('title.php');
        ?>
    </title>
</head>
<?php
include_once('header3.php');
?>
<div class="content">
    <div id="head1">VEHICLE RENTAL SERVICE FEEDBACK</div>
    <div class="content1">
        <form action="review.php" method="post">
            <center>
            <table>
            <tr>
                    <td>Vehicle Service Feedback</td>
                    <td><textarea name="f1" id="" cols="40" rows="8"></textarea></td>
                    <td></td>
                </tr>
                
                <tr>
                    <td></td>
                    <td><input type="submit" name="review" value="Submit" required></td>
                    <td></td>
                </tr>
            </table>
            </center>
        </form>
    </div>
</div>
<?php
session_start();
include_once('footer.php');
include_once('config.php');
if (isset($_POST["review"])) {
    $uname=$_SESSION['uname'];
    $f1=$_POST['f1'];
    $sql = "INSERT INTO feedback  (review,uname) VALUES ('$f1','$uname')";
   
if ($mysqli->query($sql) === TRUE) {
        echo '<script>alert("Feedback submit Successfully")</script>';
        echo "";
    } else
        echo "Error: " . $sql . "<br>" . $mysqli->error;
 }
?>