<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="../view/admin/css/qlsp.css">
 <section>
    <div class="boxright">
    <h2>
        Danh sách sản phẩm 
    </h2>
        <div class="row">

                <?php
                    if(isset($_GET['idedit']) && ($_GET['idedit']>0)){

                        if($inforsp['hot'] == 1){
                            $c1 = '<i class="fa fa-check-circle" style="font-size:18px;color:blue"></i>';
                        }
                        else $c1 ='<i class="fa fa-times-circle" style="font-size:18px;color:red"></i>';
                        $img = $pathimg.$inforsp['imgsp'];
                        if(is_file($img)){
                                 $img = '<img src="'.$img.'" alt="">';
                        }else  $img = "";
                       
                ?>

                        <form action="admin.php?act=qlsp" method="post" enctype="multipart/form-data"> 
                            <select name="iddm" id="">
                                <?php
                                foreach( $dsdm as $dm){   
                                    if($inforsp['iddm'] == $dm['id']){
                                             $s2 = "selected";
                                    }else  $s2 = "";         
                                                     
                                     echo '<option value="'.$dm['id'].'" '.$s2.'>'.$dm['name'].'</option>';      
                                } ?>
                        
                            </select>
                            <div class="tenn"><input type="text" name="name" value="<?=$inforsp['name']?>"></div> 
                            <div class="sot"><input type="text" name="tacgia"value="<?=$inforsp['tacgia']?>"></div> 
                            <input type="file" name="img">
                            <input type="hidden" name="id" value="<?=$inforsp['id']?>">
                            <div class="chekc"><input type="checkbox" name="hot"><span>HOT</span>  </div> <br>
                            <div class="subm"><input type="submit" name="capnhap" value="Update sản phẩm"></div> 
                        </form>

                <?php
                // form default
                    }else{
                ?>
                         <form action="admin.php?act=qlsp" method="post" enctype="multipart/form-data">
                            <select name="iddm" id="">
                                <?php
                                     foreach( $dsdm as $dm){    echo '<option value="'.$dm['id'].'">'.$dm['name'].'</option>';  }                         
                                ?>
                            </select>
                            <div class="tenn"> <input type="text" name="name" placeholder="Name"> </div>
                            <input type="file" name="img">
                            <div class="sot">  <input type="text" name="tacgia" placeholder="Tác giả"> </div>
                            <div class="chekc"><input type="checkbox" name="hot"><span>HOT</span> </div><br>
                            <div class="subm"><input type="submit" name="themsp" value="Thêm sản phẩm"> </div>
                        </form>
                <?php }?>              
            
    <div class="bang">
        <table>
            <th class="id">Id</th>
            <th class="ten">Name</th>
            <th class="tacgia">Tác giả</th>
            <th class="img">Images</th>
            <th class="hot">Hot</th>
            <th class="edit">Edit</th>
            <th class="xoa">Delete</th>
            </table>  
        
            <?php
                foreach($dssp as $sp){
                    //get data
                    $id = $sp['id'];
                    $iddm = $sp['iddm'];
                    $name = $sp['name'];
                    $tacgia = $sp['tacgia'];
                    $img = $pathimg.$sp['imgsp'];
                    
                    if(is_file($img)){  $img = '<img src="'.$img.'">';

                    }else $img = "";

                    $hot = $sp['hot'];

                    if($hot == 1)  $hot = '<i class="fa fa-check-circle" style="font-size:18px;color:blue"></i>';
                    else $hot = '<i class="fa fa-times-circle" style="font-size:18px;color:red"></i>';

                   
                    $linkedit = "admin.php?act=qlsp&idedit=" .$id;
                    $linkdelete = "admin.php?act=qlsp&iddelete=" .$id;
              
                        echo ' 
                        <br><div class="show">
                            <div class="idd">  <td>'.$id.'</td></div> <br>
                            <div class="namee"> <td >'.$name.'</td></div> <br>
                            <div class="tacgia"> <td >'.$tacgia.'</td></div> <br>
                            <div class="imgg"> <td >'.$img.'</td></div>  <br>
                            <div class="hott"> <td >'.$hot.'</td></div>  <br>
                            <div class="edit"> <td><a href="'.$linkedit.'"><i class="fa fa-edit" style="font-size:18px;color:#ffd800"></i> </a></td> <br> </div>
                            <div class="delete"> <td><a href="'.$linkdelete.'">  <i class="fa fa-trash-o" style="font-size:18px;color:red"> </i>  </a></td> </div> </div>';
                  
                }
            ?>
        </div>
   
        </div>
    </section>
    
