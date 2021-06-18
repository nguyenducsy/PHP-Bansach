<?php

// show san pham chi tiet
        function showprodetail($iddm){
            $ssp = "select * from sp_free_hot where idsp = ".$iddm;
            $ssp.= " order by idsp asc";

        // code show danhmuc cố định
        $conn = getConnection();
        $stmt = $conn->prepare($ssp);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        return $stmt->fetchAll(); // nguyen 1 danh sach ferchAll
        }
// productdetail
        function showproductdetail($id){
            if($id>0){
            $sql = "select *
            from  sp_free_hot sp inner join danhmuc dm
            on sp.iddm = dm.iddm
            where idsp = " .$id;
            $conn = getConnection();  
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            return $stmt->fetch(); // nguyen 1 danh sach ferchAll
            }
            else return 0;
        }
// productdetail index
        function showproductdetail_index($id){
            if($id>0){
                $sql = "select * from sp_free_hot where id_chung = " .$id;
            }
            else if($id>6){
                $sql = "select * from new_in_week where id_chung = " .$id ;
            }

            $conn = getConnection();  
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            return $stmt->fetch(); // nguyen 1 danh sach ferchAll   
    
        }

// productdetail index
function showproductdetail_index2($id){

            if($id>6){
            $sql = "select * from new_in_week where id_chung = " .$id ;
            }

            $conn = getConnection();  
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            return $stmt->fetch(); // nguyen 1 danh sach ferchAll   

}


        
        function showprodetail2_index($iddm){
            if($iddm>0){
                $ssp = "select * from sp_free_hot where idsp = ".$iddm;
            }
            else        
                $ssp = "select * from sp_free_hot";
          
            $ssp.= " order by idsp asc";

        // code show danhmuc cố định
        $conn = getConnection();
        $stmt = $conn->prepare($ssp);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        return $stmt->fetchAll(); // nguyen 1 danh sach ferchAll
        }

?>



