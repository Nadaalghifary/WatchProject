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
            
        <title>Watches Website</title>
		<style>
			.cart {
  overflow-y: auto; /* Enable vertical scrollbar when needed */
}



		</style>
    </head>
    <body>
        <!--==================== HEADER ====================-->
        <header class="header" id="header">
            <nav class="nav container">
                <a href="#" class="nav__logo">
                    <i class='bx bxs-watch nav__logo-icon'></i> Rolex
                </a>

                <div class="nav__menu" id="nav-menu">
                    <ul class="nav__list">
                        <li class="nav__item">
                            <a href="#home" class="nav__link active-link">Home</a>
                        </li>
                        <li class="nav__item">
                            <a href="#featured" class="nav__link">Featured</a>
                        </li>
                        <li class="nav__item">
                            <a href="#products" class="nav__link">Products</a>
                        </li>
                        <li class="nav__item">
                            <a href="#new" class="nav__link">New</a>
                        </li>
						<li class="nav__item">
                            <a href="contactus.php" class="nav__link">Contact Us</a>
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
                    <!-- Theme change button -->
                    <i class='bx bx-moon change-theme' id="theme-button"></i>

                    <div class="nav__shop" id="cart-shop">
                        <i class='bx bx-shopping-bag' ></i>
                    </div>

                    <div class="nav__toggle" id="nav-toggle">
                        <i class='bx bx-grid-alt' ></i>
                    </div>
                </div>
            </nav>
        </header>

        <!--==================== CART ====================-->
        <div class="cart" id="cart">
            <i class='bx bx-x cart__close' id="cart-close"></i>

            <h2 class="cart__title-center">My Cart</h2>

            <div class="cart__container">
			
					<?php
      
	  $query="SELECT prod_id,price,qty"
	  .",(select name from products where id=my.prod_id)name "
	  .",(select pathImg from products where id=my.prod_id)pathImg "
	  ." from mycards my where state=0 and UsrId=$UserId";
				
      $result = $db->getData($query);
	  $countd=(int)0;
	  $sumqty=(int)0;
	  $total=(float)0;
      while ($rows = mysqli_fetch_array($result)) {
    $prod_Id = $rows['prod_id'];
    $image = $rows['pathImg'];
    $title = $rows['name'];
    $Price = (float)$rows['price'];
	$qty = (int)$rows['qty'];
	$sumqty +=$qty;
	$total +=$Price;
	$countd +=1;
?>
                <article class="cart__card">
                    <div class="cart__box">
                        <img src="<?php echo $image;?>" alt="<?php echo $title;?>" class="cart__img">
                    </div>

                    <div class="cart__details">
                        <h3 class="cart__title"><?php echo $title;?></h3>
                        <span class="cart__price">$<?php echo $Price;?></span>

                        <div class="cart__amount">
                            <div class="cart__amount-content">
                                <span class="cart__amount-box">
                                    <i class='bx bx-minus' ></i>
                                </span>

                                <span class="cart__amount-number"><?php echo $qty;?></span>

                                <span class="cart__amount-box">
                                    <i class='bx bx-plus' ></i>
                                </span>
                            </div>

                            <i class='bx bx-trash-alt cart__amount-trash' data-id='<?php echo $prod_Id; ?>' ></i>
                        </div>
                    </div>
                </article>
                <?php } ?>
               
              
            </div>
            <?php if(!$IsUnLogin) {?>
             <div class="cart__prices" 
                  data-item="<?php echo $countd;?>" 
                  data-qty="<?php echo $sumqty;?>" 
                  data-total="<?php echo $total;?>">
                <span class="cart__prices-item">Item :<?php echo $countd;?></span>
				 <span class="cart__prices-item">Qty :<?php echo $sumqty;?></span>
                <span class="cart__prices-total">Total :<?php echo $total;?></span>
            </div>
			<?php }?>
            
        </div>

        <!--==================== MAIN ====================-->
        <main class="main">
            <!--==================== HOME ====================-->
            <section class="home" id="home">
                <div class="home__container container grid">
                    <div class="home__img-bg">
                        <img src="img/home.png" alt="" class="home__img">
                    </div>
    
                    <div class="home__social">
                        <a href="https://www.facebook.com/" target="_blank" class="home__social-link">
                            Facebook
                        </a>
                        <a href="https://twitter.com/" target="_blank" class="home__social-link">
                            Twitter
                        </a>
                        <a href="https://www.instagram.com/" target="_blank" class="home__social-link">
                            Instagram
                        </a>
                    </div>
    
                    <div class="home__data">
                        <h1 class="home__title">NEW WATCH <br> COLLECTIONS B720</h1>
                        <p class="home__description">
                            Latest arrival of the new imported watches of the B720 series, 
                            with a modern and resistant design.
                        </p>
                        <span class="home__price">$1245</span>

                        <div class="home__btns">
                            <a href="#" class="button button--gray button--small">
                                Discover
                            </a>

                            <button class="button home__button">ADD TO CART</button>
                        </div>
                    </div>
                </div>
            </section>

            <!--==================== FEATURED ====================-->
            <section class="featured section container" id="featured">
                <h2 class="section__title">
                    Featured
                </h2>

                <div class="featured__container grid">
						
						<?php
                           $query="SELECT id,name,pathImg,price from products  where state=1 and Isfeatured=1";
                           $result = $db->getData($query);
	  
                           while ($rowsprd = mysqli_fetch_array($result)) {
                           $prod_Id = $rowsprd['id'];
                           $image = $rowsprd['pathImg'];
                           $title = $rowsprd['name'];
                           $Price = (float)$rowsprd['price'];
                         ?>

                    <article class="featured__card">
                        <span class="featured__tag">Sale</span>

                        <img src="<?php echo $image;?>" alt="" class="featured__img">

                        <div class="featured__data">
                            <h3 class="featured__title"><?php echo $title;?></h3>
                            <span class="featured__price">$<?php echo $Price;?></span>
                        </div>
                    <?php if (!$IsUnLogin){ ?>
                        <button class="button featured__button" data-id="<?php echo $prod_Id;?>">ADD TO CART</button>
					<?php } ?>
                    </article>
                    <?php } ?>
                </div>
            </section>

            <!--==================== STORY ====================-->
            <section class="story section container">
                <div class="story__container grid">
                    <div class="story__data">
                        <h2 class="section__title story__section-title">
                            Our Story
                        </h2>
    
                        <h1 class="story__title">
                            Inspirational Watch of <br> this year
                        </h1>
    
                        <p class="story__description">
                            The latest and modern watches of this year, is available in various 
                            presentations in this store, discover them now.
                        </p>
    
                        <a href="#" class="button button--small">Discover</a>
                    </div>

                    <div class="story__images">
                        <img src="img/story.png" alt="" class="story__img">
                        <div class="story__square"></div>
                    </div>
                </div>
            </section>

            <!--==================== PRODUCTS ====================-->
            <section class="products section container" id="products">
                <h2 class="section__title">
                    Products
                </h2>

                <div class="products__container grid">
				    
					<?php
                           $query="SELECT id,name,pathImg,price from products  where state=1";
                           $result = $db->getData($query);
	  
                           while ($rowsprd = mysqli_fetch_array($result)) {
                           $prod_Id = $rowsprd['id'];
                           $image = $rowsprd['pathImg'];
                           $title = $rowsprd['name'];
                           $Price = (float)$rowsprd['price'];
                         ?>
						 
                    <article class="products__card">
                        <img src="<?php echo $image;?>" alt="" class="products__img">

                        <h3 class="products__title"><?php echo $title;?></h3>
                        <span class="products__price">$<?php echo $Price;?></span>

                    <?php if (!$IsUnLogin){ ?>
                        <button class="products__button" data-id="<?php echo $prod_Id;?>">
                            <i class='bx bx-shopping-bag'></i>
                        </button>
					<?php } ?>
					
                      
                    </article>
                                 <?php } ?>
                   

                    
                </div>
            </section>

            <!--==================== TESTIMONIAL ====================-->
            <section class="testimonial section container">
                <div class="testimonial__container grid">
                    <div class="swiper testimonial-swiper">
                        <div class="swiper-wrapper">
                            <div class="testimonial__card swiper-slide">
                                <div class="testimonial__quote">
                                    <i class='bx bxs-quote-alt-left' ></i>
                                </div>
                                <p class="testimonial__description">
                                    They are the best watches that one acquires, also they are always with the latest 
                                    news and trends, with a very comfortable price and especially with the attention 
                                    you receive, they are always attentive to your questions.
                                </p>
                                <h3 class="testimonial__date">March 27. 2021</h3>
        
                                <div class="testimonial__perfil">
                                    <img src="img/testimonial1.jpg" alt="" class="testimonial__perfil-img">
        
                                    <div class="testimonial__perfil-data">
                                        <span class="testimonial__perfil-name">Lee Doe</span>
                                        <span class="testimonial__perfil-detail">Director of a company</span>
                                    </div>
                                </div>
                            </div>

                            <div class="testimonial__card swiper-slide">
                                <div class="testimonial__quote">
                                    <i class='bx bxs-quote-alt-left' ></i>
                                </div>
                                <p class="testimonial__description">
                                    They are the best watches that one acquires, also they are always with the latest 
                                    news and trends, with a very comfortable price and especially with the attention 
                                    you receive, they are always attentive to your questions.
                                </p>
                                <h3 class="testimonial__date">March 27. 2021</h3>
        
                                <div class="testimonial__perfil">
                                    <img src="img/testimonial2.jpg" alt="" class="testimonial__perfil-img">
        
                                    <div class="testimonial__perfil-data">
                                        <span class="testimonial__perfil-name">Samantha Mey</span>
                                        <span class="testimonial__perfil-detail">Director of a company</span>
                                    </div>
                                </div>
                            </div>

                            <div class="testimonial__card swiper-slide">
                                <div class="testimonial__quote">
                                    <i class='bx bxs-quote-alt-left' ></i>
                                </div>
                                <p class="testimonial__description">
                                    They are the best watches that one acquires, also they are always with the latest 
                                    news and trends, with a very comfortable price and especially with the attention 
                                    you receive, they are always attentive to your questions.
                                </p>
                                <h3 class="testimonial__date">March 27. 2021</h3>
        
                                <div class="testimonial__perfil">
                                    <img src="img/testimonial3.jpg" alt="" class="testimonial__perfil-img">
        
                                    <div class="testimonial__perfil-data">
                                        <span class="testimonial__perfil-name">Raul Zaman</span>
                                        <span class="testimonial__perfil-detail">Director of a company</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="swiper-button-next">
                            <i class='bx bx-right-arrow-alt' ></i>
                        </div>
                        <div class="swiper-button-prev">
                            <i class='bx bx-left-arrow-alt' ></i>
                        </div>
                    </div>

                    <div class="testimonial__images">
                        <div class="testimonial__square"></div>
                        <img src="img/testimonial.png" alt="" class="testimonial__img">
                    </div>
                </div>
            </section>

            <!--==================== NEW ====================-->
            <section class="new section container" id="new">
                <h2 class="section__title">
                    New Arrivals
                </h2>
                
                <div class="new__container">
                    <div class="swiper new-swiper">
                        <div class="swiper-wrapper">
						
						<?php
                           $query="SELECT id,name,pathImg,price from products  where state=1 and IsNew=1";
                           $result = $db->getData($query);
	  
                           while ($rowsprd = mysqli_fetch_array($result)) {
                           $prod_Id = $rowsprd['id'];
                           $image = $rowsprd['pathImg'];
                           $title = $rowsprd['name'];
                           $Price = (float)$rowsprd['price'];
                         ?>
                            <article class="new__card swiper-slide">
                                <span class="new__tag">New</span>
        
                                <img src="<?php echo $image;?>" alt="" class="new__img">
        
                                <div class="new__data">
                                    <h3 class="new__title"><?php echo $title;?></h3>
                                    <span class="new__price">$<?php echo $Price;?></span>
                                </div>
        
		                    <?php if (!$IsUnLogin){ ?>
                             <button class="button new__button" data-id="<?php echo $prod_Id;?>">ADD TO CART</button>
					         <?php } ?>
					
                               
                            </article>
						   <?php }?>
                                           
                        </div>
                    </div>
                </div>
            </section>

            <!--==================== NEWSLETTER ====================-->
            <section class="newsletter section container">
                <div class="newsletter__bg grid">
                    <div>
                        <h2 class="newsletter__title">Subscribe Our <br> Newsletter</h2>
                        <p class="newsletter__description">
                            Don't miss out on your discounts. Subscribe to our email 
                            newsletter to get the best offers, discounts, coupons, 
                            gifts and much more.
                        </p>
                    </div>

                    <form action="" class="newsletter__subscribe">
                        <input type="email" placeholder="Enter your email" class="newsletter__input">
                        <button class="button">
                            SUBSCRIBE
                        </button>
                    </form>
                </div>
            </section>
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

        <!--=============== MAIN JS ===============-->
        <script src="js/main.js"></script>
		 <script src="js/jquery.min.js"></script>
		<script>

        $(document).ready(function() {
			
			  // Click event handler for delete buttons
            $(document).on('click', '.cart__amount-trash', function() {
        var dataId = $(this).data('id');
        // Remove the parent .cart__card element
        $(this).closest('.cart__card').remove();
	        $.ajax
            ({
              type:'post',
              url:'users.php',
              data:{
	               prod_id:dataId,
	               price:0,
				   qty:1,
	               IsAdd:0
                 },
             success:function(response) {
            if(response=="success")
            {
                   updatsTotals();
            }
           else
           {
	          alert("Error :"+response);
           }
          }
         });		  
        });

        // Click event handler for buttons in featured section
        $('.featured__button').click(function() {
            var id = $(this).closest('.featured__card').index() + 1;
            var price = $(this).siblings('.featured__data').find('.featured__price').text().replace('$', '');
			var name = $(this).siblings('.featured__data').find('.featured__title').text();
			var imagePath = $(this).siblings('.featured__img').attr('src'); 
			
			

			var dataId = $(this).data('id');
			
	        $.ajax
            ({
              type:'post',
              url:'users.php',
              data:{
	               prod_id:dataId,
	               price:price,
				   qty:1,
	               IsAdd:1
                 },
             success:function(response) {
            if(response=="success")
            {
                // Add card to <article class="cart__card">
                    addToCartCard(dataId, price,name,imagePath);
                    
                    // Open shopping bag
                    $('#cart-shop').click();
            }
           else
           {
	          alert("Error :"+response);
           }
          }
         });
        });
		// Click event handler for buttons in products section
        $('.products__button').click(function() {
            var id = $(this).closest('.products__card').index() + 1;
            var price = $(this).siblings('.products__price').text().replace('$', '');
			var name = $(this).siblings('.products__title').text();
			var imagePath = $(this).siblings('.products__img').attr('src'); // Get the src attribute value
			var dataId = $(this).data('id');
            $.ajax
            ({
              type:'post',
              url:'users.php',
              data:{
	               prod_id:dataId,
	               price:price,
				   qty:1,
	               IsAdd:1
                 },
             success:function(response) {
            if(response=="success")
            {
                // Add card to <article class="cart__card">
                    addToCartCard(dataId, price,name,imagePath);
                    
                    // Open shopping bag
                    $('#cart-shop').click();
            }
           else
           {
	          alert("Error :"+response);
           }
          }
         });
        });

        // Click event handler for buttons in new section
        $('.new__button').click(function() {
            var id = $(this).closest('.new__card').index() + 1;
            var price = $(this).siblings('.new__data').find('.new__price').text().replace('$', '');
			var name=$(this).siblings('.new__data').find('.new__title').text();
			var imagePath = $(this).siblings('.new__img').attr('src'); 
			 var dataId = $(this).data('id');
	        $.ajax
            ({
              type:'post',
              url:'users.php',
              data:{
	               prod_id:dataId,
	               price:price,
				   qty:1,
	               IsAdd:1
                 },
             success:function(response) {
            if(response=="success")
            {
               // Add card to <article class="cart__card">
                    addToCartCard(dataId, price,name,imagePath);
                    
                    // Open shopping bag
                    $('#cart-shop').click();
            }
           else
           {
	          alert("Error :"+response);
           }
          }
         });
        });
		
	});
	

