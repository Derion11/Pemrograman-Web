<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Activities</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<?php
include 'connection.php';

$TextArray = []; // Inisialisasi array untuk menyimpan teks dari kolom content

$sql = "SELECT id, content FROM contents";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $TextArray[$row["id"]] = $row["content"]; // Menyimpan teks berdasarkan ID
    }
}

?>

</head>
<body class="body-activities">
    <header class="header">
        <?php
        echo "<h1>$TextArray[1]</h1>";
        echo "<nav class='navbar'>";
            echo "<a href='home.php'>$TextArray[2]</a>";
            echo "<a href='contact.php'>$TextArray[3]</a>";
            echo "<a href='activities.php' class='active'>$TextArray[4]</a>";
            echo "<a href='gallery.php'>$TextArray[5]</a>";
            echo "<a href='others.php'>$TextArray[6]</a>";
        echo "</nav>";
        ?>
    </header>
    <section class="activities">
        <div class="activities-content">
            <h1>Privacy Warrior</h1>
            <h3>August 11 ,2023</h3>
            <?php echo "<img src=$TextArray[13] alt='acitivities1' width='600' height='auto'>";?>
            <p>This is me (red shirt) and my team when we participated in a competition to create social media video content about personal data protection. The competition was called Privacy Warrior, organized by CBQA Global Indonesia in August 2023. The video we designed won the 1st place and was later featured at the CBQA Global forum about Personal Data Protection.</p>
            <h1>Game Competition</h1>
            <h3>November 25 ,2023</h3>
            <?php echo "<img src=$TextArray[14] alt='acitivities2' width='600' height='auto'>";?>
            <p>This is me (yellow shirt with grey jacket) when i attend the LapakGaming 2023 event at Mall Taman Anggrek. At that time, I participated in a casual Mortal Kombat 11 tournament. This tournament was the first time I won placing at first place and managed to bring home a joystick as a prize.</p>
        </div>
    </section>
    <footer>
        <h3>Follow me:</h3>
        <div class="social-icons">
            <a href="https://github.com/Derion11"><i class="fab fa-github"></i></a>
            <a href="https://www.linkedin.com/in/darrell-tampake-223001280/"><i class="fab fa-linkedin"></i></a>
        </div>
        <p>Made by Darrell himself</p>
    </footer>
</body>
</html>