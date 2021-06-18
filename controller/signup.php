<?php
    session_start();
    include "../model/connect.php";
    include "../model/user.php";
    if(isset($_POST['signup']) && ($_POST['signup'])){
        $user = $_POST['user'];
        $pass = $_POST['pass'];
        $email = $_POST['email'];
        signup($user,$pass,$email);
        
        $checkuser = checkuser($user, $pass);

        if(is_array($checkuser)){
            $_SESSION['sid'] = $checkuser['id'];
            $_SESSION['suser'] = $checkuser['user'];

            if($checkuser['role'] ==1) { header('location: index.php');}
            else header('location: login.php');
        }
        else{
            $canhbao = "Cần quyền truy cập";
        }

    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>
<div class="padding">
<img src="../view/img/login/bgloginwaka.jpg" alt="">
        <div class="content">
                <div class="incontent">
                    <form action="signup.php" method="post">
                    <div class="tenn"><input type="text" name="user" placeholder="Name" ></div>        
                    <div class="sot">    <input type="text" name="pass" placeholder="Pass"></div>  
                    <div class="sot">   <input type="email" name="email" placeholder="Email"></div>  
                    <div class="sub">   <input type="submit" name="signup" value="SIGN-UP"></div>  
                    </form>
                    <?php
                    if(isset($canhbao) && ($canhbao!="")) echo $canhbao;          
                    ?>
                </div>      
        </div>
  
        </div>
</body>
<style>
    .subm:hover {
        opacity: 0.8;
    }
    .tenn:hover{
        opacity: 0.8;
    }
    .sot:hover{
        opacity: 0.8;
    }
     .tenn{
        float: left;
        margin-left: 100px;
        width: 200px;
        margin-top: 50px;
        border-radius: 5px;
        background-image: linear-gradient(to right, #835799 , #23c47e);
    }
    body{
        margin: 0px;
    }
    .padding{
        width: 100%;
        float: left;
        background-color: black;
        min-height: 720px;
    }
    .padding img{
        position: absolute;
        opacity: 0.5;
        object-fit: cover;
        width: 100%;
        height: 720px;
    }
    .content{
        width: 450px;
        position: relative;
        float: left;
        margin-left: 490px;
        margin-top: 145px;
        box-shadow: #3a3a3a 0px 0px 8px;
        padding: 50px 50px;
        min-height: 300px;
        background-image: linear-gradient(to bottom left, #06b51b , #449dfb);
    }
    .incontent{
        background-color: white;
        width: 450px;
        min-height: 300px;
    }
     .sot{
        float: left;
        margin-left: 100px;
        width: 200px;
        margin-top: 50px;
        border-radius: 5px;
        background-image: linear-gradient(to right, #835799 , #23c47e);
    }
     .sub input{
        float: left;
        margin-top: 40px;
        width: 120px;
        min-height: 30px;
        border-radius: 20px;
        clear: both;
        background-image: linear-gradient(to right, #11a666 , #23c47e);
        margin-left: 170px;
    }
    input{
        border: none;
        margin-left: 50px;
        width: 200px;
        border-radius: 5px;
        color: #3a3a3a;
        min-height: 20px;
    }
</style>
</html>