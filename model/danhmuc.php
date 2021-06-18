<?php
    //admin : capnhap danh muc phan edit
    function  capnhapdm($id , $name , $sort , $hot){
        $sql = "update danhmuc set name = '$name' , sort = '$sort' , hot = '$hot' where id = ".$id; // loi  neu cho so cu the thi update dc
            $conn = getConnection();
            $stmt = $conn->prepare($sql); 
            $stmt->execute();
    }

    //admin : edit danh muc
    function  getinfo($id){
        $sql = "select * from danhmuc where id=".$id;
        $conn = getConnection();
        $stmt = $conn->prepare($sql); 
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        return $stmt->fetch(); // nguyen 1 danh sach ferchAll
    }

    //admin : xoa danh muc 
    function  deletedm($id){
            $sql = "delete from danhmuc  where id =".$id;
            $conn = getConnection();
            $conn->exec($sql);
    }
    // login : getnamecata
      function  getnamecata($id){
        $sql = "select name from danhmuc where id=".$id;
        $conn = getConnection();
        $stmt = $conn->prepare($sql); 
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        return $stmt->fetch(); // nguyen 1 danh sach ferchAll
    }

    function showdmne($hot){
        // toi uu 2 function
        $sql = "select * from danhmuc where 1";
        if($hot==1){
            $sql .= " AND hot=1";
        }
        else   $sql.= " order by sort desc";
      
        
        // code show danhmuc cố định
        $conn = getConnection();
        $stmt = $conn->prepare($sql); 
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        return $stmt->fetchAll(); // nguyen 1 danh sach ferchAll
    }
    function showdmnee($hot){
        // toi uu 2 function
        $sql = "select * from danhmuc where 1";
        if($hot==1){
            $sql .= " AND hot=1";
        }
        if($hot ==1){
            $sql.= " order by id desc";
        } 
         $sql.= " order by sort desc";
      
        
        // code show danhmuc cố định
        $conn = getConnection();
        $stmt = $conn->prepare($sql); 
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        return $stmt->fetchAll(); // nguyen 1 danh sach ferchAll
    }

    function catalog($hot){
        // toi uu 2 function
        $sql = "select * from danhmuc";
        $sql.= " order by id asc";
        // code show danhmuc cố định
        $conn = getConnection();
        $stmt = $conn->prepare($sql); 
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        return $stmt->fetchAll(); // nguyen 1 danh sach ferchAll
    }

    // them danh muc admin qldm
    function  themdm($name , $sort , $hot){
        $sql = "INSERT INTO danhmuc(name, sort , hot)
        VALUE ('$name' , '$sort' , '$hot')";
            $conn = getConnection();
            $conn->exec($sql);
    }

// show free_hot
    function free_hot(){
        $sql = "select * from danhmuc where freehot = 1 order by id asc"; // tùy ý
        // code show danhmuc cố định
        $conn = getConnection();
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        return $stmt->fetchAll(); // nguyen 1 danh sach ferchAll
    }

// show most_read
        function docnhieunhat($id){
            $docn = "select * from danhmuc where docnhieu = 1";
            $docn.= " order by id asc";

        // code show danhmuc cố định
        $conn = getConnection();
        $stmt = $conn->prepare($docn);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        return $stmt->fetchAll(); // nguyen 1 danh sach ferchAll
        }

// show say_book
    function sachnoi($id){
        $sachn = "select * from danhmuc where sachnoi = 1";
        $sachn.= " order by id asc";

    // code show danhmuc cố định
    $conn = getConnection();
    $stmt = $conn->prepare($sachn);
    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    return $stmt->fetchAll(); // nguyen 1 danh sach ferchAll
    }

?>