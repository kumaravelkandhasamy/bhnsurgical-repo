<?php 
include 'other-page-header.php';
    $allFiles = scandir(__DIR__.'/assets/images/suggested_sets');//For Live
    //echo"<pre>";print_r($allFiles);exit;
    //$allFiles = scandir(__DIR__.'\assets\images\clients-logo');//For Local
    $files = array_diff($allFiles, array('.', '..'));
     // include 'other-page-header.php'; 
    ?>
    <body>
        <!-- Start Main Body -->
        <div class="main-body">
            <!-- Start Header -->
            <header class="header-style-1" style="position: fixed">
                <!-- Start Navigation -->
                <div class="main-navigation-style-1" >
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
                                                <img src="assets/images/logo.png" class="img-fluid image-fit" alt="Logo">
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
                                                                <a href="gyno.php" class="text-light-grey">OBS & Gynae Surgery</a></a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a href="ortho.php" class="text-light-grey">Ortho</a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a href="ent.php" class="text-light-grey">ENT</a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a href="uro.php" class="text-light-grey">Urology</a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a href="cardio.php" class="text-light-grey">Cardio-Thoracic & Vascular</a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a href="neuro.php" class="text-light-grey">Neurology</a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a href="titanium.php" class="text-light-grey">Table Mount Retractors and Titanium</a></a>
                                                            </li>                 
                                                            
                                                        </ul>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a href="laparoscopy.php" class="text-light-grey">Laparoscopy Instruments</a></a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a href="furniture.php" class="text-light-grey">Hospital furniture</a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a href="anatomy.php" class="text-light-grey">Anatomical Training Model</a></a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a href="equipments.php" class="text-light-grey">Other Products</a></a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="menu-item">
                                                <a href="suggested_sets.php" class="text-custom-white" style="color: #000072;">Suggested Sets</a>
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
                                            <a href="index.php#book-appointment" class="btn-first btn-submit" style="padding: 10px 10px">Enquiry Form</a>
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
                                <h1 class="text-custom-white lh-default fw-600">Suggested Sets</h1>
                                <ul class="custom">
                                    <li>
                                        <a href="index.php" class="text-custom-white">Home</a>
                                    </li>
                                    <li class="text-custom-white active">Suggested Sets</li>
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
                                <?php 
                                    $removeDot = strstr($value, '.', true); 
                                    $removeHypen = str_replace("-"," ",$removeDot);
                                    $removeUndersquare = str_replace("_"," ",$removeHypen);
                                    $idformodel1 = "#".str_replace(" ","",$removeUndersquare);
                                    $idformodel2 = str_replace("(","",$idformodel1);
                                    $idformodel = str_replace(")","",$idformodel2);
                                    $clientName = $removeUndersquare;
                                ?>
                                <?php echo '<a data-toggle="modal" data-target="'.$idformodel.'">' ?>
                                <a data-toggle="modal" onclick="showModal('<?php echo $idformodel ?>')">
                                    <img src="assets/images/suggested_sets/<?php echo $value; ?>" class="sugg-set">
                                </a>
                                <?php
                                    $value = str_replace("-"," ",$value);
                                    $value = str_replace("_"," ",$value);
                                    $value = str_replace("(","",$value);
                                    $value = str_replace(")","",$value);
                                    $value = str_replace(".jpg","",$value);
                                    $value = str_replace(".png","",$value);
                                ?>
                                 <a class="whatsapp-icon" href="https://api.whatsapp.com/send?phone=919841100786&amp;text=Hi, I'm interested on the product *<?php echo $value; ?>*" target="_blank"><i class="fab fa-whatsapp" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    <?php }  ?>
                </div>
            </div>
        </section>
        <?php include 'sets.php'; ?>
        <?php include 'other-page-footer.php'; ?>
        

<script type="text/javascript">
function showModal(data)
{
    console.log("dt ",data);
   //you can do anything with data, or pass more data to this function. i set this data to modal header for example
   // $(data+" .modal-title").html()
   $(data).modal();
}
</script>