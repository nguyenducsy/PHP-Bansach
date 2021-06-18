
      <div class="card mt-3">
        <div class="card-header info">
            SẢN PHẨM > THÊM SẢN PHẨM
        </div>
        <div class="card-body">
          <form action="admin.php?act=product&ctrl=addproduct" method="post" enctype="multipart/form-data">
        
          
              <div class="form-group">
                <label for="">Tên Sản Phẩm</label>
                <input type="text" name="product_name" class="form-control" placeholder="Tên sản phẩm">
              </div>
              <div class="form-group">
                <label for="">Gía Sản Phẩm</label>
                <input type="text"  name="product_price" class="form-control" placeholder="Giá">
              </div>
              <div class="form-group">
                <label for="">Gía Sales</label>
                <input type="text" name="product_sales" class="form-control" placeholder="Sales">
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
               
            
     

              <div class="form-group">
                  <button name="add_new_product" type="submit" class="btn btn-primary">Lưu</button>
                  <a href="admin.php?act=product" class="btn btn-danger">Danh sách</a>
              </div>
          </form>
        </div>
      </div>
