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
        <h1>Array Functions</h1>
        <?php 
          $basket1 = array("bread","milk","butter","egg");
          $basket2 = array("milk","bread","fish","meat","juice");
          $basket = array_merge($basket1,$basket2);
          print_r($basket);
          echo "<br/>";    
          echo "Count of total items in basket : ".count($basket)."<br/>";    
        //count each item in array like Hashmaps
        $count = array_count_values($basket);
        echo"Count of each element in basket : <br/>";
        print_r($count);
        echo "Milk count :".$count["milk"];
        echo"<br/>";
        //in_array(keyItem,arrayName);
            if(in_array("milk",$basket))        {
                echo "milk is present in basket<br/>";
            }else {
                echo "milk is absent in basket";
            }
        //push items in array
        array_push($basket,"Apple");
        echo "After adding apples items in basket : ";
        print_r($basket);
        if($_GET["submit"]){
            if($_GET["item"]){
                array_push($basket,$_GET["item"]);
            }
        }
        echo "Shopping basket : ";
        print_r($basket);
        echo"<br/>";
        //splice function : to delete from items and then add items .
        //array_splice(arrayName,startIndex,No of items to delete from starting index,Adding items array);
        array_splice($basket,0,0,array("Colgate","Brush"));
        echo "Shopping basket : ";
        print_r($basket);
        echo"<br/>";
        
        //deleting 10 items from basket array and adding 3 items from index 2
        array_splice($basket,2,10,array("aa","bb","cc"));
        echo "Shopping basket : ";
        print_r($basket);
        echo"<br/>";
        
        //sorting the arrays
        $numbers = array(1,2,3,4,5);
        sort($numbers);
        print_r($numbers);
        rsort($numbers);
        print_r($numbers);
        
        //associative array sorting 
        $keyVal = array("a"=>1,"b"=>4,"c"=>7,"d"=>5,"e"=>3);
        echo "<br/>Number array : ";
        print_r($keyVal);
        //sorting according to their values
        asort($keyVal);
        echo"<br/>Sorting by values : ";
        print_r($keyVal);
        //sorting according to their keys
        ksort($keyVal);
        echo"<br/>Sorting by key : ";
        print_r($keyVal);
        
         //sorting according to their values in reverse order
        arsort($keyVal);
        echo"<br/>Reverse Sorting by values : ";
        print_r($keyVal);
        //sorting according to their keys in reverse order
        krsort($keyVal);
        echo"<br/>Reverse Sorting by key : ";
        print_r($keyVal);
        
        ?>
        <form method="get">
            <label for="item">Add item in basket</label>
            <input type="text" name="item" id="item">
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
