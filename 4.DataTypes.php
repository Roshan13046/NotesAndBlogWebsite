<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,
initial-scale=1">
    <title>
        Variables
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
        <h1>Varaiables </h1>
        <p>
            <?php                
                $name ="Roshan"    ;
                echo "My nname is ".$name." Khan Ahmed <br/>";
                $x = 2;
                $y = 3;                
                $z = $x + $y;
                var_dump($x);echo"<br/>";
                var_dump($y);echo"<br/>";
                var_dump($z);echo"<br/>";
                $float = 344.556;
                echo "<br />";
                var_dump($float);
                echo "<br />";
                echo "$x + $y = $z";
            
                echo"<p> Booleans: </p>";
                $bolVar1 = (23 ===23)  ;
                $bolVar2 = (23 ==22)  ;
                $bolVar3 = ($bolVar1 && $bolVar2) || $bolVar1 ;    
                var_dump($bolVar1);echo "<br />";
                var_dump($bolVar2);echo "<br />";
                var_dump($bolVar3);echo "<br />";
                var_dump(!$bolVar3);echo "<br />";
                echo "<br />";
            ?>
        </p>
        
    </div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/j
query.min.js">
    </script>
    <script src="js/bootstrap.min.js">
    </script>
</body>

</html>
