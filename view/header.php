<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../view/css/waka.css">
    <link rel="stylesheet" href="../view/css/head.css">
    <link rel="stylesheet" href="../view/css/home.css">
    <link rel="stylesheet" href="../view/css/p_r_d.css">
    <!-- <link rel="stylesheet" href="../view/css/p_r_d_detail.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/../view/css/font-awesome.min.css">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/../view/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
</head>

<body>
    <header>
        <div class="container">
            <div class="heaad">
                <div class="dau">
        </div>
                    <div class="boxlogo"> <a href="index.php"><img src="../view/img/logo-waka.png" alt=""></a></div>
                    <iframe src="../view/search.php" frameborder="0">
                    
                    </iframe>   
           
                    <div style="margin-left:60px" class="vip"><a href="#"> <img src="../view/img/logo-waka.png" alt=""> <strong>VIP</strong></a></div>
                    <?php
                        if(isset($_SESSION['sid']) && ($_SESSION['sid'])>0){
?>
                    <div class="dangnhap">
                        <button style="margin-left: 30px">

                        <?php   
                        
                            if( $_SESSION['suser'] == 'ADMIN'){
                                $link = 'admin.php';
                            }
                            else   $link = 'index.php';
                            
                        ?>
                         <a href="<?=$link?>"><?=$_SESSION['suser']?></a></button>
                        <button style="float:left;margin-right:0px;margin-left:10px;margin-top:0px "> <a href="index.php?act=user&logout=1">Thoát</a></button>               
                    </div>
<?php
                        }else{
                    
                    ?>
                    <div class="dangnhap">
                        <button> <a href="login.php">ĐĂNG NHẬP</a></button>
                        <button> <a href="signup.php">ĐĂNG KÝ</a></button>
                    </div>
                        <?php } ?>
                </div>
                <nav>
                 
                    <ul>
                        <li><a href="index.php">Trang Chủ</a></li> 
                        <li><a href="index.php?act=product">Sản phẩm</a></li> 
                        <li class="baochi"><a href="index.php?act=cart">Giỏ hàng</a></li> 
                        <li><a href="index.php?act=contact">Liên hệ</a></li> 
                        <li class="tuyendung"><a href="index.php?act=new">Tin tức</a></li> 
                        <li class="diendan"><a href="index.php?act=diendan">Diễn đàn</a></li> 
                    </ul>
                    <div class="new"><strong>NEW</strong></div>
                </nav>
            </div>
        </div>
      
    </header>