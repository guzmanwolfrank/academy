<?php
// Get form data
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$occupation = $_POST['occupation'];
$trading_experience = $_POST['trading_experience'];

// Validate data (you can add more validation as needed)
if (empty($name) || empty($email)) {
    echo "Please fill in required fields.";
    exit();
}

// Process the data (e.g., send an email, save to a database)
// ...

echo "Your information has been submitted successfully.";
?>