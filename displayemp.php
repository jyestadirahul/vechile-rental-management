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
        <div id="head1">DISPLAY EMPLOYEE</div>
        <div class="content1">
        <table border=1>
            <tr>
            <td><b>EID</b></td>
            <td><b>Employee Name</b></td>
            <td><b>DOB</b></td>
            <td><b>Address</b></td>
            <td><b>Contact No</b></td>
            <td><b>E-Mail</b></td>
            <td><b>License</b></td>
            <td><b>Aadhar No</b></td>
            
           
                    
            </tr>
            <?php
            include_once('config.php');
            $x = 1;
            

            $sql = mysqli_query($mysqli, "SELECT * FROM employee");
            while ($rs = mysqli_fetch_array($sql)) {
            ?>
            <tr>
            <td><?php echo $rs['eid']; ?></td>
            <td><?php echo $rs['ename']; ?></td>
            <td><?php echo $rs['dob']; ?></td>
            <td><?php echo $rs['addr']; ?></td>
            <td><?php echo $rs['cno']; ?></td>
            <td><?php echo $rs['email']; ?></td>
            <td><?php echo $rs['lic']; ?></td>
            <td><?php echo $rs['ano']; ?></td>
            
           
                
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

