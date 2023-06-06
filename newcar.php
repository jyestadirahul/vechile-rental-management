<head>
    <link href="StyleSheet.css" rel="stylesheet" />

    <title>
        <?php
        include_once('title.php');
        ?>
    </title>
</head>
<?php
include_once('header1.php');
?>
<div class="content">
    <div id="head1">ADD NEW VEHICLE</div>
    <div class="content1">


        <form action="newcar.php" method="post" enctype="multipart/form-data">
            <center>
            <table>
                <tr>
                    <td>Vehicle Name</td>
                    <td><input type="text" name="cname" placeholder="" required></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Vehicle Number Plate</td>
                    <td><input type="text" name="v1" placeholder="" required></td>
                    <td></td>
                </tr>
                <tr>
                    <td>AC Fare Per KM(Rs)</td>
                    <td><input type="number" name="v2" placeholder="" required></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Non-AC Fare Per KM(Rs)</td>
                    <td><input type="number" name="v3" placeholder="" required></td>
                    <td></td>
                </tr>
                <tr>
                    <td>AC Fare Per Day(Rs)</td>
                    <td><input type="number" name="v4" placeholder="" required></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Non-AC Fare Per Day(Rs)</td>
                    <td><input type="number" name="v5" placeholder="" required></td>
                    <td></td>
                </tr>             
                <tr>
                    <td>Image</td>
                    <td><input type="file" accept="image/png, image/jpeg" name="v6" placeholder="" required></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" name="sign" value="Submit" required></td>
                    <td></td>
                </tr>
            </table>
            </center>
        </form>
    </div>
</div>
<?php
include_once('footer.php');
include_once('config.php');
if (isset($_POST["sign"])) {
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["v6"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    // Check if image file is a actual image or fake image

    if (move_uploaded_file($_FILES['v6']['tmp_name'], $target_file)) {
        //echo "File uploaded successfully!";  
    } else {
        //echo "Sorry, file not uploaded, please try again!";  
    }
    $cname=$_POST["cname"];
    $v1=$_POST["v1"];
    $v2=$_POST["v2"];
    $v3=$_POST["v3"];
    $v4=$_POST["v4"];
    $v5=$_POST["v5"];
    
    $v6=$target_file;
    $sql = "INSERT INTO car  (cname,v1,v2,v3,v4,v5,v6) VALUES ('$cname','$v1','$v2','$v3','$v4','$v5','$v6')";

if ($mysqli->query($sql) === TRUE) {
        echo '<script>alert("Add New Car Successfully")</script>';
        echo "";
    } else
        echo "Error: " . $sql . "<br>" . $mysqli->error;
 }
?>