<?php

function setComments($conn){
    if (isset($_POST['commentSubmit'])) {
        $uid = $_POST['uid'];
        $date = $_POST['date'];
        $message = $_POST['message'];

        if (!empty($uid) && !empty($date) && !empty($message)) {
            $sql = "INSERT INTO comments (uid, date, message) VALUES ('$uid', '$date', '$message')";
            $result = $conn->query($sql);
            header("Location: ".$_SERVER['PHP_SELF']); // Redirect ke halaman yang sama setelah aksi selesai
            exit();
        } else {
            echo "Please fill in all fields before submitting your comment.";
        }
    }
}

function getComments($conn){
    $sql = "SELECT * FROM comments";
    $result = $conn->query($sql);
    while($row = $result->fetch_assoc()){
        echo "<div class='comment-box'><p>";
            echo $row['uid'] . "<br>";
            echo $row['date'] . "<br>";
            echo "<b>".nl2br($row['message'])."</b>";
        echo "</p></div>";
    }
}

?>