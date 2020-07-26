<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,
initial-scale=1">
    <title>
        Filter User Inputs
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
        <h1>Filter User inputs </h1>        
        
        <h1>Filters : </h1>
        <?php 
            //username example
        $myUsername = '<script>window.alert("Namastey! Roshan Here .")</script>';    
        echo"Before Filter Username : ".$myUsername."<br/>";
        $myUsername = filter_var($myUsername,FILTER_SANITIZE_STRING);
        echo "After FIlter username : ".$myUsername."<br/>";
        
        //email example
        $myEmail = "roshan  p k . raut @///  gmail.c \\\//om";
        echo "Before filter email : ".$myEmail."<br/>";
        $myEmail = filter_var($myEmail,FILTER_SANITIZE_EMAIL);
        echo "After filter Email : ".$myEmail;
        
        //url example
        $myURL = "http:// www. Raut web    So         lu ti ons .c   om";
        echo"Before filter URL : ".$myURL."<br/>";
        filter_var($myURL);
        
        $myURL = filter_var($myURL,FILTER_SANITIZE_URL);
        echo "After filter URL : ".$myURL."<br/>";
        
        ?>
        
<!--        //validations -->
        <h1>Validations :</h1>
        <?php 
            //Email Validaton
            $email1 = "ram # gmail .com";
            $email2 = "ram @ gmail .com";
            $filterEmail1 = filter_var($email1,FILTER_SANITIZE_EMAIL);
            $filterEmail2 = filter_var($email2,FILTER_SANITIZE_EMAIL);
            
            echo "email1 Before filter : ".$email1."<br/>";
            echo "email2 Before filter : ".$email2."<br/>";
            echo "email1 After filter : ".$filterEmail1."<br/>";
            echo "email2 After filter : ".$filterEmail2."<br/>";
            //validating the email
            if(filter_var($filterEmail1,FILTER_VALIDATE_EMAIL)){
                echo "Valid Email <br/>";
            }else{
                echo "Invalid Email<br/>";
            }
            
            //URL validation
            $url1 = "http  :/ /ww   w. raut     w e b sol utions .c om";
            echo"URL before filter : ".$url1."<br/>";
            
            if(filter_var($url1,FILTER_VALIDATE_URL)){
                echo "VALID URL <br/>";
            }else{
                echo "INVALID URL <br/>";
            }
            $filterUrl1 = filter_var($url1,FILTER_SANITIZE_URL);
            echo"URL after filter : ".$filterUrl1."<br/>";
            if(filter_var($filterUrl1,FILTER_VALIDATE_URL)){
                echo "VALID URL <br/>";
            }else{
                echo "INVALID URL <br/>";
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
