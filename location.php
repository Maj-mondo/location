<?php include 'includes/header-client-simple.php'; ?>
  
  <!-- location section -->

  <div class="cart_section">
    <div class="container">
      <div class="row">
        <div class="col-lg-10 offset-lg-1">
          <div class="cart_container">
            <div class="cart_title">Mes locations en cours</div>
            <div class="cart_items">
              <ul class="cart_list">
                <li class="cart_item clearfix">
                  <div class="cart_item_image"><img src="images/shopping_cart.jpg" alt=""></div>
                  <div class="cart_item_info d-flex flex-md-row flex-column justify-content-between">
                    <div class="cart_item_name cart_info_col">
                      <div class="cart_item_title">Numéro</div>
                      <div class="cart_item_text">0</div>
                    </div>
                    <div class="cart_item_name cart_info_col">
                      <div class="cart_item_title">Début</div>
                      <div class="cart_item_text">MacBook Air 13</div>
                    </div>
                    <div class="cart_item_color cart_info_col">
                      <div class="cart_item_title">Fin</div>
                      <div class="cart_item_text">01/01/2019</div>
                    </div>
                    <div class="cart_item_quantity cart_info_col">
                      <div class="cart_item_title">Agence</div>
                      <div class="cart_item_text">1</div>
                    </div>
                    <div class="cart_item_price cart_info_col">
                      <div class="cart_item_title">Voiture</div>
                      <div class="cart_item_text">Caracteres</div>
                    </div>
                    <div class="cart_item_total cart_info_col">
                      <div class="cart_item_title">Jours</div>
                      <div class="cart_item_text">$2000</div>
                    </div>
                    <div class="cart_item_total cart_info_col">
                      <div class="cart_item_title">Prix</div>
                      <div class="cart_item_text">2000 FCFA</div>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
            
            <!-- Order Total -->
            <div class="order_total">
              <div class="order_total_content text-md-right">
                <div class="order_total_title">Total :</div>
                <div class="order_total_amount">20000 FCFA</div>
              </div>
            </div>

            <div class="cart_buttons">
              <a href="paydunya.php"><button type="button" class="button cart_button_checkout">Payer</button></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Newsletter -->

  <div class="newsletter">
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="newsletter_container d-flex flex-lg-row flex-column align-items-lg-center align-items-center justify-content-lg-start justify-content-center">
            <div class="newsletter_title_container">
              <div class="newsletter_icon"><img src="images/send.png" alt=""></div>
              <div class="newsletter_title">Sign up for Newsletter</div>
              <div class="newsletter_text"><p>...and receive %20 coupon for first shopping.</p></div>
            </div>
            <div class="newsletter_content clearfix">
              <form action="#" class="newsletter_form">
                <input type="email" class="newsletter_input" required="required" placeholder="Enter your email address">
                <button class="newsletter_button">Subscribe</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Footer -->
<?php include 'includes/footer-client.php'; ?>
