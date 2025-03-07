

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

    
    <!-- <link rel="stylesheet" href="/css/signup_popup.css"> -->
    <link rel="stylesheet" href="<?php echo '/frontend/css/signup_popup.css'; ?>">

    <title>signup</title>
</head>





<body class="fade-in">
    <div class="body_2">
        <!-- Nửa phải -->
        <div class="right_2">
            <h1 class="top_2 dvi2_2">Chào mừng quý khách trở lại!</h1>
            <p class="center_2 dvi2_2">
                Hãy đăng nhập để tích điểm và 
                gọi món thôi nào
            </p>
            <form >
                <a href="login_popup.php" class="bot_2 dvi2_2">Đăng nhập</a>
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
    <script defer src="/frontend/js/login.js"></script>

</body>
</html> 