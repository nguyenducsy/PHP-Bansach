 <?php
        function say_book($id){
            $spsn = "select * from say_book where 1";
            $spsn.= " order by id asc";

        // code show danhmuc cố định
        $conn = getConnection();
        $stmt = $conn->prepare($spsn);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        return $stmt->fetchAll(); // nguyen 1 danh sach ferchAll
        }

?> 
