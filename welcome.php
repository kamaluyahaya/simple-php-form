<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['username']);
    echo "<h2>Hello, $name! Welcome to our simple PHP application.</h2>";
} else {
    echo "Invalid request.";
}
?>
