<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Demo
 */

get_header();
?>
	<div class="container px-1">
		<section class="section-trending">
			<div class="row h-100 mx-auto">
				<div class="col-12 col-lg-6 h-100 col-padding">
					<a href="#" class="trending-item">
						<img src="<?= esc_url(get_template_directory_uri() .'/assets/img/blog/levon-vardanyan-_EpaiWp5yC8-unsplash.jpg')?>" class="img-trending" alt="25 Amazing Facts You Didn’t Know About Animals">
						<div class="trending-header flex-center px-3 py-2">
							<h3 class="title-left mb-0">มาแบบเงียบ ๆ “สถานะ 24 ชั่วโมง” ฟีเจอร์ใหม่จาก Facebook ใช้งานคล้าย Stories</h3>
						</div>
						<div class="ribbon-trending">
							<span>TRENDING</span>
							<i class="fas fa-chart-bar"></i>
						</div>
					</a>	
				</div>
				<div class="col-12 col-lg-6 h-100 col-padding">
					<div class="row h-50 mx-auto">
						<div class="col-12 h-100 px-0 box-right">
							<a href="#" class="trending-item">
								<img src="<?= esc_url(get_template_directory_uri() .'/assets/img/blog/jingwei-ke-E7w_Ti4BSSs-unsplash.jpg')?>" class="img-trending" alt="25 Amazing Facts You Didn’t Know About Animals">
								<div class="trending-header flex-center px-3 py-2">
									<h3 class="title-left mb-0">เผยเทคโนโลยีใน MG HS รถยนต์ที่จะทำให้คุณเข้าใกล้คำว่า Autonomous car</h3>
								</div>
							</a>
						</div>
					</div>
					<div class="row h-50 mx-auto">	
						<div class="col-6 sm-box h-100">
							<a href="#" class="trending-item">
								<img src="<?= esc_url(get_template_directory_uri() .'/assets/img/blog/amirali-mirhashemian-88YAXjnpvrM-unsplash.jpg')?>" class="img-trending" alt="25 Amazing Facts You Didn’t Know About Animals">
								<div class="trending-header flex-center px-3 py-2">
									<h3 class="title-left mb-0">17 ภาพการเปลี่ยนแปลงของสัตว์เลี้ยง เผยให้เห็นว่าพวกมันเติบโตเร็วแค่ไหน</h3>
								</div>
							</a>
						</div>
						<div class="col-6 sm-box-2 h-100">
							<a href="#" class="trending-item">
								<img src="<?= esc_url(get_template_directory_uri() .'/assets/img/blog/zhang-kaiyv-dhiOkqjewAM-unsplash.jpg')?>" class="img-trending" alt="25 Amazing Facts You Didn’t Know About Animals">
								<div class="trending-header flex-center px-3 py-2">
									<h3 class="title-left mb-0">James McAvoy คนจริง เผาแผ่นเกมโปรดทิ้ง เพราะติดหนักจนไม่เป็นอันได้หลับได้นอน</h3>
								</div>
							</a>
						</div>
					</div>		
				</div>
			</div>
		</section>
	</div>


<?php
get_footer();
