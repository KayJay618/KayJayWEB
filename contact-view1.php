<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Contact Us Form</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600;700&family=Open+Sans:wght@400;500&display=swap" rel="stylesheet">  

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>
<style>
* {
  box-sizing: border-box;
}
form {
  box-sizing: border-box;
  padding: 4rem;
  border-radius: 1rem;
  background-color: hsl(0, 0%, 100%);
  border: 4px solid hsl(0, 0%, 90%);
  display: grid;
  background-color: #f2f2f2;
  
  gap: 2rem;
}
input[type=text], select, textarea {
  width: 150%;
  padding: 10px;
  margin: 6px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 6px;
  resize: vertical;
}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  width: 100%;
  margin-left: 80px;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
 
  padding: 20px;
}


/* Create two equal columns that floats next to each other */
.column {
  float: left;
  width: 50%;
  padding: 10px;
  height: 300px; /* Should be removed. Only for demonstration */
}

/* Clear floats after the columns */
.row:after {
  content: ""; display: table; clear: both;
}
</style>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;"></div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <div class="container-fluid bg-dark text-light px-0 py-2">
        <div class="row gx-0 d-none d-lg-flex">
            <div class="col-lg-7 px-5 text-start">
                <div class="h-100 d-inline-flex align-items-center me-4">
                    <span class="fa fa-phone-alt me-2"></span>
                    <span>+012 345 6789</span>
                </div>
                <div class="h-100 d-inline-flex align-items-center">
                    <span class="far fa-envelope me-2"></span>
                    <span>info@example.com</span>
                </div>
            </div>
            <div class="col-lg-5 px-5 text-end">
                <div class="h-100 d-inline-flex align-items-center mx-n2">
                    <span>Follow Us:</span>
                    <a class="btn btn-link text-light" href=""><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-link text-light" href=""><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-link text-light" href=""><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-link text-light" href=""><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0">
        <a href="index.html" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
             <img src="img/logo/navname.png" style="height: 100px; width: 300px; border-radius: 25px 15px;
                margin-left: auto; margin-right: auto;">
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="index.html" class="nav-item nav-link ">Home</a>
                <a href="about.html" class="nav-item nav-link">About</a>
                <a href="Training.html" class="nav-item nav-link">Training</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                    <div class="dropdown-menu bg-light m-0">
                        <a href="service.html" class="dropdown-item">KayJay Personnel</a>
                        <a href="Career.html" class="dropdown-item">Career</a>
                        <a href="Our_Solution.html" class="dropdown-item ">Our Solutions</a>
                        <a href="Choosing.html" class="dropdown-item">Why Choosing Us</a>
                       
                    </div>
                </div>
                <a href="index.php" class="nav-item nav-link active">Contact</a>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->


    <!-- Page Header Start -->
    <div class="t w3-section" >
        <img class="mySlides" src="img/AB12.jpg" alt="About4" width="100%" height="30%" >
        
        <img class="mySlides" src="img/AB3 (1).jpg" alt="Abouts1" width="100%" height="30%" >
        </div>

            <script>
            var myIndex = 0;
            carousel();

            function carousel() {
            var i;
            var x = document.getElementsByClassName("mySlides");
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";  
            }
            myIndex++;
            if (myIndex > x.length) {myIndex = 1}    
            x[myIndex-1].style.display = "block";  
            setTimeout(carousel, 4000); // Change image every 2 seconds
            }
            </script>
    <!-- Page Header End -->


    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
             <div class="row g-5">
                  <div class="form-container">
                       <form name="frmContact" id="" frmContact"" method="post"
                                         action="" enctype="multipart/form-data"
                                         onsubmit="return validateContactForm()">
    
