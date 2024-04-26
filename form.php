<?php
$errorMsg = "";
function validateFullName($name) {
    if (empty($name)) {
        return "Full Name is required.";
    } elseif (!preg_match("/^[a-zA-Z\s]+$/", $name)) {
        return "Full Name must only contain letters and whitespace.";
    }
    return ""; 
}
function validateEmail($email) {
    if (empty($email)) {
        return "E-mail is required.";
    } elseif (!preg_match("/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/", $email)) {
        return "E-mail must contain a valid email address.";
    }
    return ""; 
}
if
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>