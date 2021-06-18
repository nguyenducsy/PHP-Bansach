<?php
    session_start();
    include "../model/connect.php";
    include "../model/danhmuc.php";
    include "../model/sp_free_hot.php";
    include "../model/new_in_week.php";
    include "../model/most_new.php";
    include "../model/bangxephang.php";
    include "../model/nghenhieu.php";
    include "../model/most_read.php";
    include "../model/say_book.php";
    include "../global.php";

    // connect();

    //lay data cho trang chu
    $catalog = showdmne(0); // danh muc defaultml
    $catalog = catalog(0); // danh muc default
    $free_hot = free_hot(); // danh muc hot 
    $dsdm2i = showdmnee(0); // danh muc hot 
    $new_in_week = new_in_week(0);
    $new2 = sachmoinhat(0);
    $bxh = bxhg(0);
    $dn = docnhieunhat(0);
    $nn = nghenhieunhat(0);
    $sachnoi = sachnoi(0);
    $most_read = most_read(0);
    $say_book = say_book(0);
    $dmspp = showprodetail(0); // san pham trang chu
    $spnb = showprodetail2_index(0);


    include_once "../view/header.php";

    
    //load data san pham

  
            if(isset($_GET['act'])){
                $act = $_GET['act'];
                
        switch($act){
            case 'product';
            //get data
            if(isset($_GET['idcat']) && ($_GET['idcat']>0)){
                $iddm = $_GET['idcat'];  
            }
            else $iddm = 0;
            $spnb = showprodetail2_index($iddm);
            include_once "../view/product.php";
            break;


            case 'product_by_ctl';
            //get data
            showprodetail2_index(0);
            if(isset($_GET['idcat'])){
                $iddm = $_GET['idcat'];  
             
                $spnb = showprodetail2_index($iddm);
            }
            else $iddm = 0;
            include_once "../view/home.php";
           
            break;


            case 'productdetail';
                if(isset($_GET['iddm']) && ($_GET['iddm']>0)){
                  $id = $_GET['iddm'];

                    if($id > 0 && $id <7){

                    $pro = showproductdetail_index($id); 
                    }
                    elseif ($id >6){
                   
                     $pro = showproductdetail_index2($id);
                    }
                    else{
                        $pro = "<h2>Sản phẩm này không tồn tại";
                    }
           
           
                }
            include_once "../view/productdetail.php";
                // $dssp = showsp();
                // link page
                break;



            case 'user';
                //dang ky

                // dang nhap

                //exit
                if(isset($_GET['logout']) && ($_GET['logout']==1)){
                    unset($_SESSION['sid']);
                    unset($_SESSION['suser']);
                    header('location: index.php');
                }
                break;
            case 'new';
                // $dssp = showsp();
                // link page
                break;  
            case 'diendan';
                // $dssp = showsp();
                // link page
                break;   

            case 'cart';
                include_once '../controller/cart.php';
                break;   
            default :
                    include_once "../view/home.php";
                    break;
            }
        }
            else{
                include_once "../view/home.php";
            }

    // include_once "../view/home.php";   open home in file  product 
    
    include_once "../view/footer.php";


?>