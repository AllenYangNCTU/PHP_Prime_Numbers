<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$start=3;
$end=1000;
$number=0;
$primearray=[];
for($i=$start;$i<$end;$i++){
    $flag=TRUE;
    for($j=2;$j<=floor(sqrt($i));$j++){
        if($i%$j==0){
            $flag=FALSE;
            break;
        }
    }
    if($flag){
        $primearray[]=$i;
        $number++;
    }
}
print("From ".$start." to ".$end." have ".$number." prime numbers<br>");
for($i=0;$i<$number;$i++){
    print($primearray[$i]." ");
}
?>
</body>
</html>