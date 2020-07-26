<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,
initial-scale=1">
    <title>
        Objects
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
        <?php 
         class car{
             //properties
            public $make ="Toyota"    ;
            private $status = "on" ;
             
             //methods 
             //bydefault data members and member functions //are public in php
             function turn_off(){
                 $this->status = "off";
             }     
             
             function check_status(){
                 return $this->status;
             }
         }
        
        $myCar = new car;
        var_dump($myCar);
        echo $myCar->make;
       // echo $myCar->status;//ERROR : private members can only be accessed by member functions
        
        //calling the turnOFF function
        $myCar->tur_off();
        var_dump($myCar);
        echo "<br/>";
        echo $myCar->check_status();
        
        //null variables
        $varA ;
        echo $varA;
        $varA = 23;
        echo $varA;
        ?>
        
    </div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/j
query.min.js">
    </script>
    <script src="js/bootstrap.min.js">
    </script>
</body>

</html>
