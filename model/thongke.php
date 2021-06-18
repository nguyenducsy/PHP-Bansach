<?php
        include_once 'connect.php';

        function get_count_product(){
         $sql = "SELECT danhmuc.name  as Tenloai , COUNT(sp_free_hot.iddm) as Tong_loai_sanpham
                        FROM `danhmuc` , `sp_free_hot` 
                        WHERE danhmuc.id = sp_free_hot.iddm 
                        GROUP BY danhmuc.name";
         return query($sql);
        }
 

?>