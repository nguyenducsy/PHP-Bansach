<?php
 include_once 'connect.php';

        function get_Allcatalog(){
                $sql = "SELECT  * from danhmuc order by id desc";
                return query($sql);
        }
        
        function add_new_catalog($name){
                $sql ="INSERT INTO danhmuc (name) VALUES ('$name')";
                execute($sql);

        }
        function get_catalog_byid($id){
                $sql = "SELECT * from danhmuc where id = " .$id;
                return queryOne($sql);
        }
        function update_catalog($id,$name){
                $sql = "UPDATE danhmuc SET name = '$name' where id = " .$id;        
                // $conn = getConnection();
                        execute($sql);

                // $conn = connect();
                // $stmt = $conn->prepare($sql); 
                // $stmt->execute();
        }
        function delete_catalog($idd){
                // $sql = "DELETE * from catalog where id =".$id;
                // execute($sql);
                $sql = "DELETE  from danhmuc where id = $idd";  
                // $conn->exec($sql);
                  execute($sql);
                //   $conn = getConnection();
                //   $conn->exec($sql);
        }
 
?>