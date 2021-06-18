<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<section>
        <div class="rowtwo">
            <div class="newup">
                <div class="newinweek">Sách mới nhất</div>
                <div class="viewall">XEM TẤT CẢ</div>
            </div>
            <hr>
    <div class="boxnoidung">
            <?php
                if(isset($pro)){
                    if($id > 0 && $id <7){
                   
                                // $idchung = $pro['id_chung'];
                $name = $pro['namesp'];
                $tacgia = $pro['tacgia'];
                $votes = $pro['votes'];
                $xephang = $pro['xephang'];
                $imgsp = $pro['imgsp'];
                // $iddm = $pro['iddm'];
                $theloai = $pro['theloai'];
                $nhaxuatban = $pro['nxb'];
                $capnhap = $pro['ngaycapnhap'];
         
            ?>


        <div class="boximg">
             <img style="width: 100%" src="<?=$imgsp?>" alt=""> 
        </div>
        <div class="boxcontent">
            <div class="tieude"><?=$name?></div>
           <ul>
                <li>Tác giả : <?=$tacgia?></li>
               <li>Thể loại  : <?=$theloai?> </li>
               <li>Nhà xuất bản  : <?=$nhaxuatban?></li> 
           </ul>
           <div class="dinhdang">Định dạng : Epub</div>
           <div class="ngayupdate">Ngày cập nhập : <?=$capnhap?></div>
           <div class="timdoc">Tìm đọc sách giấy : <a href="index.php">Tại đây</a> </div> 
           <div class="muasach">Đọc sách</div>
           <div class="tomtat">Sau khi quậy tung trời ở khu Thiên Đường, Triệu Ngọc xuất hiện với gương mặt của đội trưởng quản giáo tới khu 
               Địa Ngục cứu cha vợ Miêu Khôn. Không ngờ khu Địa Ngục lại còn giam cầm Lundy - người giàu nhất thế giới đã mất tích sáu năm nay.
                Và giải thưởng tìm được ông ta là một tỷ đô la Mỹ, ứng với quẻ văn siêu cấp hôm nay Triệu Ngọc gieo được: Khôn Cấn - Đoài Khảm.
                Tuy nhiên, kế hoạch chạy trốn của Triệu Ngọc càng ngày càng gặp nhiều khó khăn, ba</div>
        </div>
        <div class="xephang"><span><?=$xephang?>/5</span><strong>( <?=$votes?> votes)</strong></div>
    
                <?php } 
                                 else if($id > 6){
                                    echo $id;
                                    $name = $pro['name']; 
                                    $tacgia = $pro['tacgia'];
                                    $votes = $pro['votes'];
                                    $xephang = $pro['xephang'];
                                    $imgsp = $pro['imgsp'];
                                    // $iddm = $pro['iddm'];
                                    // $theloai = $pro['theloai'];
                                    // $nhaxuatban = $pro['nxb'];
                                    // $capnhap = $pro['ngaycapnhap'];
             
                ?>
    
    
            <div class="boximg">
                 <img style="width: 100%" src="<?=$imgsp?>" alt=""> 
            </div>
            <div class="boxcontent">
                <div class="tieude"><?=$name?></div>
               <ul>
                    <li>Tác giả : <?=$tacgia?></li>
                   <li>Thể loại  : <?=$theloai?> </li>
                   <li>Nhà xuất bản  : <?=$nhaxuatban?></li> 
               </ul>
               <div class="dinhdang">Định dạng : Epub</div>
               <div class="ngayupdate">Ngày cập nhập : <?=$capnhap?></div>
               <div class="timdoc">Tìm đọc sách giấy : <a href="index.php">Tại đây</a> </div> 
               <div class="muasach">Đọc sách</div>
               <div class="tomtat">Sau khi quậy tung trời ở khu Thiên Đường, Triệu Ngọc xuất hiện với gương mặt của đội trưởng quản giáo tới khu 
                   Địa Ngục cứu cha vợ Miêu Khôn. Không ngờ khu Địa Ngục lại còn giam cầm Lundy - người giàu nhất thế giới đã mất tích sáu năm nay.
                    Và giải thưởng tìm được ông ta là một tỷ đô la Mỹ, ứng với quẻ văn siêu cấp hôm nay Triệu Ngọc gieo được: Khôn Cấn - Đoài Khảm.
                    Tuy nhiên, kế hoạch chạy trốn của Triệu Ngọc càng ngày càng gặp nhiều khó khăn, ba</div>
            </div>
            <div class="xephang"><span><?=$xephang?>/5</span><strong>( <?=$votes?> votes)</strong></div>
        
                    <?php }   
            } ?>
            
                    
        

    </div>  

    <div class="lienquan">
        <iframe src="binhluan.php?idsp=<?=$_GET['iddm']?>" width="100%" height="500px" frameborder="0"></iframe>
    </div>

   
<section>