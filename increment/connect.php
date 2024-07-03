<?php
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$address = $_POST['address'];
$password = $_POST['password'];
$phone = $_POST['phone'];


$conn = new mysqli('localhost', 'root', '', 'signup');
if ($conn->connect_error) {
    echo "$conn->connect_error";
    die('Connection Failed :' . $conn->connect_error);
} else {
    $stmt = $conn->prepare("insert into registration(fname, lname, address, password, phone)
            values(?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssi", $fname, $lname, $address, $password, $phone);
    $execval = $stmt->execute();
    echo $execval;
    echo "Registration Successful";
    $stmt->close();
    $conn->close();
}
?>