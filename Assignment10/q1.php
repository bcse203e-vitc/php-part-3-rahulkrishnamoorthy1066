<?php
if (isset($_COOKIE['visits'])) {
    $count = $_COOKIE['visits'] + 1;
} else {
    $count = 1;
}
setcookie('visits', $count, time() + 3600); // 1 hour
?>
<!DOCTYPE html>
<html>
<head><title>Visit Counter</title></head>
<body>
<h2>Welcome!</h2>
<p>You have visited this page <?php echo $count; ?> times.</p>
</body>
</html>