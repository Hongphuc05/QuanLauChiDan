<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- reset css -->
    <link rel="stylesheet" href="/frontend/assets/css/reset.css">
    <!-- thư viện font -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <!-- Nhúng phông -->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Prata&family=Prompt:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Qwigley&family=Rammetto+One&family=Salsa&family=Sarpanch:wght@400;500;600;700;800;900&family=Sen:wght@400..800&display=swap&subset=vietnamese"
        rel="stylesheet">




    
    <title>Quán Lẩu Chi Dân</title>
</head>





<body>

    <!-- Header -->
    <header class="header fixed">
        <div class="content">
            <div class="body">
                <!-- Logo -->
                <img src="/frontend/assets/img/trangbia/Logo_chidan_chữ đen 1.svg" alt="" class="logo" style="height: 80px;">
                <!-- nav(thongtin) -->
                <nav class="nav">
                    <ul class="ul">
                        <li class="cha">
                            <a href="index.php">Trang chủ</a>
                        </li>
                        <li class="active has-child">
                            <a href="#!">Đặt món</a>
                            <ul class="sub-menu">
                                <li class="1"><a href="#!">Đặt bàn</a>
                                </li>
                                <li class="1"><a href="#!">Đặt mang về</a>
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
                    <a href="menu.php" class="btn btn-login">Đăng nhập / Đăng kí</a>

                </div>
            </div>
        </div>
    </header>
    
    <!-- style -->
    <!-- <link rel="stylesheet" href="/css/menu.css"> -->
    <link rel="stylesheet" href="<?php echo '/frontend/css/menu.css'; ?>">
    <!-- ============ main =============== -->
    <main>
        <!-- Trái chứa category -->
        <div class="left fixed">
            <nav class="nav">
                <ul class="ul" id="main-menu">
                    <li class="active2" onclick="filterMenu('all'); addActive2(event)">
                        <a href="#!">All</a>
                    </li>
                    <li onclick="filterMenu('buffet1'); addActive2(event)">
                        <a href="#!">Buffet</a>
                    </li>
                    <li onclick="filterMenu('combo1'); addActive2(event)">
                        <a href="#!">Combo</a>
                    </li>
                    <li class="has-child">
                        <a onclick="filterMenu('monle1'); openSubmenu(event)"  href="#!" >Món lẻ</a>
                        <ul class="sub-menu">
                            <li class="active3"><a href="#!" onclick="filterMenu('lau'); addActive3(event)">Loại lẩu</a></li>
                            <li><a href="#!" onclick="filterMenu('bo'); addActive3(event)">Bò</a></li>
                            <li><a href="#!" onclick="filterMenu('heo-cuu'); addActive3(event)">Heo-Cừu</a></li>
                            <li><a href="#!" onclick="filterMenu('haisan'); addActive3(event)">Hải sản</a></li>
                            <li><a href="#!" onclick="filterMenu('noitang'); addActive3(event)">Nội tạng</a></li>
                            <li><a href="#!" onclick="filterMenu('ha-cao'); addActive3(event)">Há cảo & Sủi cảo</a></li>
                            <li><a href="#!" onclick="filterMenu('dauhu'); addActive3(event)">Đậu hũ & Đồ viên</a></li>
                            <li><a href="#!" onclick="filterMenu('mytom'); addActive3(event)">Mỳ</a></li>
                            <li><a href="#!" onclick="filterMenu('rau'); addActive3(event)">Rau & Nấm</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>


        <!-- Phải chứa menu đồ ăn -->
        <div class="right">
            <div class="top">
                <div class="left">
                    <div class="link">
                        <a href="index.php">Trang chủ</a>
                        <span>/</span>
                        <a href="#!">Đặt món</a>
                    </div>
                    <h1 class="title">Menu</h1>
                </div>
                <div class="right">
                    <div class="search-bar">
                        <input type="text" class="search" placeholder="Tìm kiếm...">
                        
                    </div>

                </div>
            </div>
            <div class="bot">
                <div class="all">
                    <!-- Buffet -->
                    <div class="buffet">
                        <div class="the buffet1">
                            <img class="img-the" src="/frontend/assets/img/menu/Buffet/Buffet Bách Giai Vị 419K.jpg"
                                alt="Buffet 1" onclick="openModal(this)">
                            <div class="info-mon">
                                <div class="left">
                                    <h1>Buffet Bách Giai Vị</h1>
                                    <p>419.000 VND</p>
                                </div>
                                <div class="right">
                                    <div class="quantity">
                                        <button class="minus">−</button>
                                        <span class="number">0</span>
                                        <button class="plus">+</button>
                                    </div>
                                    <button class="btn-cf">xác nhận</button>
                                </div>
                            </div>
                        </div>
                        <div class="the buffet1">
                            <img class="img-the" src="/frontend/assets/img/menu/Buffet/Buffet Linh Vân Các 229K.jpg"
                                alt="Buffet 2" onclick="openModal(this)">
                            <div class="info-mon">
                                <div class="left">
                                    <h1>Buffet Linh Vân Các</h1>
                                    <p>229.000 VND</p>
                                </div>
                                <div class="right">
                                    <div class="quantity">
                                        <button class="minus">−</button>
                                        <span class="number">0</span>
                                        <button class="plus">+</button>
                                    </div>
                                    <button class="btn-cf">xác nhận</button>
                                </div>
                            </div>
                        </div>
                        <div class="the buffet1">
                            <img class="img-the" src="/frontend/assets/img/menu/Buffet/Buffet Phúc Khả Vương 329K.jpg"
                                alt="Buffet 3" onclick="openModal(this)">
                            <div class="info-mon">
                                <div class="left">
                                    <h1>Buffet Phúc Khả Vương</h1>
                                    <p>329.000 VND</p>
                                </div>
                                <div class="right">
                                    <div class="quantity">
                                        <button class="minus">−</button>
                                        <span class="number">1</span>
                                        <button class="plus">+</button>
                                    </div>
                                    <button class="btn-cf">xác nhận</button>
                                </div>
                            </div>
                        </div>
                        <div class="the buffet1">
                            <img class="img-the" src="/frontend/assets/img/menu/Buffet/Buffet Phúc Mãn Đường 619K.jpg"
                                alt="Buffet 4" onclick="openModal(this)">
                            <div class="info-mon">
                                <div class="left">
                                    <h1>Buffet Phúc Mãn Đường</h1>
                                    <p>519.000 VND</p>
                                </div>
                                <div class="right">
                                    <div class="quantity">
                                        <button class="minus">−</button>
                                        <span class="number">1</span>
                                        <button class="plus">+</button>
                                    </div>
                                    <button class="btn-cf">xác nhận</button>
                                </div>
                            </div>
                        </div>
                        <div class="the buffet1">
                            <img class="img-the" src="/frontend/assets/img/menu/Buffet/Buffet Vạn Giai Kỳ 499K.jpg"
                                alt="Buffet 5" onclick="openModal(this)">
                            <div class="info-mon">
                                <div class="left">
                                    <h1>Buffet Vạn Giai Kỳ</h1>
                                    <p>499.000 VND</p>
                                </div>
                                <div class="right">
                                    <div class="quantity">
                                        <button class="minus">−</button>
                                        <span class="number">1</span>
                                        <button class="plus">+</button>
                                    </div>
                                    <button class="btn-cf">xác nhận</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Combo -->
                    <div class="combo">
                        <div class="the combo1">
                            <img class="img-the" src="/frontend/assets/img/menu/Combo/Set Phúc Dĩ An.jpg"
                                alt="Combo 1" onclick="openModal(this)">
                            <div class="info-mon">
                                <div class="left">
                                    <h1>Set Phúc Dĩ An</h1>
                                    <p>919.000 VND</p>
                                </div>
                                <div class="right">
                                    <div class="quantity">
                                        <button class="minus">−</button>
                                        <span class="number">0</span>
                                        <button class="plus">+</button>
                                    </div>
                                    <button class="btn-cf">xác nhận</button>
                                </div>
                            </div>
                        </div>
                        <div class="the combo1">
                            <img class="img-the" src="/frontend/assets/img/menu/Combo/Set Phúc Dĩ Tường.jpg"
                                alt="Combo 2" onclick="openModal(this)">
                            <div class="info-mon">
                                <div class="left">
                                    <h1>Set Phúc Dĩ Tường</h1>
                                    <p>899.000 VND</p>
                                </div>
                                <div class="right">
                                    <div class="quantity">
                                        <button class="minus">−</button>
                                        <span class="number">0</span>
                                        <button class="plus">+</button>
                                    </div>
                                    <button class="btn-cf">xác nhận</button>
                                </div>
                            </div>
                        </div>
                        <div class="the combo1">
                            <img class="img-the" src="/frontend/assets/img/menu/Combo/Set Song Vũ.png"
                                alt="Combo 3" onclick="openModal(this)">
                            <div class="info-mon">
                                <div class="left">
                                    <h1>Set Song Vũ</h1>
                                    <p>419.000 VND</p>
                                </div>
                                <div class="right">
                                    <div class="quantity">
                                        <button class="minus">−</button>
                                        <span class="number">0</span>
                                        <button class="plus">+</button>
                                    </div>
                                    <button class="btn-cf">xác nhận</button>
                                </div>
                            </div>
                        </div>
                        <div class="the combo1">
                            <img class="img-the" src="/frontend/assets/img/menu/Combo/Set Uyên Ương.png"
                                alt="Combo 4" onclick="openModal(this)">
                            <div class="info-mon">
                                <div class="left">
                                    <h1>Set Uyên Ương</h1>
                                    <p>599.000 VND</p>
                                </div>
                                <div class="right">
                                    <div class="quantity">
                                        <button class="minus">−</button>
                                        <span class="number">0</span>
                                        <button class="plus">+</button>
                                    </div>
                                    <button class="btn-cf">xác nhận</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Món lẻ -->
                    <div class="monle">
                        <!-- Lẩu -->
                        <div class="the lau monle1">
                            <img class="img-the" src="/frontend/assets/img/menu/Món lẻ/loại lẩu/Lẩu Cà chua.jpg"
                                alt="Lau 1" onclick="openModal(this)">
                            <div class="info-mon">
                                <div class="left">
                                    <h1>Lẩu Cà chua</h1>
                                    <p>89.000 VND</p>
                                </div>
                                <div class="right">
                                    <div class="quantity">
                                        <button class="minus">−</button>
                                        <span class="number">0</span>
                                        <button class="plus">+</button>
                                    </div>
                                    <button class="btn-cf">xác nhận</button>
                                </div>
                            </div>
                        </div>
                        <div class="the lau monle1">
                            <img class="img-the" src="/frontend/assets/img/menu/Món lẻ/loại lẩu/Lẩu Đài Bắc Ngọc Thạch 12 nồi.jpg"
                                alt="Lau 2" onclick="openModal(this)">
                            <div class="info-mon">
                                <div class="left">
                                    <h1>Lẩu Đài Bắc Ngọc Thạch</h1>
                                    <p>99.000 VND</p>
                                </div>
                                <div class="right">
                                    <div class="quantity">
                                        <button class="minus">−</button>
                                        <span class="number">0</span>
                                        <button class="plus">+</button>
                                    </div>
                                    <button class="btn-cf">xác nhận</button>
                                </div>
                            </div>
                        </div>
                        <div class="the lau monle1">
                            <img class="img-the" src="/frontend/assets/img/menu/Món lẻ/loại lẩu/Lẩu Đài Bắc.jpg"
                                alt="Lau 3" onclick="openModal(this)">
                            <div class="info-mon">
                                <div class="left">
                                    <h1>Lẩu Đài Bắc</h1>
                                    <p>89.000 VND</p>
                                </div>
                                <div class="right">
                                    <div class="quantity">
                                        <button class="minus">−</button>
                                        <span class="number">0</span>
                                        <button class="plus">+</button>
                                    </div>
                                    <button class="btn-cf">xác nhận</button>
                                </div>
                            </div>
                        </div>
                        <div class="the lau monle1">
                            <img class="img-the" src="/frontend/assets/img/menu/Món lẻ/loại lẩu/Lẩu Kim chi.jpg"
                                alt="Lau 4" onclick="openModal(this)">
                            <div class="info-mon">
                                <div class="left">
                                    <h1>Lẩu Kim Chi</h1>
                                    <p>89.000 VND</p>
                                </div>
                                <div class="right">
                                    <div class="quantity">
                                        <button class="minus">−</button>
                                        <span class="number">0</span>
                                        <button class="plus">+</button>
                                    </div>
                                    <button class="btn-cf">xác nhận</button>
                                </div>
                            </div>
                        </div>
                        <div class="the lau monle1">
                            <img class="img-the" src="/frontend/assets/img/menu/Món lẻ/loại lẩu/Lẩu Mala Hồng Ngọc.jpg"
                                alt="Lau 5" onclick="openModal(this)">
                            <div class="info-mon">
                                <div class="left">
                                    <h1>Lẩu Mala Hồng Ngọc</h1>
                                    <p>169.000 VND</p>
                                </div>
                                <div class="right">
                                    <div class="quantity">
                                        <button class="minus">−</button>
                                        <span class="number">0</span>
                                        <button class="plus">+</button>
                                    </div>
                                    <button class="btn-cf">xác nhận</button>
                                </div>
                            </div>
                        </div>
                        <div class="the lau monle1">
                            <img class="img-the" src="/frontend/assets/img/menu/Món lẻ/loại lẩu/Lẩu Mala.jpg"
                                alt="Lau 6" onclick="openModal(this)">
                            <div class="info-mon">
                                <div class="left">
                                    <h1>Lẩu Mala</h1>
                                    <p>109.000 VND</p>
                                </div>
                                <div class="right">
                                    <div class="quantity">
                                        <button class="minus">−</button>
                                        <span class="number">0</span>
                                        <button class="plus">+</button>
                                    </div>
                                    <button class="btn-cf">xác nhận</button>
                                </div>
                            </div>
                        </div>
                        <div class="the lau monle1">
                            <img class="img-the" src="/frontend/assets/img/menu/Món lẻ/loại lẩu/Lẩu Nấm.jpg"
                                alt="Lau 7" onclick="openModal(this)">
                            <div class="info-mon">
                                <div class="left">
                                    <h1>Lẩu Nấm</h1>
                                    <p>89.000 VND</p>
                                </div>
                                <div class="right">
                                    <div class="quantity">
                                        <button class="minus">−</button>
                                        <span class="number">0</span>
                                        <button class="plus">+</button>
                                    </div>
                                    <button class="btn-cf">xác nhận</button>
                                </div>
                            </div>
                        </div>
                        <div class="the lau monle1">
                            <img class="img-the" src="/frontend/assets/img/menu/Món lẻ/loại lẩu/Lẩu Thái.jpg"
                                alt="Lau 8" onclick="openModal(this)">
                            <div class="info-mon">
                                <div class="left">
                                    <h1>Lẩu Thái</h1>
                                    <p>89.000 VND</p>
                                </div>
                                <div class="right">
                                    <div class="quantity">
                                        <button class="minus">−</button>
                                        <span class="number">0</span>
                                        <button class="plus">+</button>
                                    </div>
                                    <button class="btn-cf">xác nhận</button>
                                </div>
                            </div>
                        </div>

                        <!-- Bò -->
                        <div class="the bo monle1">
                            <img class="img-the" src="/frontend/assets/img/menu/Món lẻ/bò/Ba chỉ bò Mỹ.jpg"
                                alt="Bo 1" onclick="openModal(this)">
                            <div class="info-mon">
                                <div class="left">
                                    <h1>Ba chỉ Bò Mỹ</h1>
                                    <p>99.000 VND</p>
                                </div>
                                <div class="right">
                                    <div class="quantity">
                                        <button class="minus">−</button>
                                        <span class="number">0</span>
                                        <button class="plus">+</button>
                                    </div>
                                    <button class="btn-cf">xác nhận</button>
                                </div>
                            </div>
                        </div>
                        <div class="the bo monle1">
                            <img class="img-the" src="/frontend/assets/img/menu/Món lẻ/bò/Bắp bò Úc.jpg"
                                alt="Bo 2" onclick="openModal(this)">
                            <div class="info-mon">
                                <div class="left">
                                    <h1>Bắp bó Úc</h1>
                                    <p>109.000 VND</p>
                                </div>
                                <div class="right">
                                    <div class="quantity">
                                        <button class="minus">−</button>
                                        <span class="number">0</span>
                                        <button class="plus">+</button>
                                    </div>
                                    <button class="btn-cf">xác nhận</button>
                                </div>
                            </div>
                        </div>
                        <div class="the bo monle1">
                            <img class="img-the" src="/frontend/assets/img/menu/Món lẻ/bò/Dạ Thiên ý.png"
                                alt="Bo 3" onclick="openModal(this)">
                            <div class="info-mon">
                                <div class="left">
                                    <h1>Dạ Thiên Ý</h1>
                                    <p>249.000 VND</p>
                                </div>
                                <div class="right">
                                    <div class="quantity">
                                        <button class="minus">−</button>
                                        <span class="number">0</span>
                                        <button class="plus">+</button>
                                    </div>
                                    <button class="btn-cf">xác nhận</button>
                                </div>
                            </div>
                        </div>
                        <div class="the bo monle1">
                            <img class="img-the" src="/frontend/assets/img/menu/Món lẻ/bò/Bê thượng hạng.jpg"
                                alt="Bo 4" onclick="openModal(this)">
                            <div class="info-mon">
                                <div class="left">
                                    <h1>Bê Thượng Hạng</h1>
                                    <p>99.000 VND</p>
                                </div>
                                <div class="right">
                                    <div class="quantity">
                                        <button class="minus">−</button>
                                        <span class="number">0</span>
                                        <button class="plus">+</button>
                                    </div>
                                    <button class="btn-cf">xác nhận</button>
                                </div>
                            </div>
                        </div>
                        <div class="the bo monle1">
                            <img class="img-the" src="/frontend/assets/img/menu/Món lẻ/bò/Dẻ sườn ướp mè thái tay.jpg"
                                alt="Bo 5" onclick="openModal(this)">
                            <div class="info-mon">
                                <div class="left">
                                    <h1>Dẻ sườn ướp Thái</h1>
                                    <p>129.000 VND</p>
                                </div>
                                <div class="right">
                                    <div class="quantity">
                                        <button class="minus">−</button>
                                        <span class="number">0</span>
                                        <button class="plus">+</button>
                                    </div>
                                    <button class="btn-cf">xác nhận</button>
                                </div>
                            </div>
                        </div>
                        <div class="the bo monle1">
                            <img class="img-the" src="/frontend/assets/img/menu/Món lẻ/bò/Gầu bò Mỹ.jpg"
                                alt="Bo 6" onclick="openModal(this)">
                            <div class="info-mon">
                                <div class="left">
                                    <h1>Gầu Bò Mỹ</h1>
                                    <p>59.000 VND</p>
                                </div>
                                <div class="right">
                                    <div class="quantity">
                                        <button class="minus">−</button>
                                        <span class="number">0</span>
                                        <button class="plus">+</button>
                                    </div>
                                    <button class="btn-cf">xác nhận</button>
                                </div>
                            </div>
                        </div>
                        <div class="the bo monle1">
                            <img class="img-the" src="/frontend/assets/img/menu/Món lẻ/bò/Lõi vai Wagyu.jpg"
                                alt="Bo 7" onclick="openModal(this)">
                            <div class="info-mon">
                                <div class="left">
                                    <h1>Lõi vai Wagyu</h1>
                                    <p>329.000 VND</p>
                                </div>
                                <div class="right">
                                    <div class="quantity">
                                        <button class="minus">−</button>
                                        <span class="number">0</span>
                                        <button class="plus">+</button>
                                    </div>
                                    <button class="btn-cf">xác nhận</button>
                                </div>
                            </div>
                        </div>
                        <div class="the bo monle1">
                            <img class="img-the" src="/frontend/assets/img/menu/Món lẻ/bò/Sườn non bò Wagyu.jpg"
                                alt="Bo 8" onclick="openModal(this)">
                            <div class="info-mon">
                                <div class="left">
                                    <h1>Sườn non bò Wagyu</h1>
                                    <p>469.000 VND</p>
                                </div>
                                <div class="right">
                                    <div class="quantity">
                                        <button class="minus">−</button>
                                        <span class="number">0</span>
                                        <button class="plus">+</button>
                                    </div>
                                    <button class="btn-cf">xác nhận</button>
                                </div>
                            </div>
                        </div>
                        <div class="the bo monle1">
                            <img class="img-the" src="/frontend/assets/img/menu/Món lẻ/bò/Sườn Wagyu thượng hạng.jpeg"
                                alt="Bo 9" onclick="openModal(this)">
                            <div class="info-mon">
                                <div class="left">
                                    <h1>Sườn Wagyu Thượng Hạng</h1>
                                    <p>649.000 VND</p>
                                </div>
                                <div class="right">
                                    <div class="quantity">
                                        <button class="minus">−</button>
                                        <span class="number">0</span>
                                        <button class="plus">+</button>
                                    </div>
                                    <button class="btn-cf">xác nhận</button>
                                </div>
                            </div>
                        </div>
                        <div class="the bo monle1">
                            <img class="img-the" src="/frontend/assets/img/menu/Món lẻ/bò/Thịt bò bông tuyết.jpg"
                                alt="Bo 10" onclick="openModal(this)">
                            <div class="info-mon">
                                <div class="left">
                                    <h1>Bò bông tuyết</h1>
                                    <p>179.000 VND</p>
                                </div>
                                <div class="right">
                                    <div class="quantity">
                                        <button class="minus">−</button>
                                        <span class="number">0</span>
                                        <button class="plus">+</button>
                                    </div>
                                    <button class="btn-cf">xác nhận</button>
                                </div>
                            </div>
                        </div>
                        <div class="the bo monle1">
                            <img class="img-the" src="/frontend/assets/img/menu/Món lẻ/bò/Thịt bò Như Ý.png"
                                alt="Bo 11" onclick="openModal(this)">
                            <div class="info-mon">
                                <div class="left">
                                    <h1>Bò Như Ý</h1>
                                    <p>179.000 VND</p>
                                </div>
                                <div class="right">
                                    <div class="quantity">
                                        <button class="minus">−</button>
                                        <span class="number">0</span>
                                        <button class="plus">+</button>
                                    </div>
                                    <button class="btn-cf">xác nhận</button>
                                </div>
                            </div>
                        </div>
                        <div class="the bo monle1">
                            <img class="img-the" src="/frontend/assets/img/menu/Món lẻ/bò/Thịt bò tuyết liên hoa.jpg"
                                alt="Bo 12" onclick="openModal(this)">
                            <div class="info-mon">
                                <div class="left">
                                    <h1>Bò Tuyết liên hoa</h1>
                                    <p>299.000 VND</p>
                                </div>
                                <div class="right">
                                    <div class="quantity">
                                        <button class="minus">−</button>
                                        <span class="number">0</span>
                                        <button class="plus">+</button>
                                    </div>
                                    <button class="btn-cf">xác nhận</button>
                                </div>
                            </div>
                        </div>
                        <div class="the bo monle1">
                            <img class="img-the" src="/frontend/assets/img/menu/Món lẻ/bò/Thịt bò vân mây.jpg"
                                alt="Bo 13" onclick="openModal(this)">
                            <div class="info-mon">
                                <div class="left">
                                    <h1>Bò vân mây</h1>
                                    <p>179.000 VND</p>
                                </div>
                                <div class="right">
                                    <div class="quantity">
                                        <button class="minus">−</button>
                                        <span class="number">0</span>
                                        <button class="plus">+</button>
                                    </div>
                                    <button class="btn-cf">xác nhận</button>
                                </div>
                            </div>
                        </div>
                        <div class="the bo monle1">
                            <img class="img-the" src="/frontend/assets/img/menu/Món lẻ/bò/Thịt bò Wagyu thượng hạng.jpg"
                                alt="Bo 14" onclick="openModal(this)">
                            <div class="info-mon">
                                <div class="left">
                                    <h1>Bò Wagyu Thượng Hạng</h1>
                                    <p>179.000 VND</p>
                                </div>
                                <div class="right">
                                    <div class="quantity">
                                        <button class="minus">−</button>
                                        <span class="number">0</span>
                                        <button class="plus">+</button>
                                    </div>
                                    <button class="btn-cf">xác nhận</button>
                                </div>
                            </div>
                        </div>

                        <!-- Heo - Cừu -->
                        <div class="the heo-cuu monle1">
                            <img class="img-the" src="/frontend/assets/img/menu/Món lẻ/Heo - Cừu/Ba chỉ heo Iberico.jpg"
                                alt="heo-cuu 1" onclick="openModal(this)">
                            <div class="info-mon">
                                <div class="left">
                                    <h1>Ba chỉ Heo Iberico</h1>
                                    <p>49.000 VND</p>
                                </div>
                                <div class="right">
                                    <div class="quantity">
                                        <button class="minus">−</button>
                                        <span class="number">0</span>
                                        <button class="plus">+</button>
                                    </div>
                                    <button class="btn-cf">xác nhận</button>
                                </div>
                            </div>
                        </div>
                        <div class="the heo-cuu monle1">
                            <img class="img-the" src="/frontend/assets/img/menu/Món lẻ/Heo - Cừu/bachicuu.jpg"
                                alt="heo-cuu 2" onclick="openModal(this)">
                            <div class="info-mon">
                                <div class="left">
                                    <h1>Ba chỉ Cừu</h1>
                                    <p>79.000 VND</p>
                                </div>
                                <div class="right">
                                    <div class="quantity">
                                        <button class="minus">−</button>
                                        <span class="number">0</span>
                                        <button class="plus">+</button>
                                    </div>
                                    <button class="btn-cf">xác nhận</button>
                                </div>
                            </div>
                        </div>
                        <div class="the heo-cuu monle1">
                            <img class="img-the" src="/frontend/assets/img/menu/Món lẻ/Heo - Cừu/Bắp heo Mỹ cuộn.jpg"
                                alt="heo-cuu 3" onclick="openModal(this)">
                            <div class="info-mon">
                                <div class="left">
                                    <h1>Bắp heo Mỹ cuộn</h1>
                                    <p>59.000 VND</p>
                                </div>
                                <div class="right">
                                    <div class="quantity">
                                        <button class="minus">−</button>
                                        <span class="number">0</span>
                                        <button class="plus">+</button>
                                    </div>
                                    <button class="btn-cf">xác nhận</button>
                                </div>
                            </div>
                        </div>
                        <div class="the heo-cuu monle1">
                            <img class="img-the" src="/frontend/assets/img/menu/Món lẻ/Heo - Cừu/Má heo.png"
                                alt="heo-cuu 4" onclick="openModal(this)">
                            <div class="info-mon">
                                <div class="left">
                                    <h1>Má Heo</h1>
                                    <p>99.000 VND</p>
                                </div>
                                <div class="right">
                                    <div class="quantity">
                                        <button class="minus">−</button>
                                        <span class="number">0</span>
                                        <button class="plus">+</button>
                                    </div>
                                    <button class="btn-cf">xác nhận</button>
                                </div>
                            </div>
                        </div>
                        <div class="the heo-cuu monle1">
                            <img class="img-the" src="/frontend/assets/img/menu/Món lẻ/Heo - Cừu/Nạc vai heo Iberico.jpg"
                                alt="heo-cuu 5" onclick="openModal(this)">
                            <div class="info-mon">
                                <div class="left">
                                    <h1>Nạc vai heo Iberico</h1>
                                    <p>49.000 VND</p>
                                </div>
                                <div class="right">
                                    <div class="quantity">
                                        <button class="minus">−</button>
                                        <span class="number">0</span>
                                        <button class="plus">+</button>
                                    </div>
                                    <button class="btn-cf">xác nhận</button>
                                </div>
                            </div>
                        </div>
                        <div class="the heo-cuu monle1">
                            <img class="img-the" src="/frontend/assets/img/menu/Món lẻ/Heo - Cừu/Thịt heo mỹ vị.jpg"
                                alt="heo-cuu 6" onclick="openModal(this)">
                            <div class="info-mon">
                                <div class="left">
                                    <h1>Thịt heo mỹ vị</h1>
                                    <p>49.000 VND</p>
                                </div>
                                <div class="right">
                                    <div class="quantity">
                                        <button class="minus">−</button>
                                        <span class="number">0</span>
                                        <button class="plus">+</button>
                                    </div>
                                    <button class="btn-cf">xác nhận</button>
                                </div>
                            </div>
                        </div>

                        <!-- Hải sản -->
                        <div class="the haisan monle1">
                            <img class="img-the" src="/frontend/assets/img/menu/Món lẻ/hải sản/Bạch tuộc baby.jpg"
                                alt="haisan 1" onclick="openModal(this)">
                            <div class="info-mon">
                                <div class="left">
                                    <h1>Bạch tuộc baby</h1>
                                    <p>109.000 VND</p>
                                </div>
                                <div class="right">
                                    <div class="quantity">
                                        <button class="minus">−</button>
                                        <span class="number">0</span>
                                        <button class="plus">+</button>
                                    </div>
                                    <button class="btn-cf">xác nhận</button>
                                </div>
                            </div>
                        </div>
                        <div class="the haisan monle1">
                            <img class="img-the" src="/frontend/assets/img/menu/Món lẻ/hải sản/Bạch tuộc cỡ đại.jpg"
                                alt="haisan 2" onclick="openModal(this)">
                            <div class="info-mon">
                                <div class="left">
                                    <h1>Bạch tuộc cỡ đại</h1>
                                    <p>99.000 VND</p>
                                </div>
                                <div class="right">
                                    <div class="quantity">
                                        <button class="minus">−</button>
                                        <span class="number">0</span>
                                        <button class="plus">+</button>
                                    </div>
                                    <button class="btn-cf">xác nhận</button>
                                </div>
                            </div>
                        </div>
                        <div class="the haisan monle1">
                            <img class="img-the" src="/frontend/assets/img/menu/Món lẻ/hải sản/Bào Ngư Đen.jpg"
                                alt="haisan 3" onclick="openModal(this)">
                            <div class="info-mon">
                                <div class="left">
                                    <h1>Bào Ngư đen</h1>
                                    <p>199.000 VND</p>
                                </div>
                                <div class="right">
                                    <div class="quantity">
                                        <button class="minus">−</button>
                                        <span class="number">0</span>
                                        <button class="plus">+</button>
                                    </div>
                                    <button class="btn-cf">xác nhận</button>
                                </div>
                            </div>
                        </div>
                        <div class="the haisan monle1">
                            <img class="img-the" src="/frontend/assets/img/menu/Món lẻ/hải sản/Cá mú đỏ.jpg"
                                alt="haisan 4" onclick="openModal(this)">
                            <div class="info-mon">
                                <div class="left">
                                    <h1>Cá mú đỏ</h1>
                                    <p>249.000 VND</p>
                                </div>
                                <div class="right">
                                    <div class="quantity">
                                        <button class="minus">−</button>
                                        <span class="number">0</span>
                                        <button class="plus">+</button>
                                    </div>
                                    <button class="btn-cf">xác nhận</button>
                                </div>
                            </div>
                        </div>
                        <div class="the haisan monle1">
                            <img class="img-the" src="/frontend/assets/img/menu/Món lẻ/hải sản/Cá tầm.png"
                                alt="haisan 5" onclick="openModal(this)">
                            <div class="info-mon">
                                <div class="left">
                                    <h1>Cá tầm</h1>
                                    <p>189.000 VND</p>
                                </div>
                                <div class="right">
                                    <div class="quantity">
                                        <button class="minus">−</button>
                                        <span class="number">0</span>
                                        <button class="plus">+</button>
                                    </div>
                                    <button class="btn-cf">xác nhận</button>
                                </div>
                            </div>
                        </div>
                        <div class="the haisan monle1">
                            <img class="img-the" src="/frontend/assets/img/menu/Món lẻ/hải sản/Lườn cá hồi.jpg"
                                alt="haisan 6" onclick="openModal(this)">
                            <div class="info-mon">
                                <div class="left">
                                    <h1>Lườn cá hồi</h1>
                                    <p>59.000 VND</p>
                                </div>
                                <div class="right">
                                    <div class="quantity">
                                        <button class="minus">−</button>
                                        <span class="number">0</span>
                                        <button class="plus">+</button>
                                    </div>
                                    <button class="btn-cf">xác nhận</button>
                                </div>
                            </div>
                        </div>
                        <div class="the haisan monle1">
                            <img class="img-the" src="/frontend/assets/img/menu/Món lẻ/hải sản/Mực trứng.jpg"
                                alt="haisan 7" onclick="openModal(this)">
                            <div class="info-mon">
                                <div class="left">
                                    <h1>Mực trứng</h1>
                                    <p>59.000 VND</p>
                                </div>
                                <div class="right">
                                    <div class="quantity">
                                        <button class="minus">−</button>
                                        <span class="number">0</span>
                                        <button class="plus">+</button>
                                    </div>
                                    <button class="btn-cf">xác nhận</button>
                                </div>
                            </div>
                        </div>
                        <div class="the haisan monle1">
                            <img class="img-the" src="/frontend/assets/img/menu/Món lẻ/hải sản/Ốc Bulot pháp.jpg"
                                alt="haisan 8" onclick="openModal(this)">
                            <div class="info-mon">
                                <div class="left">
                                    <h1>Ốc Bulot pháp</h1>
                                    <p>89.000 VND</p>
                                </div>
                                <div class="right">
                                    <div class="quantity">
                                        <button class="minus">−</button>
                                        <span class="number">0</span>
                                        <button class="plus">+</button>
                                    </div>
                                    <button class="btn-cf">xác nhận</button>
                                </div>
                            </div>
                        </div>
                        <div class="the haisan monle1">
                            <img class="img-the" src="/frontend/assets/img/menu/Món lẻ/hải sản/Râu mực tươi.jpg"
                                alt="haisan 9" onclick="openModal(this)">
                            <div class="info-mon">
                                <div class="left">
                                    <h1>Râu mực tươi</h1>
                                    <p>59.000 VND</p>
                                </div>
                                <div class="right">
                                    <div class="quantity">
                                        <button class="minus">−</button>
                                        <span class="number">0</span>
                                        <button class="plus">+</button>
                                    </div>
                                    <button class="btn-cf">xác nhận</button>
                                </div>
                            </div>
                        </div>
                        <div class="the haisan monle1">
                            <img class="img-the" src="/frontend/assets/img/menu/Món lẻ/hải sản/Sò điệp.png"
                                alt="haisan 10" onclick="openModal(this)">
                            <div class="info-mon">
                                <div class="left">
                                    <h1>Sò điệp</h1>
                                    <p>239.000 VND</p>
                                </div>
                                <div class="right">
                                    <div class="quantity">
                                        <button class="minus">−</button>
                                        <span class="number">0</span>
                                        <button class="plus">+</button>
                                    </div>
                                    <button class="btn-cf">xác nhận</button>
                                </div>
                            </div>
                        </div>
                        <div class="the haisan monle1">
                            <img class="img-the" src="/frontend/assets/img/menu/Món lẻ/hải sản/Thịt cá hồi.jpg"
                                alt="haisan 11" onclick="openModal(this)">
                            <div class="info-mon">
                                <div class="left">
                                    <h1>Thịt cá hồi</h1>
                                    <p>129.000 VND</p>
                                </div>
                                <div class="right">
                                    <div class="quantity">
                                        <button class="minus">−</button>
                                        <span class="number">0</span>
                                        <button class="plus">+</button>
                                    </div>
                                    <button class="btn-cf">xác nhận</button>
                                </div>
                            </div>
                        </div>
                        <div class="the haisan monle1">
                            <img class="img-the" src="/frontend/assets/img/menu/Món lẻ/hải sản/Tôm sú tươi size L.jpg"
                                alt="haisan 12" onclick="openModal(this)">
                            <div class="info-mon">
                                <div class="left">
                                    <h1>Tôm sú tươi</h1>
                                    <p>249.000 VND</p>
                                </div>
                                <div class="right">
                                    <div class="quantity">
                                        <button class="minus">−</button>
                                        <span class="number">0</span>
                                        <button class="plus">+</button>
                                    </div>
                                    <button class="btn-cf">xác nhận</button>
                                </div>
                            </div>
                        </div>
                        <div class="the haisan monle1">
                            <img class="img-the" src="/frontend/assets/img/menu/Món lẻ/hải sản/Tôm thẻ.jpg"
                                alt="haisan 13" onclick="openModal(this)">
                            <div class="info-mon">
                                <div class="left">
                                    <h1>Tôm thẻ</h1>
                                    <p>69.000 VND</p>
                                </div>
                                <div class="right">
                                    <div class="quantity">
                                        <button class="minus">−</button>
                                        <span class="number">0</span>
                                        <button class="plus">+</button>
                                    </div>
                                    <button class="btn-cf">xác nhận</button>
                                </div>
                            </div>
                        </div>
                        <div class="the haisan monle1">
                            <img class="img-the" src="/frontend/assets/img/menu/Món lẻ/hải sản/Vẹm xanh.jpg"
                                alt="haisan 14" onclick="openModal(this)">
                            <div class="info-mon">
                                <div class="left">
                                    <h1>Bạch tuộc baby</h1>
                                    <p>119.000 VND</p>
                                </div>
                                <div class="right">
                                    <div class="quantity">
                                        <button class="minus">−</button>
                                        <span class="number">0</span>
                                        <button class="plus">+</button>
                                    </div>
                                    <button class="btn-cf">xác nhận</button>
                                </div>
                            </div>
                        </div>

                        <!-- Nội tạng -->
                        <div class="the noitang monle1">
                            <img class="img-the" src="/frontend/assets/img/menu/Món lẻ/nội tạng/Bao tử cá basa.jpg"
                                alt="noitang 1" onclick="openModal(this)">
                            <div class="info-mon">
                                <div class="left">
                                    <h1>Bao tử cá basa</h1>
                                    <p>39.000 VND</p>
                                </div>
                                <div class="right">
                                    <div class="quantity">
                                        <button class="minus">−</button>
                                        <span class="number">0</span>
                                        <button class="plus">+</button>
                                    </div>
                                    <button class="btn-cf">xác nhận</button>
                                </div>
                            </div>
                        </div>
                        <div class="the noitang monle1">
                            <img class="img-the" src="/frontend/assets/img/menu/Món lẻ/nội tạng/Chân giò táu.jpg"
                                alt="noitang 2" onclick="openModal(this)">
                            <div class="info-mon">
                                <div class="left">
                                    <h1>Chân giò táu</h1>
                                    <p>39.000 VND</p>
                                </div>
                                <div class="right">
                                    <div class="quantity">
                                        <button class="minus">−</button>
                                        <span class="number">0</span>
                                        <button class="plus">+</button>
                                    </div>
                                    <button class="btn-cf">xác nhận</button>
                                </div>
                            </div>
                        </div>
                        <div class="the noitang monle1">
                            <img class="img-the" src="/frontend/assets/img/menu/Món lẻ/nội tạng/Cuống tim.jpg"
                                alt="noitang 3" onclick="openModal(this)">
                            <div class="info-mon">
                                <div class="left">
                                    <h1>Cuống tim</h1>
                                    <p>69.000 VND</p>
                                </div>
                                <div class="right">
                                    <div class="quantity">
                                        <button class="minus">−</button>
                                        <span class="number">0</span>
                                        <button class="plus">+</button>
                                    </div>
                                    <button class="btn-cf">xác nhận</button>
                                </div>
                            </div>
                        </div>
                        <div class="the noitang monle1">
                            <img class="img-the" src="/frontend/assets/img/menu/Món lẻ/nội tạng/Dạ dày heo táu.jpg"
                                alt="noitang 4" onclick="openModal(this)">
                            <div class="info-mon">
                                <div class="left">
                                    <h1>Dạ dày heo</h1>
                                    <p>69.000 VND</p>
                                </div>
                                <div class="right">
                                    <div class="quantity">
                                        <button class="minus">−</button>
                                        <span class="number">0</span>
                                        <button class="plus">+</button>
                                    </div>
                                    <button class="btn-cf">xác nhận</button>
                                </div>
                            </div>
                        </div>
                        <div class="the noitang monle1">
                            <img class="img-the" src="/frontend/assets/img/menu/Món lẻ/nội tạng/Giòn sần sật.jpg"
                                alt="noitang 5" onclick="openModal(this)">
                            <div class="info-mon">
                                <div class="left">
                                    <h1>Giòn sần sật</h1>
                                    <p>39.000 VND</p>
                                </div>
                                <div class="right">
                                    <div class="quantity">
                                        <button class="minus">−</button>
                                        <span class="number">0</span>
                                        <button class="plus">+</button>
                                    </div>
                                    <button class="btn-cf">xác nhận</button>
                                </div>
                            </div>
                        </div>
                        <div class="the noitang monle1">
                            <img class="img-the" src="/frontend/assets/img/menu/Món lẻ/nội tạng/Lưỡi bò cuộn.jpg"
                                alt="noitang 6" onclick="openModal(this)">
                            <div class="info-mon">
                                <div class="left">
                                    <h1>Lưỡi bò cuộn</h1>
                                    <p>49.000 VND</p>
                                </div>
                                <div class="right">
                                    <div class="quantity">
                                        <button class="minus">−</button>
                                        <span class="number">0</span>
                                        <button class="plus">+</button>
                                    </div>
                                    <button class="btn-cf">xác nhận</button>
                                </div>
                            </div>
                        </div>
                        <div class="the noitang monle1">
                            <img class="img-the" src="/frontend/assets/img/menu/Món lẻ/nội tạng/Óc heo.jpg"
                                alt="noitang 7" onclick="openModal(this)">
                            <div class="info-mon">
                                <div class="left">
                                    <h1>Óc heo</h1>
                                    <p>69.000 VND</p>
                                </div>
                                <div class="right">
                                    <div class="quantity">
                                        <button class="minus">−</button>
                                        <span class="number">0</span>
                                        <button class="plus">+</button>
                                    </div>
                                    <button class="btn-cf">xác nhận</button>
                                </div>
                            </div>
                        </div>
                        <div class="the noitang monle1">
                            <img class="img-the" src="/frontend/assets/img/menu/Món lẻ/nội tạng/Sách bò nâu.jpg"
                                alt="noitang 8" onclick="openModal(this)">
                            <div class="info-mon">
                                <div class="left">
                                    <h1>Sách bò nâu</h1>
                                    <p>79.000 VND</p>
                                </div>
                                <div class="right">
                                    <div class="quantity">
                                        <button class="minus">−</button>
                                        <span class="number">0</span>
                                        <button class="plus">+</button>
                                    </div>
                                    <button class="btn-cf">xác nhận</button>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Há cảo và sủi cảo -->
                        <div class="the ha-cao monle1">
                            <img class="img-the" src="/frontend/assets/img/menu/Món lẻ/Há cảo và Sủi cảo/Há cảo bò.jpg"
                                alt="ha-cao 1" onclick="openModal(this)">
                            <div class="info-mon">
                                <div class="left">
                                    <h1>Há cảo bò</h1>
                                    <p>29.000 VND</p>
                                </div>
                                <div class="right">
                                    <div class="quantity">
                                        <button class="minus">−</button>
                                        <span class="number">0</span>
                                        <button class="plus">+</button>
                                    </div>
                                    <button class="btn-cf">xác nhận</button>
                                </div>
                            </div>
                        </div>
                        <div class="the ha-cao monle1">
                            <img class="img-the" src="/frontend/assets/img/menu/Món lẻ/Há cảo và Sủi cảo/Há cảo nấm vuốt hổ đen.png"
                                alt="ha-cao 2" onclick="openModal(this)">
                            <div class="info-mon">
                                <div class="left">
                                    <h1>Há cảo nấm</h1>
                                    <p>29.000 VND</p>
                                </div>
                                <div class="right">
                                    <div class="quantity">
                                        <button class="minus">−</button>
                                        <span class="number">0</span>
                                        <button class="plus">+</button>
                                    </div>
                                    <button class="btn-cf">xác nhận</button>
                                </div>
                            </div>
                        </div>
                        <div class="the ha-cao monle1">
                            <img class="img-the" src="/frontend/assets/img/menu/Món lẻ/Há cảo và Sủi cảo/Há cảo tôm.png"
                                alt="ha-cao 3" onclick="openModal(this)">
                            <div class="info-mon">
                                <div class="left">
                                    <h1>Há cảo tôm</h1>
                                    <p>29.000 VND</p>
                                </div>
                                <div class="right">
                                    <div class="quantity">
                                        <button class="minus">−</button>
                                        <span class="number">0</span>
                                        <button class="plus">+</button>
                                    </div>
                                    <button class="btn-cf">xác nhận</button>
                                </div>
                            </div>
                        </div>
                        <div class="the ha-cao monle1">
                            <img class="img-the" src="/frontend/assets/img/menu/Món lẻ/Há cảo và Sủi cảo/ha_cao_tong_hop.jpg"
                                alt="ha-cao 4" onclick="openModal(this)">
                            <div class="info-mon">
                                <div class="left">
                                    <h1>Há cảo tổng hợp</h1>
                                    <p>119.000 VND</p>
                                </div>
                                <div class="right">
                                    <div class="quantity">
                                        <button class="minus">−</button>
                                        <span class="number">0</span>
                                        <button class="plus">+</button>
                                    </div>
                                    <button class="btn-cf">xác nhận</button>
                                </div>
                            </div>
                        </div>
                        <div class="the ha-cao monle1">
                            <img class="img-the" src="/frontend/assets/img/menu/Món lẻ/Há cảo và Sủi cảo/Sủi cảo ngẫu tượng.jpg"
                                alt="ha-cao 5" onclick="openModal(this)">
                            <div class="info-mon">
                                <div class="left">
                                    <h1>Sủi cảo ngẫu tượng</h1>
                                    <p>19.000 VND</p>
                                </div>
                                <div class="right">
                                    <div class="quantity">
                                        <button class="minus">−</button>
                                        <span class="number">0</span>
                                        <button class="plus">+</button>
                                    </div>
                                    <button class="btn-cf">xác nhận</button>
                                </div>
                            </div>
                        </div>
                        <div class="the ha-cao monle1">
                            <img class="img-the" src="/frontend/assets/img/menu/Món lẻ/Há cảo và Sủi cảo/sui_cam_tam_phuc.jpg"
                                alt="ha-cao 6" onclick="openModal(this)">
                            <div class="info-mon">
                                <div class="left">
                                    <h1>Sủi cảo Tam Phúc</h1>
                                    <p>19.000 VND</p>
                                </div>
                                <div class="right">
                                    <div class="quantity">
                                        <button class="minus">−</button>
                                        <span class="number">0</span>
                                        <button class="plus">+</button>
                                    </div>
                                    <button class="btn-cf">xác nhận</button>
                                </div>
                            </div>
                        </div>

                        <!-- Đậu hũ và đồ viên -->
                        <div class="the dauhu monle1">
                            <img class="img-the" src="/frontend/assets/img/menu/Món lẻ/Đậu hũ và Đồ viên/ghe_handmane.jpg"
                                alt="dauhu 0" onclick="openModal(this)">
                            <div class="info-mon">
                                <div class="left">
                                    <h1>Ghẹ handmade</h1>
                                    <p>139.000 VND</p>
                                </div>
                                <div class="right">
                                    <div class="quantity">
                                        <button class="minus">−</button>
                                        <span class="number">0</span>
                                        <button class="plus">+</button>
                                    </div>
                                    <button class="btn-cf">xác nhận</button>
                                </div>
                            </div>
                        </div>
                        <div class="the dauhu monle1">
                            <img class="img-the" src="/frontend/assets/img/menu/Món lẻ/Đậu hũ và Đồ viên/Thanh tôm sú cuộn.jpg"
                                alt="dauhu 1" onclick="openModal(this)">
                            <div class="info-mon">
                                <div class="left">
                                    <h1>Thanh tôm sú cuộn</h1>
                                    <p>109.000 VND</p>
                                </div>
                                <div class="right">
                                    <div class="quantity">
                                        <button class="minus">−</button>
                                        <span class="number">0</span>
                                        <button class="plus">+</button>
                                    </div>
                                    <button class="btn-cf">xác nhận</button>
                                </div>
                            </div>
                        </div>
                        <div class="the dauhu monle1">
                            <img class="img-the" src="/frontend/assets/img/menu/Món lẻ/Đậu hũ và Đồ viên/Xúc xích phomai.jpg"
                                alt="dauhu 2" onclick="openModal(this)">
                            <div class="info-mon">
                                <div class="left">
                                    <h1>Xúc xích phô mai</h1>
                                    <p>99.000 VND</p>
                                </div>
                                <div class="right">
                                    <div class="quantity">
                                        <button class="minus">−</button>
                                        <span class="number">0</span>
                                        <button class="plus">+</button>
                                    </div>
                                    <button class="btn-cf">xác nhận</button>
                                </div>
                            </div>
                        </div>
                        <div class="the dauhu monle1">
                            <img class="img-the" src="/frontend/assets/img/menu/Món lẻ/Đậu hũ và Đồ viên/Xúc xích nấm.jpg"
                                alt="dauhu 3" onclick="openModal(this)">
                            <div class="info-mon">
                                <div class="left">
                                    <h1>Xúc xích nấm</h1>
                                    <p>89.000 VND</p>
                                </div>
                                <div class="right">
                                    <div class="quantity">
                                        <button class="minus">−</button>
                                        <span class="number">0</span>
                                        <button class="plus">+</button>
                                    </div>
                                    <button class="btn-cf">xác nhận</button>
                                </div>
                            </div>
                        </div>
                        <div class="the dauhu monle1">
                            <img class="img-the" src="/frontend/assets/img/menu/Món lẻ/Đậu hũ và Đồ viên/Bánh gạo phomai.jpg"
                                alt="dauhu 4" onclick="openModal(this)">
                            <div class="info-mon">
                                <div class="left">
                                    <h1>Bánh gạo phomai</h1>
                                    <p>49.000 VND</p>
                                </div>
                                <div class="right">
                                    <div class="quantity">
                                        <button class="minus">−</button>
                                        <span class="number">0</span>
                                        <button class="plus">+</button>
                                    </div>
                                    <button class="btn-cf">xác nhận</button>
                                </div>
                            </div>
                        </div>
                        <div class="the dauhu monle1">
                            <img class="img-the" src="/frontend/assets/img/menu/Món lẻ/Đậu hũ và Đồ viên/Bánh gạo khoai môn.jpg"
                                alt="dauhu 5" onclick="openModal(this)">
                            <div class="info-mon">
                                <div class="left">
                                    <h1>Bánh gạo khoai môn</h1>
                                    <p>39.000 VND</p>
                                </div>
                                <div class="right">
                                    <div class="quantity">
                                        <button class="minus">−</button>
                                        <span class="number">0</span>
                                        <button class="plus">+</button>
                                    </div>
                                    <button class="btn-cf">xác nhận</button>
                                </div>
                            </div>
                        </div>
                        <div class="the dauhu monle1">
                            <img class="img-the" src="/frontend/assets/img/menu/Món lẻ/Đậu hũ và Đồ viên/Chả cá rồng.jpg"
                                alt="dauhu 6" onclick="openModal(this)">
                            <div class="info-mon">
                                <div class="left">
                                    <h1>Chả cá</h1>
                                    <p>39.000 VND</p>
                                </div>
                                <div class="right">
                                    <div class="quantity">
                                        <button class="minus">−</button>
                                        <span class="number">0</span>
                                        <button class="plus">+</button>
                                    </div>
                                    <button class="btn-cf">xác nhận</button>
                                </div>
                            </div>
                        </div>
                        <div class="the dauhu monle1">
                            <img class="img-the" src="/frontend/assets/img/menu/Món lẻ/Đậu hũ và Đồ viên/Thanh cua.jpg"
                                alt="dauhu 7" onclick="openModal(this)">
                            <div class="info-mon">
                                <div class="left">
                                    <h1>Thanh cua</h1>
                                    <p>39.000 VND</p>
                                </div>
                                <div class="right">
                                    <div class="quantity">
                                        <button class="minus">−</button>
                                        <span class="number">0</span>
                                        <button class="plus">+</button>
                                    </div>
                                    <button class="btn-cf">xác nhận</button>
                                </div>
                            </div>
                        </div>
                        <div class="the dauhu monle1">
                            <img class="img-the" src="/frontend/assets/img/menu/Món lẻ/Đậu hũ và Đồ viên/Đậu hũ phomai.jpg"
                                alt="dauhu 8" onclick="openModal(this)">
                            <div class="info-mon">
                                <div class="left">
                                    <h1>Đậu hũ phomai</h1>
                                    <p>39.000 VND</p>
                                </div>
                                <div class="right">
                                    <div class="quantity">
                                        <button class="minus">−</button>
                                        <span class="number">0</span>
                                        <button class="plus">+</button>
                                    </div>
                                    <button class="btn-cf">xác nhận</button>
                                </div>
                            </div>
                        </div>
                        <div class="the dauhu monle1">
                            <img class="img-the" src="/frontend/assets/img/menu/Món lẻ/Đậu hũ và Đồ viên/Đậu hũ Surimi.jpg"
                                alt="dauhu 9" onclick="openModal(this)">
                            <div class="info-mon">
                                <div class="left">
                                    <h1>Đậu hũ Surimi</h1>
                                    <p>29.000 VND</p>
                                </div>
                                <div class="right">
                                    <div class="quantity">
                                        <button class="minus">−</button>
                                        <span class="number">0</span>
                                        <button class="plus">+</button>
                                    </div>
                                    <button class="btn-cf">xác nhận</button>
                                </div>
                            </div>
                        </div>
                        <div class="the dauhu monle1">
                            <img class="img-the" src="/frontend/assets/img/menu/Món lẻ/Đậu hũ và Đồ viên/Phù trúc chiên.jpg"
                                alt="dauhu 10" onclick="openModal(this)">
                            <div class="info-mon">
                                <div class="left">
                                    <h1>Phù Trúc chiên</h1>
                                    <p>19.000 VND</p>
                                </div>
                                <div class="right">
                                    <div class="quantity">
                                        <button class="minus">−</button>
                                        <span class="number">0</span>
                                        <button class="plus">+</button>
                                    </div>
                                    <button class="btn-cf">xác nhận</button>
                                </div>
                            </div>
                        </div>
                        <!-- Mỳ tôm -->
                        <div class="the mytom monle1">
                            <img class="img-the" src="/frontend/assets/img/menu/Món lẻ/mỳ/Mỳ tươi.jpg"
                                alt="mytom 1" onclick="openModal(this)">
                            <div class="info-mon">
                                <div class="left">
                                    <h1>Mỳ tươi</h1>
                                    <p>19.000 VND</p>
                                </div>
                                <div class="right">
                                    <div class="quantity">
                                        <button class="minus">−</button>
                                        <span class="number">0</span>
                                        <button class="plus">+</button>
                                    </div>
                                    <button class="btn-cf">xác nhận</button>
                                </div>
                            </div>
                        </div>
                        <div class="the mytom monle1">
                            <img class="img-the" src="/frontend/assets/img/menu/Món lẻ/mỳ/Mỳ rong biển.jpg"
                                alt="mytom 1" onclick="openModal(this)">
                            <div class="info-mon">
                                <div class="left">
                                    <h1>Mỳ rong biển</h1>
                                    <p>19.000 VND</p>
                                </div>
                                <div class="right">
                                    <div class="quantity">
                                        <button class="minus">−</button>
                                        <span class="number">0</span>
                                        <button class="plus">+</button>
                                    </div>
                                    <button class="btn-cf">xác nhận</button>
                                </div>
                            </div>
                        </div>
                        <div class="the mytom monle1">
                            <img class="img-the" src="/frontend/assets/img/menu/Món lẻ/mỳ/Mỳ trùng khánh.jpg"
                                alt="mytom 1" onclick="openModal(this)">
                            <div class="info-mon">
                                <div class="left">
                                    <h1>Mỳ Trùng Khánh</h1>
                                    <p>39.000 VND</p>
                                </div>
                                <div class="right">
                                    <div class="quantity">
                                        <button class="minus">−</button>
                                        <span class="number">0</span>
                                        <button class="plus">+</button>
                                    </div>
                                    <button class="btn-cf">xác nhận</button>
                                </div>
                            </div>
                        </div>
                        <div class="the mytom monle1">
                            <img class="img-the" src="/frontend/assets/img/menu/Món lẻ/mỳ/Bánh đa Hong Kong.jpg"
                                alt="mytom 1" onclick="openModal(this)">
                            <div class="info-mon">
                                <div class="left">
                                    <h1>Bánh đa Hong Kong</h1>
                                    <p>19.000 VND</p>
                                </div>
                                <div class="right">
                                    <div class="quantity">
                                        <button class="minus">−</button>
                                        <span class="number">0</span>
                                        <button class="plus">+</button>
                                    </div>
                                    <button class="btn-cf">xác nhận</button>
                                </div>
                            </div>
                        </div>
                        <div class="the mytom monle1">
                            <img class="img-the" src="/frontend/assets/img/menu/Món lẻ/mỳ/Phở khô.jpg"
                                alt="mytom 1" onclick="openModal(this)">
                            <div class="info-mon">
                                <div class="left">
                                    <h1>Phở khô</h1>
                                    <p>15.000 VND</p>
                                </div>
                                <div class="right">
                                    <div class="quantity">
                                        <button class="minus">−</button>
                                        <span class="number">0</span>
                                        <button class="plus">+</button>
                                    </div>
                                    <button class="btn-cf">xác nhận</button>
                                </div>
                            </div>
                        </div>

                        <!-- rau và nấm -->
                        <div class="the rau monle1">
                            <img class="img-the" src="/frontend/assets/img/menu/Món lẻ/Rau và Nấm/Rau nấm tổng hợp.jpg"
                                alt="rau 1" onclick="openModal(this)">
                            <div class="info-mon">
                                <div class="left">
                                    <h1>Rau nấm tổng hợp</h1>
                                    <p>89.000 VND</p>
                                </div>
                                <div class="right">
                                    <div class="quantity">
                                        <button class="minus">−</button>
                                        <span class="number">0</span>
                                        <button class="plus">+</button>
                                    </div>
                                    <button class="btn-cf">xác nhận</button>
                                </div>
                            </div>
                        </div>
                        <div class="the rau monle1">
                            <img class="img-the" src="/frontend/assets/img/menu/Món lẻ/Rau và Nấm/Rau tổng hợp.jpg"
                                alt="rau 2" onclick="openModal(this)">
                            <div class="info-mon">
                                <div class="left">
                                    <h1>Rau tổng hợp</h1>
                                    <p>35.000 VND</p>
                                </div>
                                <div class="right">
                                    <div class="quantity">
                                        <button class="minus">−</button>
                                        <span class="number">0</span>
                                        <button class="plus">+</button>
                                    </div>
                                    <button class="btn-cf">xác nhận</button>
                                </div>
                            </div>
                        </div>
                        <div class="the rau monle1">
                            <img class="img-the" src="/frontend/assets/img/menu/Món lẻ/Rau và Nấm/Nấm tổng hợp.jpg"
                                alt="rau 1" onclick="openModal(this)">
                            <div class="info-mon">
                                <div class="left">
                                    <h1>Nấm tổng hợp</h1>
                                    <p>29.000 VND</p>
                                </div>
                                <div class="right">
                                    <div class="quantity">
                                        <button class="minus">−</button>
                                        <span class="number">0</span>
                                        <button class="plus">+</button>
                                    </div>
                                    <button class="btn-cf">xác nhận</button>
                                </div>
                            </div>
                        </div>
                        <div class="the rau monle1">
                            <img class="img-the" src="/frontend/assets/img/menu/Món lẻ/Rau và Nấm/Nấm đông trùng hạ thảo.jpg"
                                alt="rau 1" onclick="openModal(this)">
                            <div class="info-mon">
                                <div class="left">
                                    <h1>Nấm Đông trùng hạ thảo</h1>
                                    <p>89.000 VND</p>
                                </div>
                                <div class="right">
                                    <div class="quantity">
                                        <button class="minus">−</button>
                                        <span class="number">0</span>
                                        <button class="plus">+</button>
                                    </div>
                                    <button class="btn-cf">xác nhận</button>
                                </div>
                            </div>
                        </div>
                        <div class="the rau monle1">
                            <img class="img-the" src="/frontend/assets/img/menu/Món lẻ/Rau và Nấm/Nấm nhung hươu.jpg"
                                alt="rau 1" onclick="openModal(this)">
                            <div class="info-mon">
                                <div class="left">
                                    <h1>Nấm nhung hươu</h1>
                                    <p>79.000 VND</p>
                                </div>
                                <div class="right">
                                    <div class="quantity">
                                        <button class="minus">−</button>
                                        <span class="number">0</span>
                                        <button class="plus">+</button>
                                    </div>
                                    <button class="btn-cf">xác nhận</button>
                                </div>
                            </div>
                        </div>
                        <div class="the rau monle1">
                            <img class="img-the" src="/frontend/assets/img/menu/Món lẻ/Rau và Nấm/Nấm vị cua trắng.jpg"
                                alt="rau 1" onclick="openModal(this)">
                            <div class="info-mon">
                                <div class="left">
                                    <h1>Nấm vị cua trắng</h1>
                                    <p>39.000 VND</p>
                                </div>
                                <div class="right">
                                    <div class="quantity">
                                        <button class="minus">−</button>
                                        <span class="number">0</span>
                                        <button class="plus">+</button>
                                    </div>
                                    <button class="btn-cf">xác nhận</button>
                                </div>
                            </div>
                        </div>
                        <div class="the rau monle1">
                            <img class="img-the" src="/frontend/assets/img/menu/Món lẻ/Rau và Nấm/Nấm vị cua nâu.jpg"
                                alt="rau 1" onclick="openModal(this)">
                            <div class="info-mon">
                                <div class="left">
                                    <h1>Nấm vị cua nâu</h1>
                                    <p>39.000 VND</p>
                                </div>
                                <div class="right">
                                    <div class="quantity">
                                        <button class="minus">−</button>
                                        <span class="number">0</span>
                                        <button class="plus">+</button>
                                    </div>
                                    <button class="btn-cf">xác nhận</button>
                                </div>
                            </div>
                        </div>
                        <div class="the rau monle1">
                            <img class="img-the" src="/frontend/assets/img/menu/Món lẻ/Rau và Nấm/Nấm trâm trắng.jpg"
                                alt="rau 1" onclick="openModal(this)">
                            <div class="info-mon">
                                <div class="left">
                                    <h1>Nấm trâm trắng</h1>
                                    <p>19.000 VND</p>
                                </div>
                                <div class="right">
                                    <div class="quantity">
                                        <button class="minus">−</button>
                                        <span class="number">0</span>
                                        <button class="plus">+</button>
                                    </div>
                                    <button class="btn-cf">xác nhận</button>
                                </div>
                            </div>
                        </div>
                        <div class="the rau monle1">
                            <img class="img-the" src="/frontend/assets/img/menu/Món lẻ/Rau và Nấm/Nấm tiên.jpg"
                                alt="rau 1" onclick="openModal(this)">
                            <div class="info-mon">
                                <div class="left">
                                    <h1>Nấm tiên</h1>
                                    <p>19.000 VND</p>
                                </div>
                                <div class="right">
                                    <div class="quantity">
                                        <button class="minus">−</button>
                                        <span class="number">0</span>
                                        <button class="plus">+</button>
                                    </div>
                                    <button class="btn-cf">xác nhận</button>
                                </div>
                            </div>
                        </div>
                        <div class="the rau monle1">
                            <img class="img-the" src="/frontend/assets/img/menu/Món lẻ/Rau và Nấm/Nấm hải sản.jpg"
                                alt="rau 1" onclick="openModal(this)">
                            <div class="info-mon">
                                <div class="left">
                                    <h1>Nấm hải sản</h1>
                                    <p>89.000 VND</p>
                                </div>
                                <div class="right">
                                    <div class="quantity">
                                        <button class="minus">−</button>
                                        <span class="number">0</span>
                                        <button class="plus">+</button>
                                    </div>
                                    <button class="btn-cf">xác nhận</button>
                                </div>
                            </div>
                        </div>
                        <div class="the rau monle1">
                            <img class="img-the" src="/frontend/assets/img/menu/Món lẻ/Rau và Nấm/Ngô ngọt.jpg"
                                alt="rau 1" onclick="openModal(this)">
                            <div class="info-mon">
                                <div class="left">
                                    <h1>Ngô ngọt</h1>
                                    <p>35.000 VND</p>
                                </div>
                                <div class="right">
                                    <div class="quantity">
                                        <button class="minus">−</button>
                                        <span class="number">0</span>
                                        <button class="plus">+</button>
                                    </div>
                                    <button class="btn-cf">xác nhận</button>
                                </div>
                            </div>
                        </div>
                        <div class="the rau monle1">
                            <img class="img-the" src="/frontend/assets/img/menu/Món lẻ/Rau và Nấm/Rong biển Hàn Quốc.jpg"
                                alt="rau 1" onclick="openModal(this)">
                            <div class="info-mon">
                                <div class="left">
                                    <h1>Rong biển Hàn Quốc</h1>
                                    <p>19.000 VND</p>
                                </div>
                                <div class="right">
                                    <div class="quantity">
                                        <button class="minus">−</button>
                                        <span class="number">0</span>
                                        <button class="plus">+</button>
                                    </div>
                                    <button class="btn-cf">xác nhận</button>
                                </div>
                            </div>
                        </div>
                        <div class="the rau monle1">
                            <img class="img-the" src="/frontend/assets/img/menu/Món lẻ/Rau và Nấm/Khoai lang nhật.jpg"
                                alt="rau 1" onclick="openModal(this)">
                            <div class="info-mon">
                                <div class="left">
                                    <h1>Khoai lang Nhật</h1>
                                    <p>19.000 VND</p>
                                </div>
                                <div class="right">
                                    <div class="quantity">
                                        <button class="minus">−</button>
                                        <span class="number">0</span>
                                        <button class="plus">+</button>
                                    </div>
                                    <button class="btn-cf">xác nhận</button>
                                </div>
                            </div>
                        </div>
                        <div class="the rau monle1">
                            <img class="img-the" src="/frontend/assets/img/menu/Món lẻ/Rau và Nấm/Khoai môn.jpg"
                                alt="rau 1" onclick="openModal(this)">
                            <div class="info-mon">
                                <div class="left">
                                    <h1>Khoai môn</h1>
                                    <p>19.000 VND</p>
                                </div>
                                <div class="right">
                                    <div class="quantity">
                                        <button class="minus">−</button>
                                        <span class="number">0</span>
                                        <button class="plus">+</button>
                                    </div>
                                    <button class="btn-cf">xác nhận</button>
                                </div>
                            </div>
                        </div>
                        <div class="the rau monle1">
                            <img class="img-the" src="/frontend/assets/img/menu/Món lẻ/Rau và Nấm/Đậu bắp.jpg"
                                alt="rau 1" onclick="openModal(this)">
                            <div class="info-mon">
                                <div class="left">
                                    <h1>Đậu bắp</h1>
                                    <p>89.000 VND</p>
                                </div>
                                <div class="right">
                                    <div class="quantity">
                                        <button class="minus">−</button>
                                        <span class="number">0</span>
                                        <button class="plus">+</button>
                                    </div>
                                    <button class="btn-cf">xác nhận</button>
                                </div>
                            </div>
                        </div>
                        <div class="the rau monle1">
                            <img class="img-the" src="/frontend/assets/img/menu/Món lẻ/Rau và Nấm/Rau muống.jpg"
                                alt="rau 1" onclick="openModal(this)">
                            <div class="info-mon">
                                <div class="left">
                                    <h1>Rau muống</h1>
                                    <p>19.000 VND</p>
                                </div>
                                <div class="right">
                                    <div class="quantity">
                                        <button class="minus">−</button>
                                        <span class="number">0</span>
                                        <button class="plus">+</button>
                                    </div>
                                    <button class="btn-cf">xác nhận</button>
                                </div>
                            </div>
                        </div>
                        <div class="the rau monle1">
                            <img class="img-the" src="/frontend/assets/img/menu/Món lẻ/Rau và Nấm/Rau cải ngọt.jpg"
                                alt="rau 1" onclick="openModal(this)">
                            <div class="info-mon">
                                <div class="left">
                                    <h1>Rau cải ngọt</h1>
                                    <p>19.000 VND</p>
                                </div>
                                <div class="right">
                                    <div class="quantity">
                                        <button class="minus">−</button>
                                        <span class="number">0</span>
                                        <button class="plus">+</button>
                                    </div>
                                    <button class="btn-cf">xác nhận</button>
                                </div>
                            </div>
                        </div>
                        <div class="the rau monle1">
                            <img class="img-the" src="/frontend/assets/img/menu/Món lẻ/Rau và Nấm/Rau bắp cải.jpg"
                                alt="rau 1" onclick="openModal(this)">
                            <div class="info-mon">
                                <div class="left">
                                    <h1>Rau bắp cải</h1>
                                    <p>19.000 VND</p>
                                </div>
                                <div class="right">
                                    <div class="quantity">
                                        <button class="minus">−</button>
                                        <span class="number">0</span>
                                        <button class="plus">+</button>
                                    </div>
                                    <button class="btn-cf">xác nhận</button>
                                </div>
                            </div>
                        </div>
                        <div class="the rau monle1">
                            <img class="img-the" src="/frontend/assets/img/menu/Món lẻ/Rau và Nấm/Rau cải cúc.jpg"
                                alt="rau 1" onclick="openModal(this)">
                            <div class="info-mon">
                                <div class="left">
                                    <h1>Rau cải cúc</h1>
                                    <p>19.000 VND</p>
                                </div>
                                <div class="right">
                                    <div class="quantity">
                                        <button class="minus">−</button>
                                        <span class="number">0</span>
                                        <button class="plus">+</button>
                                    </div>
                                    <button class="btn-cf">xác nhận</button>
                                </div>
                            </div>
                        </div>
                        <div class="the rau monle1">
                            <img class="img-the" src="/frontend/assets/img/menu/Món lẻ/Rau và Nấm/Rau cần.jpg"
                                alt="rau 1" onclick="openModal(this)">
                            <div class="info-mon">
                                <div class="left">
                                    <h1>Rau cần</h1>
                                    <p>19.000 VND</p>
                                </div>
                                <div class="right">
                                    <div class="quantity">
                                        <button class="minus">−</button>
                                        <span class="number">0</span>
                                        <button class="plus">+</button>
                                    </div>
                                    <button class="btn-cf">xác nhận</button>
                                </div>
                            </div>
                        </div>
                        <div class="the rau monle1">
                            <img class="img-the" src="/frontend/assets/img/menu/Món lẻ/Rau và Nấm/Rau cải chíp.jpg"
                                alt="rau 1" onclick="openModal(this)">
                            <div class="info-mon">
                                <div class="left">
                                    <h1>Rau cải chíp</h1>
                                    <p>19.000 VND</p>
                                </div>
                                <div class="right">
                                    <div class="quantity">
                                        <button class="minus">−</button>
                                        <span class="number">0</span>
                                        <button class="plus">+</button>
                                    </div>
                                    <button class="btn-cf">xác nhận</button>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <!-- model phóng to ảnh  -->
                    <div id="imageModal" class="modal">
                        <img class="modal-content" id="modalImg">
                    </div>  
                </div>

            </div>
        </div>





        <!-- <script src="https://code.jquery.com/jquery-3.7.1.js"></script> -->
        <script src="menu.js"></script>
        <!-- nút trở về đầu trang -->
        <button id="backToTop" onclick="scrollToTop()">▲ Lên đầu</button>

    </main>

    <!-- =================footer==================== -->
    <footer class="footer">

        <!-- phần trên -->
        <div class="top-footer">
            <div class="row">
                <!-- cột 1 -->
                <div class="column">
                    <img src="/frontend/frontend/assets/img/trangbia/Logo_chidan_chữ trắng 1.svg" alt="ChiDan." class="logo" style="width: 55px; height: 42px;">
                    <p class="desc">
                        Lẩu Chi Dân ra đời với mong muốn mang đến trải nghiệm ẩm thực đậm đà hương vị Đài Loan, kết
                        hợp cùng không gian ấm cúng, hiện đại, phù hợp cho mọi buổi họp mặt. Tại đây, mỗi nồi lẩu
                        không chỉ là món ăn, mà còn là sự kết nối – nơi bạn bè, gia đình cùng quây quần bên nhau,
                        chia sẻ những khoảnh khắc đáng nhớ.
                    </p>
                    <div class="social-icon">
                        <a href="">
                            <img src="/frontend/assets/img/icons/fb.svg" alt="" class="icon">
                        </a>
                        <a href="">
                            <img src="/frontend/assets/img/icons/ins.svg" alt="" class="icon">
                        </a>
                        <a href="">
                            <img src="/frontend/assets/img/icons/twt.svg" alt="" class="icon">
                        </a>
        
                    </div>
                </div>
                <!-- cột 2 -->
                <div class="column">
                    <h3 class="title">Truy cập nhanh</h3>
                    <ul class="list">
                        <li><a href="#!">Home</a></li>
                        <li><a href="#!">About</a></li>
                        <li><a href="#!">Youtube</a></li>
                        <li><a href="#!">Support</a></li>
                    </ul>
                </div>
                <!-- cột 3 -->
                <div class="column">
                    <h3 class="title">Liên hệ</h3>
                    <ul class="list">
                        <li><a href="#!"><strong>Trụ sở chính:</strong> Số 144, đường Xuân Thủy, quận Cầu Giấy, Hà Nội</a></li>
                        <li><a href="#!"><strong>email:</strong> laudailoanchidan@gmail.com</a></li>
                        <li><a href="#!"><strong>phone:</strong> 0943914498</a></li>
                    </ul>
                </div>
            </div>
        </div>
        
        <!-- phần dưới -->
        <div class="bot-footer">
            <div class="copyright">
                <p>Copyright @2024 quanlauchidan.com All rights reserved</p>
            </div>
        </div>
        
        </footer>
        </body>
        
        </html>
</body>