<h2>ĐĂNG NHẬP</h2>
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
                            <h2>Đăng nhập</h2>
                        </div>
                        <form action="index2.php?act=dangnhap" method="post">
                            <div class="mb-3 list_input">
                                <label for="exampleInputPassword1" class="form-label">Email</label>
                                <input type="email" class="form-control" id="exampleInputPassword1" name="email">
                            </div>
                            <div class="mb-3 list_input">
                                <label for="exampleInputPassword1" class="form-label">Mật khẩu</label>
                                <input type="password" class="form-control" id="exampleInputPassword1" name="password">
                            </div>
                            <div class="thongbao">
                                <?php if(isset($thong_bao_loi)){ echo $thong_bao_loi;}?>
                            </div>
                            <div class="mb-3 list_input">
                                <input type="submit" class="btn btn-primary form-control" name="dangnhap" value="Đăng nhập">
                            </div>
                        </form>
                        <div class="forgot mb20">
                            <a href="index2.php?act=forgotmatkhau" class="a-blue">Quên mật khẩu</a>
                        </div>
                        
                        <div class="box_right-social">
                            <div class="or">
                                <div class="or-line"></div>
                                <p>Hoặc</p>
                                <div class="or-line"></div>
                            </div>
                            <div class="icon_social">
                                <div class="list_icon">
                                    <a href="https://www.facebook.com/">
                                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="50" height="50"
                                            viewBox="0 0 172 172" style=" fill:#000000;">
                                            <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1"
                                                stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10"
                                                stroke-dasharray="" stroke-dashoffset="0" font-family="none"
                                                font-weight="none" font-size="none" text-anchor="none"
                                                style="mix-blend-mode: normal">
                                                <path d="M0,172v-172h172v172z" fill="none"></path>
                                                <g fill="#3498db">
                                                    <path
                                                        d="M144.48,10.32h-116.96c-9.632,0 -17.2,7.568 -17.2,17.2v116.96c0,9.632 7.568,17.2 17.2,17.2h116.96c9.632,0 17.2,-7.568 17.2,-17.2v-116.96c0,-9.632 -7.568,-17.2 -17.2,-17.2zM127.28,65.36h-6.88c-7.224,0 -10.32,1.72 -10.32,6.88v10.32h17.2l-3.44,17.2h-13.76v55.04h-17.2v-55.04h-13.76v-17.2h13.76v-10.32c0,-13.76 6.88,-24.08 20.64,-24.08c9.976,0 13.76,3.44 13.76,3.44z">
                                                    </path>
                                                </g>
                                            </g>
                                        </svg>
                                    </a>
                                </div>
                                <div class="list_icon">
                                    <a href="">
                                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="50" height="50"
                                            viewBox="0 0 48 48" style=" fill:#000000;">
                                            <path fill="#FFC107"
                                                d="M43.611,20.083H42V20H24v8h11.303c-1.649,4.657-6.08,8-11.303,8c-6.627,0-12-5.373-12-12c0-6.627,5.373-12,12-12c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657C34.046,6.053,29.268,4,24,4C12.955,4,4,12.955,4,24c0,11.045,8.955,20,20,20c11.045,0,20-8.955,20-20C44,22.659,43.862,21.35,43.611,20.083z">
                                            </path>
                                            <path fill="#FF3D00"
                                                d="M6.306,14.691l6.571,4.819C14.655,15.108,18.961,12,24,12c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657C34.046,6.053,29.268,4,24,4C16.318,4,9.656,8.337,6.306,14.691z">
                                            </path>
                                            <path fill="#4CAF50"
                                                d="M24,44c5.166,0,9.86-1.977,13.409-5.192l-6.19-5.238C29.211,35.091,26.715,36,24,36c-5.202,0-9.619-3.317-11.283-7.946l-6.522,5.025C9.505,39.556,16.227,44,24,44z">
                                            </path>
                                            <path fill="#1976D2"
                                                d="M43.611,20.083H42V20H24v8h11.303c-0.792,2.237-2.231,4.166-4.087,5.571c0.001-0.001,0.002-0.001,0.003-0.002l6.19,5.238C36.971,39.205,44,34,44,24C44,22.659,43.862,21.35,43.611,20.083z">
                                            </path>
                                        </svg>
                                    </a>
                                </div>
                                <div class="list_icon">
                                    <a href="">
                                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="50" height="50"
                                        viewBox="0 0 172 172" style=" fill:#000000;">
                                        <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1"
                                            stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10"
                                            stroke-dasharray="" stroke-dashoffset="0" font-family="none"
                                            font-weight="none" font-size="none" text-anchor="none"
                                            style="mix-blend-mode: normal">
                                            <path d="M0,172v-172h172v172z" fill="none"></path>
                                            <g>
                                                <path
                                                    d="M53.75,129v-104.53658l-4.33942,-2.90608c-18.45058,7.40675 -31.49392,25.42733 -31.49392,46.526v35.83333c0,27.70633 22.46033,50.16667 50.16667,50.16667h35.83333c16.9205,0 31.83075,-8.41367 40.91092,-21.25275v-3.83058z"
                                                    fill="#2962ff"></path>
                                                <path
                                                    d="M103.91667,17.91667h-35.83333c-6.61125,0 -12.90358,1.3115 -18.6835,3.6335c-11.94325,11.59567 -20.73317,30.5085 -20.73317,46.53317c0,24.26275 3.354,38.46708 13.30133,52.34175c0.774,1.07858 1.27925,2.33992 1.34733,3.66217c0.15408,2.99208 -0.46225,8.47458 -5.85517,13.40883c-0.5805,0.53033 -0.21142,1.50142 0.57333,1.53367c3.3755,0.14692 10.18742,-0.05017 17.18925,-3.14258c1.99592,-0.8815 4.26775,-0.72742 6.19558,0.29742c11.87158,6.30308 25.77492,7.14875 38.915,7.14875c16.75567,0 33.46475,-3.72667 44.49425,-10.449c5.80858,-8.18792 9.25575,-18.1675 9.25575,-28.96767v-35.83333c0,-27.70633 -22.46033,-50.16667 -50.16667,-50.16667z"
                                                    fill="#eeeeee"></path>
                                                <path
                                                    d="M131.6875,96.75c-7.40675,0 -13.4375,-6.03075 -13.4375,-13.4375c0,-7.40675 6.03075,-13.4375 13.4375,-13.4375c7.40675,0 13.4375,6.03075 13.4375,13.4375c0,7.40675 -6.03075,13.4375 -13.4375,13.4375zM131.6875,75.25c-4.44333,0 -8.0625,3.61917 -8.0625,8.0625c0,4.44333 3.61917,8.0625 8.0625,8.0625c4.44333,0 8.0625,-3.61917 8.0625,-8.0625c0,-4.44333 -3.61917,-8.0625 -8.0625,-8.0625z"
                                                    fill="#2962ff"></path>
                                                <path
                                                    d="M112.875,96.75h-3.58333c-0.989,0 -1.79167,-0.80267 -1.79167,-1.79167v-30.45833h5.375z"
                                                    fill="#2962ff"></path>
                                                <path
                                                    d="M96.75,70.77083v1.85975c-2.25392,-1.70567 -5.02742,-2.75558 -8.0625,-2.75558c-7.40675,0 -13.4375,6.03075 -13.4375,13.4375c0,7.40675 6.03075,13.4375 13.4375,13.4375c3.03508,0 5.80858,-1.04992 8.0625,-2.75558v0.96392c0,0.989 0.80267,1.79167 1.79167,1.79167h3.58333v-25.97917zM88.6875,91.375c-4.44333,0 -8.0625,-3.61917 -8.0625,-8.0625c0,-4.44333 3.61917,-8.0625 8.0625,-8.0625c4.44333,0 8.0625,3.61917 8.0625,8.0625c0,4.44333 -3.61917,8.0625 -8.0625,8.0625z"
                                                    fill="#2962ff"></path>
                                                <path
                                                    d="M76.14583,64.5h-28.66667v5.375h19.06692l-19.96275,23.29167h0.09317c-0.58408,0.75608 -0.989,1.65908 -0.989,2.6875v0.89583h26.875c0.989,0 1.79167,-0.80267 1.79167,-1.79167v-3.58333h-19.06692l19.96275,-23.29167h-0.09317c0.58408,-0.75608 0.989,-1.65908 0.989,-2.6875z"
                                                    fill="#2962ff"></path>
                                            </g>
                                        </g>
                                    </svg>
                                    </a>
                                </div>
                            </div>
                            <div class="notice">
                                <p>Bạn mới biết đến PolyComputer? <a href="index2.php?act=dangki" class="a-blue">Đăng kí</a></p>
                            </div>
                        </div>
                    </div>
            </div>
        </section>
        <!-- end main -->