function updatsTotals()
{
	var item = $('.cart__card').length;
    var qty = 0;
    var total = 0;
    $('.cart__amount-number').each(function() {
        qty += parseInt($(this).text());
     });
    $('.cart__price').each(function() {
        total += parseFloat($(this).text().replace('$', '')) * parseInt($(this).siblings('.cart__amount').find('.cart__amount-number').text());
     });
	updateCartPrices(item,qty,total);
}
function updateCartPrices(item, qty, total) {
	
	var cartPrices = $('.cart__prices');
    cartPrices.attr('data-item', item);
    cartPrices.attr('data-qty', qty);
    cartPrices.attr('data-total', total);

    // Update the displayed values
    cartPrices.find('.cart__prices-item:eq(0)').text("Item: " + item);
    cartPrices.find('.cart__prices-item:eq(1)').text("Qty: " + qty);
    cartPrices.find('.cart__prices-total').text("Total: " + total);
}
			// Function to dynamically add card to cart section
function addToCartCard(prodId, price,name,image) {
    var cartCard = `<article class="cart__card">
	        <div class="cart__box">
			  <img src="${image}" alt="Product Image" class="cart__img">
			</div>
            <div class="cart__details">
                <h3 class="cart__title">${name}</h3>
                <span class="cart__price">$${price}</span>
                <div class="cart__amount">
                    <div class="cart__amount-content">
                        <span class="cart__amount-box">
                            <i class='bx bx-minus' ></i>
                        </span>
                        <span class="cart__amount-number">1</span>
                        <span class="cart__amount-box">
                            <i class='bx bx-plus' ></i>
                        </span>
                    </div>
                     <i class='bx bx-trash-alt cart__amount-trash' data-id='${prodId}' ></i>
                </div>
            </div>
        </article>`;
    $('.cart__container').append(cartCard);
	
	updatsTotals();
}

		</script>
    </body>
</html>