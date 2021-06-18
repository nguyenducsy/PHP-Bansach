
<!-- <h3>Giỏ hàng của bạn</h3>
              <table class="table">
                      <thead>
                          <tr>
                           <th>Anh</th>
                            <th>Ten SP</th>
                            <th>So luong</th>
                            <th>Gia</th>
                            <th>Thanh tien</th>
                          </tr>
                      </thead>
                      <tbody> -->
                        <?php                    
                            
                          foreach ($_SESSION['carts'] as $p){
                         
                        //   echo '<tr>
                        //       <td><img src="'.$p['image'].'" width="50px"></td>
                        //       <td>'.$p['name'].'</td>
                        //       <td>'.$p['quantity'].'</td>
                        //       <td>'.$p['price'].'</td>
                        //       <td>'.$p['price']*$p['quantity'].'</td>
                        //   </tr>';
                        }    
                        ?>
                      </tbody>
                  </table>


              <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Test3</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../view/css/cart.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</head>
<body>  
            <div class="boxcenter">
                <div class="boxletf">
                    <div class="box1">
                        <!-- <input type="checkbox" id="Chon san pham"> -->
                        <a href="#">CHỌN TẤT CẢ(2 SẢN PHẨM)</a>
                        <h3>XÓA</h3>           
                        <i class="fa fa-trash-o" style="font-size:20px;color: gray;float:right;margin-right: 10px;margin-top: 9px"></i>
                        
                    </div>
                    <!-- <div class="box2">
                        <input type="checkbox" id="Chon san pham">
                        <a href="#">DIEN THONG MINH - CAMERA></a>
                        <hr>
                        <p>
                            <input style="margin-top: 30px;" type="checkbox" id="">
                        </p>
                      
                        <div class="boximg"><img src="img1.jpg"></div>
                        <div class="cameraa"><a href="#">Camera hanh trinh xe hoi VIETMAP X002</a>
                        <h5 style="clear: both;">OME,dic vu,dich vu,kich thuoc trong bo nho</h5>
                        <h5 style="color:orangered;">Chỉ còn 5 sản phẩm</h5>
                        </div>

                        <div class="gia"><p>550.000 <span style="margin-right: 20px;">đ</span></p>
                            <div class="tim">   <i class="fa fa-heart-o" style="font-size:24px"></i>  </div>
                            <div class="bin"><i class="fa fa-trash-o" style="font-size:24px"></i></div>                      
                        </div>

                        <div class="soluong">
                            <div class="giam"> -  </div>
                            <div class="so">1</div>
                            <div class="tang"> + </div>
                               

                        </div>
                        
                       
                    </div> -->

          
                        <?php
                            $total_price = 0;
                          foreach ($_SESSION['carts'] as $p){
                         
                        //   echo '<tr>
                        //       <td><img src="'.$p['image'].'" width="50px"></td>
                        //       <td>'.$p['name'].'</td>
                        //       <td>'.$p['quantity'].'</td>
                        //       <td>'.$p['price'].'</td>
                              
                        //       <td>'.$p['price']*$p['quantity'].'</td>
                        //   </tr>';
                        // <input type="checkbox" id="Chon san pham">
                        // <input style="margin-top: 70px;" type="checkbox" id="">
                            $total_price += $p['price'] * $p['quantity'];
                          echo '
                          <div style="min-height:250px;" class="box2">

                        
                          <a href="#">'.$p['name'].'</a>
                          <a style="color: rgb(228, 76, 6); float: right;font-size: 13pt;margin-right: 10px;" href="#"><strong>Sưu tầm mã giảm giá   V</strong></a>
                          <hr style="zmargin-top: 0px;margin-left: 40px;width: 94%;">
                          <span style="float: left;font-size: 9pt;clear: both;margin-left: 40px;" >Miễn phí vận chuyển cho giao hàng tiêu chuẩn</span>
                          <hr>
                          <p>
                       
                          </p>
                        
                          <div style ="margin-left: 40px;margin-bottom: 20px;" class="boximg"><img src="'.$p['image'].'" width="50px"></div>
                          <div class="cameraa"><a href="#">'.$p['name'].' </a>
                          <h5></h5>          
                          </div>
  
                          <div class="gia"><p>'.$p['price'].'<span>đ</span></p>
                              <div class="gia"> <span style="text-decoration: line-through;float: left;color: gray;font-size: 15pt;">0</span></div>
                              <div class="phantram">-27%</div>
                              <div class="tim"> <i class="fa fa-heart-o" style="font-size:24px"></i>  </div>
                             
                          </div>
  
                          <div class="soluong">
                            <div class="buttons_added ">
                            <input class="minus is-form" type="button" value="-">
                            <input aria-label="quantity" class="input-qty" max="100" min="1" name="" type="number" value="'.$p['quantity'].'">
                            <input class="plus is-form" type="button" value="+">
                            </div>
                          </div>
                          
                      </div>
            
                          ';
                        }    
                        // <div class="bin"> <a href="index.php?act=cart&delete='.$p['id'].'"> <i class="fa fa-trash-o" style="font-size:24px"></i></a> </div>                     
                        //   if(isset($_GET['delete'])){
              
                        //   $id = $_GET['delete'];
                        //   echo $id; 
                        //   delete_product($id);
                        //   }
                

                        ?>
           

                            <!-- <div style="min-height:250px;" class="box2">

                                <input type="checkbox" id="Chon san pham">
                                <a href="#">ASANZO Flagship Srore></a>
                                <a style="color: rgb(228, 76, 6); float: right;font-size: 13pt;margin-right: 10px;" href="#"><strong>Sưu tầm mã giảm giá   V</strong></a>
                                <hr style="border: 2px #ebe7e7 solid;margin-top: 0px;margin-left: 40px;width: 94%;">
                                <span style="float: left;font-size: 9pt;clear: both;margin-left: 40px;" >Miễn phí vận chuyển cho giao hàng tiêu chuẩn</span>
                                <hr>
                                <p>
                                    <input style="margin-top: 70px;" type="checkbox" id="">
                                </p>
                              
                                <div class="boximg"><img src="img2.jpg"></div>
                                <div class="cameraa"><a href="#">Tivi Philips 40 inch LED FULL HD (Digital TV DVB-T2 hàng Thái Lan) tivi giá rẻ </a>
                                <h5>Asanzo, Nhóm màu :màu đen</h5>          
                                </div>
        
                                <div class="gia"><p>2.782.000 <span>đ</span></p>
                                    <div class="gia"> <span style="text-decoration: line-through;float: left;color: gray;font-size: 15pt;">3.790.000</span></div>
                                    <div class="phantram">-27%</div>
                                    <div class="tim">   <i class="fa fa-heart-o" style="font-size:24px"></i>  </div>
                                    <div class="bin"><i class="fa fa-trash-o" style="font-size:24px"></i></div>                      
                                </div>
        
                                <div class="soluong">
                                    <div class="giam"> - </div>
                                    <div class="so">1</div>
                                    <div class="tang"> + </i></div>
                                       
        
                                </div>
                                
                            </div> -->
                </div>

                            <form method="post" action="index.php?ctrl=cart&action=checkout">                
                            <div class="boxright">
                                <div class="nd">
                                    <p> Địa điểm </p>                               
                                    <i class="fa fa-map-marker" style="font-size:24px;color: gray;"></i>                               
                                    <h6>Hồ Chí Minh,Quận 8,Phường 4</h6>
                                    <div class="saup4"></div>                                 
                                    <div class="tt"><strong>Thông tin đơn hàng</strong></div>
                                    <div class="tamtinh">Tạm tính (0 sản phẩm)<span><?php echo $total_price ?><strong>đ</strong></span></div>                              
                                    <div class="phi">Phí giao hàng<span>30000<strong>đ</strong></span></div>
                                    <div class="nhapmgg"> <input type="text" name='' id='' placeholder="Nhập mã giảm giá"></div>
                                    <div class="apdung"><input type="submit "placeholder=" ÁP DỤNG"></div>
                                    <div class="tongcong">Tổng cộng <span><?php echo ''.($total_price + 30000).''?><strong>đ</strong></span></div>
                                    <div class="dabaogom">Đã bao gồm VAT (nếu có)</div>
                                    <div style="color: white" class="xacnhan"> <a href="index.php?act=cart&ctrl=checkout"><input type="submit "placeholder=" XÁC NHẬN GIỎ HÀNG"></a></div>
                                <?php
                                    if(isset($_GET['checkout'])){
                                        header('location: ../view/cart/checkout.php');
                                    }
                                
                                ?>
                                </div>                              
                            </div>
                            </form>
            </div>
    

        <script>//<![CDATA[
        $('input.input-qty').each(function() {
          var $this = $(this),
            qty = $this.parent().find('.is-form'),
            min = Number($this.attr('min')),
            max = Number($this.attr('max'))
          if (min == 0) {
            var d = 0
          } else d = min
          $(qty).on('click', function() {
            if ($(this).hasClass('minus')) {
              if (d > min) d += -1
            } else if ($(this).hasClass('plus')) {
              var x = Number($this.val()) + 1
              if (x <= max) d += 1
            }
            $this.attr('value', d).val(d)
          })
        })
        //]]></script>
            
</body>
</html>