<?php
class exampleException {

    function checkDivisor($num) {
        if ($num == 0) {
            throw new Exception("Division by zero is not allowed.");
        }
        return true;
    }
}

$obj = new exampleException();

try {
    $obj->checkDivisor(0);  
} catch (Exception $e) {
    echo "Exception occurred: " . $e->getMessage();
} finally {
    echo " Process completed.";
}
?>