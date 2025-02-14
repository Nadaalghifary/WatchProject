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

        <title>Watches - SignUp</title>
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
                            <a href="contactus.php" class="nav__link">Contact Us</a>
                        </li>
						<li class="nav__item">
                            <a href="aboutus.php" class="nav__link">About Us</a>
                        </li>
						<li class="nav__item">
                            <a href="login.php" class="nav__link active-link">SignUp</a>
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
             <div class="form login">
		<form class="login-form" action="signupdb.php" method="POST" onsubmit="return checkdata();">
            <div class="form-header">
                <h3>WELCOME WATCH!</h3>
            </div>

			<!--Name Input-->
            <div class="form-group">
                <input type="text" class="form-input" name="uname" id="uname" placeholder="User Name">
            </div>
            <!--Email Input-->
            <div class="form-group">
                <input type="email" class="form-input" name="email" id="email" placeholder="Email address">
            </div>
            <!--Password Input-->
            <div class="form-group">
                <input type="password" class="form-input" name="password" id="password" placeholder="Password">
            </div>
			<!--Password Input-->
            <div class="form-group">
                <input type="password" class="form-input" name="repassword" id="repassword" placeholder="Re-Password">
            </div>
            <!--Login Button-->
			 <div class="form-group">
			 <div class="msg" id="errorMsg" style="display: none;"></div>
			 </div>
            <div class="form-group">
                <button class="form-button" type="submit">Sign Up</button>
            </div>
            <div class="form-footer">
            I have an account? <a href="login.php">Login</a>
            </div>
        </form>
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
   var uname= document.getElementById("uname");
   var email= document.getElementById("email");
   var password= document.getElementById("password");
   var repassword= document.getElementById("repassword");
   var msg=document.getElementById("errorMsg");
  
   
   function checkdata() {
	   
	      var tpass = password.value;
	      var trepass = repassword.value;
		  var tuname = uname.value;
	      var temail = email.value;
		   msg.style.display = "block";
           msg.innerText = "";
	
	     if (msg.classList.contains("success"))
         	 msg.classList.remove("success");
         msg.classList.add('error');
		 
		 if (tuname == '') {
		 msg.innerText = 'enter the User Name';
        return false;
      }
	   if (temail == '') {
		 msg.innerText = 'enter the Email';
        return false;
      }
      if (tpass == '') {
        msg.innerText = 'enter the Password';
        return false;
      }
	  if (trepass == '') {
        msg.innerText = 'enter the Re-Password';
        return false;
      }
	  
	      if (tpass != trepass) {
	    	   	msg.innerText = "the password not Equals";
	        return false;
	      }
		  
		 $.ajax({
        type: 'post',
        url: 'signupdb.php',
        data: {
          email: temail,
		  UserName: tuname,
          password: tpass
        },
        success: function(response) {
          if (response == "success") {
            window.location.href = "index.php";
          } else {
			 msg.innerText = response;
          }
        }
      });
	      return false;
	}
  
   
</script>
    </body>
</html>