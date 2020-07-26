<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Online Notes</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap-theme.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

    <link href="styling.css" rel="stylesheet">
    <style>
        #container{
            margin-top: 130px;
        }
        #notepad,#allNotes,#done{
            display: none;
        }
        .buttons{
            margin-bottom: 20px;
        }
        textarea{
            width: 100%;
            max-width: 100%;
            font-size: 16px;
            line-height: 2.2em;
            border-left-width: 10px;
            border-right-width: 10px;
            border-color:darkviolet;
            color: darkviolet;
            background-color: lightgoldenrodyellow;
            padding: 10px;
        }
        
    
    </style>
</head>

<body>
    <!--    Navigation bar-->
    <nav role="navigation" class="navbar navbar-custom  navbar-fixed-top">
        <div class="container-fluid">
            <div class="class-header">
                
                <button type="button" class="navbar-toggle" data-target="#navbarCollapse" data-toggle="collapse">
                    <span class="sr-only">Toggle navigation </span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span> </button>
            </div>
            <div class="navbar-collapse collapse" id="navbarCollapse">
                <ul class="nav navbar-nav">
                    <li ><a href="#">My Profile</a></li>     <li class="active"><a href="#">My Notes</a></li>
                    <li><a href="#">My Blogs</a></li>
                    <li><a href="#">Help</a></li>
                    <li><a href="#">Contact us</a></li>
                </ul>
                <!--                check pull right class-->
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#">logged in as <b>username</b></a></li>
                    <li><a href="#">Log out</a></li>
                </ul>
            </div>
        </div>

    </nav>
<!-- Container-->
    <div class="container" id="container">
        <div class="row">
            <div class="col-md-offset-3 col-md-7">
                
                <div class="buttons">
                    <button id="addNote" type="button" class="btn btn-info btn-lg">Add Note</button>
                    <button id="edit" type="button" class="btn btn-info btn-lg pull-right">Edit</button>
                    <button id="done" type="button" class="btn btn-info green btn-lg pull-right">Done</button>
                    <button id="allNotes" type="button" class="btn btn-info btn-lg">All Notes</button>
                </div>
<!--                //text area -->
                <div>
                    <div id="notepad">
                        <textarea rows="10" ></textarea>
                    
                    </div>
                    <div id="notes" class="notes">
<!-- Some Ajax Call to a php file-->
                    
                    </div>
                
                </div>
             </div>
         </div>
     </div>
    
    
    
    <!--      Footer-->

    <footer class="footer">
        <div class="container">
            <span> Developed by Roshan Raut. &copy: 2019-<?php $today = date("y"); echo $today ?>.</span>
        </div>
    </footer>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
</body>

</html>
