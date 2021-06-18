
 <div class="card mt-3">
        <div class="card-header info">
          SẢN PHẨM > EDIT
        </div>
        <div class="card-body">
          <form action="#" method="post" enctype="multipart/form-data">
        
          
              <div class="form-group">
                <label for="">Tên Sản Phẩm</label>
                <input type="text" name="product_name" class="form-control" placeholder="Nhập tên">
              </div>
              <div class="form-group">
                <label for="">Gía Sản Phẩm</label>
                <input type="text"  name="product_price" class="form-control" placeholder="Nhập giá">
              </div>
              <div class="form-group">
                <label for="">Gía Sales</label>
                <input type="text" name="product_sales" class="form-control"  placeholder="Sales">
              </div>
      
                <p>
                <label for="">Danh mục</label>
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
                 <label for="">Hình ảnh</label><p>
                 <input type="file" name="product_Image">
                 </p>
               
               <?php
                     if(isset($_POST['update'])){
                      $id = $_GET['id'];
                      $id_cata = $_POST['product_id'];
                      $name = $_POST['product_name'];
                      $img = $_FILES['product_Image']['name'];
                      $price = $_POST['product_price'];
                      $sales = $_POST['product_sales'];
  
                      update_product($id,$id_cata,$name,$img,$price,$sales);
                    }
              
        
               ?>

                   

              <div class="form-group">
                  <button name="update" type="submit" class="btn btn-primary">Lưu</button>
                  <a href="index.php?act=product" class="btn btn-danger">Danh sách</a>
              </div>
          </form>
        </div>
      </div>
