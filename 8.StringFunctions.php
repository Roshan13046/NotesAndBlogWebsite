<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,
initial-scale=1">
    <title>
        String Functions
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
        <h1>String functions</h1>
        <?php 
            $message = "Welcome ! to my Roshan's website ";
            echo $message."<br/>";
        //string length functiond
            echo "Message len : ".strlen($message)."<br/>";
        //string word count
            echo "Word count : ".str_word_count($message)." words in message.<br/>";
        //string replace function
            echo str_replace("Roshan's","Shubham's",$message)."<br/>";
           
            $message = "Welcome ! to my Roshan's website ";
        
        //now it will print the replaced string but the actual message will not get replaced.
            echo str_replace("Roshan's","Shubham's",$message,$number_of_words_replaced)."<br/>";
        echo "Number of words replaced : $number_of_words_replaced"
        //Note: actual message will not changed after replacig.
            echo "No chnage in message : "$message."<br/>";
            echo "Reverse string".strrev($message)."<br/>";
        
        ?>
        
    </div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/j
query.min.js">
    </script>
    <script src="js/bootstrap.min.js">
    </script>
</body>

</html>
