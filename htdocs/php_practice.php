<!-- Hello Girl
<h1>Hello!</h1>
<style>
    h1{
        color:yellowgreen;
    }
</style>
<script>
    alert("Hello!")
</script> -->
<?php
    // echo "<b>Hello Wolrd</b>";   
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- <h1>Hello Everybodyng</h1> -->
    <?php
        /*echo "Hello";
        
        $color = "Red";
        $Color = "Blue";

        echo $color;
        echo $Color;

        $_ = 5;

        echo $_;

        var_dump($color);
        var_dump($_);
        var_dump(3.1);
        var_dump(true);
        var_dump([1,2])
        
        $x = 5;

        function test(){
            //$x = 10;
            static $x = 10;
            echo $x;
            $x++;
            echo "<br>";
        }


        test();
        test();
        test();
        test();
        test();
        test();
        test();
        test();
        test();
        test();
        test();
        test();
        test();
        test();
        test();
        test();
        test();
        test();
        test();
        test();
        test();
        test();
        test();
        test();
        test();
        test();
        test();
        test();
        test();
        
        echo $x;*/

        /*echo ("Hello"), ("Hello"), ("Hello");
        echo "World", "World";
        print ("Hello");
        print "World";*/

        //$x = echo("Hello");
        //echo $x,"";

        // $a = (object) "Michael Jorkson";
        // $b = (object) "5";
        // $c = (object) "4.1";
        // $d = (object) true;
        // $e = (object) [1,2,3];
        // $f = (object) new stdClass();
        // $g = (object) null;
        // $h = (object) fopen("php_practice.php", "r");

        // unset($a);//remove variable

        // var_dump($a);
        // echo "<br>";
        // var_dump($b);
        // echo "<br>";
        // var_dump($c);
        // echo "<br>";
        // var_dump($d);
        // echo "<br>";
        // var_dump($e);
        // echo "<br>";
        // var_dump($f);
        // echo "<br>";
        // var_dump($g);
        // echo "<br>";
        // var_dump($h);
        // echo "<br>";

        // $a = pi();
        // echo $b;

        // echo abs(6);

        // echo sqrt(3);

        // echo round(5.4);

        // echo rand(5, 20);

        //constants


        // echo strlen($a);
        
        /*$x= "Edwin Cruz";
        echo str_replace("Cruz","Edwin", $x);
        
        echo trim("Hello        World!    ");
        var_dump(explode("u", $x));*/

        ////echo "Hello " . "World";

        //$x = "Hello";
       // $y = "Love";

        //echo $x . " " . $y, "<br>";
        //echo "$x $y <br>";
        //echo "Juan \";

       // $x = 10;
        //define("_GREETING", "Hello World!");

        //echo $x;
        //var_dump( _GREETING);

        //const _GREETING2 = "Hello People!";
        //echo _GREETING2;
        //function test(){
       //     echo _GREETING2;
        //}
        //test();

        //echo $x;
        //unset(_GREETING);
        //echo _GREETING;

       // echo 10 + 50000 + 68888888888888888888888888888888888, "<br>";

       // echo 50 - 10000000, '<br>';

        //echo 6623355 - 500 + 500 - 10,'<br>'; // left to right

      //  echo 10 * 10 * 10, "<br>";

       // echo 10 / 5 / 2, "<br>";

        // multi and division
        //echo 10 / 5 * 2, "<br>";

        // add/sub and division/multi
       //echo 50 + 10 / 2, "<br>"; // multi/division before add/subtract

        //%modulus
       // echo 7 % 3,"<br>";

        // ** exponential
        //echo 10 ** 10, "<br>";

        // assignment

        // = equals
      //  $x = 10;
        //echo $x, "<br>";

        // +=
        //$x = $x + 10;
       // $x +=10;
        //echo $x, "<br>";

        // -=
       // $x = $x -10;
       // $x -=10;
       // echo $x, "<br>";

        // /=
       // $x = $x / 10;
       // $x /=10;
        //echo $x, "<br>";

        // *=
        //$x = $x * 10;
        //$x *= 10;
        //echo $x, "<br>";



        //comparison
        // == equals to = similar value
        //var_dump(10 == "10");
        // === identical = similar value and data types
        //var_dump(10 === "10");
        // != not equals to = not similar value
        //var_dump(10 != "10");
        //var_dump(10 <> "10");
        // !== not identical = not similar value or not similar data types
        //var_dump(10 !== "10");
        // < less than = check if first value is less than right value
        //var_dump(10 < "10");
        // > greater than =  check if first value is greater than second value
        //var_dump(10 > "10");
        // <= less than or equals to
        //var_dump(10 <= "10");
        // >= greater than or equals to
        //var_dump(10 >= "10");
        //<=> spaceship = check if first value is less than or equals or greater than second value
        //var_dump(1 <=> "2");
        //var_dump(2 <=> "2");
        //var_dump(3 <=> "2");

        //$x= 10;
        //echo ++$x, "<br>";

        //$y = 10;
        //echo $y++, "<br>";
        //echo $y,"<br>";

        
        //pre increment/decrement

        // $x = 5;
        // echo $x++;

        // //post increment/decrement

        // $y = 5;
        // echo ++$y;

        //Logical

        // var_dump(true && true); //true
        // var_dump(5==="5"  && 5===5); // both true

        // union
        // $x = [1, 2, 3];
        // $y = [3=>4,5,6,7];

        // $z = $x + $y;

        // print_r($x);
        // print_r($y);
        // print_r($z);

        //equal to
        // $x = [1, 2, 3];
        // $y = [2=>3, 1=>2, 0=>1];
        // echo($x == $y);

        // identical to
        // $x = [1, 2, 3];
        // $y = [2=>3, 1=>2, 0=>1];
        // echo($x === $y); //false

        // decision making statements
        
        // if (4 == '4h'){
        //     echo "same";
        // }elseif(6>5){
        //     echo "6 is greater than 5";
        // }else{
        //     echo "no";
        // }
        
        // $gender = "male";
        // if($gender = "female"){echo "woman";}else{echo "mens";}
        // //confitional ? if true : if false
        // echo $gender = 'female' ? "woman" : "mens";
        // $x = $gender = 'female' ? "woman" : "mens";
        // echo $x;
        // $x = $gender ?? 'male';
        // echo $x;

        // $color = "B";

        // switch($color){
        //     case "R":
        //         echo "Red";
        //         break;
        //     case "B":
        //         echo "Blue";
        //         break;
        //     case "G":
        //         echo "Green";
        //         break;
        //     default:
        //         echo "No Color";
        // }

            //true and true
        // if (4 == "4" && 4 == 4){
        //     echo "True";
        // }
        // atleast 1 true
        // if (4 == "4" || 4 == 4){
        //     echo "True";
        // }
        //only 1 true cannot be both
        // if (4 == "4" XOR 4 == 4){
        //     echo "True";
        // }
        //reverse
        // echo !4=="4";

        //php Looping statements

        //while
        //     $x = 0;
        // while ($x < 5){
        //     echo "Hello World<br>";
        //     $x++;
        //     continue;
        // }

        //do while
        // do{
        //     echo $x; 
        //       $x++;
        // }while ($x < 5)
        //

        //for
        // for($x = 0; $x < 10; $x++){
        //     echo $x;
        // }

        //foreach

        // $x = aaray(1,2,3,4);

        // foreach($x as $key => value){
        //     echo $key."->".$value,"<br>";
        // }

        //$gender = 'male';
        //$x = $gender == "male" ? "MR.":"MS.";
        //$x = $gender == "male" ? "MR.":"MS.";
        
        //echo $x;

        //$color = "R" ?? "RED";

        //echo $color;

        //$color = null ?? "RED";

        //echo $color;

        /*$students = array(
        array("name"=> "Mary", "gender" => "Female"),
        array("name"=> "Ray", "gender" => "Male"),
        array("name"=> "Hardy", "gender" => "Male"),
    );

        foreach ($students as $student){
        echo "Name: "$student["name"] . "<br>";
        echo "Gender: "$student["gender"] . "<br>";
    }*/

    $students = array(
        array("name"=> "Mary", "age" => "16"),
        array("name"=> "Ray", "age" => "17"),
        array("name"=> "Hardy", "age" => "20"),
    );

        foreach ($students as $student){
        echo "<h1>Name: ".$student["name"] . "<h1>";
        echo "<ul>";
            echo "<li>". $student["gender"] ."</li>";
            echo "<li>". $student["age"] ."</li>";
        echo "</ul>";
    }











        




    ?>

   <ol>
        <!-- <?php for($x = 1; $x <= 10; $x++){ ?>
           <li> item <?php echo $x; ?></li>
        <?php } ?> -->


       
        <?php
         $x = array ("mike", "john", "jane", "mary");
        foreach($x as $value){ ?>
            <li> <?php echo $value; ?> </li>
        <?php } ?>
    </ol>



    
</body>
</html>