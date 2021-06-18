<?php
    function capnhap_cmt(  $iduser , $idsp , $noidung){
        $sqll = "INSERT INTO comment ( iduser , idsp, noidung ) VALUES ('$iduser', '$idsp' , '$noidung' )";
        $conn = getConnection();       
        $conn->exec($sqll);
    }
        function show_cmt($idsp){
            $sqll = "select * from comment where 1";
            if(isset($idsp)>0){
                $sqll .= " AND idsp = " .$idsp;      }
    
            $conn = getConnection();  
            $stmt = $conn->prepare($sqll);
            $stmt->execute();
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            return $stmt->fetchAll(); // nguyen 1 danh sach ferchAll
        }
    
    
?>