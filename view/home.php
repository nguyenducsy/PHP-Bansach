<section>
        <div class="container">
            <div class="banner">
                <div class="page thirt">
                    <div class="slideshow-container">
                        <div class="mySlides fade">
                            <img src="../view/img/slide1.png" style="width:100%">
                        </div>

                        <div class="mySlides fade">
                            <img src="../view/img/slide2.jpg" style="width:100%">
                        </div>

                        <div class="mySlides fade">
                            <img src="../view/img/slide3.png" style="width:100%">
                        </div>

                        <div class="mySlides fade">
                            <img src="../view/img/slide4.jpg" style="width:100%">
                        </div>

                        <div class="mySlides fade">
                            <img src="../view/img/slide5.jpg" style="width:100%">
                        </div>

                    </div>
                    <br>
                    <div class="boxchua">
                        <div style="text-align:center">
                            <span class="dot" onclick="currentSlide(0)"></span>
                            <span class="dot" onclick="currentSlide(1)"></span>
                            <span class="dot" onclick="currentSlide(2)"></span>
                            <span class="dot" onclick="currentSlide(3)"></span>
                            <span class="dot" onclick="currentSlide(4)"></span>
                            <span class="dot" onclick="currentSlide(5)"></span>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="../view/js/slide_head.js"></script>
    </section>

    <section>
        <div class="rowone">
            <div class="boxdanhmuc">
                <div class="danhmuc"> <a href="index.php?act=product_by_ctl">DANH MỤC</a></div> <button class="btn"><i class="fa fa-bars"></i></button>
                <?php
                //    var_dump($dsdm);
                   foreach($catalog as $dm){
                       $name = $dm['name'];
                       $sort = $dm['sort'];
                       $link = "index.php?act=product_by_ctl&idcat=".$dm['id'];
                       echo '<li><a href="'.$link.'">'.$name.'</a></li><span>'.$sort.'</span>';
                   }
                ?>
            

            </div>
            <div class="rowoner">
                <div class="free">Miễn phí HOT</div>
                <div class="tabfree">
                <li class="all"><a href="index.php?act=product_by_ctl">Tất cả</a>
                    <?php
                        foreach ($free_hot as $fh){
                            // get data
                            $name = $fh['name'];
                            // view
                            $link = "index.php?act=product_by_ctl&idcat=".$fh['id'];
                            echo '<li><a href="'.$link.'">'.$name.'</a></li>';
                        }
                    ?>                
                
                </div>
                <div class="button"></div>
                <hr>
      <?php        

                        foreach($spnb as $dmsp){
                            //get data
               
                            $id = $dmsp['idsp'];
                            $namesp = $dmsp['namesp'];
                            $tacgia = $dmsp['tacgia'];
                            $votes = $dmsp['votes'];
                            $tomtatsp = $dmsp['tomtatsp'];
                            $viewsp = $dmsp['viewsp'];
                            $img = $dmsp['imgsp'];
                            $link = "index.php?act=productdetail&iddm=" .$id;
                            //show
                            $conment = '';
                            if($id != 3 && $id != 6){
                                $conment = 'content mr'; 
                            }
                            else $conment =  'content' ;
                            echo 
                                '<div class=" '.$conment.' ">
                                    <div class="boximg"><img src="'.$img.'" alt=""></div>
                                    <div class="ct">
                                        <div class="titlee">"'.$namesp.'"</div>
                                        <div class="taccgia"><strong>'.$tacgia.'</strong></div>
                                        <div class="heart"><i class="fa fa-heart" style="font-size:14px"></i><i class="fa fa-heart" style="font-size:14px"></i><i class="fa fa-heart" style="font-size:14px"></i><i class="fa fa-heart" style="font-size:14px"></i><i class="fa fa-heart" style="font-size:14px"></i></div>
                                        <div class="vote">'.$votes.' votes</div>
                                        <div class="tomtat">'.$tomtatsp.'</div>
                                    </div>
                                    <div class="iconbook"><a href="'.$link.'"><i class="fas fa-book-open" style="font-size:15px"></i></a></div>
                                    <span>
                                        <div class="line"></div>
                                        <div class="chitiet"><a style="text-decoration: none;color:white" href="index.php?act=cart&ctrl=addtocart&id='.$dmsp['idsp'].'">MUA</a></div>
                                    </span>
                                    <div class="view">'.$viewsp.' lượt xem</div>
                                    </div>';
                        } 
                      
                    ?>
               

            </div>
        </div>
    </section>

    <section>
        <div class="rowtwo">
            <div class="newup">
                <div class="newinweek">Mới trong tuần</div>
                <div class="viewall">XEM TẤT CẢ</div>
            </div>
            <hr>
            <?php
                foreach($new_in_week as $new){
                    //get data
                    $id = $new['id'];
                    $name = $new['name'];
                    $tacgia = $new['tacgia'];
                    $votes = $new['votes'];
                    $xephang = $new['xephang'];
                    $img = $new['imgsp'];

                    echo '
                    <div class="noidung">
                    <div class="rtimg"><img src="'.$img.'" alt=""></div>
                    <a href="#"><strong>'.$name.'</strong> </a>
                    <nav>'.$tacgia.'</nav>
                    <hr>
                    <ins>'.$xephang.'<span>/5</span><strong>('.$votes.' votes)</strong></ins>
                    <div class="iconbook"><i class="fas fa-book-open" style="font-size:15px"></i></div>
                </div>
                    
                    ';

                }
            
            ?>
    
        </div>
    </section>

    <section>
        <div class="rowone bg">
            <div class="bangxephang">
                <div class="danhmuc">BXH THÁNG 07/2020</div> <button class="btn"><i class='fas fa-chart-bar' style='font-size:24px'></i></button>
               
               <?php
                    foreach($bxh as $bxh){
                            //get data
                            $id = $bxh['id'];
                            $name = $bxh['name'];
                            $img = $bxh['img'];
                            $time = $bxh['time'];
                            $imgtop = $bxh['imgtop'];
                      //      var_dump($bxh);
                            //xu ly du lieu
                            $out = '';
                            if($id == 1){
                                $out = ' <div class="dmimg">
                                <img src="'.$imgtop.'" alt="">
                                <div class="blur">
                                    <div class="name">'.$name.'</div>
                                    <div class="time">'.$time.' phút</div>
                                </div>
                            </div>';
                            }
                            else{
                                $out = ' <div class="xephang">
                                <div class="number">'.$id.'</div>
                                <div class="avatar"><img src="'.$img.'" alt=""></div>
                                <div class="name">'.$name.'</div>
                                <div class="time">'.$time.' phút</div>
                            </div> ';
                            }
                            echo $out;

                    }
               
               
               ?>
               

                <hr>
                <a href="#">TÌM HIỂU</a>
            </div> 
            <div class="rowoner">
                <div class="free">Đọc nhiều nhất</div>
                <div class="tabview">
                <li>Tất cả</li>
                    <?php
                            foreach($dn as $dn){
                                //get data
                                $id = $dn['id'];
                                $name = $dn['name'];

                                //show
                                echo '<li>'.$name.'</li>';
                            
                            }

                    ?>


                </div>
                <div class="buttonn"></div>
                <hr>
            
            
      <?php
                        foreach($most_read as $dmsp2){
                            //get data
                            $id = $dmsp2['idsp'];
                            $namesp = $dmsp2['namesp'];
                            $tacgia = $dmsp2['tacgia'];
                            $votes = $dmsp2['votes'];
                            $tomtatsp = $dmsp2['tomtatsp'];
                            $viewsp = $dmsp2['viewsp'];
                            $img = $dmsp2['imgsp'];
                            //show
                            $conment = '';
                            if($id !=3 && $id != 6 && $id !=9){
                                $conment = 'content mr'; 
                            }
                            else $conment =  'content' ;
                            echo 
                                '<div class=" '.$conment.' ">
                                    <div class="boximg"><img src="'.$img.'" alt=""></div>
                                    <div class="ct">
                                        <div class="titlee">"'.$namesp.'"</div>
                                        <div class="taccgia"><strong>'.$tacgia.'</strong></div>
                                        <div class="heart"><i class="fa fa-heart" style="font-size:14px"></i><i class="fa fa-heart" style="font-size:14px"></i><i class="fa fa-heart" style="font-size:14px"></i><i class="fa fa-heart" style="font-size:14px"></i><i class="fa fa-heart" style="font-size:14px"></i></div>
                                        <div class="vote">'.$votes.' votes</div>
                                        <div class="tomtat">'.$tomtatsp.'</div>
                                    </div>
                                    <div class="iconbook"><i class="fas fa-book-open" style="font-size:15px"></i></div>
                                    <span>
                                        <div class="line"></div>
                                        <div class="chitiet">CHI TIẾT</div>
                                    </span>
                                    <div class="view">'.$viewsp.' lượt xem</div>
                                    </div>';
                        }
                    ?>
 
            
            </div>
        </div>
    </section>

    <section>
        <div class="rowtwo">
            <div class="newup">
                <div class="newinweek">Sách mới nhất</div>
                <div class="viewall">XEM TẤT CẢ</div>
            </div>
            <hr>
            <?php
                foreach($new2 as $new2){
                    //get data
                    $id = $new2['id'];
                    $name = $new2['name'];
                    $tacgia = $new2['tacgia'];
                    $votes = $new2['votes'];
                    $xephang = $new2['xephang'];
                    $img = $pathimg.$new2['imgsp'];

                    echo '
                    <div class="noidung">
                    <div class="rtimg"><img src="'.$img.'" alt=""></div>
                    <a href="#"><strong>'.$name.'</strong> </a>
                    <nav>'.$tacgia.'</nav>
                    <hr>
                    <ins>'.$xephang.'<span>/5</span><strong>('.$votes.' votes)</strong></ins>
                    <div class="iconbook"><i class="fas fa-book-open" style="font-size:15px"></i></div>
                </div>
                    
                    ';

                }
            
            
            ?>

      
        </div>
    </section>
    <section style="min-height: 750px;">
        <div class="rowone">
            <div class="boxdanhmucc">
                <div class="danhmuc">NGHE NHIỀU NHẤT</div> <button class="btn"><i class='fas fa-headphones' style='font-size:14'></i></button>
                <?php
                        foreach ($nn as $nn){
                            // get data
                            $name = $nn['name'];
                            $heard = $nn['heard'];
                            // view
                            echo ' <hr> <li>'.$name.'</li><span style="color: rgb(136, 1, 1);">'.$heard.'</span>';
                        }
                    ?>


                <hr>
            </div>
            <div class="rowoner">
                <div class="free">Sách nói</div>
                <div class="tabvieww">
                <li class="all"> Tất cả </li>
                    <?php
                        foreach ($sachnoi as $sachnoi){
                            // get data
                            $name = $sachnoi['name'];
                            // view
                            echo '<li class="all">'.$name.' </li>';
                        }
                    ?>
          
                </div>
                <div class="buttonn"></div>
                <hr>
           

