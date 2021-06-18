<?php
        function sachmoinhat($iddm){
            $neww = "select * from most_new where 1";
            $neww.= " order by id asc";

        // code show danhmuc cố định
        $conn = getConnection();
        $stmt = $conn->prepare($neww);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        return $stmt->fetchAll(); // nguyen 1 danh sach ferchAll
        }

        function timkiem($search , $i){
         
            $neww = "select * from most_new where 1";
            if (isset($search) != "" && ($i == "")){

            $neww .= " AND  name like '%$search%' ";  
            }
            else {$neww .= "Khong tim thay";
                    $i = 1;
            }

        // code show danhmuc cố định
        $conn = getConnection();
        $stmt = $conn->prepare($neww);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        return $stmt->fetch(); // nguyen 1 danh sach ferchAll
        }


        function dem($iddm){
            $neww = "select * from most_new where 1";
            $neww.= " order by id asc";

        // code show danhmuc cố định
        $conn = getConnection();
        $stmt = $conn->prepare($neww);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        return $stmt->fetchAll(); // nguyen 1 danh sach ferchAll
        }

// thêm sp : admin
        function themsp($name ,$tacgia , $img , $hot ,$iddm ){
            $sql = "INSERT INTO most_new (name, tacgia , imgsp, hot , iddm) VALUES ('$name', '$tacgia', '$img' , '$hot' , '$iddm' )";
            $conn = getConnection();       
            $conn->exec($sql);
        }
        
// cap nhap san pham edit
        function capnhapsp($id , $iddm , $name , $tacgia , $img , $hot){
            $sql = "UPDATE most_new SET iddm = '$iddm' , name = '$name' , tacgia = '$tacgia',  hot = '$hot' "; 
            if($img != "" ){
                $sql .= ", imgsp = '$img'";
            }
            $sql .= " where id = ".$id;
                $conn = getConnection();
                $stmt = $conn->prepare($sql); 
                $stmt->execute();
                return $sql;
        }

//admin : show san pham chi tiet phan edit
    function showspchitiet($id){
        $sqll = "select * from most_new where 1";
        if($id>0){
            $sqll .= " AND id = " .$id;      }


        $conn = getConnection();  
        $stmt = $conn->prepare($sqll);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        return $stmt->fetch(); // nguyen 1 danh sach ferchAll
    }

// lay idcat ve de xet
        function showsp($idcat){
                $sqll = "select * from most_new where 1";
                if($idcat>0){
                    $sqll .= " AND id = " .$idcat;  
                }
                else
                    $sqll .= " order by id asc";

                $conn = getConnection();  
                $stmt = $conn->prepare($sqll);
                $stmt->execute();
                $stmt->setFetchMode(PDO::FETCH_ASSOC);
                return $stmt->fetchAll(); // nguyen 1 danh sach ferchAll
        }

//admin: xoa san pham 
            function  deletesp($id){
                $sql = "delete from most_new where id =".$id;
                $conn = getConnection();
                $conn->exec($sql);
        }

?>
