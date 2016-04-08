<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");



$conn = new mysqli("localhost", "root", "PASSWORD", "companyDB");

$result = $conn->query("SELECT emp_no, first_name, last_name FROM employee");

$outp = "";
while($rs = $result->fetch_array(MYSQLI_ASSOC)) {
    if ($outp != "") {$outp .= ",";}
    $outp .= '{"EmployeeNumber":"'  . $rs["emp_no"] . '",';
    $outp .= '"FirstName":"'   . $rs["first_name"]        . '",';
    $outp .= '"LastName":"'. $rs["last_name"]     . '"}';
}
$outp ='{"records":['.$outp.']}';
$conn->close();

echo($outp);
?>
