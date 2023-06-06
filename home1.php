<html>

<head>

    <title></title>

    <link href="StyleSheet.css" rel="stylesheet" />
<style>
    p{
        font-size: 18px;
        line-height: 1.6;
    }
    </style>
</head>

<body>
    <?php
    include_once('header1.php');
    ?>
    <div class="content2">
        <div id="head1">AVAILABLE VEHICLES</div><br><br>
        
            <?php
            include_once('config.php');
            $x = 1;
            $cat = "Mobile";

            $sql = mysqli_query($mysqli, "SELECT * FROM car");
            while ($rs = mysqli_fetch_array($sql)) {
            ?>
             <a href="#"> 
                <div class="box2">
               
                    <img src="<?php echo $rs['v6']; ?>" width=200px ><br><br>
                   <p style="font-size:20px;font-weight:bold;"><?php echo $rs['cname']; ?></p>
                    <p>AC Fare:Rs <?php echo $rs['v2']; ?>/KM</p>
                    <p>AC Fare:Rs <?php echo $rs['v3']; ?>/Day</p>
                    <p>NON AC Fare:Rs <?php echo $rs['v4']; ?>/KM</p>
                    <p>NON AC Fare:Rs <?php echo $rs['v5']; ?>/Day</p>
                  
                    
                   
                </div>
                </a>


                

            <?php
            }
            ?>
        
    </div>
   

</body>

</html>
<?php
    include_once('footer.php');
    ?>
<?php

?>