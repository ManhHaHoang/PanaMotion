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
    <link rel="stylesheet" type="text/css"  href="templates/v1/css/category.css?v=<?= $v ?>"/>
    <link rel="stylesheet" type="text/css"  href="templates/v1/css/responsive.css?v=<?= $v ?>" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700;900&display=swap" rel="stylesheet">
    <title>Pana Motion</title>
</head>
<body id="main-body" class="category-page">
    <?php include 'common/header.php'; ?>
    <section id="category">
        <div class="page-header">
            <img src="images/category.jpg" alt="">
        </div>
        <div class="site-w">
            <div class="page-contain">
                <div class="page-heading">
                    Category title
                </div>
                <div class="page-content">
                    <main class="main">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </main>
                    <aside class="sidebar">
                        <div class="info-content">
                            <div class="detail-container">
                                <span class="detail-label">Services</span>
                                <span class="detail-value">Art Direction, Design</span>
                            </div>
                            <div class="detail-container">
                                <span class="detail-label">Year</span>
                                <span class="detail-value">2019</span>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
            <div class="categories">
                <?php for ($i=1; $i < 7; $i++) { ?>
                    <a class="category-item" href="#">
                        <img src="images/category/<?= $i ?>.jpg" alt="">
                        <span class="category-title">Danh mục <?= $i ?></span>
                    </a>
                <?php } ?>
            </div>
            <div class="related-works">

            </div>
        </div>
    </section>
    <?php include 'common/footer.php'; ?>
</body>
</html>
