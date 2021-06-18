<link rel="stylesheet" href="view/css/c_t_l.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<form action="#" method="post">
      <div class="card mt-3">
        <div class="card-header">
          THỐNG KÊ > HOME
        </div>
        <div class="card-body">
          <table class="table table-striped table">
              <thead>
                <tr class="bg-info">
                  <th scope="col"></th>
                  <th scope="col">Tên loại</th>
                  <th scope="col">Tổng loại sản phẩm</th>
                  <th scope="col"></th>

                </tr>
              </thead>
              <tbody>

                            <?php
                              foreach ($thongke as $tk){
                                $name = $tk['Tenloai'];
                                $sumloai = $tk['Tong_loai_sanpham'];


                                echo '  
                                <tr>
                                <th scope="row"><p class="example"><input type="checkbox" class="chonX" name="chonX[]"></p></th> 
                                        <td>'.$name.'</td>
                                        <td>'.$sumloai.'</td>
                                        <td>
                                        </td>               
                                </tr>
                                            ';
                                        
                              }      
        
                            ?>
                                                      
                                  <script>
                                function selectall() {
                                  var x = document.querySelectorAll(".example");
                                  var i;
                                  for (i = 0; i < x.length; i++) {
                                    x[i].style.backgroundColor = "red";
                                  }
                                }
                                  </script>
                         
              </tbody>
              </table>
          </div>
        <div class="card-footer">
            <!-- <a href="#" class="btn btn-info">   Chọn tất cả</a> -->
          <!-- <a href="#" class="btn btn-info">  <button  class="example" onclick="selectall()"   >Chọn tất cả</button> </a> -->
            <button id="select_all" class="btn btn-info" type='button' data-value="selectall">Chọn tất cả</button>
            <button id="unselect_all" class="btn btn-info" type='button' data-value="unselectall">Bỏ chọn tất cả</button>
            <!-- <a href="#" class="btn btn-info">Bỏ chọn</a> -->
            <button id="del_cate_list" type="submit" class="btn btn-info">Xoá danh mục đã chọn</button>
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

      <script>
      // Xoá nhiều chuyên mục cùng lúc
$('#del_cate_list').on('click', function() {
    $confirm = confirm('Bạn có chắc chắn muốn xoá các chuyên mục đã chọn không?');
    if ($confirm == true)
    {
        $id_cate = [];
 
        $('.chonX[] input[type="checkbox"]:checkbox:checked').each(function(i) {
            $id_cate[i] = $(this).val();
        });
 
        if ($id_cate.length === 0)
        {
            alert('Vui lòng chọn ít nhất một chuyên mục.');
        }
        else
        {
            $.ajax({
                url : $_DOMAIN + 'categories.php',
                type : 'POST',
                data : {
                    id_cate : $id_cate,
                    action : 'delete_cate_list'
                },
                success : function(data) {
                    location.reload();
                }, error : function() {
                    alert('Đã có lỗi xảy ra, hãy thử lại.');
                }
            });
        }
    }
    else
    {
        return false;
    }
});

      </script>

      <?php
      $action = "";
       if ($action == 'delete_cate_list')
{
    foreach ($_POST['.chonX[]'] as $key => $id_cate)
    {
        $sql_check_id_cate_exist = "SELECT .chonX[] FROM categories WHERE id_cate = '$id_cate'";
        if ($db->num_rows($sql_check_id_cate_exist))
        {
            $sql_delete_cate = "DELETE FROM product WHERE id = '$id_cate'";
            $db->query($sql_delete_cate);
        }
    }   
    $db->close();
}
      ?>

</form>
</form>

