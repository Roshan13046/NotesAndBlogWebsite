<?php 
    ob_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,
initial-scale=1">
    <title>
        File handling in php
    </title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <style>
        h1 {
            color: fuchsia;
        }

        h3 {
            color: rebeccapurple;
        }

        .containingDiv {
            border: 1px solid brown;
            margin-top: 100px;
            border-radius: 15px;
        }

    </style>
</head>

<body>
    <?php 
    //iincuding header
        include"1.18.headerFile.php";
    ?>

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-offset-1 col-sm-10 containingDiv">
            <h1>Cookies : </h1>
                <?php
                    setcookie("username","Roshan",time()+3*24*60*60);
                setcookie("username","",time()-1000);           print_r($_COOKIE);
                if($_COOKIE["username"]){
                    echo"Value of username.$_COOKIE["username"]<br/>";                    
                }else{
                    echo "Cookie not set .";
                }
            ?>
            </div>
               
    </div>
    <?php
    //including footer file
        include "2.18.footerFile.php";    
    ?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js">
    </script>
    <script src="js/bootstrap.min.js">
    </script>
</body>

</html>

<?php
ob_flush();
?>