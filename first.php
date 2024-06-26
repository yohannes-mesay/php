<!DOCTYPE html>
<html>
<body>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $birthdate = htmlspecialchars($_POST["birthdate"]);
    $biography = htmlspecialchars($_POST["biography"]);
    $gender = htmlspecialchars($_POST["gender"]);
    $country = htmlspecialchars($_POST["country"]);

    echo "Full Name: $name<br>";
    echo "E-mail: $email<br>";
    echo "Birthdate: $birthdate<br>";
    echo "Biography: $biography<br>";
    echo "Gender: $gender<br>";
    echo "Country: $country<br>";
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
    } elseif (preg_match("/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/", $email)) {
        return "E-mail must contain a valid email address.";
    }
    return ""; 
}


function validateBirthdate($birthdate) {
    if (empty($birthdate)) {
        return "Birthdate is required.";
    } elseif (strtotime($birthdate) > strtotime('-18 years')) {
        return "You must be at least 18 years old.";
    }
    return ""; 
}

function validateGender($gender) {
    if (empty($gender)) {
        return "Gender is required.";
    }
    return ""; 
}

function validateCountry($country) {
    if (!empty($country) && !preg_match("/^[a-zA-Z\s]+$/", $country)) {
        return "Country must only contain letters and whitespace.";
    }
    return ""; 
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST["name"]);
    $errorMsg .= validateFullName($name);

    $email = htmlspecialchars($_POST["email"]);
    $errorMsg .= validateEmail($email);

    $birthdate = htmlspecialchars($_POST["birthdate"]);
    $errorMsg .= validateBirthdate($birthdate);

    $gender = htmlspecialchars($_POST["gender"]);
    $errorMsg .= validateGender($gender);

    $country = htmlspecialchars($_POST["country"]);
    $errorMsg .= validateCountry($country);

    if (!empty($errorMsg)) {
        echo "<p>Error(s) found:</p>";
        echo "<ul>";
        echo "<li>" . $errorMsg . "</li>";
        echo "</ul>";
    } else {
        echo "<p>Form submitted successfully!</p>";
    }
}
}
?>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    Full Name: <input type="text" name="name" pattern="[a-zA-Z\s]+" ><span class="required">*</span><span> <?php echo $errorMsg; ?></span> <br> 
    E-mail: <input type="email" name="email" required><span class="required">*</span><br>
    Birthdate: <input type="date" name="birthdate" max="<?php echo date('Y-m-d', strtotime('-18 years')); ?>" required><span class="required">*</span><br>
    Biography:<br> <textarea name="biography" rows="5" cols="40"></textarea><br>
    Gender:
    <input type="radio" name="gender" value="female" required>Female
    <input type="radio" name="gender" value="male" required>Male<span class="required">*</span><br>
    Country: <input type="text" name="country" pattern="[a-zA-Z\s]*"><br>
    <input type="submit" value="Submit">
</form>
<style>
.required {
    color: red;
    position: relative;
    left: 10px;
    display: inline;
    align-items: center;
}
</style>

</body>
</html>
