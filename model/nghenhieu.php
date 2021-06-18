<?php
        function nghenhieunhat($id){
            $nghen = "select * from most_hear_catalog where 1";
            $nghen.= " order by id asc";

        // code show danhmuc cố định
        $conn = getConnection();
        $stmt = $conn->prepare($nghen);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        return $stmt->fetchAll(); // nguyen 1 danh sach ferchAll
        }

?>








