<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
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
<body>
    <header class="header">
        <?php
            echo "<h1>$TextArray[1]</h1>";
            echo "<nav class='navbar'>";
            echo "<a href='home.php'>$TextArray[2]</a>";
            echo "<a href='contact.php' class='active'>$TextArray[3]</a>";
            echo "<a href='activities.php'>$TextArray[4]</a>";
            echo "<a href='gallery.php'>$TextArray[5]</a>";
            echo "<a href='others.php'>$TextArray[6]</a>";
            echo "</nav>";
        ?>
    </header>
    <section class="contact">
        <div class="contact-content">
            <?php
                echo "<h3>$TextArray[12]</h3>";
            ?>
            <form action="insert_contact.php" method="post">
                <div class="row">
                    <div class="col-25">
                    <label for="fname">Name :</label>
                    </div>
                    <div class="col-75">
                    <input type="text" id="fname" name="firstname" placeholder="Insert name here">
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                    <label for="subject">Message :</label>
                    </div>
                    <div class="col-75">
                    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
                    </div>
                </div>
                <br>
                <div class="row">
                    <input type="submit" value="Submit" name="button">
                </div>
            </form>
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