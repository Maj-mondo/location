<?php include 'includes/header-client-simple.php'; ?>
	<!-- Contact Info -->

	<div class="contact_info">
		<div class="container">
			<div class="row">
				<div class="col-lg-10 offset-lg-1">
					<div class="contact_info_container d-flex flex-lg-row flex-column justify-content-between align-items-between">

						<!-- Contact Item -->
						<div class="contact_info_item d-flex flex-row align-items-center justify-content-start">
							<div class="contact_info_image"><img src="assets/images/contact_1.png" alt=""></div>
							<div class="contact_info_content">
								<div class="contact_info_title">Phone</div>
								<div class="contact_info_text">+38 068 005 3570</div>
							</div>
						</div>

						<!-- Contact Item -->
						<div class="contact_info_item d-flex flex-row align-items-center justify-content-start">
							<div class="contact_info_image"><img src="assets/images/contact_2.png" alt=""></div>
							<div class="contact_info_content">
								<div class="contact_info_title">Email</div>
								<div class="contact_info_text">fastsales@gmail.com</div>
							</div>
						</div>

						<!-- Contact Item -->
						<div class="contact_info_item d-flex flex-row align-items-center justify-content-start">
							<div class="contact_info_image"><img src="assets/images/contact_3.png" alt=""></div>
							<div class="contact_info_content">
								<div class="contact_info_title">Address</div>
								<div class="contact_info_text">10 Suffolk at Soho, London, UK</div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Contact Form -->

	<div class="contact_form">
		<div class="container">
			<div class="row">
				<div class="col-lg-10 offset-lg-1">
					<div class="contact_form_container">
						<div class="contact_form_title">Envoyer un message</div>

						<form action="#" id="contact_form">
							<div class="contact_form_inputs d-flex flex-md-row flex-column justify-content-between align-items-between">
								<input type="text" id="contact_form_name" class="contact_form_name input_field" placeholder="Your name" required="required" data-error="Name is required.">
								<input type="text" id="contact_form_email" class="contact_form_email input_field" placeholder="Your email" required="required" data-error="Email is required.">
								<input type="text" id="contact_form_phone" class="contact_form_phone input_field" placeholder="Your phone number">
							</div>
							<div class="contact_form_text">
								<textarea id="contact_form_message" class="text_field contact_form_message" name="message" rows="4" placeholder="Message" required="required" data-error="Please, write us a message."></textarea>
							</div>
							<div class="contact_form_button">
								<button type="submit" class="button contact_submit_button">Envoyer</button>
							</div>
						</form>

					</div>
				</div>
			</div>
		</div>
		<div class="panel"></div>
	</div>

 <!-- Start Google Map -->
  <section id="google-map">
    <br>
    <div class="title-area">
      <h2 class="tittle">Les agences de location de voiture au Sénégal</h2>
      <span class="tittle-line"></span>
      <p>Nous avons répertorié pour vous l'ensemble des agences suceptibles de ous satisfaire dans Dakar et dans les rgions.</p>
      <br>
      
    </div>
      <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d494187.56441498117!2d-17.53610498287854!3d14.608169041501057!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sagence+de+location+de+voiture+au+senegal!5e0!3m2!1sfr!2ssn!4v1544441319159"  width="100%" height="500" frameborder="0" style="border:0" allowfullscreen>
      </iframe>
  </section>
  <!-- End Google Map -->


	<!-- Footer -->

<?php include 'includes/footer-client.php'; ?>
