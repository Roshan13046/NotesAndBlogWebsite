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
        Error handling in php
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
                <h1>Error Handling</h1>
                <h3>Example 1</h3>
                <?php
                    function errorHandler1($error,$errStr,$errfile,$errline,$errcontext){
                        echo "<p><strong>Error : </strong> [$error] $errStr.</p>";
                    }
                
                //Set error handle
                set_error_handler("errHandler1");
                echo filesize("noSuchFile.txt");
                ?>
                
                <h3>Example2</h3>
                <?php 
                    function calculateFileSize($file){
                        if(file_exists($file)){
                            trigger_error($file." does not exists and can't give the size",$_USER_WARNING);
                            return false;
                        }else{
                            return filesize($file);
                        }
                    }
                
                    function errorHandler2($errorno,$errStr,$errfile,$errline,$errcontext){
                        $log = "ERROR[$errno] on ",date("d/m/y H:i:s")."\r\n\n";
                        
                        $log .= "Details : $errStr . \r\n";
                        $log .= "Location: In $errfile on line $errline"."\r\n";
                        $log .= "Varaibles : ".print_r($errcontext,true)."\r\n";
                        
                        error_log($log,3,"Logs/errorhandlingerrors.log");//file remaining to create in log folder
                        error_log($log,1,"roshanpk.raut@gmail.com/");
                        die("<p>ERROR has Occured , Please try again later . </p>");
                    }
                set_error_handler("errorHandler2");
                echo calculateFileSize("inexistingFile.txt");
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