<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['remember'])) {
        setcookie('username', $_POST['username'], time() + (86400 * 7)); // 7 days
    }
}
?>
<form method="POST">
    Username: <input type="text" name="username" value="<?php echo $_COOKIE['username'] ?? ''; ?>"><br>
    <input type="checkbox" name="remember"> Remember Me<br>
    <input type="submit" value="Login">
</form>

<h3>Welcome <?php echo $_COOKIE['username'] ?? 'Guest'; ?>!</h3>