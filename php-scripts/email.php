<?php
    $db = mysqli_connect('localhost', 'root', '', 'messages');
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        $email = $_POST["email"];
        $message = $_POST["message"];
        if(!empty($email) and !empty($message)){
            $sql = "INSERT INTO messages (email, message) VALUES ('$email', '$message')"; 
            mysqli_query($db, $sql);
            header("Location: ../index.php?sent=1");
        }elseif(empty($email) and !empty($message)){
            header("Location: ../index.php?sent=2");
        }elseif(!empty($email) and empty($message)){
            header("Location: ../index.php?sent=3");
        }
        
    }
?>
