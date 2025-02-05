<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Debugging: Check if data is being received
    error_reporting(E_ALL); // Show errors
    ini_set('display_errors', 1);

    // Collect form data
    $name = $_POST['name'] ?? null;
    $email = $_POST['email'] ?? null;
    $phone = $_POST['phone'] ?? null;
    $age = $_POST['age'] ?? null;
    $gender = $_POST['gender'] ?? null;
    $department = $_POST['department'] ?? null;
    $time = $_POST['time'] ?? null; // Updated field for appointment time

    // Check if required fields are not empty
    if ($name && $email && $phone && $age && $gender && $department && $time) {
        // Example: Save to database (replace with actual database connection code)
        echo "Form submission successful! Data received: <br>";
        echo "Name: $name <br>";
        echo "Email: $email <br>";
        echo "Phone: $phone <br>";
        echo "Age: $age <br>";
        echo "Gender: $gender <br>";
        echo "Department: $department <br>";
        echo "Preferred Appointment Time: $time <br>"; // Updated output
    } else {
        echo "Error: Missing required form fields.";
    }
} else {
    echo "Invalid request method!";
}
?>
