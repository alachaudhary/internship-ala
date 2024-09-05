<?php
for($i=0; $i<=10; $i++){
    echo $i;
}


echo "<br>";
$i=0;
while($i!=10){
    echo $i;
    $i++;
}


echo "<br>";
$x=0;
do {
   echo "Hi this is do while loop";
   $x++;

}while($x< 1);
echo "<br>";
$arr=["red","blue","white"];
foreach($arr as $value)
{
    echo $value;
}

?>