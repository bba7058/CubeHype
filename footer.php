<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Demo
 */

?>

		<footer class="footer-wrapper" style="background-image:url('<?= esc_url(get_template_directory_uri() .'/assets/img/blog/markus-spiske-gxvMgAxRCPU-unsplash.jpg')?>')">
			<div class="inner-footer">
				<div class="footer-content">
					<div class="footer-left">
						<div class="copy-right">
							<i class="fa fa-copyright mr-1" aria-hidden="true"></i>
							2021 All rights Reserved.
						</div>
					</div>
					<div class="footer-center">
						<div class="center-brand">
							<h2 class="header-footer">DEMO</h2>
							<div class="sub-header-footer">Technology X Lifestyle</div>
						</div>
						<div class="dev-by">
							Develop and Theme By Bulkoki
						</div>
					</div>
					<div class="footer-right">
						<div class="contact-list">
							<div class="contact-us">CONTACT US</div>
							<a href="mailto:contact_demo@gmail.com" class="contact-mail">
								Contact_demo@gmail.com
							</a>
							<div class="contact-social-icon">
								<a href="#" class="social-icon">
									<i class="fab fa-facebook-f"></i>
								</a>
								<a href="#" class="social-icon">
									<i class="fab fa-facebook-messenger"></i>
								</a>
								<a href="#" class="social-icon">
									<i class="fab fa-twitter"></i>
								</a>
								<a href="#" class="social-icon">
									<i class="fab fa-youtube"></i>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</footer>
	</div> <!-- END Container -->


<?php wp_footer(); ?>

</body>
</html>
