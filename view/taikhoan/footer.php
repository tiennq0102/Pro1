<footer>
            <div class="footer-1">
                <div>
                    <ul>
                        <li class="title">
                            Giới thiệu về polycomputer
                        </li>
                        <li><a href="">Giới thiệu công</a></li>
                        <li><a href="">Thông tin liên hệ</a></li>
                        <li><a href="">Thông tin tuyển dụng</a></li>
                        <li><a href="">Tin tức</a></li>
                    </ul>
                </div>
                <div>
                    <ul>
                        <li class="title">
                            Hỗ trợ khách hàng
                        </li>
                        <li><a href="">Hướng dẫn mua hàng trực tuyến</a></li>
                        <li><a href="">Hướng dẫn thanh toán</a></li>
                        <li><a href="">Hướng dẫn mua hàng trả góp</a></li>
                        <li><a href="">Gửi yêu cầu bảo hành</a></li>
                        <li><a href="">Góp ý, khiếu nại</a></li>
                    </ul>
                </div>
                <div>
                    <ul>
                        <li class="title">
                            Chính sách chung
                        </li>
                        <li><a href="">Chính sách, qui định chung</a></li>
                        <li><a href="">Chính sách vận chuyển</a></li>
                        <li><a href="">Chính sách bảo hành</a></li>
                        <li><a href="">Bảo mật thông tin khách hàng</a></li>
                    </ul>
                </div>
                <div>
                    <ul>
                        <li class="title">
                            Thông tin khuyến mại
                        </li>
                        <li><a href="">Thông tin khuyến mại</a></li>
                        <li><a href="">Sản phẩm khuyến mại</a></li>
                        <li><a href="">Sản phẩm bán chạy</a></li>
                        <li><a href="">Sản phẩm mới</a></li>
                    </ul>
                </div>
            </div>
            <div class="footer-2">
                <div>
                    <span><p>© 2021 POLY COMPUTER</p></span>
                    <span><p>Địa chỉ: 138 Trần Bình - Mỹ Đình - Nam Từ Liêm - Hà Nội</p></span>
                    <span><p>Email: polycomputer@gmail.com</p></span>
                </div>
            </div>
        </footer>
        <!-- end footer -->
    </div>
    <!-- end container  -->
    
    <!-- JS -->
    <!-- js bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
    <!-- cdn jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- js slick slider -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"
        integrity="sha512-HGOnQO9+SP1V92SrtZfjqxxtLmVzqZpjFFekvzZVWoiASSQgSr4cw9Kqd2+l8Llp4Gm0G8GIFJ4ddwZilcdb8A=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.js"
        integrity="sha512-eP8DK17a+MOcKHXC5Yrqzd8WI5WKh6F1TIk5QZ/8Lbv+8ssblcz7oGC8ZmQ/ZSAPa7ZmsCU4e/hcovqR8jfJqA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        $('.filtering').slick({
            slidesToShow: 5, //Hiển thị số sản phẩm trên  slick slider 
            slidesToScroll: 4, //Số sản phẩm khi lướt
            arrows: false, //Hiển thị button previous-next
        });

        var filtered = false;

        $('.js-filter').on('click', function () {
            if (filtered === false) {
                $('.filtering').slick('slickFilter', ':even');
                $(this).text('Unfilter Slides');
                filtered = true;
            } else {
                $('.filtering').slick('slickUnfilter');
                $(this).text('Filter Slides');
                filtered = false;
            }
        });

    </script>
</body>

</html>