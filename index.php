<?php 
include('partials/header.php'); 
include('config/constants.php');
?>

<!-- style -->
<!-- <link rel="stylesheet" href="/frontend/css/style.css"> -->
<link rel="stylesheet" href="<?php echo '/frontend/css/style.css'; ?>">
<!-- Main -->
<main>

    <!-- Banner -->
    <div class="banner">
        <!-- ảnh banner -->
        <div class="media-block">
            <img src="/frontend/assets/img/trangbia/Banner1.jpg" alt="" class="img"
                style="width: 100%; border-radius: 5px">
        </div>
        <!-- text banner -->
        <div class="text-banner">
            Thương hiệu lẩu đến từ Đài Loan<br>
            <span>Đậm đà - tươi ngon - trọn vẹn</span>
        </div>
        <!-- ảnh đè lên banner -->
        <div class="media-block2">
            <img src="/frontend/assets/img/trangbia/ảnh đè lên banner.png" alt="" onclick="openModal(this)"
                style="border-radius: 50px; border: 5px solid #000;">
        </div>
    </div>

    <!-- in4 -->
    <div class="popular">
        <div class="main-content">

            <!-- Ngăn cách 1 -->
            <div class="ngan-cach">
                <hr>
                <div class="text-ngancach">
                    Thương Hiệu
                </div>
                <hr>
            </div>

            <!-- Thông tin 1 -->
            <div class="info_1">

                <!-- text -->
                <div class="rec">
                    <div class="text1_1">
                        <h2 class="heading" style="color: #000;
                            font-family: Prompt;
                            font-size: 21px;
                            font-style: normal;
                            font-weight: 500;
                            line-height: normal;">
                            Lẩu Chi Dân - Hương vị Đài Loan
                        </h2>
                        <p class="des" style="color: #000;
                            font-family: Quicksand;
                            font-size: 15px;
                            font-style: normal;
                            font-weight: 400;
                            line-height: normal;">
                            Sau hàng trăm năm tốn tại trong cuộc sống người Đài, lẩu Đài Loan không chỉ đơn thuấn là
                            sự kết hợp của các nguyên liệu quen thuộc, mà liên tục được cải tiến và hoàn thiện, từ
                            thế hệ này sang thế hệ khác. Thực khách đến Chi Dân sẽ được tự minh khám phá hành trình
                            ẩm thực đặc sắc với nước lầu ngọt vị tự nhiên, kết hợp hầm cùng các loại gia vị dậy mùi
                            thơm đặc trưng của Đài Loan. Nét đặc sắc không chỉ đến từ nước lầu, mà còn đến tử cả
                            những món nhúng kiểu Đài - bạn sẽ tim thấy nhiếu hơn là chỉ thịt bò và các loại rau
                            thơm. Chính sự kết hợp các nguyên liệu, món ăn hải hòa sẽ tạo nên hương vị lấu Đài Loan
                            tỉ mỉ và tinh tế.
                        </p>
                    </div>
                </div>
                <!-- ảnh 1 -->
                <img src="/frontend/assets/img/trangbia/in4_1_1.jpg" alt="" onclick="openModal(this)"
                    style="width: 250px; height: 330px; flex-shrink: 0; border-radius: 25.987px; box-shadow: 5px 5px 15px rgba(0, 0, 0, 0.5);">
                <!-- ảnh 2 -->
                <img src="/frontend/assets/img/trangbia/in4_1_2.jpg" alt="" onclick="openModal(this)"
                    style="width: 250px; height: 330px; flex-shrink: 0; border-radius: 25.987px; box-shadow: 5px 5px 15px rgba(0, 0, 0, 0.5);">
            </div>

            <!-- Thông tin 2 -->
            <div class="info_2">
                <!-- Ảnh 3 -->
                <img src="/frontend/assets/img/trangbia/in4_2.jpg" alt="" onclick="openModal(this)"
                    style="width: 532.2px; height: 330px; flex-shrink: 0; border-radius: 25.987px; box-shadow: 5px 5px 15px rgba(0, 0, 0, 0.5);">
                <!-- text2 -->
                <div class="rec">
                    <div class="text1_2">
                        <h2 class="heading" style="color: #000;
                            font-family: Prompt;
                            font-size: 21px;
                            font-style: normal;
                            font-weight: 500;
                            line-height: normal;">
                            Lẩu Ngon - Tươi <br>
                            Tạo nên trải nghiệm độc đáo!
                        </h2>
                        <p class="des" style="color: #000;
                            font-family: Quicksand;
                            font-size: 15px;
                            font-style: normal;
                            font-weight: 400;
                            line-height: normal;">
                            Sau hàng trăm năm tốn tại trong cuộc sống người Đài, lẩu Đài Loan không chỉ đơn thuấn là
                            sự kết hợp của các nguyên liệu quen thuộc, mà liên tục được cải tiến và hoàn thiện, từ
                            thế hệ này sang thế hệ khác. Thực khách đến Chi Dân sẽ được tự minh khám phá hành trình
                            ẩm thực đặc sắc với nước lầu ngọt vị tự nhiên, kết hợp hầm cùng các loại gia vị dậy mùi
                            thơm đặc trưng của Đài Loan. Nét đặc sắc không chỉ đến từ nước lầu, mà còn đến tử cả
                            những món nhúng kiểu Đài - bạn sẽ tim thấy nhiếu hơn là chỉ thịt bò và các loại rau
                            thơm. Chính sự kết hợp các nguyên liệu, món ăn hải hòa sẽ tạo nên hương vị lấu Đài Loan
                            tỉ mỉ và tinh tế.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Thông tin 3 -->
            <div class="info_3">
                <div class="rec">
                    <div class="text">
                        <h2 class="heading" style="color: #000;
                            font-family: Prompt;
                            font-size: 23.625px;
                            font-style: normal;
                            font-weight: 500;
                            line-height: normal;">
                            Ở đây, chúng tôi không chỉ bán lẩu?
                        </h2>
                        <p class="des" style="color: #000;
                            font-family: Quicksand;
                            font-size: 16px;
                            font-style: normal;
                            font-weight: 400;
                            line-height: normal;">
                            Chúng tôi Không Chỉ Bán Lẩu – Chúng Tôi Mang Đến Trải Nghiệm! Sứ mệnh của chúng tôi
                            không chỉ là mang đến những nồi lẩu ngon, mà còn tạo ra một không gian vui vẻ, thư giãn,
                            nơi mọi người có thể tận hưởng những khoảnh khắc đáng nhớ bên nhau. Hãy đến ngay Chi Dân
                            và cùng chúng tôi thưởng thức hương vị tuyệt hảo của lẩu! </p>
                    </div>
                </div>
                <img src="/frontend/assets/img/trangbia/in4_1_4.png" alt="" onclick="openModal(this)"
                    style="width: 532.2px; height: 330px; flex-shrink: 0; border-radius: 25.987px; box-shadow: 5px 5px 15px rgba(0, 0, 0, 0.5);">
            </div>

            <!-- Ngăn cách 2 -->
            <div class="ngan-cach">
                <hr>
                <div class="text-ngancach">
                    Truyền Thống
                </div>
                <hr>
            </div>

            <!-- Thông tin 4 -->
            <div class="info_4">
                <!-- Hình 1 -->
                <div class="rec1">
                    <div class="rec-top">
                        <div class="text1">
                            <div class="font1">Nước Lẩu</div>
                            <div class="font2">Đậm Đà, Chuẩn Vị</div>
                        </div>
                    </div>
                    <img src="/frontend/assets/img/trangbia/ảnh 1.svg" alt="" onclick="openModal(this)">
                    <div class="rec-bottom">
                        <div class="font3">
                            Tại Lẩu Chi Dân, nước lẩu được chế biến theo công thức đặc biệt, mang đến hương vị đậm
                            đà, thơm ngon, phù hợp với mọi sở thích. Từ vị cay tê kích thích vị giác đến vị thanh
                            ngọt bổ dưỡng, mỗi loại nước lẩu đều được nấu từ nguyên liệu tươi ngon, đảm bảo trải
                            nghiệm ẩm thực trọn vẹn.
                        </div>
                    </div>
                </div>
                <!-- hình 2 -->
                <div class="rec2">
                    <div class="rec-top">
                        <div class="text1">
                            <div class="font1"> Buffet Topping </div>
                            <div class="font2">Ăn Thả Ga, Không Lo Về Giá!</div>
                        </div>
                    </div>
                    <img src="/frontend/assets/img/trangbia/Thực đơn 1.svg" alt="" onclick="openModal(this)">
                    <div class="rec-bottom">
                        <div class="font3">
                            Buffet lẩu tại Lẩu Chi Dân mang đến hàng chục lựa chọn hấp dẫn với đủ loại thịt, hải
                            sản, rau củ,.... Tất cả nguyên liệu đều được tuyển chọn kỹ lưỡng, đảm bảo tươi ngon và
                            chất lượng. Chỉ cần chọn nước lẩu yêu thích, phần còn lại cứ để buffet lo nhúng thả ga,
                            ăn không giới hạn! </div>
                    </div>
                </div>
                <!-- Hình 3 -->
                <div class="rec3">
                    <div class="rec-top">
                        <div class="text1">
                            <div class="font1"> Món Gọi Riêng </div>
                            <div class="font2">Đậm Chất Riêng Biệt</div>
                        </div>
                    </div>
                    <img src="/frontend/assets/img/trangbia/in4_4_3.webp" alt="" onclick="openModal(this)"
                        style="width: 330px; height: 377px; flex-shrink: 0;">
                    <div class="rec-bottom">
                        <div class="font3">
                            Nếu muốn một bữa ăn tinh gọn, thưởng thức những món đặc trưng, menu món gọi riêng của
                            quán luôn sẵn sàng phục vụ. Những phần thịt bò thượng hạng, hải sản tươi ngon các món ăn
                            kèm hấp dẫn, tất cả đều được chế biến theo phong cách chuẩn vị, giúp bữa lẩu thêm phong
                            phú và trọn vẹn. </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div id="popup-overlay_1" class="hidden_1">
        <!-- popup login -->
        <div class="body_1">
            <!-- Nửa trái -->
            <div class="left_1">
                <h1 class="top_1 dvi_1">Đăng nhập</h1>
                <!--  -->
                <br><br>
                <?php
                if (isset($_SESSION['login'])) {
                    echo $_SESSION['login'];
                    unset($_SESSION['login']);
                }

                ?>
                <!--  -->
                <div class="center_1 dvi_1">
                    <!-- Ô nhập số điện thoại -->
                    <form class="form_1" action="" method="POST">
                        <!-- Ô nhập sđt -->
                        <input type="tel" class="input_1 sdt_1" id="phone" name="phone" placeholder="Nhập số điện thoại" required>
                        <br>
                        <!-- Ô nhập mật khẩu -->
                        <input type="password" class="input_1 mk_1" id="password" name="password" placeholder="Nhập mật khẩu" required>
                        <br>
                        <!-- nút đăng nhập -->
                        <input type="submit" name="submit" value="Đăng nhập" class="input_1 btn_1">
                        <!-- <input type="submit" class="input_1 btn_1">Đăng nhập</a> -->
                    </form>
                </div>
                <div class="bot_1 dvi_1">
                    <nav>
                        <div class="bot-text1_1">
                            <label> <input type="checkbox"> </label>
                            <a href="#!" style="color: #5C5858; text-decoration: none;">Ghi nhớ mật khẩu</a>
                        </div>
                        <a class="bot-text2_1" href="#!">Quên mật khẩu?</a>
                    </nav>
                </div>
            </div>
            <!-- Nửa phải -->
            <div class="right_1">
                <h1 class="top_1 dvi2_1">Xin chào quý khách!</h1>
                <p class="center_1 dvi2_1">
                    Hãy đăng kí thành viên để nhận nhiều chương trình
                    khuyến mãi hơn từ Chi Dân chúng tôi
                </p>
                <form>
                    <a href="#!" class="bot_1 dvi2_1" id="open-signup">Đăng kí</a>
                </form>
            </div>
        </div>


        <!-- popup signup -->
        <div class="body_2">
            <!-- Nửa phải -->
            <div class="right_2">
                <h1 class="top_2 dvi2_2">Chào mừng quý khách trở lại!</h1>
                <p class="center_2 dvi2_2">
                    Hãy đăng nhập để tích điểm và
                    gọi món thôi nào
                </p>
                <form>
                    <a href="#!" class="bot_2 dvi2_2" id="open-login">Đăng nhập</a>
                </form>
            </div>

            <!-- Nửa trái -->
            <div class="left_2">
                <h1 class="top_2 dvi_2">Đăng kí</h1>
                <div class="center_2 dvi_2">
                    <!-- Ô nhập số điện thoại -->
                    <form class="form_2" action="!#">
                        <input type="name" class="input_2 name_2" id="name" name="name" placeholder="Họ và Tên" required>
                        <br>
                        <input type="tel" class="input_2 sdt_2" id="phone" name="phone" placeholder="Nhập số điện thoại" required>
                        <br>
                        <!-- Ô nhập mật khẩu -->

                        <input type="password" class="input_2 mk_2" id="password" name="password" placeholder="Nhập mật khẩu" required>
                        <br>
                        <button type="submit" class="input_2 btn_2">Đăng kí</button>
                    </form>
                </div>
            </div>
        </div>

    </div>



    <!-- model phóng to ảnh  -->
    <div id="imageModal" class="modal">
        <img class="modal-content" id="modalImg">
    </div>
    <script src="/frontend/js/index.js" defer></script>
</main>

<?php include('partials/footer.php'); ?>