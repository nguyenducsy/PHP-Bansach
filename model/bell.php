<?php
 include_once 'connect.php';

        function get_All_bell(){
                $sql = "SELECT  * from flag ";
                return query($sql);
        }
    
 
?>