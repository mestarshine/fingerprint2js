<?php
$file = 'test.txt';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $name = $_POST['fname'];
    if (empty($name)) {
        $name = "NULL"
        file_put_contents($file, $name, FILE_APPEND | LOCK_EX);
    } else {
        file_put_contents($file, $name, FILE_APPEND | LOCK_EX);
    }
}
?>