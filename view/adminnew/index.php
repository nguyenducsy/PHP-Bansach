
 <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://kit.fontawesome.com/a076d05399.js"></script> 
  <link rel="stylesheet" href="../view/css/addmin.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="../view/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <script src="../view/chart-master/Chart.js"></script>

  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>
<?php
    include '../model/bell.php';
    $number = get_All_bell();
?>
    <div class="box_content">
    

      <div class="box_head">

                <div class="box_menu"><i class="fa fa-reorder" style="font-size:24px"></i></div>
                <div class="box_logo"><a href="index.php"><strong>WAK<span>A</span>DMIN</strong></a>  </div>
                <div class="box_note">
                    <?php
                        foreach($number as $n){
                            $mess = $n['mess'];
                            $bell = $n['bell'];
                            $user = $n['user'];

                            echo "
                            <li> <a href='#'> <i class='far fa-id-badge' style='font-size:18px;color:#858585'></i></a>
                            <div class='badge'><strong>$user</strong></div>
  
                    </li>
  
                    <li> <a href='#'> <i class='far fa-bell' style='font-size:18px;color:#858585'></i></a>
                            <div class='bell'><strong>$bell</strong></div>
                  </li>
  
  
                    <li> <a href='#'> <i class='far fa-comment-dots' style='font-size:18px;color:#858585'></i></a>
                            <div class='comment'><strong>$mess</strong></div>
  
                  </li>
                                               
                            ";
                        }            
                    ?>
                </div>
                <div class="box_set"><a href="index.php?act=setting"><i class="fas fa-cog fa-spin"></i></a></div>
                <div class="box_logout"><span> <a href="index.php?act=user&logout=1">Logout</a></span></div>
                <div class="box_flag"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/21/Flag_of_Vietnam.svg/1200px-Flag_of_Vietnam.svg.png" alt=""></div>
         
        </div>

      <div class="box_left">

   
            <div id="sidebar" class="nav-collapse">
                <!-- sidebar menu start-->
                <ul class="sidebar-menu" id="nav-accordion">
                    <p class="centered">
                        <a href="profile.html"><img src="../view/images/rubikk.jpg" class="img-circle" width="80"></a>
                    </p>
                    <h5 style="margin-top: 20px;font-size:20px" class="centered">ND-SY</h5>
                    <li class="mt">
                        <a href="admin.php">
                        <i class="fa fa-home"></i>
                            <span>Home</span>
                        </a>
                    </li>
                    <li class="sub-menu">
                        <a href="javascript:;">
                            <i class="fa fa-desktop"></i>
                            <span>UI Elements</span>
                        </a>
                        <ul class="sub">
                            <li><a href="general.html">General</a></li>
                            <li><a href="buttons.html">Buttons</a></li>
                            <li><a href="panels.html">Panels</a></li>
                            <li><a href="font_awesome.html">Font Awesome</a></li>
                        </ul>
                    </li>
          
                              
                    <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="admin.php?act=catalog" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="fas fa-user-friends"></i>
                            <span>Category manager</span>
                  </a>  
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="admin.php?act=catalog">Home</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="admin.php?act=catalog&ctrl=addnew">Add-new</a>
  
                  </div>
              </li>
            
              <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="admin.php?act=product" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="fa fa-shopping-cart"></i>
                            <span>Product manager</span>
                  </a>  
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="admin.php?act=product">Home</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="admin.php?act=product&ctrl=addproduct">Add-new</a>
  
                  </div>
              </li>
 
                    <li class="sub-menu">
                        <a class="" href="javascript:;">
                            <i class="fa fa-tasks"></i>
                            <span>Forms</span>
                        </a>
                        <ul class="sub">
                            <li><a href="form_component.html">Form Components</a></li>
                            <li class="active"><a href="advanced_form_components.html">Advanced Components</a></li>
                            <li><a href="form_validation.html">Form Validation</a></li>
                            <li><a href="contactform.html">Contact Form</a></li>
                        </ul>
                    </li>
                    <li class="sub-menu">
                        <a href="javascript:;">
                            <i class="fa fa-th"></i>
                            <span>Data Tables</span>
                        </a>
                        <ul class="sub">
                            <li><a href="basic_table.html">Basic Table</a></li>
                            <li><a href="responsive_table.html">Responsive Table</a></li>
                            <li><a href="advanced_table.html">Advanced Table</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="inbox.html">
                            <i class="fa fa-envelope"></i>
                            <span>Mail </span>
                            <span class="label label-theme pull-right mail-info">2</span>
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="admin.php?act=thongke" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class=" fa fa-bar-chart-o"></i>
                            <span>Charts</span>
                         </a>  
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="admin.php?act=thongke">Home</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="admin.php?act=thongke&ctrl=chart">Chart</a>
                        </div>  
                   </li>
                    <li class="sub-menu">
                        <a href="javascript:;">           
                            <i class='fas fa-comment-dots'></i>
                            <span>Client Comments</span>
                        </a>
                        <ul class="sub">
                            <li><a href="lobby.html">Lobby</a></li>
                            <li><a href="chat_room.html"> Chat Room</a></li>
                        </ul>
                    </li>
                    <!-- <li>
                        <a href="google_maps.html">
                            <i class="fa fa-map-marker"></i>
                            <span>Google Maps </span>
                        </a>
                    </li> -->
                </ul>
                <!-- sidebar menu end-->
            </div>
  

      </div>
    



      <div class="box_center">
      <?php
             
             $act = 'home';
             if(isset($_GET['act']) && ($_GET['act'])){

               $act = $_GET['act'];
               include '../controller/'.$act.'.php';
             }
             else
             include '../view/adminnew/'.$act.'.php';
 
          
        
   

         ?>
  
    </div>



 

  
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  
</body>
</html>