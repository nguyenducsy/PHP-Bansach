<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="../view/admin/css/qldm.css">
<section>
    <div class="boxright">
      
    <h2>
        Danh sách danh mục
    </h2>
    <?php
           if(isset($_GET['idedit']) && ($_GET['idedit']>0)){
                if(isset($infordm['hot'])==1) $c2 = '<i class="fa fa-check-circle" style="font-size:18px;color:blue"></i>'; 
                else $c2 = '<i class="fa fa-times-circle" style="font-size:18px;color:red"></i>';
               ?>

                <form action="admin.php?act=qldm" method="post">
                <div class="tenn"><input type="text" name="name" value="<?=$infordm['name']?>" placeholder="Name"></div> 
                <div class="sot"><input type="number" name="sort" value="<?=$infordm['sort']?>" placeholder="Sort"></div> 
                <div class="chekc"><input type="checkbox" name="hot" placeholder="hot">  </div> <br>
                <input type="hidden" name="id" value="<?=$infordm['id']?>">
                <div class="subm"><input type="submit" name="capnhap" value="Update danh mục"></div> 
                </form>

    <?php        
           }else{
    ?>

                <form action="admin.php?act=qldm" method="post">
                <div class="tenn"><input type="text" name="name" placeholder="Name"></div> 
                <div class="sot"><input type="number" name="sort" placeholder="Sort"></div> 
                <div class="chekc"><input type="checkbox" name="hot"><span> HOT </span></div> <br>
                <div class="subm"><input type="submit" name="themdm" value="Add"></div> 
                </form>
        
    <?php } ?>

        
    
 
    <div class="bang">
        <table>
            <th class="id">Id</th>
            <th class="ten">Name</th>
            <th class="sort">Sort</th>
            <th class="hot">Hot</th>
            <th class="edit">Edit</th>
            <th class="xoa">Delete</th>
            </table>  
        
            <?php
                foreach($dsdm as $dm){
                    //get data
                    $id = $dm['id'];
                    $name = $dm['name'];
                    $sort = $dm['sort'];
                    $hot = $dm['hot'];
                    
                    if($hot == 1){
                        $hot = '<i class="fa fa-check-circle" style="font-size:18px;color:blue"></i>';
                    }else $hot = '<i class="fa fa-times-circle" style="font-size:18px;color:red"></i>';

                    $linkedit = "admin.php?act=qldm&idedit=" .$id;
                    $linkdelete = "admin.php?act=qldm&idde=" .$id;

                    echo ' <br>    <div class="show">
                            <div class="idd">  <td>'.$id.'</td></div> 
                            <div class="namee"> <td >'.$name.'</td></div>  
                            <div class="sortt">  <td >'.$sort.'</td></div>  
                            <div class="hott">    <td >'.$hot.'</td></div>  
                            <td> <span> <a href="'.$linkedit.'">  <i class="fa fa-edit" style="font-size:18px;color:#ffd800"></i> </a> </span></td>
                            <td> <span> <a href="'.$linkdelete.'">  <i class="fa fa-trash-o" style="font-size:18px;color:red"> </i> </a></span></td> </div>';
                }
            
            ?>


</div>

</section>