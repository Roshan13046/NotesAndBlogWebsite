<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,
initial-scale=1">
    <title>
        Get and Post : 
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
        <h1>Get and Post : </h1>
        <?php 
            echo"<h1> GET : </h1>";
            print_r($_GET);
            if($_GET["submit"]){
                if($_GET["username"]){
                    echo $_GET["username"]."Exists in database<br/>";
                }else{
                    echo "Invalid User name<br/>";
                }
            }
            echo"<h1>POST : </h1>";
            print_r($_POST);    
            if($_POST["submit"]){
                if($_POST["country"]){
                    echo $_POST["country"]." is valid country<br/> ";
                }else{
                    echo "Invalid country<br/>";
                }
            }
        ?>
        <form method="get" action="12.GetAndPost.php">
            <label for="username">Username:</label>
            <input type="text" name="username" id="username">
            <input type="submit" name="submit" value="Submit">
        </form>
        <form method="post" action="12.GetAndPost.php">
            <label for="country">Country:</label>
            <input type="text" name="country" id="country">
            <input type="submit" name="submit" value="Submit">
        </form>
    </div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/j
query.min.js">
    </script>
    <script src="js/bootstrap.min.js">
    </script>
</body>

</html>
