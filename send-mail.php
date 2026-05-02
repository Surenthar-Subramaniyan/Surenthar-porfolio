          <?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name    = htmlspecialchars($_POST['name']);
    $email   = htmlspecialchars($_POST['email']);
    $phone   = htmlspecialchars($_POST['phone']);
    $service = htmlspecialchars($_POST['service']);
    $message = htmlspecialchars($_POST['message']);

    $to = "your-email@example.com"; // Change to your email
    $subject = "New Contact Form Submission";

    $body = "
    You have received a new inquiry from your website:

    Full Name: $name
    Email: $email
    Phone: $phone
    Service Required: $service

    Message:
    $message
    ";

    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";

    if (mail($to, $subject, $body, $headers)) {
        echo "success";
    } else {
        echo "error";
    }

} else {
    echo "Invalid request.";
}
?>
