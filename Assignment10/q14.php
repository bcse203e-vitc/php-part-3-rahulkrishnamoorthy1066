<form method="POST">
    Your Email: <input type="email" name="email" required><br>
    Message: <textarea name="msg" required></textarea><br>
    <input type="submit" value="Send">
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $to = "example@domain.com";
    $sub = "Contact Form Message";
    $msg = $_POST['msg'];
    $headers = "From: " . $_POST['email'];
    mail($to, $sub, $msg, $headers);
    echo "Mail Sent!";
}
?>