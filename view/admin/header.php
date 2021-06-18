<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../view/admin/css/admin.css">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>

</head>

<body>
 
    <div class="chinh">
        <div class="boxletf">
            <p><?=$_SESSION['suser']?>  |  <span><a style="text-decoration: none" href='admin.php?act=logout'> Logout</a></span></p>
            <aside>
            <div class="logoid"> <a href="index.php"> <img src="../view/admin/img/img1.jpg"></a></div>
            <div class="name">NĐ-SY</div>
            <div class="name ad"><strong>ADMIN </strong></div>
            <div class="row"><i class='fas fa-align-justify' style='font-size:20px;color: gray; '></i>  <a href="admin.php?act=qldm">QUẢN LÝ DANH MỤC</a></div>
            <div class="row"><i class='fas fa-shopping-cart' style='font-size:20px;color: gray;'></i><a href="admin.php?act=qlsp">QUẢN LÝ DANH SÁCH SẢN PHẨM</a></div>
            <div class="row"><i class='fas fa-user-secret' style='font-size:20px;color: gray;'></i><a href="admin.php?act=qltg">QUẢN LÝ DANH SÁCH TÁC GIẢ</a></div>
            <div class="row"><i class="fa fa-rocket" style="font-size:20px;color: gray;"></i><a href="admin.php?act=page">PAGE</a></div>
            <div class="row"><i class="fa fa-rocket" style="font-size:20px;color: gray;"></i><a href="admin.php?act=maps">MAPS</a></div>
            <div class="row igla"><i class='far fa-images' style='font-size:20px;color: gray;'></i><a href="#"><strong>I-GALLERY</strong></a></div>
            <div class="search"><i class="material-icons" style="font-size:20px;color: gray;">search</i>
                <input type="text">
            </div>
            <div class="line"></div>
            <div class="buttonfb"><i class='fab fa-facebook-f' style='font-size:15pt'></i></div>
            <ins>https://www.facebook.com/ndsy123</ins>
            </aside>
        </div>

        <style>
            .name{
                margin-top: 30px;
            }
            .boxletf p{
                color: #4f7cac;
                margin-left: 30px;
            }
            .ad{
                float: left;
                margin-top: 20px;
                color: #1ba085;
                width: 50%;        
            }
            .ad strong{
                margin-right: 20px;
                font-style: italic;
            }
        
        </style>
            