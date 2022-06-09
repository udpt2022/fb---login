<?php
    ?>
    <head>
    <title>Profile</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link href="style.css" rel="stylesheet">
    </head>
    <style>
        .plugin-form{
            width: 700px;
            margin: 50px auto;
        }
    </style>
    <body>
    <!-- ======= Top Bar ======= -->
    <div id="topbar" class="d-flex align-items-center fixed-top">
    <div class="container d-flex align-items-center justify-content-center justify-content-md-between">
        <div class="align-items-center d-none d-md-flex">
        <i class="bi bi-clock"></i> UDPT
        </div>
        <div class="d-flex align-items-center">
        <i class="bi bi-phone"></i> Đi Chợ Thuê
        </div>
    </div>
    </div>
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center">

            <a href="#" class="logo me-auto"><img src="../img/logo.png" alt=""></a>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <h1 class="logo me-auto"><a href="index.html">Medicio</a></h1> -->

            <nav id="navbar" class="navbar order-last order-lg-0">
            <ul>
                <li><a class="nav-link scrollto " href="#">Home</a></li>
                <li><a class="nav-link scrollto" href="#">About</a></li>
                <li class="dropdown"><a href="#"><span>Services</span> <i class="bi bi-chevron-down"></i></a>
                <ul>
                    <li><a href="#">Drop Down 1</a></li>
                    <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                    <ul>
                        <li><a href="#">Deep Drop Down 1</a></li>
                        <li><a href="#">Deep Drop Down 2</a></li>
                        <li><a href="#">Deep Drop Down 3</a></li>
                        <li><a href="#">Deep Drop Down 4</a></li>
                        <li><a href="#">Deep Drop Down 5</a></li>
                    </ul>
                    </li>
                    <li><a href="#">Drop Down 2</a></li>
                    <li><a href="#">Drop Down 3</a></li>
                    <li><a href="#">Drop Down 4</a></li>
                </ul>
                </li>
                <li><a class="nav-link scrollto" href="#">Contact</a></li>
                <li><a href="plugin.php" class="nav-link scrollto">Facebook Plugin</a></li>
                <li><a href="profile.php" class="nav-link scrollto">Profile</a></li>
                <li><a href="logout.php" class="nav-link scrollto">Đăng Xuất</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->
        </div>
    </header><!-- End Header -->

    <main id="main">
        <!-- ======= Breadcrumbs Section ======= -->
        <section class="breadcrumbs">
            <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <ol>
                <li><a href="#">Home</a></li>
                </ol>
            </div>
            </div>
        </section><!-- End Breadcrumbs Section -->
    </main><!-- End #main -->
    <section id="about" class="about">
        <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>Đi Chợ Thuê</h2>
            <p>Một công ty đầu tư thương mại ABC muốn xây dựng hệ thống kết nối giữa bên mua và bên
            bán các mặt hàng thiết yếu. Trong bối cảnh dịch bệnh diễn biến phức tạp, người dùng có nhu
            cầu mua các mặt hàng sản phẩm thiết yếu như thịt, cá, rau, củ,…. Những thực phẩm này
            được cung cấp bởi các nhà cung cấp uy tín trên thị trường.
            Công ty ABC là bên đầu tư hệ thống phần mềm để quản lý các dịch vụ này, mục tiêu là cung
            cấp dịch vụ tốt nhất cho người mua và người bán, công ty muốn xây dựng và quản lý hệ
            thống cung cấp các dịch vụ như đăng kí bán hàng, đăng ký mua hàng, giao hàng, và các dịch
            vụ khác. Công ty sẽ thu phí dựa trên số lượng hóa đơn phát sinh, doanh thu chủ yếu công ty
            sẽ đến từ hoạt động chính này. Phấn tiếp theo sẽ mô tả các quy trình trong dự án.
            </p>
        </div>

        <div class="row">
            <div class="col-lg-6" data-aos="fade-right">
            <img src="public/images/system.jpg" class="img-fluid" alt="">
            </div>
            <div class="col-lg-6 pt-4 pt-lg-0 content" data-aos="fade-left">
            <h3>Quy trình hệ thống</h3>
            <p class="fst-italic">
                1. Đăng Ký Bán Hàng
            </p>
            <ul>
                <li><i class="bi bi-check-circle"></i> Các bên bán hàng mong muốn đăng kí bán hàng cần phải thỏa các tiêu chí sau: </li>
                <li><i class="bi bi-check-circle"></i> 1. Giấy phép kinh doanh</li>
                <li><i class="bi bi-check-circle"></i> 2. Có chứng nhận an toàn thực phẩm</li>
                <li><i class="bi bi-check-circle"></i> 3. Các sản phẩm có nguồn gốc xuất xứ rõ ràng, như nhập từ đâu, thời gian nào</li>
            </ul>
            </div>
        </div>

        </div>
    </section><!-- End About Us Section -->
    <div class="plugin-form">
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v13.0&appId=1050420615831702&autoLogAppEvents=1" nonce="VxFqDepC"></script>
    <div class="fb-comments" text-align="center" data-href="https://www.fit.hcmus.edu.vn/" data-width="" data-numposts="5"></div>
    </div>
    <footer id="footer">
        <div class="footer-top">
        <div class="container">
            <div class="row">

            <div class="col-lg-3 col-md-6">
                <div class="footer-info">
                <h3>Đi Chợ Thuê</h3>
                <p>
                    ĐH KHTN <br>
                    Nguyễn Văn Cừ, Q5<br><br>
                    <strong>Phone:</strong> 123456789 <br>
                    <strong>Email:</strong> tranhuuhoanghcmus.com<br>
                </p>
                </div>
            </div>

            <div class="col-lg-2 col-md-6 footer-links">
                <h4>Useful Links</h4>
                <ul>
                <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
                </ul>
            </div>

            <div class="col-lg-3 col-md-6 footer-links">
                <h4>Our Services</h4>
                <ul>
                <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
                </ul>
            </div>

            <div class="col-lg-4 col-md-6 footer-newsletter">
                <h4>About Us</h4>
                <p>Ứng dụng hỗ trợ khách hàng đi chợ bằng phương pháp trực tuyến</p>
            </div>
            </div>
        </div>
    </div>

    <div class="container">
    <div class="copyright">
        &copy; Copyright <strong><span>UDPT</span></strong>. All Rights Reserved
    </div>
    </div>
</footer><!-- End Footer -->
    <script>
        window.addEventListener('next', function(){
            console.log('forward button clicked');
        }, false);
        window.addEventListener('previous', function(){
            console.log('back button clicked');
            location.reload();
        }, false);
        if(window.history && history.pushState){ // check for history api support
                window.addEventListener('load', function(){
                    // create history states
                    history.pushState(-1, null); // back state
                    history.pushState(0, null); // main state
                    history.pushState(1, null); // forward state
                    history.go(-1); // start in main state
                    this.addEventListener('popstate', function(event, state){
                        // check history state and fire custom events
                    if(state = event.state){
                    event = document.createEvent('Event');
                    event.initEvent(state > 0 ? 'next' : 'previous', true, true);
                    this.dispatchEvent(event);
                    // reset state
                    history.go(-state);
                            }
                        }, false);
                    }, false);
        }
    </script>
</html>