<?php
include "../model/connect.php";
include "../model/most_new.php";
include "../global.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/../view/css/font-awesome.min.css">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/../view/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
</head>
<body>
<style>

.search{
    width: 100%;
}
.search input {
            width: 336px;
            min-height: 26px;
            float: left;
            border: gray 1px solid;
            border-radius: 1px;
            margin-top: 5px;
            padding: 0px 10px;
        }
        .search span input{
            background-color: #3c9785;
            width: 95px;
            min-height: 28px;
            border: none;
            float: left;
            color: rgb(236, 236, 236);
            margin-top: 5px;
        }
        
        .search span:hover {
            background-color: #318070;
        }
        
        .search span span {
            float: left;
            padding: 5px 2px;
        }
        
        .search span i {
            font-size: 18px;
            float: left;
            padding: 3px 2px;
        }
        .conten{
            float: left;
            width: 100%;
        }
        .conten .name{
            width: 80%;
            float: left;
            margin-top: 10px;

        }
        .conten .imgg{
            float: right;
            width:20%;
            margin-top: -40px;
            
        }
        .conten .imgg img{
            width:50%;
        }
        .conten .tacgia{
            margin-top: -20px;
        }
        </style>
  
   
              
                    <div class="search">               
              <form action="search.php" method="get">
              <input name="search" type="text" placeholder="Nhập tên sách , tuyển tập , tác giả ,...">     
              <span> <input type="submit" name="ok" value="Tìm kiếm" />    </span> 
            </form>
        <?php
   
        // Phần code PHP xử lý tìm kiếm
        if (isset($_REQUEST['ok'])) {
            $search = addslashes($_GET['search']);
            if (empty($search)) {
                echo "Yeu cau nhap du lieu vao o trong";
            } else {
                $i = "";
                $timkiem = timkiem($search , $i);
            } 
            if($i == ""){
                $img = $pathimg.$timkiem['imgsp'];
                echo '<div class="conten">';
                    echo "<br>Kết quả trả về với từ khóa :<b>$search</b><br>";   
                    echo '  <div class="name"> Tên sách :  <td>'.$timkiem['name'].'</td></div> <br>';
                    echo '  <div class="imgg">   <img src='.$img.'> </div> <br>';         
                    echo '  <div class="tacgia"> Tác giả :  <td>'.$timkiem['tacgia'].'</td></div> <br>';
                    echo '</div>';   
                }
                else {
                    $i = 1;
                    echo "Khong tim thay";
                }
        }
        
       
        ?>

</body>
</html>