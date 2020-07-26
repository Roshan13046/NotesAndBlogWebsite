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
        <h1>If else and Switch Statements : </h1>
        <?php 
        
        //if else 
            $haveSelfConfidence = true;
            if($haveSelfConfidence){
                echo " You will get success";
            }else{
                echo "No Success later";
            }
        //condition operator
        $ans = ($haveSelfConfidence)?"Success":"Failure";
        echo $x."<br/>";
        
        //switch 
        $option = 1;
        switch($option){
            case 1:
                echo "option 1 switched";
                break;
            case 2:
                echo"Option to switched";
                break;
            case "Beliver":
                echo"Beliver case switched";
                break;
            default:
                echo "Default case Switched";
                
        }
        
        
        
        ?>
        
    </div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/j
query.min.js">
    </script>
    <script src="js/bootstrap.min.js">
    </script>
</body>

</html>
