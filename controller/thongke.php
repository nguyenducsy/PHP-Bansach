<?php
        
        include_once '../model/catalog.php';
        include_once '../model/product.php';
        include_once '../model/thongke.php';
        include_once '../global.php';
        $ctrl = 'index';
        $thongke = get_count_product();
        if(isset($_GET['ctrl'])){
                $ctrl = $_GET['ctrl'];
        }
           
                switch ($ctrl) {
                        case 'index':
                                $thongke = get_count_product();
                                include '../view/adminnew/thongke/'.$ctrl.'.php';
                                break;              
                        case 'chart':
                                
                                $thongke = get_count_product();
                                include '../view/adminnew/thongke/'.$ctrl.'.php';
                           
                                break;
                                
                        case 'edit':
                               
                                include '../view/adminnew/product/'.$ctrl.'.php';

                                break;
                        case 'delete':
                                $product = get_Allproduct();
                                if($ctrl == 'delete'){
                                        $id = $_GET['id'];

                                }
                                delete_product($id);
                                
                        
                                include '../view/adminnew/product/index.php';

                               
                                break;
                                             
                        default:
                                include '../view/adminnew/product/index.php';
                                break;
                }
        

?>