<?php
                        foreach($say_book as $sb){
                            //get data
                            $id = $sb['id'];
                            $namesp = $sb['name'];
                            $tacgia = $sb['tacgia'];
                            $luotnghe = $sb['luotnghe'];
                            $time = $sb['time'];
                            $soure = $sb['soure'];
                            $img = $sb['img'];
                            //show
                            $conment = '';
                            if($id == 1){
                                $conment = 'noidungg'; 
                            }
                            if($id == 2){
                                $conment = 'noidungg ml2'; 
                            }
                            if($id == 3){
                                $conment = 'noidungg ml3'; 
                            }
                            if($id == 4){
                                $conment = 'noidungg ml4'; 
                            }
                            if($id == 5){
                                $conment = 'noidungg ml5'; 
                            }
                            if($id ==6){
                                $conment = 'noidungg ml6'; 
                            }
                            if($id == 7){
                                $conment = 'noidungg ml7'; 
                            }
                            if($id == 8){
                                $conment = 'noidungg ml8'; 
                            }
                            if($id == 9){
                                $conment = 'noidungg ml9'; 
                            }
                            echo ' <div class="'.$conment.'">
                            <div class="rtimgg"><img src="'.$img.'" alt=""></div>
                            <a href="#"><strong>'.$namesp.'</strong> </a>
                            <nav>'.$tacgia.'</nav>
                            <hr>
                            <ins>'.$luotnghe.' lượt nghe</ins>
                            <div class="iconbookk"><i class="fa fa-play-circle" style="font-size:28px"></i></i>
                            </div>
                            <span>
                                <div class="line"></div>
                                <div class="chitiett">
                                    <span>'.$time.'</span>
                            <p>'.$soure.'</p>
                        </div>
                   </span>
                    </div>';
                        }
                    ?> 
                   

        </div>
        </div>
    </section>
    <section>
        <div class="rowfour">
            <div class="boximgg">
                <img src="../view/img/rowfourbanner/0.JPG" alt="">
            </div>
            <div class="content">
                <div class="truyentranh"><strong>TRUYỆN TRANH</strong></div>
                <br>
                <li class="lione"><img src="../view/img/rowfourcontent/1.jpg" alt=""></li>
                <li class="litwo"><img src="../view/img/rowfourcontent/2.jpg" alt=""></li>
                <li class="lithirt"><img src="../view/img/rowfourcontent/3.jpg" alt=""></li>
                <li class="lifour"><img src="../view/img/rowfourcontent/4.jpg" alt=""></li>
                <h4>Khỉ Zozo hiếu kỳ
                    <p>H.A.Rey</p>
                </h4>
                <h4>Hoàng tử bé
                    <p>Antoine De Saint-Exupéry</p>
                </h4>
                <h4> Sừng To Sừng Nhỏ
                    <p>Trần Tiến</p>
                </h4>
                <h4>Bộ tứ siêu quậy
                    <p>Tô Ngưng</p>
                </h4>
            </div>
    </section>

    <section>
        <div class="rowfive">
            <div class="banchay">
                <div class="newinweek">Bán chạy nhất waka</div>
                <div class="viewall">XEM TẤT CẢ</div>
            </div>
            <hr>
            <div class="noidunggg">
                <div class="boximggg"><img src="../view/img/rowfive/1.jpg" alt=""></div>
                <div class="linee"></div>
                <p>20.000 VNĐ</p>
            </div>
            <div class="noidunggg">
                <div class="boximggg"><img src="../view/img/rowfive/2.jpg" alt=""></div>
                <div class="linee"></div>
                <p>35.000 VNĐ</p>
            </div>
            <div class="noidunggg">
                <div class="boximggg"><img src="../view/img/rowfive/3.jpg" alt=""></div>
                <div class="linee"></div>
                <p>35.000 VNĐ</p>
            </div>
            <div class="noidunggg">
                <div class="boximggg"><img src="../view/img/rowfive/4.jpg" alt=""></div>
                <div class="linee"></div>
                <p>35.000 VNĐ</p>
            </div>
            <div class="noidunggg">
                <div class="boximggg"><img src="../view/img/rowfive/5.jpg" alt=""></div>
                <div class="linee"></div>
                <p>35.000 VNĐ</p>
            </div>
            <div class="noidunggg">
                <div class="boximggg"><img src="../view/img/rowfive/6.jpg" alt=""></div>
                <div class="linee"></div>
                <p>0 VNĐ</p>
            </div>
        </div>
    </section>
    <section>
        <div class="rowsix">
            <div class="chonloc">
                <div class="newinweek">Những tuyển tập chọn lọc hay nhất</div>
                <div class="viewall">XEM TẤT CẢ</div>
            </div>
            <hr>
            <div class="nd">
                <img src="../view/img/rowsix/1.jpg" alt="">
                <div class="tex">Marketing nói chung và marketing online nói riêng thật sự khó nếu...</div>
            </div>
            <div class="nd">
                <img src="../view/img/rowsix/2.png" alt="">
                <div class="tex m">Có những thất bại sẽ làm các bạn bật khóc. Có những thất bại sẽ là...</div>
            </div>
            <div class="nd">
                <img src="../view/img/rowsix/3.jpg" alt="">
                <div class="tex ma">Marketing nói chung và marketing online nói riêng thật sự khó nếu</div>
            </div>
            <div class="nd">
                <img src="../view/img/rowsix/4.jpg" alt="">
                <div class="tex maa">Không phải ai cũng có thể tự nhiên và thoải mái khi nói trước đám...</div>
            </div>
        </div>
    </section>
    <section>
        <div class="rowfive">
            <div class="banchay">
                <div class="newinweek">Sách Waka khuyên đọc</div>
                <div class="viewall">XEM TẤT CẢ</div>
            </div>
            <hr>
            <div class="noidunggg">
                <div class="boximggg"><img src="../view/img/rowsevent/1.jpg" alt=""></div>
                <div class="linee"></div>
                <p>20.000 VNĐ</p>
            </div>
            <div class="noidunggg">
                <div class="boximggg"><img src="../view/img/rowsevent/2.jpg" alt=""></div>
                <div class="linee"></div>
                <p>60.000 VNĐ</p>
            </div>
            <div class="noidunggg">
                <div class="boximggg"><img src="../view/img/rowsevent/3.jpg" alt=""></div>
                <div class="linee"></div>
                <p>35.000 VNĐ</p>
            </div>
            <div class="noidunggg">
                <div class="boximggg"><img src="../view/img/rowsevent/4.jpg" alt=""></div>
                <div class="linee"></div>
                <p>35.000 VNĐ</p>
            </div>
            <div class="noidunggg">
                <div class="boximggg"><img src="../view/img/rowsevent/5.jpg" alt=""></div>
                <div class="linee"></div>
                <p>20.000 VNĐ</p>
            </div>
            <div class="noidunggg">
                <div class="boximggg"><img src="../view/img/rowsevent/6.jpg" alt=""></div>
                <div class="linee"></div>
                <p>35.000 VNĐ</p>
            </div>
        </div>
    </section>