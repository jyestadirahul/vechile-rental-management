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
    include_once('header3.php');
    include_once('config.php');
    session_start();
    ?>
    <div class="content">
        
        <div style="margin-left: auto;margin-right:auto;">
        <div style="margin:auto;padding-left:40%;font-size:18px;">
        <div style="width:200px;">
        <h1 style="background-color: yellow;">Thank You!</h1>
        </div>
        <?php
        $str=$_SESSION["str"];
        echo $str;
        ?>
        <br> <a href="return_list.php">Click here</a>
        </div>
        </div>
       
    </div>
</body>
</html>