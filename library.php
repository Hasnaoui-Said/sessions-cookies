<?php
    session_start();

    function isLoged(){
        if(isset($_SESSION['auth']) && isset($_SESSION['auth']['email']) && isset($_SESSION['auth']['pass'])){
            extract($_SESSION['auth']);
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
            else {
                $conn->close();
                return false;
            }
        }else
            return false;
    }
echo "sjcfheuhcfehchehfci";
?>