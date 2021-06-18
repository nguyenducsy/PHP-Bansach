<section>
        <div class="rowtwo">
            <div class="newup">
                <div class="newinweek">Sách nổi bật</div>
                <div class="viewall">XEM TẤT CẢ</div>
            </div>
            <hr>

            <?php
                foreach($spnb as $sp){
                    $id = $sp['id_chung'];
                    $name = $sp['namesp'];
                    $tacgia = $sp['tacgia'];
                    $votes = $sp['votes'];
                    // $xephang = $sp['xephang'];
                    $imgsp = $sp['imgsp'];
                    // $iddm = $sp['iddm'];
                    $link = "index.php?act=productdetail&iddm=" .$id;

                    echo '<div class="noidung">
                    <div class="rtimg"><img src="'.$imgsp.'" alt=""></div>
                    <a href="#"><strong>'.$name.'</strong> </a>
                    <nav>'.$tacgia.'</nav>
                    <hr>
                    <ins>5<span>/5</span><strong>('.$votes.' votes)</strong></ins>
                    <div class="iconbook"><a href="'.$link.'"><i class="fas fa-book-open" style="font-size:15px"></i></a></div>          
                     </div>
                    ';
                }

            ?>
            <?php
                    foreach($new_in_week as $new){
                        //get data
                        $id = $new['id_chung'];
                        $name = $new['name'];
                        $tacgia = $new['tacgia'];
                        $votes = $new['votes'];
                        $xephang = $new['xephang'];
                        $img = $new['imgsp'];
                        $link = "index.php?act=productdetail&iddm=" .$id;
            
                        echo '<div class="noidung">
                        <div class="rtimg"><img src="'.$img.'" alt=""></div>
                        <a href="#"><strong>'.$name.'</strong> </a>
                        <nav>'.$tacgia.'</nav>
                        <hr>
                        <ins>5<span>/5</span><strong>('.$votes.' votes)</strong></ins>
                        <div class="iconbook"><a href="'.$link.'"><i class="fas fa-book-open" style="font-size:15px"></i></a></div>          
                         </div>
                        ';
                    }
            ?>
                    <?php
                    foreach($most_read as $bh){
                        //get data
                        $id = $bh['idsp'];
                        $name = $bh['namesp'];
                        $tacgia = $bh['tacgia'];
                        $votes = $bh['votes'];
                        $xephang = $bh['xephang'];
                        $img = $bh['imgsp'];
                        $link = "index.php?act=productdetail&iddm=" .$id;
            
                        echo '<div class="noidung">
                        <div class="rtimg"><img src="'.$img.'" alt=""></div>
                        <a href="#"><strong>'.$name.'</strong> </a>
                        <nav>'.$tacgia.'</nav>
                        <hr>
                        <ins>5<span>/5</span><strong>('.$votes.' votes)</strong></ins>
                        <div class="iconbook"><a href="'.$link.'"><i class="fas fa-book-open" style="font-size:15px"></i></a></div>          
                         </div>
                        ';
                    }
            ?>

<?php
                    foreach($say_book as $sb){
                        //get data
                        $id_sb = $sb['id'];
                        $name_sb = $sb['name'];
                        $tacgia_sb = $sb['tacgia'];
                        $votes_sb = $sb['votes'];
                        $xephang_sb = $sb['xephang'];
                        $img_sb = $sb['img'];
                        $link_sb = "index.php?act=productdetail&iddm=" .$id_sb;
            
                        echo '<div class="noidung">
                        <div class="rtimg"><img src="'.$img_sb.'" alt=""></div>
                        <a href="#"><strong>'.$name_sb.'</strong> </a>
                        <nav>'.$tacgia_sb.'</nav>
                        <hr>
                        <ins>5<span>/5</span><strong>('.$votes_sb.' votes)</strong></ins>
                        <div class="iconbook"><a href="'.$link_sb.'"><i class="fas fa-book-open" style="font-size:15px"></i></a></div>          
                         </div>
                        ';
                    }
            ?>
        

            <!-- <div class="noidung">
                <div class="rtimg"><img src="../view/img/rowtwocontent2/1.jpg" alt=""></div>
                <a href="#"><strong>Nhân sự cốt cán</strong> </a>
                <nav>Seth Godin</nav>
                <hr>
                <ins>4.91<span>/5</span><strong>(103 votes)</strong></ins>
                <div class="iconbook"><i class='fas fa-book-open' style='font-size:15px'></i></div>
            </div>
            <div class="noidung">
                <div class="rtimg"><img src="../view/img/rowtwocontent2/2.jpg" alt=""></div>
                <a href="#"><strong>Cẩm nang mở nhà hàng</strong> </a>
                <nav>Roger Fields</nav>
                <hr>
                <ins>4.97<span>/5</span><strong>(184 votes)</strong></ins>
                <div class="iconbook"><i class='fas fa-book-open' style='font-size:15px'></i></div>
            </div>
            <div class="noidung">
                <div class="rtimg"><img src="../view/img/rowtwocontent2/3.jpg" alt=""></div>
                <a href="#"><strong>Bí mật người kể chuyện</strong> </a>
                <nav>Carmine Gallo</nav>
                <hr>
                <ins>4.97<span>/5</span><strong>(150 votes)</strong></ins>
                <div class="iconbook"><i class='fas fa-book-open' style='font-size:15px'></i></div>
            </div>
            <div class="noidung">
                <div class="rtimg"><img src="../view/img/rowtwocontent2/4.jpg" alt=""></div>
                <a href="#"><strong>20 Thách thức của nhà quản lý</strong> </a>
                <nav>Bruce Tulgan</nav>
                <hr>
                <ins>4.98<span>/5</span><strong>(51 votes)</strong></ins>
                <div class="iconbook"><i class='fas fa-book-open' style='font-size:15px'></i></div>
            </div>
            <div class="noidung">
                <div class="rtimg"><img src="../view/img/rowtwocontent2/5.jpg" alt=""></div>
                <a href="#"><strong>Lean out - Vươn mình</strong> </a>
                <nav>Marrissa Orr</nav>
                <hr>
                <ins>4.97<span>/5</span><strong>(29 votes)</strong></ins>
                <div class="iconbook"><i class='fas fa-book-open' style='font-size:15px'></i></div>
            </div>
            <div class="noidung">
                <div class="rtimg"><img src="../view/img/rowtwocontent2/6.jpg" alt=""></div>
                <a href="#"><strong>Lấy khách hàng làm trung tâm - Yếu tố...</strong> </a>
                <nav>Kyle M.K</nav>
                <hr>
                <ins>4.98<span>/5</span><strong>(49 votes)</strong></ins>
                <div class="iconbook"><i class='fas fa-book-open' style='font-size:15px'></i></div>
            </div>  -->
        </div>
    </section>