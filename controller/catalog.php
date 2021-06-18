<?php
        
        include '../model/catalog.php';
      
        $ctrl = 'index';

        if(isset($_GET['ctrl'])){
                $ctrl = $_GET['ctrl'];
        }
           
                switch ($ctrl) {
                        case 'index':
                                $catalog = get_Allcatalog();
                                // echo $catalog['name'];
                                include '../view/adminnew/catalog/'.$ctrl.'.php';
                                break;              
                        case 'addnew':
                                include '../view/adminnew/catalog/'.$ctrl.'.php';        
                                break;
                        case 'edit':
                                include '../view/adminnew/catalog/'.$ctrl.'.php';

                                break;
                        case 'delete':
                              
                                include '../../view/adminnew/catalog/index.php';
                                break;
                                             
                        default:
                                // include '../../view/adminnew/catalog/index.php';
                                break;
                }
        

?>
