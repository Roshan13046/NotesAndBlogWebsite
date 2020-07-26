<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,
initial-scale=1">
    <title>
        Include php header and footer files 
    </title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <style>
        h1 {
            color: fuchsia;
        }
        h3{
            margin-top: 100px;
            padding: 20px;
            color: rebeccapurple;
        }
    </style>
</head>
<body>
    <?php 
        include"1.18.headerFile.php";
    ?>
    
    <div class="container-fluid">
    <h3>Including header files</h3>    
        
        
    </div>
    <?php
    //including footer file
        include "2.18.footerFile.php";    
    ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/j
query.min.js">
    </script>
    <script src="js/bootstrap.min.js">
    </script>
</body>
</html>
