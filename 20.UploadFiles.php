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
        File handling in php
    </title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <style>
        h1 {
            color: fuchsia;
        }

        h3 {
            color: rebeccapurple;
        }

        .containingDiv {
            border: 1px solid brown;
            margin-top: 100px;
            border-radius: 15px;
        }

    </style>
</head>

<body>
    <?php 
    //iincuding header
        include"1.18.headerFile.php";
    ?>

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-offset-1 col-sm-10 containingDiv">
                <h1>Upload file</h1>

                <!-- upload file in directory-->
                <?php
                    if($_POST["submit"]){
                        
                        //file details
                        $name = $_FILES["file"]["name"];
                        $type = $_FILES["file"]["type"];
                        $size = $_FILES["file"]["size"];
                        $fileerror = $_FILES["file"]["error"];
                        $temp_name=$_FILES["file"]["tmp_name"];                       $permanentdestination="Uploads/".$_FILES["file"]["name"];
                        
                        //Possible error messages to display
                        $nofileUpload ="<p><strong>Please Upload the file</strong></p>";
                        $fileAlreadyExists ="<p><strong>This File already exists</strong></p>";
                        $wrongFormat ="<p><strong>Invald file format : you can only upload .pdf and text files .</strong></p>";
                        $fileSizeLarge ="<p><strong>Please Upload Smaller size file upto 2MB</strong></p>";
                        
                        
                        //allowed file formats to upload
                            $allowedFileFormats = array("pdf"=>"application/pdf","text/plain" );
                        
                        
                        //check for errors
                       if($fileerror == 4){
                           $errors .= $nofileUpload;
                       }else{
                        //check these errors if only we have uploaded the file
                               if(file_exists($permanentdestination)){
                               $errors .= $fileAlreadyExists;
                               }
                               if($size > 2*1024*1024){ //size deciding factor
                               $errors .= $fileSizeLarge;
                               }
                               if(!in_array($type,$allowedFileFormats)){
                               $errors .= $wrongFormat;
                               }
                        
                           
                       } 
                        if($errors){
                            $resultMessage = "<div class='alert alert-danger'>$errors</div>";
                            echo $resultMessage;
                        }else{
                            if(move_uploaded_file($temp_name,$permanentdestination)){
                                $resultMessage = "<div class='alert alert-success'>File uploaded Successfully</div>";
                                echo $resultMessage;
                            }else{
                                $resultMessage = "<div    class='alert alert-warning'> Unable to upload file .Please try agan later.</div>";
                                echo $resultMessage;
                            }
                        }
                        
                        
                        
                        print_r($_FILES);
                        if($_FILES["file"]["error"]>0){
                            echo "<p>There are ERRORS :".$_FILES["file"]["error"]." </p>";
                        }else{
                            echo "<p>File name :".$_FILES["file"]["name"] ." </p>";
                            echo "<p>File type :".$_FILES["file"]["type"] ." </p>";
                            echo "<p>Temporary Location :".$_FILES["file"]["tmp_name"] ." </p>";
                            echo "<p>File Size:".$_FILES["file"]["size"] ." </p>";
                            
                            echo "<p>File Destination: Uploads/".$_FILES["file"]["name"]." </p>";                
                        }
                    }
                
                ?>





                <form method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="file">Choose file:</label>
                        <input type="file" name="file" id="file" placeholder="File">
                    </div>
                    <input type="submit" name="submit" class="btn btn-success btn-lg" value="Upload">
                </form>
            </div>

        </div>
    </div>
    <?php
    //including footer file
        include "2.18.footerFile.php";    
    ?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js">
    </script>
    <script src="js/bootstrap.min.js">
    </script>
</body>

</html>

<?php
ob_flush();
?>