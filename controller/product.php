<?php
        
        include_once '../model/catalog.php';
        include_once '../model/product.php';
        include_once '../global.php';
        $ctrl = 'index';
        $catalog = get_Allcatalog();
        if(isset($_GET['ctrl'])){
                $ctrl = $_GET['ctrl'];
        }
           
                switch ($ctrl) {
                        case 'index':
                                $product = get_Allproduct();
                                include '../view/adminnew/product/'.$ctrl.'.php';
                                break;              
                        case 'addproduct':
                                
                                if(isset($_POST['add_new_product'])){

                                $name = $_POST['product_name'];
                                $id = $_POST['product_id'];
                                $price = $_POST['product_price'];
                                $discount = $_POST['product_sales'];
                                $nameimg = $_FILES['product_Image']['name'];
                                $linkimg = $link.$nameimg;
                
                                add_new_product($name,$id,$linkimg,$price , $discount);
            
                                }
                                include '../view/adminnew/product/'.$ctrl.'.php';

                                break;
                                
                        case 'edit':
                                if(isset($_GET['id']) && ($_GET['id']>0)){      
                                        $id = $_GET['id'];                        
                                        $infor_sp = get_product_byid($id);  //get in4 chitiet ham` nay` dau
                             
                                include '../view/adminnew/product/'.$ctrl.'.php';
                        }
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
