<?php
        function bxhg($id){
            $bxh = "select * from bxh where 1";
            $bxh.= " order by id asc";

        // code show danhmuc cố định
        $conn = getConnection();
        $stmt = $conn->prepare($bxh);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        return $stmt->fetchAll(); // nguyen 1 danh sach ferchAll
        }

?>
