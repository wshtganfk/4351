<?php
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];
$address = $_POST['address'];
$state = $_POST['state'];
$zip = $_POST['zip'];
if(!empty($firstName)and!empty($lastname)and!empty($email)and!empty($username)and!empty($password)and!empty($address)){
$conn = new mysqli('localhost','root','','4351');
if($conn->connect_error){
    echo "$conn->connect_error";
    die("Connection Failed : ". $conn->connect_error);
} else {
    $stmt = $conn->prepare("insert into registration(firstName, lastName, email, username, password, address, state, zip) values(?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssssi", $firstName, $lastName, $email, $username, $password, $address, $state, $zip);
    $execval = $stmt->execute();
    echo $execval;
    echo "Registration successfully...";
    $stmt->close();
    $conn->close();
}
}
else{
    echo "Please fill the blanks";
    die();
}
?>