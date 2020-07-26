<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,
initial-scale=1">
    <title>
        File handling in php
    </title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <style>
        h1 {
            color: fuchsia;
        }
        h3{           
            color: rebeccapurple;
        }
    </style>
</head>
<body>
   <div class="container-fluid">
        <h1>File handling in php</h1>
        
        <h3>fopen/fclose</h3>
        <?php 
            if(file_exists("1.19.fileHandling.txt")){
                echo "file Opened"."<br/>";
                $file = fopen("1.19.fileHandling.txt","r");
                fclose($file);
            }else{
                echo "File doen't exists";
            }
       
        ?>
       
       <h3>fread</h3>
       <?php 
            $file = fopen("1.19.fileHandling.txt","r") or die("We can't open the file .");
            $fileContent = fread($file,filesize("1.19.fileHandling.txt"));
            fclose($file);
       //reading the file content
            var_dump($fileContent);
       ?>
       <h3>file_get_contents</h3>
       <?php
        //read the file without opening the file
       $fileContent = file_get_contents("1.19.fileHandling.txt") or die("Can't read the file contents.");
       var_dump($fileContent);
       
       ?>
       
       <h3>file function: </h3>
       <?php 
        //this is to read the file line by line  and stores the liines in the form of array.
            $fileContent = file("1.19.fileHandling.txt") or die("Unable to open the file");
            var_dump($fileContent);
       echo"<br/>";
       
       foreach($fileContent as $line){
           echo $line."<br/>";
       }
       
       ?>
       
       
       <h3>fwrite</h3>
       <?php
        //to write any content inside the file using fwrite function. this function deletes all the previous file content and writes new content .
       $file = fopen("1.19.fileHandling.txt");
       fwrite($file,"namastey ! file handling is now going to be easy") ;
       $fileContent = file("1.19.fileHandling.txt") or die("Unable to read file");
       var_dump($fileContent);       
       
       ?>
       <h3>file_put_contents</h3>
       <?php 
        //this function will also erase everything and put the new content there
       file_put_contents("1.19.fileHandling.txt","\r this is a new content add to the file by erasing previous contents.") or die("Unable to put contents nto the file");
       $fileContent = file("1.19.fileHandling.txt") or die("Unable to read file");
       var_dump($fileContent); 
       
       //FILE_APPEND in file 
       file_put_contents("1.19.fileHandling.txt","\r<br/>Append contents.",FILE_APPEND) or die("Unable to Append  contents nto the file");
       $fileContent = file("1.19.fileHandling.txt") or die("Unable to read file");
       var_dump($fileContent); 
       
       ?>
    
    </div>
    
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/j
query.min.js">
    </script>
    <script src="js/bootstrap.min.js">
    </script>
</body>
</html>
