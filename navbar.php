<nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
    <a href="index.php" class="navbar-brand p-0">
        <h1 class="m-0"><i class="fas fa-desktop me-2"></i>IT&PR<span class="fs-5">- SCIENCE@KMITL<?php //echo $_SESSION['menu'];?></span></h1>
        <!-- <img src="img/logo.png" alt="Logo"> -->
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="fa fa-bars"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto py-0">
            <?php
                $index="nav-item nav-link";
                $about="nav-item nav-link";
                $service="nav-item nav-link";
                $news="nav-item nav-link";
                $learn="nav-item nav-link";
                $form="nav-item nav-link";
                switch ($_SESSION['menu']) {
                    case 'index':
                        $index="nav-item nav-link active";
                    break;
                    case 'about':
                        $about="nav-item nav-link active";
                    break;
                    case 'service':
                        $service="nav-item nav-link active";
                    break;
                    case 'news':
                        $news="nav-item nav-link active";
                    break;
                    case 'learn':
                        $learn="nav-item nav-link active";
                    break;
                    case 'form':
                        $form="nav-item nav-link active";
                    break;
                    
                }
            ?>
            <a href="index.php" class="<?php echo $index;?>">Home</a>
            <a href="about.php" class="<?php echo $about;?>">เกี่ยวกับเรา</a>
            <a href="service.php" class="<?php echo $service;?>">บริการ</a>
            <a href="news.php" class="<?php echo $news;?>">ข่าวประชาสัมพันธ์</a>
            <a href="learn.php" class="<?php echo $learn;?>">องค์ความรู้</a>
            <a href="form.php" class="<?php echo $form;?>">ดาวน์โหลด</a>
            <!-- <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                <div class="dropdown-menu m-0">
                    <a href="team.html" class="dropdown-item">Our Team</a>
                    <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                    <a href="404.html" class="dropdown-item">404 Page</a>
                </div>
            </div> -->
            <a href="contact.php" class="nav-item nav-link">Contact</a>
        </div>
        <!-- <butaton type="button" class="btn text-secondary ms-3" data-bs-toggle="modal" data-bs-target="#searchModal"><i class="fa fa-search"></i></butaton>
        <a href="https://htmlcodex.com/startup-company-website-template" class="btn btn-secondary text-light rounded-pill py-2 px-4 ms-3">Pro Version</a> -->
    </div>
</nav>