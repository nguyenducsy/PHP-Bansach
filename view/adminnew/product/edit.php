
 <div class="card mt-3">
        <div class="card-header info">
          SẢN PHẨM > EDIT
        </div>
        <div class="card-body">
 
          <form action="#" method="post" enctype="multipart/form-data">
            
          
              <div class="form-group">
                <label for="">*Tên Sản Phẩm</label>
                <input type="text" name="product_name" class="form-control" placeholder="Nhập tên" value="<?= $infor_sp['namesp']?>">
              </div>
              <div class="form-group">
                <label for="">*Gía Sản Phẩm</label>
                <input type="text"  name="product_price" class="form-control" placeholder="Nhập giá" value="<?= $infor_sp['price']?>">
              </div>
              <div class="form-group">
                <label for="">*Gía Sales</label>
                <input type="text" name="product_sales" class="form-control"  placeholder="Sales"  value="<?= $infor_sp['discount']?>">
              </div>
      
                <p>
                <label for="">*Danh mục </label>
                <select name="product_id" id="">

                    <?php
                        foreach($catalog as $cta){
                            $idd = $cta['id'];
                            $namee = $cta['name'];

                            echo '<option value="'.$idd.'">'.$namee.'</option>';
                        }                           
                    ?>             
                  </select>   
             
                  </p>
                 <label for="">*Hình ảnh</label><p>
                 <input type="file" name="product_Image">
                 </p>
                 <p>
                 <img style="width: 10%" src="<?= $infor_sp['imgsp']?>" alt="">
                 </p>
       
               
               <?php
                     if(isset($_POST['update'])){
                      $id = $_GET['id'];
                      $id_cata = $_POST['product_id'];
                      $name = $_POST['product_name'];
                      $img = $_FILES['product_Image']['name'];
                      $price = $_POST['product_price'];
                      $sales = $_POST['product_sales'];
                      $link = '../view/img/bookcontent/';
                      $pic = $link.$img;
  
                      update_product($id,$id_cata,$name,$pic,$price,$sales);
                    }
              
        
               ?>

                   

              <div class="form-group">
                  <button  name="update" type="submit" class="btn btn-primary">Lưu</button>
                  <a href="admin.php?act=product" class="btn btn-danger">Danh sách</a>
              </div>
          </form>
                    
          <style>
             .form-group button {
                    border: none;
                    background-image: linear-gradient(to right top, #b12b7d, #335043);
                }

                .form-group a {
                    border: none;
                    background-image: linear-gradient(to right top, #835799, #23c47e);
                }

                .form-group a:hover {
                    opacity: 0.8;
                }

                .form-group button:hover {
                    opacity: 0.8;
                }
          </style>
        </div>
      </div>
