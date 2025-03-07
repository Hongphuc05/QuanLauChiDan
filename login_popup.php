<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="/frontend/assets/css/reset.css">

    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Prata&family=Prompt:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Qwigley&family=Salsa&family=Sarpanch:wght@400;500;600;700;800;900&family=Sen:wght@400..800&display=swap"
        rel="stylesheet">

    
    <!-- <link rel="stylesheet" href="/css/login_popup.css"> -->
    <link rel="stylesheet" href="<?php echo '/frontend/css/login_popup.css'; ?>">
    <title>login</title>
</head>





<body class="fade-in">
    <div class="body_1">
        <!-- Nửa trái -->
        <div class="left_1">
            <h1 class="top_1 dvi_1">Đăng nhập</h1>
            <div class="center_1 dvi_1">
                <!-- Ô nhập số điện thoại -->
                <form class="form_1" action="!#">
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
                    <a class="bot-text2_1" href="#!" >Quên mật khẩu?</a>
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
            <form >
                <a href="signup_popup.php" class="bot_1 dvi2_1">Đăng kí</a>
            </form>
        </div>
    </div>
    <script defer src="/frontend/js/login.js"></script>

</body>
</html> 



<!-- <link rel="stylesheet" href="login_popup.css">
<div class="body">
    <div class="left">
        <h1 class="top dvi">Đăng nhập</h1>
        <div class="center dvi">
    
            <form class="form" action="!#">
                <input type="tel" class="input sdt" id="phone" name="phone" placeholder="Nhập số điện thoại" required>
                <br>

                
                <input type="password" class="input mk" id="password" name="password" placeholder="Nhập mật khẩu" required>
                <br>
                <button type="submit" class="input btn">Đăng nhập</button>
            </form>
        </div>
        <div class="bot dvi">
            <nav>
                <div class="bot-text1">
                    <label> <input type="checkbox"> </label>
                    <a href="#!" style="color: #5C5858; text-decoration: none;">Ghi nhớ mật khẩu</a>
                </div>
                <a class="bot-text2" href="#!" >Quên mật khẩu?</a>
            </nav>
        </div>
    </div>

    <div class="right">
        <h1 class="top dvi2">Xin chào quý khách!</h1>
        <p class="center dvi2">
            Hãy đăng kí thành viên để nhận nhiều chương trình
            khuyến mãi hơn từ Chi Dân chúng tôi
        </p>
        <form >
            <button onclick="" class="bot dvi2">Đăng kí</button>
        </form>
    </div>
</div> -->