<div class="row">
  <div class="column">
    
     <div class="col-md-6">
       
         <div class="form-floating" >
            <div class="input-row" style="Margin-top: -50px;">
                <label style="padding-top: 20px;">Name</label> <span
                    id="userName-info" class="info"></span><br /> <input
                    type="text" class="input-field" name="userName" placeholder="Your name.."
                    id="userName" />
            </div>
            <div class="input-row">
                <label>Email</label> <span id="userEmail-info"
                    class="info"></span><br /> <input type="text"
                    class="input-field" name="userEmail" placeholder="Your Email.." id="userEmail" />
            </div>
            <div class="input-row">
                <label>Subject</label> <span id="subject-info"
                    class="info"></span><br /> <input type="text"
                    class="input-field" name="subject"  placeholder="Subject" id="subject" />
            </div>
            <div class="input-row">
                <label>Message</label> <span id="userMessage-info"
                    class="info"></span><br />
                <textarea name="content" id="content" type="text" placeholder="Write something.."
                    class="input-field" cols="60" rows="6"></textarea>
            </div>
            <div>
                <input type="submit" name="send" class="btn-submit"
                    value="Send" />

                <div id="statusMessage"> 
                        <?php
                        if (! empty($message)) {
                            ?>
                            <p class='<?php echo $type; ?>Message'><?php echo $message; ?></p>
                        <?php
                        }
                        ?>
                    </div>
            </div>
        </form>
    </div>
    </div>
 </div>
    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s" style="min-height: 450px; ">
                    <div class="position-relative rounded overflow-hidden h-100">
                        <iframe class="position-relative w-100 h-100"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.3870260915837!2d79.8664222151987!3d6.963588194969136!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae258edf3aaaf51%3A0xcb5f0f20b0567b51!2sKay+Jay+Group!5e0!3m2!1sen!2slk!4v1541584773877" >

                        frameborder="0" style="min-height: 450px; border:0;" allowfullscreen="" aria-hidden="false"
                        tabindex="0"></iframe>
                    </div>
                </div>
    </div>
 </div> </div>

    <script src="https://code.jquery.com/jquery-2.1.1.min.js"
        type="text/javascript"></script>
    <script type="text/javascript">
        function validateContactForm() {
            var valid = true;

            $(".info").html("");
            $(".input-field").css('border', '#e0dfdf 1px solid');
            var userName = $("#userName").val();
            var userEmail = $("#userEmail").val();
            var subject = $("#subject").val();
            var content = $("#content").val();
            
            if (userName == "") {
                $("#userName-info").html("Required.");
                $("#userName").css('border', '#e66262 1px solid');
                valid = false;
            }
            if (userEmail == "") {
                $("#userEmail-info").html("Required.");
                $("#userEmail").css('border', '#e66262 1px solid');
                valid = false;
            }
            if (!userEmail.match(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/))
            {
                $("#userEmail-info").html("Invalid Email Address.");
                $("#userEmail").css('border', '#e66262 1px solid');
                valid = false;
            }

            if (subject == "") {
                $("#subject-info").html("Required.");
                $("#subject").css('border', '#e66262 1px solid');
                valid = false;
            }
            if (content == "") {
                $("#userMessage-info").html("Required.");
                $("#content").css('border', '#e66262 1px solid');
                valid = false;
            }
            return valid;
        }
</script>
             
       
            </div>
        </div>
    </div>
    <!-- Service End -->


      <!-- Footer Start -->
      <div class="container-fluid bg-dark text-light footer mt-5 py-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-4">Our Office</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>618, Aluthmawatha Road, Colombo 15, Sri Lanka.</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+94 (11) 252 2302<br>
                        +94 (11) 252 9242<br>
                        +94 (11) 252 6060<br>
                        +94 (11) 489 1888<br></p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>kayjay@kayjay-group.com<br>
                        sales@kayjay-group.com<br>
                        clientcare@kayjay-group.com<br></p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-square btn-outline-light rounded-circle me-2" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-square btn-outline-light rounded-circle me-2" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square btn-outline-light rounded-circle me-2" href=""><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-square btn-outline-light rounded-circle me-2" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-4">Our Subsidary Companies</h4>
                    <a class="btn btn-link" href="http://kayjayelectronics.com/">KayJay Electronics</a>
                    <a class="btn btn-link" href="http://kayjaysecurity.com/cash_transit.html">KayJay Cash Transit Services</a>
                    <a class="btn btn-link" href="http://kayjaysecurity.com/kay-jay_markating.html">KayJay Logistics</a>
                    <a class="btn btn-link" href="http://villa.kayjayhotels.com/">KayJay Villa</a>
                    <a class="btn btn-link" href="http://beachhouse.kayjayhotels.com/">KayJay Beach house</a>
                    <a class="btn btn-link" href="http://wild.kayjayhotels.com/">KayJay Wild</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-4">Quick Links</h4>
                    <a class="btn btn-link" href="">About Us</a>
                    <a class="btn btn-link" href="">Contact Us</a>
                    <a class="btn btn-link" href="">Our Services</a>
                    <a class="btn btn-link" href="">Terms & Condition</a>
                    <a class="btn btn-link" href="">Support</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-4">We are at...</h4>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.3870260915837!2d79.8664222151987!3d6.963588194969136!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae258edf3aaaf51%3A0xcb5f0f20b0567b51!2sKay+Jay+Group!5e0!3m2!1sen!2slk!4v1541584773877" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
                    <div class="position-relative w-100">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <div class="whatsapp">
        <a href="https://api.whatsapp.com/send?phone=94775002886" target="_blank">    
            <h5><i class="fab fa-whatsapp fa-2x fa-spin " aria-hidden="true"></i></h5>
        </a>
        CHAT
    </div>


    <!-- Copyright Start -->
    <div class="container-fluid copyright py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    &copy; <a class="border-bottom" href="#">KayJay Group</a>, 2022 All Right Reserved.
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                    Designed & Developed By <a class="border-bottom" href="">Nirasha Rathnayake</a> 
                </div>
            </div>
        </div>
    </div>
    <!-- Copyright End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/parallax/parallax.min.js"></script>
    <script src="lib/isotope/isotope.pkgd.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>