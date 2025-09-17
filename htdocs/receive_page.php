<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <!-- get - send data thru url -->
    <!-- post - send data thru http -->
    
    <form action="receive_page.php" method="post">
        <label for="">Fullname: </label>
        <input type="text" name="fullname">
        <br>
        <label for="">Email: </label>
        <input type="email" name="email">
        <br>
        <input type="submit" name="btnSubmit">
    </form>
</body>
</html>





<?php
    $error_message = "";

    if(isset($_REQUEST['btnSubmit'])){ 
        if(empty($_REQUEST['fullname']) or empty($_REQUEST['email'])){
            $error_message = "All inputs are required!";
        } 
    } 
?>

<?php 
    if($error_message != ""){
        echo "Error: $error_message";
    }else{
        echo "Name:". $_REQUEST['fullname'] . "<br>";
        echo "Email:". $_REQUEST['email'] . "<br>";
    }
?>