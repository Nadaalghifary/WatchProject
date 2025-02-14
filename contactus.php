 <?php
include_once 'session.php';
$UserName = '';
$UserId=(int)0;
$IsUnLogin=(!isset($_SESSION['Id']) || ($_SESSION['Id'] == ''));
//start session 
if ($IsUnLogin) {
} else {
  $UserId =(int)$_SESSION['Id'];
  $UserName =$_SESSION['Name'];
}
?>	
 <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!--=============== FAVICON ===============-->
        <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">

        <!--=============== BOXICONS ===============-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">

        <!--=============== SWIPER CSS ===============--> 
        <link rel="stylesheet" href="css/swiper-bundle.min.css">

        <!--=============== CSS ===============-->
        <link rel="stylesheet" href="css/styles.css">

        <title>Watches - Contact Us</title>
    </head>
    <body>
        <!--==================== HEADER ====================-->
        <header class="header" id="header">
            <nav class="nav container">
                <a href="index.php" class="nav__logo">
                    <i class='bx bxs-watch nav__logo-icon'></i> Rolex
                </a>

                <div class="nav__menu" id="nav-menu">
                    <ul class="nav__list">
                        <li class="nav__item">
                            <a href="index.php#home" class="nav__link">Home</a>
                        </li>
                        <li class="nav__item">
                            <a href="index.php#featured" class="nav__link">Featured</a>
                        </li>
                        <li class="nav__item">
                            <a href="index.php#products" class="nav__link">Products</a>
                        </li>
                        <li class="nav__item">
                            <a href="index.php#new" class="nav__link">New</a>
                        </li>
						<li class="nav__item">
                            <a href="contactus.php" class="nav__link active-link">Contact Us</a>
                        </li>
						<li class="nav__item">
                            <a href="aboutus.php" class="nav__link">About Us</a>
                        </li>
						<li class="nav__item">
						<?php if ($IsUnLogin) : ?>
                            <a href="login.php" class="nav__link">Login</a>
						<?php else : ?>
						<a href="logout.php" class="nav__link">Logout <?php echo $UserName ?></a>
						<?php endif; ?>
                        </li>
                    </ul>

                    <div class="nav__close" id="nav-close">
                        <i class='bx bx-x' ></i>
                    </div>
                </div>
               <div class="nav__btns">
                   
                    <div class="nav__toggle" id="nav-toggle">
                        <i class='bx bx-grid-alt' ></i>
                    </div>
                </div>
               
            </nav>
        </header>

        

        <!--==================== MAIN ====================-->
        <main class="main">
            <div class="contact">
    <div class="content">
 
      <div class="right-side">
        <div class="topic-text">Contact Us</div>
        <p>We’re here to help and answer any questions you might have. We look forward to hearing from you!.</p>
        <form action="contactusdb.php" method="POST" id="contactForm" onsubmit="return SendData();">
        <div class="input-box">
          <input type="text" placeholder="Enter your name"  name="name" id="name">
        </div>
        <div class="input-box">
          <input type="email" placeholder="Enter your email"  name="email" id="email">
        </div>
        <div class="input-box message-box">
            <textarea placeholder="Enter your message"  name="msgs" id="msgs"></textarea>
        </div>
         <div class="msg" id="errorMsg" style="display: none;"></div>
        <div class="sndbtn">
          <input type="submit" value="Sent Message" >
        </div>
      </form>
    </div>
    </div>
  </div>
        </main>

        <!--==================== FOOTER ====================-->
        <footer class="footer section">
            <div class="footer__container container grid">
                <div class="footer__content">
                    <h3 class="footer__title">Our information</h3>

                    <ul class="footer__list">
                        <li>1234 - Peru</li>
                        <li>La Libertad 43210</li>
                        <li>123-456-789</li>
                    </ul>
                </div>
                <div class="footer__content">
                    <h3 class="footer__title">About Us</h3>

                    <ul class="footer__links">
                        <li>
                            <a href="#" class="footer__link">Support Center</a>
                        </li>
                        <li>
                            <a href="#" class="footer__link">Customer Support</a>
                        </li>
                        <li>
                            <a href="#" class="footer__link">About Us</a>
                        </li>
                        <li>
                            <a href="#" class="footer__link">Copy Right</a>
                        </li>
                    </ul>
                </div>

                <div class="footer__content">
                    <h3 class="footer__title">Product</h3>

                    <ul class="footer__links">
                        <li>
                            <a href="#" class="footer__link">Road bikes</a>
                        </li>
                        <li>
                            <a href="#" class="footer__link">Mountain bikes</a>
                        </li>
                        <li>
                            <a href="#" class="footer__link">Electric</a>
                        </li>
                        <li>
                            <a href="#" class="footer__link">Accesories</a>
                        </li>
                    </ul>
                </div>

                <div class="footer__content">
                    <h3 class="footer__title">Social</h3>

                    <ul class="footer__social">
                        <a href="https://www.facebook.com/" target="_blank" class="footer__social-link">
                            <i class='bx bxl-facebook'></i>
                        </a>

                        <a href="https://twitter.com/" target="_blank" class="footer__social-link">
                            <i class='bx bxl-twitter' ></i>
                        </a>

                        <a href="https://www.instagram.com/" target="_blank" class="footer__social-link">
                            <i class='bx bxl-instagram' ></i>
                        </a>
                    </ul>
                </div>
            </div>

            <span class="footer__copy">&#169; Bedimcode. All rigths reserved</span>
        </footer>

        <!--=============== SCROLL UP ===============-->
        <a href="#" class="scrollup" id="scroll-up"> 
            <i class='bx bx-up-arrow-alt scrollup__icon' ></i>
        </a>

        <!--=============== SWIPER JS ===============-->
        <script src="js/swiper-bundle.min.js"></script>
        <script src="js/main.js"></script>
       
		 <script src="js/jquery.min.js"></script>
    <script>
    function SendData() {

	  var form = document.getElementById('contactForm');
      var msg = document.getElementById('errorMsg');
      msg.style.display = "block";
      msg.innerText = "";
	  
      var email = document.getElementById("email").value;
      var name = document.getElementById("name").value;
      var msgs = document.getElementById("msgs").value;
	  
       if (msg.classList.contains("success"))
         	 msg.classList.remove("success");
         msg.classList.add('error');
		 
      if (name == "") {
         msg.innerText = 'Please Enter the name';
        return false;
      }
      
      if (email == "") {
		   msg.innerText = 'Please Enter the Email';
        return false;
      } else {
        if (!ValidateEmail(email)) {
			msg.innerText = 'invalid email address!';
          return false;
        }
      }
      if (msgs == "") {
		 msg.innerText = 'Please Enter the message';
        return false;
      }

      $.ajax({
        type: 'post',
        url: 'contactusdb.php',
        data: {
          name: name,
          email: email,
          message: msgs
        },
        success: function(response) {
          if (response == "success") {
			   form.reset();
			 if (msg.classList.contains("error"))
			 {
        	    msg.classList.remove("error");
                msg.classList.add('success');
			 }
             msg.innerText = "The message was sent successfully";
            setTimeout(function() {
			  msg.style.display = "none";
			  msg.innerText ="";
            }, 3000);
          } else {
           msg.innerText =response;
          }
        }
      });
      return false;
    }

    function ValidateEmail(inputText) {
      var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
      if (inputText.match(mailformat)) {
        return true;
      } else {
		 
        return false;
      }
    }
  
   
</script>
    </body>
</html>