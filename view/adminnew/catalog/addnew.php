
      <div class="card mt-3">
        <div class="card-header info">
          DANH MỤC > ADD-NEW
        </div>
        <div class="card-body">
          <form action="#" method="post">
        
            <div class="form-group">
                <label for="">Mã danh mục</label>
                <input type="text" readonly name="id" class="form-control" placeholder="Mã loại tự phát sinh">
              </div>
              <div class="form-group">
                <label for="">Tên danh mục</label>
                <input type="text" name="nameCata" class="form-control" placeholder="Tên loại">

                <?php
                if(isset($_POST['add_new_catalog'])){

                    $name = $_POST['nameCata'];
                     add_new_catalog($name);

                }
                ?>
              </div> 

              <div class="form-group">
                  <button name="add_new_catalog" type="submit" class="btn btn-primary">Lưu</button>
                  <a href="admin.php?act=catalog" class="btn btn-danger">Danh sách</a>
              </div>
          </form>
        </div>
      </div>
