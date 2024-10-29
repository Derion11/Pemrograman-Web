<?php
include 'connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = isset($_POST['firstname']) ? $_POST['firstname'] : '';
    $message = isset($_POST['subject']) ? $_POST['subject'] : '';

    // Query untuk menyimpan data ke dalam database
    $sql = "INSERT INTO contact (name, message) VALUES ('$name', '$message')";

    if ($conn->query($sql) == TRUE) {
        $newName = $name; // Menyimpan nama yang baru diinput ke dalam variabel
        echo "Thank you for the message, $newName";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    echo"<br>";
    echo "<a href='contact.php'>Return</a>";

    $conn->close();
}
?>