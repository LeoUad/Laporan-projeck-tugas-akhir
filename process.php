<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $comment = $_POST['comment'];
    
    $data = "Name: $name\nEmail: $email\nPhone: $phone\nAddress: $address\nComment: $comment\n\n";
    
    file_put_contents('contacts.txt', $data, FILE_APPEND | LOCK_EX);
    
    echo "Data has been saved!";
}
?>
