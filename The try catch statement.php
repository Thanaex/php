<?php
function divide ($dividend,$divisor) {
    if($divisor == 0) {
        throw new Exception ("division by zero");
    } 
    return $dividend / $divisor;
}
try {
    echo divide (5,0);
} catch (Exception $e) {
    echo "unable to divide.";
}

?>