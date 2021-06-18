<?php
        function most_read($idsp){
            $ssp = "select * from most_read where 1";
            $ssp.= " order by idsp asc";

        // code show danhmuc cố định
        $conn = getConnection();
        $stmt = $conn->prepare($ssp);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        return $stmt->fetchAll(); // nguyen 1 danh sach ferchAll
        }

?>
