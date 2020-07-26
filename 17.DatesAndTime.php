<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,
initial-scale=1">
    <title>
        Dates and Times
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
        <h3>Date using date() function</h3>
    <?php 
        //formatting the dates and times using php
        //Day of the month
            //d (01/31)->two digits with leading zeros 
            //j (1/31)->without leading zeros
        //Month:
            //m (01/12)->two dogits with leading zeros
            //M (Jan)->text as the abbreviation
            //F(January)->text for full month
        //Year:
            //y (00/15)->two digits
            //Y (2000-2020)->four digits
        //Separators:
            //hypens : (-)
            //dots : (.)
            //slashes: (/)
            //spaces : ( )
        $today = date("j-m,y");
        echo $today."<br/>";
        $today = date("d / M / Y");
        echo $today."<br/>";
        $today = date("j - M - y");
        echo $today."<br/>";
        
    ?>    
    
        <h3>Time using the date function</h3>
    <?php 
           //format the time string :
        //hour:
            //h (01-12)->12 hour format with leading zeros
            //w (00-24)->24 hr format with leading zeros
        //minutes:
            //i (01-59)->min with leading zeros
        //seconds:
            //s (01-59)->sec with leading zeros
        //Ante meridian and Post Meridian
            //a ->lowercase
            //A->Upper case
        $today = date("h:i:s  a");
        echo $today."<br/>";
        echo date("W : I : S  A")."<br/>";
        
    ?>
        <h3>Current time stamp using time() function</h3>
        <?php 
            $timestamp = time();
        echo "Time stamp using Unix epoch in seconds from the beginning of the Unix system : ".$timestamp."<br/>";
                
        ?>
        
        <h3>Convert timestamp to time</h3>
        <?php             
            $time = date("F d ,Y h:i:s A");
            echo "Time is ".$time."<br/>";
        ?>
        
        <h3>Convert time to timestamp using mktime() function</h3>
        <?php 
            //Application : What Day of the week were you Born ? Guess the date in 1000 Days from now.
            $timestamp = mktime(15, 20 , 12 ,5 ,10 ,2020);
            echo "Timestamp is : ".$timestamp."<br/>";
            $time = date("F d ,Y, h:i:s A",$timestamp);
        echo " Time will be".$time."<br/>";
        ?>
        
        <h3>Find out the day of the week of the bith date</h3>
        <?php
            $timestamp = mktime(0,0,0,15,04,2020);
            $time = date("l",$timestamp);
            echo "Day of the birth date is ".$time."<br/>";
         ?>
        
        <h3>Date in 1000 days from now</h3>
        <?php 
            $timestamp = mktime(0,0,0,date("m"),date("d")+1000,date("Y"));
            $time = date("D d M , Y",$timestamp);
            echo "Date in 1000 days from now".$time
                ."<br/>";
        ?>
        
        
        
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/j
query.min.js">
    </script>
    <script src="js/bootstrap.min.js">
    </script>
</body>
</html>
