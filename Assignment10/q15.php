<?php
session_start();
$_SESSION['user'] = $_SESSION['user'] ?? "Guest";
?>
<form method="POST">
    <textarea name="feedback" placeholder="Enter your feedback" required></textarea><br>
    <input type="submit" value="Submit">
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_SESSION['user'];
    $msg = "Feedback from $name: " . $_POST['feedback'];
    mail("admin@vit.ac.in", "Student Feedback", $msg, "From: noreply@vit.ac.in");
    echo "Thank you, $name. Feedback sent!";
}
?>