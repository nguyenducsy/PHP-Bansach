<?php
        function new_in_week($id){
            $neww = "select * from new_in_week where 1";
            $neww.= " order by id asc";

        // code show danhmuc cố định
        $conn = getConnection();
        $stmt = $conn->prepare($neww);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        return $stmt->fetchAll(); // nguyen 1 danh sach ferchAll
        }

?>
