<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,
initial-scale=1">
    <title>
        functions
    </title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <style>
        h1 {
            color: fuchsia;
        }

    </style>
</head>
<body>
    <div class="container-fluid">
        <h1>functions : </h1>
        <?
        
        php 
            function welcome($name){
                echo "Namastey $name ,Welcome! To Roshan's Website <br/>";
            }
            welcome("Shubham");
            //fun with some return type
            function sum($x,$y){
                return $x+$y;
            } 
            $ans = sum(2,3);
            echo "sum of 2 + 3 = $ans <br/>";
        ?>
    </div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/j
query.min.js">
    </script>
    <script src="js/bootstrap.min.js">
    </script>
</body>

</html>
