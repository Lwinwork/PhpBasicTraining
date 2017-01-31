<?php

    echo "Hello world";
    print("<br />");

    $var = 1;
    $tmp = ($var == 1) && false;
    var_dump($tmp);
    print("<br />");

    $tmp = ($var == 1) and false;
    var_dump($tmp)
    ?>
<?php
function tax($price){
$price=$price / 1.05;
return $price;
}
print(tax(105));




?>
