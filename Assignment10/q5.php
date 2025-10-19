<?php
if (isset($_FILES['file'])) {
    if (!file_exists('uploads')) mkdir('uploads');
    move_uploaded_file($_FILES['file']['tmp_name'], "uploads/" . $_FILES['file']['name']);
    echo "<h3>Image Uploaded:</h3>";
    echo "<img src='uploads/" . $_FILES['file']['name'] . "' width='200'>";
}
?>
<form method="POST" enctype="multipart/form-data">
    <input type="file" name="file" required>
    <input type="submit" value="Upload">
</form>