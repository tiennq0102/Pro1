</div>
        <!-- end header -->
        <section>
            <div class="box container_fluid">
                <div class="box_left">
                    <?php
                        include "view/taikhoan/boxleft.php"
                    ?>
                </div>
                <!-- end box_left -->
                <div class="box_right">
                    <div class="box_right_sm">
                        <div class="box_right-title">
                            <h2>Quên mật khẩu</h2>
                            <p>Nhập Email sử dụng cho tài khoản này, chúng tôi sẽ gửi Password cho bạn.</p>
                        </div>
                        <!-- index2.php?act=guimail-->
                        <form action="index2.php?act=forgotmatkhau" method="post">
                            <div class="mb-3 list_input">
                                <label for="exampleInputPassword1" class="form-label">Email</label>
                                <input type="email" class="form-control" id="exampleInputPassword1" name="email">
                            </div>

                            <div class="thongbao">
                                <?php
                                    if(isset($thongbao)&&($thongbao!="")){
                                        echo $thongbao;
                                    }
                                ?>
                            </div>
                            
                            <div class="mb-3 list_input forgot-quenmk">
                                <input type="reset" class="btn btn-sm btn-primary forgot1" name="nhaplai"
                                    value="Nhập lại">
                                <input type="submit" class="btn btn-sm btn-primary forgot2" name="gui"
                                    value="Gửi">
                            </div>
                        </form>
                        <div class="notice">
                            <a href="index2.php?act=dangnhap" class="a-blue">Quay về đăng nhập</a>
                        </div>
                </div>
            </div>
        </section>
        <!-- end main -->