<?php
$v = time()
?>
<!DOCTYPE html>
<html lang="vi" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <link type="image/x-icon" rel="shortcut icon" sizes="16x16" href="images/favicon.png"/>
    <link rel="stylesheet" type="text/css"  href="templates/v1/css/guide.css?v=<?= $v ?>"/>
    <link rel="stylesheet" type="text/css"  href="templates/v1/css/style.css?v=<?= $v ?>"/>
    <link rel="stylesheet" type="text/css"  href="templates/v1/css/responsive.css?v=<?= $v ?>" />
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>

    <title>Pana Motion</title>
</head>
<body id="main-body">
    <?php include 'common/header.php'; ?>
    <div class="site-w">
        <div class="sologan">
            <div class="welcome-text">
                <span>
                    Hello!
                </span>
            </div>
            <div class="sologan-info">
                <div class="heading">
                    <span>Sống đam mê,</span>
                    <span>Không ngừng <span class="secondary">khác biệt.</span></span>
                </div>
                <div class="sologan-desc">
                    PanaMotion - Production House tiên phong trong lĩnh vực sản xuất phim quảng cáo và tư vấn giải pháp truyền thông cho các tập đoàn, doanh nghiệp, agency lớn
                </div>
                <div class="sologan-link">
                    <a href="#">
                        <img src="images/icon-about.png" alt="">
                        <span>Company profile</span>
                    </a>
                    <a href="#">
                        <img src="images/icon-showreel.png" alt="">
                        <span>Showreel</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="video">
        <div class=""  id="video-popup" onclick="openVideo()">
            <img src="images/video.png" alt="">
        </div>
        <div class="video-popup-contain">
            <div class="video-content">
                <iframe width="100%" height="100%" src="https://www.youtube.com/embed/a60EN2zzdyc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="video-title">
                TVC Quạt Điều Hòa Boss | PanaMotion VFX Studio
            </div>
            <div class="close-video"  onclick="openVideo()">
                <svg class="closeMenu" viewBox="0 0 329.26933 329" width="329pt" xmlns="http://www.w3.org/2000/svg"><path d="m194.800781 164.769531 128.210938-128.214843c8.34375-8.339844 8.34375-21.824219 0-30.164063-8.339844-8.339844-21.824219-8.339844-30.164063 0l-128.214844 128.214844-128.210937-128.214844c-8.34375-8.339844-21.824219-8.339844-30.164063 0-8.34375 8.339844-8.34375 21.824219 0 30.164063l128.210938 128.214843-128.210938 128.214844c-8.34375 8.339844-8.34375 21.824219 0 30.164063 4.15625 4.160156 9.621094 6.25 15.082032 6.25 5.460937 0 10.921875-2.089844 15.082031-6.25l128.210937-128.214844 128.214844 128.214844c4.160156 4.160156 9.621094 6.25 15.082032 6.25 5.460937 0 10.921874-2.089844 15.082031-6.25 8.34375-8.339844 8.34375-21.824219 0-30.164063zm0 0"/></svg>
            </div>
        </div>
    </div>

    <div class="site-w">
        <div class="sologan">
            <div class="welcome-text">
                <span>
                    Dịch vụ
                </span>
            </div>
            <div class="sologan-info">
                <div class="heading">
                    <span><span class="secondary">PanaMotion</span>- Nhà tiên phong trong lĩnh vực sản xuất phim quảng cáo</span>
                </div>
            </div>
            <div class="home-list">
                <div class="list-item">
                    <div class="icon">
                        <img src="images/icon-production.png" alt="">
                    </div>
                    <div class="list-content">
                        <div class="list-heading">
                            Sản xuất
                        </div>
                        <ul>
                            <li>Phim quảng cáo
                            </li>
                            <li>Phim doanh nghiệp</li>
                            <li>Phim dự án Bất động sản</li>
                            <li>Ảnh diễn hoạ kiến trúc</li>
                            <li>Animation 3D</li>
                            <li>Hậu kỳ phim điện ảnh</li>
                            <li>Broadcast</li>
                        </ul>
                    </div>
                </div>
                <div class="list-item">
                    <div class="icon">
                        <img src="images/icon-advisory.png" alt="">
                    </div>
                    <div class="list-content">
                        <div class="list-heading">
                            Tư vấn
                        </div>
                        <ul>
                            <li>Nội dung Sáng tạo</li>
                            <li>Giải pháp truyền thông</li>
                            <li>Nhận diện thương hiệu</li>
                        </ul>
                    </div>
                </div>
                <div class="list-item">
                    <div class="icon">
                        <img src="images/icon-solution.png" alt="">
                    </div>
                    <div class="list-content">
                        <div class="list-heading">
                            Giải pháp AR-VR
                        </div>
                        <ul>
                            <li>App bán hàng di động</li>
                            <li>Sa bàn ảo</li>
                            <li>Sản phẩm mẫu thực tế ảo</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="panaMotion-demo">
        <a href="#">
            <img src="images/1.png" alt="">
        </a>
        <a href="#">
            <img src="images/2.png" alt="">
        </a>
        <a href="#">
            <img src="images/3.png" alt="">
        </a>
    </div>
    <div class="demo-more">
        <a href="#">
            <img src="images/icon-more.png" alt="">
            <span>Xem thêm</span>
        </a>
    </div>
    <div class="partner">
        <div class="partner-list">
            <?php for ($i=1; $i < 13; $i++) { ?>
                <a class="partner-item" href="#">
                    <img src="images/partner/<?= $i?>.png" alt="">
                </a>
            <?php } ?>
        </div>
    </div>

    <div class="site-w">
        <div class="sologan">
            <div class="welcome-text">
                <span>
                    Giải pháp
                </span>
            </div>
            <div class="sologan-info">
                <div class="heading">
                    <span>PanaMotion - Nhà tiên phong trong lĩnh vực sản xuất phim quảng cáo</span>
                </div>
                <div class="sologan-desc">
                    PanaMotion - Production House tiên phong trong lĩnh vực sản xuất phim quảng cáo và tư vấn giải pháp truyền thông cho các tập đoàn, doanh nghiệp, agency lớn
                </div>
            </div>
            <div class="solution-demo">
                <div class="solution-item">
                    <div class="solution-heading">
                        Giải pháp 1
                    </div>
                    <div class="solution-content">
                        <img src="images/solution.png" alt="">
                    </div>
                </div>
                <div class="solution-item">
                    <div class="solution-heading">
                        Giải pháp 1
                    </div>
                    <div class="solution-content">
                        <img src="images/solution.png" alt="">
                    </div>
                </div>
                <div class="solution-item">
                    <div class="solution-heading">
                        Giải pháp 1
                    </div>
                    <div class="solution-content">
                        <img src="images/solution.png" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="demo-more">
            <a href="#">
                <img src="images/icon-more.png" alt="">
                <span>Xem thêm</span>
            </a>
        </div>
    </div>

    <div class="home-contact-contain">
        <div class="sologan">
            <div class="welcome-text">
                <span>
                    Liên hệ
                </span>
            </div>
            <div class="contact-text">
                <span>Bạn cần các giải pháp</span>
                <span>cho thương hiệu của mình?</span>
                <span>Liên hệ ngay với PanaMotion!</span>
                <a href="#">
                    Liên hệ ngay
                </a>
            </div>
        </div>
    </div>

    <?php include 'common/footer.php'; ?>

</body>
</html>
