<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if ($_POST['user'] == "admin" && $_POST['pass'] == "1234") {
        $_SESSION['user'] = "admin";
        header("Location: welcome.php");
        exit();
    } else {
        echo "Invalid credentials.";
    }
}
?>
<form method="POST">
    Username: <input type="text" name="user"><br>
    Password: <input type="password" name="pass"><br>
    <input type="submit" value="Login">
</form>
<?php
session_start();
echo "Welcome, " . $_SESSION['user'];
?>