<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Others</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<?php
include 'connection.php';
include 'comment_submit.php';

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
<body class="body-others">
    <header class="header">
        <?php
            echo "<h1>$TextArray[1]</h1>";
            echo "<nav class='navbar'>";
            echo "<a href='home.php'>$TextArray[2]</a>";
            echo "<a href='contact.php'>$TextArray[3]</a>";
            echo "<a href='activities.php'>$TextArray[4]</a>";
            echo "<a href='gallery.php'>$TextArray[5]</a>";
            echo "<a href='others.php' class='active'>$TextArray[6]</a>";
            echo "</nav>";
        ?>
    </header>
    
     <section class="others">
        <div class="others-content">
            <h1>In this page, you can comment anything you want about my website. I'm looking forward to all your feedbacks.</h1>
            <p>Notes: All comments from any respondents are anonymous.</p>
        </div>
        <?php
        echo "<form method='POST' action='".setComments($conn)."'>
            <input type='hidden' name='uid' value='Anonymous'>
            <input type='hidden' name='date' value='".date('Y-m-d H:i:s')."'>
            <textarea class='textarea-contact' name='message'></textarea><br>
            <button type= 'submit' name='commentSubmit'>Comment</button>
        </form>";

        getComments($conn);
        ?>
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