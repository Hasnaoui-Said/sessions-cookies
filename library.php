<?php
    // session_start();

    function isLoged($pass, $email){
        if(isset($email) && isset($pass)){
            $conn = new mysqli("localhost", "root", "", "project_db");
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
            $sql = "SELECT * FROM users WHERE email = '$email' AND pass = '$pass'";
            $result = $conn->query($sql);
            if ($result->num_rows > 0){
                $conn->close();
                return true;
            }
            
            $conn->close();
            return false;
            
        }

        return false;
    }
?>