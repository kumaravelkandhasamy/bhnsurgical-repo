<style>
    .mobile-hamburger-menu {
      position: fixed;
      z-index: 1;
      top: 0;
      left: 0;
      background-color: #fff;
      overflow-x: hidden;
      transition: 0.5s;
      padding-top: 10px;
      height: 100%;
      display: none;
    }
    .mobile-hamburger-menu ul{
        list-style-type: none;
        display: none;
    }
    .mobile-hamburger-menu a {
      display: block;
      padding: 8px 8px 8px 32px;
      text-transform: uppercase;
      font-size: 14px;
      font-weight: 500;
      color: #888;
      border-bottom: rgba(0, 0, 0, 0.15) solid 1px;
    }
    .mobile-hamburger-menu a:hover {
      color: #888;
    }
    .mobile-hamburger-menu .closebtn {
      position: absolute;
      top: 0;
      right: 25px;
      font-size: 36px;
      margin-left: 50px;
      color: #000;
    }
    .mobile-hamburger-menu ul li a{
        padding: 8px 8px 8px 10px;
    }
    a.closebtn {
        border-bottom: rgba(0, 0, 0, 0.15) solid 0px;
        padding-top: 0px;
    }

    @media screen and (max-height: 450px) {
      .sidenav {padding-top: 15px;}
      .sidenav a {font-size: 18px;}
    }
    @media only screen and (max-width : 993px){
        .mobile-hamburger{
            display: none;
        }
    }
</style>
<script>
    $(document).ready(function(){
            $(".products-toggle").click(function(){
            $("ul").toggle();
        });

    });
    
    function openNav() {
      document.getElementById("mySidenav").style.width = "300px";
      document.getElementById("mySidenav").style.display = "block";
    }

    function closeNav() {
      document.getElementById("mySidenav").style.width = "0";
    }
</script>
<header class="header-style-1" style="position: fixed">
            <!-- Start Navigation -->
            <div class="main-navigation-style-1" style="background: #6c6c6fb8;">
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
                                                <a href="#" class="text-custom-white#">Products</a>
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
                                            <a href="index.php#book-appointment" class="btn-first btn-submit" style="padding: 10px 10px">Enquiry Form</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="hamburger-menu">
                                    <div id="mySidenav" class="mobile-hamburger-menu">
                                        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                                        <a href="index.php" class="text-custom-white">Home</a>
                                        <a href="about.php" class="text-custom-white">About Us</a>
                                        <a href="#" class="text-custom-white products-toggle">Products <span style="float: right;position: relative;">&#9660;</span></a>
                                        <ul>
                                            <li><a href="obs_gynae-surg.php" class="text-light-grey">General OBS & Gynae Surgery Tools</a></li>
                                            <li><a href="neuro.php" class="text-light-grey">Neurology</a></li>
                                            <li><a href="uro.php" class="text-light-grey">Urology</a></li>
                                            <li><a href="ent.php" class="text-light-grey">ENT</a></li>
                                            <li><a href="cardio.php" class="text-light-grey">Cardio-Thoracic & Vascular</a></li>
                                            <li><a href="ortho.php" class="text-light-grey">Ortho</a></li>
                                            <li><a href="hspt_furn.php" class="text-light-grey">Hospital furniture</a></li>
                                            <li><a href="gyno.php" class="text-light-grey">TC Instruments</a></li>
                                        </ul>
                                        <a href="suggested_sets.php" class="text-custom-white">Suggested Sets</a>
                                        <a href="cleaning_maintenance.php" class="text-custom-white">Cleaning & Maintanence</a>
                                        <a href="contact.php" class="text-custom-white">Contact Us</a>
                                        <div class="cta-btn">
                                            <a href="index.php#book-appointment" class="btn-first btn-submit" style="padding: 10px 10px;background: #00a3c8;color: red;">Enquiry Form</a>
                                        </div>
                                    </div>
                                    <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>
                                    <div class="menu-btn mobile-hamburger">
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
        <!-- <?php $lastElement = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; 
        $lastElement = substr($lastElement, strrpos($lastElement, '/') + 1); 
        $lastElement = strstr($lastElement, '.php', true); ?>
        <a class="whats-app" href="https://api.whatsapp.com/send?phone=919841100786&amp;text=Hi, I'm interested on the product *<?php echo $lastElement; ?>*" target="_blank"><i class="fab fa-whatsapp" aria-hidden="true"></i></a> -->