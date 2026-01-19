 <!-- Navbar -->
 <header>
   <div class="container-fluid fixed-top bg-body py-3v mb-5 border-bottom ">
     <div class="container">
       <nav class="navbar  navbar-expand-lg">
         <div class="container-fluid d-flex">
           <div class="nav-cont w-100 d-flex justify-content-between">
             <a class="navbar-brand" href="index.php">
               <img src="./images/images-yes-logo.png" alt="" class="img-responsive" width="120" data-aos="fade-down" data-aos-duration="1000" />
             </a>
             
             <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
             </button>
           </div>
           <div class="collapse navbar-collapse w-lg-50" id="navbarSupportedContent">
             <ul class="navbar-nav d-flex justify-content-evenly w-75 me-auto fs-5 fw-bold mb-2 mb-lg-0" data-aos="fade-left" data-aos-duration="1000">
               <li class="nav-item">
                 <a class="nav-link <?php if ($_SERVER["REQUEST_URI"] === "/iqdigit/about.php") echo "active"; ?>" aria-current="page" href="about.php">About Us</a>
               </li>
               <li class="nav-item">
                 <a class="nav-link <?php if ($_SERVER["REQUEST_URI"] === "/iqdigit/vision.php") echo "active"; ?>" href="vision.php">Vision & Mission</a>
               </li>
               <li class="nav-item">
                 <a class="nav-link <?php if ($_SERVER["REQUEST_URI"] === "/iqdigit/why-us.php") echo "active"; ?>" href="why-us.php">Why ERP?</a>
               </li>
               <li class="nav-item">
                 <a class="nav-link <?php if ($_SERVER["REQUEST_URI"] === "/iqdigit/partners.php") echo "active"; ?>" href="partners.php">Our Partners</a>
               </li>
               <li class="nav-item ">
                 <a class="nav-link <?php if ($_SERVER["REQUEST_URI"] === "/iqdigit/contact.php" || $_SERVER["REQUEST_URI"] === "/iqdigit/contact.php?error" || $_SERVER["REQUEST_URI"] === "/iqdigit/contact.php?success") echo "active"; ?>" href="contact.php">Contact Us</a>
               </li>
             </ul>
             <div class="app-links d-flex gap-3 w-25" data-aos="fade-down" data-aos-duration="1000" data-aos-delay="500">
               <a href=""><img src="images/apple.jpg" alt="" class="img-responsive" width="130" />
               </a>
               <a href="">
                 <img src="images/android.jpg" alt="" class="img-responsive" width="130" />
               </a>
             </div>
           </div>
         </div>
       </nav>
     </div>
   </div>
 </header>