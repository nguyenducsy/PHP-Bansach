<form action="#" method="post">
      <div class="card mt-3">
        <div class="card-header">
          DANH MỤC > HOME
        </div>
        <link rel="stylesheet" href="../view/css/c_t_l.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <div class="card-body">
          <table class="table table-striped table">
              <thead>
                <tr class="bg-info">
                  <th scope="col"></th>
                  <th scope="col">Mã loại</th>
                  <th scope="col">Tên loại</th>
                  <th scope="col"></th>

                </tr>
              </thead>
              <tbody>

                            <?php
      
                              foreach ($catalog as $ctl){
                                $id = $ctl['id'];
                                $name = $ctl['name'];


                                echo '  
                                <tr>
                                <th scope="row"><p class="example"><input type="checkbox" class="chonX" name="chonX[]"></p></th> 
                                        <td>'.$id.'</td>
                                        <td>'.$name.'</td>
                                        <td>
                                        <a href="admin.php?act=catalog&id='.$id.'" class="btn btn-warning">Xoá</a>
                                        <a href="admin.php?act=catalog&ctrl=edit&id='.$id.'" class="btn btn-info">Sửa</a>
                                        </td>               
                                </tr>
                                            ';
                                        
                              }      
                             
                              if(isset($_GET['id'])){
                                $idd = $_GET['id'];

                               
                                delete_catalog($idd);
                                }
                                   
                          
                            ?>
                                                      
                            
                         
              </tbody>
            </table>
          </div>
        <div class="card-footer">
            <!-- <a href="#" class="btn btn-info">   Chọn tất cả</a> -->
            <button id="select_all" class="btn btn-info" type='button' data-value="selectall">Chọn tất cả</button>
            <button id="unselect_all" class="btn btn-info" type='button' data-value="unselectall">Bỏ chọn tất cả</button>
            <!-- <a href="#" class="btn btn-info">Bỏ chọn</a> -->
            <button id="del_cate_list" type="submit" class="btn btn-info">Xoá danh mục đã chọn</button>
            <a href="admin.php?act=catalog&ctrl=addnew" class="btn btn-info">Thêm mới</a>
        </div>
      </div>
      
      <script defer>
        $(document).ready(function () {
          $('#select_all').click(function () {
            if($(this).attr('data-value') == 'selectall')
            {
              $('.chonX').each(function () {
                $(this).attr('checked', 'checked');
              });
              $(this).attr('data-value', 'selectall');
            }
            
        
            
          });
          $('#unselect_all').click(function () {
            
             if($(this).attr('data-value') == 'unselectall')
            {
              $('.chonX').each(function () {
                $(this).removeAttr('checked');;
              });
              $(this).attr('data-value', 'unselectall');
            }
            
          });
        });
      </script>

</form>

