<?php
    include_once '../model/product.php';
    include_once '../model/cart.php';
    $action='index';
    if(isset($_GET['ctrl'])){
        $action=$_GET['ctrl'];
    
    switch($action){
        case 'index':
            include('../view/cart/index.php');
        break;
        case 'addtocart':
            //lay product theo id cate
           $id=$_GET['id'];
           addToCart($id);
           echo '<script type="text/javascript">
                 window.location="index.php?act=cart";
        </script>';

        case 'checkout':
            include '../view/cart/checkout.php';
       
        break;

        case 'put':
                 //luu thong tin don hang
            $fname  =$_SESSION['carts']['name'];
            // $add=$_POST['address'];
            // $email=$_POST['email'];
            // $phone=$_POST['phone'];
            // $ngay=date('Y-m-d H:i:s');//ngay thang nam, gio,.. hien tai
            // $madh=addToOrder($fname,$add,$email,$phone,$ngay);
            //luu chi tiet don hang
            addToOrderDetail($fname);
        //     unset($_SESSION['carts']);//xoa gio hang
        //    echo '<script type="text/javascript">
        //          window.location="index.php";
        //            </script>';
        break;
    }
}
        else include('../view/cart/index.php');
  
?>
