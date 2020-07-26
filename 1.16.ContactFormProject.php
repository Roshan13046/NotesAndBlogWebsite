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
        contact form
    </title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <style>
        h1 {
            color: fuchsia;
        }

        .contactform {
            border: 1px solid black;
            margin-top: 50px;
            border-radius: 15px;

        }

    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-offset-1 col-sm-10 contactform">
                <h1>Contact Us : </h1>

                <?php
                //User input variables
                $name = $_POST["name"];
                $email = $_POST["email"];
                $message = $_POST["message"];
                
                //error messages
                $missingName ='<p><strong>Please Enter your name!</strong></p>';
                $missingEmail = '<p><strong>Please Enter your Email!</strong></p>';
                $invalidEmail = '<p><strong>Please Enter valid Email!</strong></p>';
                $missingMessage ='<p><strong>Please Enter message!</strong></p>';
                
                
                    //if the user has submited the form
                    if($_POST["submit"]){
                        //check for errors
                        if(!$name){
                            $errors .= $missingName;
                        }else{
                            $name = filter_var($name,FILTER_SANITIZE_STRING);
                        }
                        
                        if(!$email){
                            $errors .= $missingEmail;
                        }else{
                            $email = filter_var($email,FILTER_SANITIZE_EMAIL);
                            if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
                                $errors .= $invalidEmail;
                            }
                        }
                        
                        if(!$message){
                            $errors .= $missingMessage;
                        }else{
                            $message= filter_var($message,FILTER_SANITIZE_STRING);
                        }
                        //if there are many errors
                        if($errors){
                            $resultMessage = '<div class="alert alert-danger">'.$errors.'</div>';
                        }else{
                            //if no errors
                            $to = "roshanpk.raut@gmail.com";
                            $subject = "Contact";
                            $message = "
                            <p>Name : $name.</p>
                            <p>Email : $email.</p>
                            <p>Message :</p>
                            <p><strong>$message</strong></p>
                            ";
                            
                    $headers = "Content-type:text/html";
                    
                            if(mail($to,$subject,$message,$headers)){
//                                $resultMessage = '
//                                    <div class="alert alert-success">Thanks for your Email message.We will Contact you soon.</div>
//                                ';
            header("Location: 2.16.ContactFormProject.php");                         
                            }else{
                                $resultMessage = '
                                    <div class="alert alert-warning">Unable to send Email.Please Try again.</div>';
                            }
                        }
                        echo $resultMessage;
                    }
                
                                //send email
                                    //if success
                                        //print success mesg
                                    //fails
                                        //print warning mesg
                    //print the resultant message
                //    echo $resultMessage;
                ?>




                <form action="1.16.ContactFormProject.php" method="post">

                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text" name="name" id="name" placeholder="Name" class="form-control" value="<?php echo $_POST['name'];?>">
                    </div>

                    <div class="form-group">
                        <label for="emal">Email:</label>
                        <input type="text" name="email" id="email" placeholder="Email" class="form-control" value="<?php echo $_POST['email'];?>">
                    </div>

                    <div class="form-group">
                        <label for="message">Message:</label>
                        <textarea type="text" name="message" class="form-control" rows="6">
                        <?php
                            
                            //this is to keep the data after clicking the send msg button
                            echo $_POST['message']; 
                            
                            
                            ?>
                        </textarea>
                    </div>

                    <input type="submit" name="submit" class="btn btn-success btn-lg " value="Send Message">
                </form>
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/j
query.min.js">
    </script>
    <script src="js/bootstrap.min.js">
    </script>
</body>

</html>
<?php 
ob_flush();
?>
