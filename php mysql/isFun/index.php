<?php 

echo "<h1> PHP is Function here</h1>";

$var = 340;

echo is_int($var);
echo is_integer($var);
echo is_long($var);

echo "<br>";

if(is_long(234.334)){
    echo "Value is long <br>";
}else{
    echo "Value is not long <br>";
}

if(is_float(32.234)){
    echo "Value is float <br>";
}else{
    echo "Value is not flaot <br>";
}


?>