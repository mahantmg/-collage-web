<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $name= "Mahant";
    echo $name."! Welcome to PHP";
    
    $a=10;
    $b=20;
    echo"<br><br> Addition:";
    echo $a+$b;
    echo "<br><br> Subraction:";
    echo $a-$b;
    echo "<br><br> multiplication:";
    echo $a*$b;
    echo "<br><br> division:";
    if($b==0){
        echo"division by zero is not possible";
    }
    else{
    echo $a/$b;
    }

    $n=5;
    for($i=1;$i<=10;$i++){
        echo"<br>".$i."*".$n."=".$i*$n;
    }
    ?>
</body>
</html>