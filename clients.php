<?php 
    include 'other-page-header.php';
    $allFiles = scandir(__DIR__.'/assets/images/clients-logo');//For Live
    //echo"<pre>";print_r($allFiles);exit;
    //$allFiles = scandir(__DIR__.'\assets\images\clients-logo');//For Local
    $files = array_diff($allFiles, array('.', '..'));
?>
<body>
    <!-- Start Main Body -->
    <div class="main-body">
        <!-- Start Header -->
        <header class="header-style-1">
            
            <!-- Start Navigation -->
            <div class="main-navigation-style-1">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="navigation">
                                <div class="logo">
                                    <a href="index.php">
                                        <img src="assets/images/logo.png" class="img-fluid image-fit" alt="Logo">
                                    </a>
                                </div>
                                <div class="main-menu">
                                    <div class="mobile-logo">
                                        <a href="index.php">
                                            <img src="assets/images/logo1.html" class="img-fluid image-fit" alt="Logo">
                                        </a>
                                    </div>
                                    <nav>
                                        <ul class="custom">
                                            <li class="menu-item">
                                                <a href="index.php" class="text-custom-white">Home</a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="about.php" class="text-custom-white">About Us</a>
                                            </li>
                                            <!-- <li class="menu-item active">
                                                <a href="products.php" class="text-custom-white">Products</a>
                                            </li> -->
                                            <li class="menu-item menu-item-has-children">
                                                <a href="#" class="text-custom-white">Products</a>
                                                <ul class="custom sub-menu">
                                                    <li class="menu-item menu-item-has-children">
                                                        <a href="#" class="text-light-grey">Surgical Instruments</a>
                                                        <ul class="custom sub-menu">
                                                            <li class="menu-item">
                                                                <a href="obs_gynae-surg.php" class="text-light-grey">General</a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a href="neuro.php" class="text-light-grey">Neurology</a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a href="uro.php" class="text-light-grey">Urology</a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a href="ent.php" class="text-light-grey">ENT</a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a href="cardio.php" class="text-light-grey">Cardio-Thoracic & Vascular</a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a href="ortho.php" class="text-light-grey">Ortho</a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a href="gyno.php" class="text-light-grey">OBS & Gynae Surgery Tools</a></a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a href="anatomy.php" class="text-light-grey">Anatomical Training Model</a></a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a href="laparoscopy.php" class="text-light-grey">Laparoscopy Instruments</a></a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a href="furniture.php" class="text-light-grey">Hospital furniture</a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a href="titanium.php" class="text-light-grey">TC Instruments</a></a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a href="equipments.php" class="text-light-grey">Other Products</a></a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="menu-item">
                                                <a href="suggested_sets.php" class="text-custom-white">Suggested Sets</a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="cleaning_maintenance.php" class="text-custom-white">Cleaning & Maintanence</a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="contact.php" class="text-custom-white">Contact Us</a>
                                            </li>
                                        </ul>
                                    </nav>
                                    <div class="right-side">
                                        <div class="cta-btn">
                                            <a href="index.html#book-appointment" class="btn-first btn-submit">
                                                Enquiry Us
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="hamburger-menu">
                                    <div class="menu-btn">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Navigation -->
        </header>
        <!-- End Header -->
        <!-- Start Subheader -->
        <div class="sub-header p-relative">
            <div class="overlay overlay-bg-black"></div>
            <div class="pattern"></div>
            <div class="section-padding">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="sub-header-content p-relative">
                                <h1 class="text-custom-white lh-default fw-600">Some of our valuable clients</h1>
                                <ul class="custom">
                                    <li>
                                        <a href="index.php" class="text-custom-white">Home</a>
                                    </li>
                                    <li class="text-custom-white active">Clients</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Subheader -->
        <section>
            <div class="container">
                <div class="row">
                    <?php foreach ($files as $key => $value) { ?>
                    <div class="col-md-3">
                        <div class="col-md-12 m-t-30 p-image p-l-r-n">
                            <img src="assets/images/clients-logo/<?php echo $value; ?>" class="clients-logo">
                            <div class="main-service-wrapper">
                                <h5 class="fw-700 client-name">
                                    <?php 
                                    $removeDot = strstr($value, '.', true); 
                                    $removeHypen = str_replace("-"," ",$removeDot);
                                    $removeUndersquare = str_replace("_"," ",$removeHypen);
                                    $clientName = $removeUndersquare;
                                    echo $clientName;
                                    ?>
                                </h5>
                            </div>
                        </div>
                    </div>
                    <?php }  ?>
                </div>
            </div>
        </section>
<?php include 'other-page-footer.php'; ?>
