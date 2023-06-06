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
    include_once('header1.php');
    ?>
    <div class="content">
        <div id="head1">DELETE SELECTED CARS</div>
        <div class="content1">
        <table border=1>
            <tr>
            <td><b>CID</b></td>
            <td><b>Car Name</b></td>
            <td><b>Vehicle No</b></td>
            <td><b>AC Per KM</b></td>
            <td><b>Non AC Per KM</b></td>
            <td><b>AC Per Day</b></td>
            <td><b>Non AC Per Day</b></td>
            <td><b>Action</b></td>
                    
            </tr>
            <?php
            include_once('config.php');
            $x = 1;
            

            $sql = mysqli_query($mysqli, "SELECT * FROM car");
            while ($rs = mysqli_fetch_array($sql)) {
            ?>
            <tr>
            <td><?php echo $rs['cid']; ?></td>
            <td><?php echo $rs['cname']; ?></td>
            <td><?php echo $rs['v1']; ?></td>
            <td><?php echo $rs['v2']; ?></td>
            <td><?php echo $rs['v3']; ?></td>
            <td><?php echo $rs['v4']; ?></td>
            <td><?php echo $rs['v5']; ?></td>
            <td><a href="deletecar.php?cid=<?php echo $rs['cid']; ?>"><img src="delete.png"></a></td>
                
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

if(isset($_GET["cid"]))
{
    $cid=$_GET["cid"];
    $sql = "delete from car where cid='$cid'";
                   
                   
                   if ($mysqli->query($sql) === TRUE) {
                   //echo '<script>alert("Car Delete Successfully")</script>';
                    header('Location: deletecar.php');
                    echo "";
                } else
                    echo "Error: " . $sql . "<br>" . $mysqli->error;
}
?>
