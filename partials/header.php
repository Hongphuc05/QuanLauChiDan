<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- reset css -->
    <link rel="stylesheet" href="/frontend/assets/css/reset.css">

    <!-- Nhúng phông -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Prata&family=Prompt:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Qwigley&family=Rammetto+One&family=Salsa&family=Sarpanch:wght@400;500;600;700;800;900&family=Sen:wght@400..800&display=swap&subset=vietnamese"
        rel="stylesheet">

        <!-- style -->
        <!-- <link rel="stylesheet" href="/frontend/css/style.css"> -->
        <link rel="stylesheet" href="<?php echo '/frontend/css/style.css'; ?>">



    <title>Quán Lẩu Chi Dân</title>
</head>





<body>

    <!-- Header -->
    <header class="header fixed">
        <div class="content">
            <div class="body">
                <!-- Logo -->
                <img src="/frontend/assets/img/trangbia/Logo_chidan_chữ đen 1.svg" alt="" class="logo"
                    style="height: 80px;">
                <!-- nav(thongtin) -->
                <nav class="nav">
                    <ul class="ul">
                        <li class="active">
                            <a href="index.php">Trang chủ</a>
                        </li>
                        <li class="has-child">
                            <a href="#!">Đặt món</a>
                            <ul class="sub-menu">
                                <li class="1"><a href="#!">Đặt bàn</a>
                                </li>
                                <li class="1"><a href="menu.php">Đặt mang về</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#!">Về chúng tôi</a>
                        </li>
                        <li>
                            <a href="#!">Đánh giá</a>
                        </li>
                    </ul>
                </nav>
                <!-- btn action(dang nhap) -->
                <div class="action">
                    <a href="#!" class="btn btn-login">Đăng nhập / Đăng kí</a>

                </div>
            </div>
        </div>
    </header>