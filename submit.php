<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    


    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $to = "simarjots9@gmail.com";
    $subject = "Test Email";
        // Set additional headers
$headers = "From: hello@digimaple.ca\r\n";
$headers .= "Reply-To: $email\r\n";
$headers .= "Content-Type: text/plain; charset=UTF-8\r\n";



    // Process the data (e.g., send an email, store in a database, etc.)

    if (mail($to, $subject, $message, $headers)) {
        echo "Email sent successfully!";
    }
    
    // For demonstration, we'll simply output the data
    echo "<h2>Form Submitted</h2>";
    echo "<p>Name: $name</p>";
    echo "<p>Email: $email</p>";
    echo "<p>Message: $message</p>";
} else {
    // Redirect to the form page if accessed directly
    header("Location: index.html");
    exit();
}
?>
