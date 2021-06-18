<?php

        function  checkuser($user, $pass){
            $sql = "select * from user where user = '".$user."'  and pass = '".$pass."'  ";
            $conn = getConnection();
            $stmt = $conn->prepare($sql); 
            $stmt->execute(); 
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            return $stmt->fetch();
        }

        function signup($user , $pass , $email){
            $sqll = "INSERT INTO user ( user , pass , email) VALUES ('$user', '$pass' , '$email')";
            $conn = getConnection();       
            $conn->exec($sqll);
        }

        function  show_nameuser(){
            $sql = "select * from user where 1";
            $conn = getConnection();
            $stmt = $conn->prepare($sql); 
            $stmt->execute(); 
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            return $stmt->fetch();


        }


?>