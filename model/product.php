<?php
 include_once 'connect.php';

        function get_Allproduct(){
                $sql = "SELECT  * from sp_free_hot order by idsp desc";
                return query($sql);
        }

        function add_new_product($name,$id,$linkimg,$price,$discount){
                $sql ="INSERT INTO sp_free_hot (namesp , iddm , imgsp , price , discount) VALUES ('$name', '$id' , '$linkimg' , '$price' , '$discount')";
                execute($sql);

        }
        function get_product_byid($id){
                $sql = "SELECT * from sp_free_hot where idsp = " .$id;
                return queryOne($sql);
        }
        function update_product($id,$id_cata,$name,$img,$price,$sales){
                $sql = "UPDATE sp_free_hot SET namesp = '$name' , iddm = '$id_cata' , imgsp = '$img' , price = '$price' , discount = '$sales'  where idsp = " .$id;        
                execute($sql);
        }
        function delete_product($id){
                $sql = "DELETE  from sp_free_hot where idsp = $id";  
                  execute($sql);
        }
      
?>
