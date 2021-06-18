      <div class="card mt-3">
        <div class="card-header info">
          DANH MỤC > EDIT
        </div>
        <div class="card-body">
          <form action="#" method="post">
            <div class="form-group">
                <label for="">Mã danh mục</label>
                <input type="text" readonly name="id" class="form-control">
              </div>
              <div class="form-group">
                <label for="">Tên danh mục</label>
                <input type="text"  name="nameCata" class="form-control">

          
              </div>

              <?php

                  if(isset($_POST['update'])){
                    $id = $_GET['id'];
                    $name = $_POST['nameCata'];
           
                    update_catalog($id,$name);
                    
                    echo '<p>Cập nhập thành công</p>';
                  }


                  ?>
              <div class="form-group">
                  <button name="update" type="submit" class="btn btn-primary">Cập nhật</button>
                  <a href="index.php?act=catalog" class="btn btn-danger">Danh sách</a>
              </div>
          </form>
        </div>
      </div>
