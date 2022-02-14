<?php

    function isLoged(){
        if(isset($_SESSION['auth']) && isset($_SESSION['auth']['email']) && isset($_SESSION['auth']['pass'])){
            extract($_SESSION['auth']);
            mysql_connect("localhost", "root", "");
            mysql_select_db("auth");

            $sql = "SELECT * FROM users WHERE id = '$id' AND pass = '$pass'";
            $res = mysql_query($sql) or die(mysql_error);
            if(mysql_num_rows($res) > 0)
                return true;
            else 
                return false;
        }else 
            return false;
    }

    

?>