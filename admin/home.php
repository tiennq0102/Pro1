<div class="boxright">
            <div class="linkpage">
                <i class="fas fa-home fa-2x" style="color: white"></i>
                <span> > Home</span>
            </div>
            <div class="boxtitle">
                <p>Xin chào</p>
            </div>
            <div class="rowtable">
            <div class="table50">
                <table>
                    <tr>
                        <th colspan="3">Sản phẩm xem nhiều nhất</th>
                    </tr>
                    <tr>
                        <td><strong>Mã loại</strong></td>
                        <td><strong>Tên SP</strong></td>
                        <td><strong>Hình</strong></td>
                    </tr>
                    
                    <?php
                    extract($spxemtop1);
                            // var_dump($spxemtop1);
                            $img = $img_path.$hinh_san_pham;
                            echo '<tr>
                                    <td>'.$spxemtop1['ma_san_pham'].'</td>
                                    <td>'.$spxemtop1['ten_san_pham'].'</td>
                                    <td><img src="'.$img.'" alt=""></td>
                                </tr>';
                    ?>
                </table>
            </div>  
            <div class="table50">
                <table>
                    <tr>
                        <th colspan="3">Sản phẩm mới nhất</th>
                    </tr>
                    <tr>
                        <td><strong>Mã loại</strong></td>
                        <td><strong>Tên SP</strong></td>
                        <td><strong>Hình</strong></td>
                    </tr>
                        <?php
                        extract($spmoitop1);
                                // var_dump($spmoitop1);
                                $img = $img_path.$hinh_san_pham;
                                echo '<tr>
                                        <td>'.$spmoitop1['ma_san_pham'].'</td>
                                        <td>'.$spmoitop1['ten_san_pham'].'</td>
                                        <td><img src="'.$img.'" alt=""></td>
                                    </tr>';
                        ?>
                </table>
            </div>  
                
            </div>
            <div class="rowtable">
                <div class="table50">
                    <table>
                    <tr>
                        <th>Biểu đồ thống kê</th>
                    </tr>
                    <tr>
                        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                                <div id="myChart" style="width:100%; max-width:442.03px; height:200px;"></div>
                                <script>
                                    //load gg charts
                                google.charts.load('current', {'packages':['corechart']});
                                google.charts.setOnLoadCallback(drawChart);
                                    //draw the chart and set the chart values
                                function drawChart() {
                                var data = google.visualization.arrayToDataTable([
                                    ['Danh mục','Số lượng sản phẩm'],

                                    <?php
                                    $tongdm=count($listtk);
                                    $i=1;
                                        foreach ($listtk as $thongke) {
                                            extract($thongke);
                                            if($i==$tongdm) $dauphay="";else $dauphay=",";
                                            echo "['".$thongke['tendm']."', ".$thongke['countsp']."]".$dauphay;
                                            $i+=1;
                                        }
                                    ?>
                                ]);
                                var options = {
                                title:'Thống kê sản phẩm theo danh mục', 'width':387.5, 'height':200};

                                var chart = new google.visualization.PieChart(document.getElementById('myChart'));
                                chart.draw(data, options);
                                }
                            </script>
                    </tr>
                            
                    </table>
                </div>
                <div class="table50">
                <table>
                        <tr>
                            <td><strong>Tổng doanh thu</strong></td>
                            <td><strong>Trung bình/Hóa đơn</strong></td>
                        </tr>
                        <tr>
                            <td><?php echo number_format($tong_doanh_thu, 0, '', '.') ?>đ</td>
                            <td><?php echo number_format($trung_binh_dt, 0, '', '.') ?>đ</td>
                        </tr>
                        <tr>
                            <th colspan="3">Thống kê doanh thu</th>
                        </tr>
                </table>
            </div>  


            </div>
            <div class="thongke">
                <table class="table100">
                    <tr>
                        <th>Mã loại</th>
                        <th>Tên loại</th>
                        <th>Số lượng</th>
                        <th>Giá cao nhất</th>
                        <th>Giá thấp nhất</th>
                        <th>Giá trung bình</th>
                    </tr>
                    <?php
                        foreach ($listtk as $thongke) {
                            extract($thongke);
                            echo '<tr>
                                    <td>'.$madm.'</td>
                                    <td>'.$tendm.'</td>
                                    <td>'.$countsp.'</td>
                                    <td>'.number_format($maxprice, 0, '', '.').'đ</td>
                                    <td>'.number_format($minprice, 0, '', '.').'đ</td>
                                    <td>'.number_format($avgprice, 0, '', '.').'đ</td>
                                </tr>';
                        }
                    ?>
                </table>
            </div>
            
        </div>
</body>
</html>