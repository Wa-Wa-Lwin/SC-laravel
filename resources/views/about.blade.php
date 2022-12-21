<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>About Page</h1>
    <h4>
        I am <?php echo $a ; echo $n ?>
        {{ $n }} <br> {{$a}}
    </h4>
    <p>
    <?php  
    echo nl2br("New line will start from here\n in this string\r\n on the browser window"); 
    echo nl2br("\nNew line will start from here\n in this string\r\n on the browser window"); 
    echo nl2br("$a$n");
    echo "<br>";    
    echo nl2br("\r$a\n$n"); 
    echo "\nbalnaiuhsdyh\neretee\r\ncxbbnbmw"; 
    echo " One line after\r\n another line"; 
    ?> 
    </p>

    <?php 
    foreach($posts as $post){
        echo "<li>$post</li>"; 
    }
    ?>
    
</body>
</html>
