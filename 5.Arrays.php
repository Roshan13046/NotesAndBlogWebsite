<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,
initial-scale=1">
    <title>
        5.Arrays
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
        <h1>Arrays </h1>
        <p>
            <?php                
                $carArray = array("Maruti","BMW","Audi","Innova")    ;
                echo($carArray);
                echo("<br/>");
                print_r($carArray);  
                echo "<p> Car makes: Element one</p>";
                echo $carArray[0];echo("<br/>");
                echo $carArray[1];echo("<br/>");
                echo $carArray[2];echo("<br/>");
                
                echo"KeyValue Pairs<br/>";
                $basket1 = array("e"=>"Eggs","m"=>"Meat","b"=>"Bread","but"=>"Butter");   
                $basket2 = array("e"=>"Eggs","b"=>"Bread","m"=>"Meat","but"=>"Butter");
                echo "Basket1 : <br/>";
                print_r($basket1);
                echo "Basket2 : <br/>";
                print_r($basket2);
                echo("<br/>");      
                echo("basket1 == basket2")
                var_dump($basket1 == $basket2);//order  dont matters
                echo("<br/>");
                echo("basket1 === basket2");//order matters
                var_dump($basket1 === $basket2);    
                echo("basket1 <> basket2");
                var_dump($basket1 <> $basket2);             echo("basket1 != basket2");
                var_dump($basket1 != $basket2);  
            
                $basket3 = $basket1+$basket2;
                var_dump($basket3);
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
