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
	<div class="container">
		<section class="section-trending">
			<div class="row h-100 mx-auto">
				<div class="col-12 col-lg-6 trending-left">
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
				<div class="col-12 col-lg-6 trending-right">
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
		<div class="content">
			<div class="row">
				<div class="col-lg-8">
					<section class="section-lifestyle">
						<div class="header-category">
							<div class="category-title life">Lifestyle</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="card border-0 first-item mb-3">
									<a href="#" class="card-link-img">
										<img class="card-img-top img-lifestyle" src="<?= esc_url(get_template_directory_uri() .'/assets/img/blog/roman-melnychuk-I2EGcmAAcAk-unsplash.jpg')?>" alt="">
									</a>
										<div class="card-body px-0">
										<a href="#" class="card-link">
											<h3 class="card-title mb-1">BANDAI เปิดตัวของเล่นชิ้นใหม่ “บับเบิ้ลไม่มีที่สิ้นสุด” ช่วยคลายความเครียด แถมการันตีด้วยรางวัล</h3>
										</a>
										<div class="info-post">
											<div class="post-author mr-3">
												<i class="fa fa-user mr-2" aria-hidden="true"></i>
												Admin
											</div>
											<span>|</span>
											<div class="post-date ml-3">
												<i class="fa fa-calendar-alt mr-2" aria-hidden="true"></i>
												3 สิงหาคม 2021
											</div>
										</div>
										<p class="card-text">เมื่อวานนี้ Evan Blass (@evleaks) ได้โพสต์ภาพเรนเดอร์ของ Fitbit Charge 5 ฟิตเนสแทร็กเกอร์รุ่นใหม่จากฟิตบิท (Fitbit) ภายใต้แบรนด์กูเกิล (Google) ที่จะคาดว่าจะมาพร้อมกับจอสีเป็นรุ่นแรกในไลน์อัป Charge นี้</p>
									</div>
								</div>
							</div>
							<div class="col-md-6">
							<div class="card mb-3 card-items" style="max-width: 540px;">
								<div class="row no-gutters">
									<div class="col-4">
										<a href="#" class="card-link-img">
											<img src="<?= esc_url(get_template_directory_uri() .'/assets/img/blog/nrd-a2JMcWOtNAs-unsplash.jpg')?>" class="img-life" alt="">
										</a>	
									</div>
									<div class="col-8">
									<div class="card-body py-1 px-2">
										<a href="#" class="card-link">
											<h3 class="card-title mb-1">Fall Guys: Ultimate Knockout เตรียมจัดอีเวนต์ครอสโอเวอร์กับ The Jungle Book</h3>
										</a>
										<div class="info-post">
											<div class="post-date">
												<i class="fa fa-calendar-alt mr-2" aria-hidden="true"></i>
												3 สิงหาคม 2021
											</div>
										</div>
									</div>
								</div>
								</div>
							</div>
							<div class="card mb-3 card-items" style="max-width: 540px;">
								<div class="row no-gutters">
									<div class="col-4">
										<a href="#" class="card-link-img">
											<img src="<?= esc_url(get_template_directory_uri() .'/assets/img/blog/gabriel-voltz-xCr7cmReH3Y-unsplash.jpg')?>" class="img-life" alt="">
										</a>	
									</div>
									<div class="col-8">
									<div class="card-body py-1 px-2">
										<a href="#" class="card-link">
											<h3 class="card-title mb-1">Jurassic World Evolution 2 เตรียมวางจำหน่าย 9 พ.ย. นี้</h3>
										</a>
										<div class="info-post">
											<div class="post-date">
												<i class="fa fa-calendar-alt mr-2" aria-hidden="true"></i>
												3 สิงหาคม 2021
											</div>
										</div>
									</div>
								</div>
								</div>
							</div>
							<div class="card mb-3 card-items" style="max-width: 540px;">
								<div class="row no-gutters">
									<div class="col-4">
										<a href="#" class="card-link-img">
											<img src="<?= esc_url(get_template_directory_uri() .'/assets/img/blog/jezael-melgoza-43rUwqdoD1g-unsplash.jpg')?>" class="img-life" alt="">
										</a>	
									</div>
									<div class="col-8">
									<div class="card-body py-1 px-2">
										<a href="#" class="card-link">
											<h3 class="card-title mb-1">ทิ้งไว้เป็นตำนาน! ลิโอเนล เมสซี ถูกบีบให้ทิ้งถ้วยรางวัลไว้ที่บาร์เซโลนา</h3>
										</a>
										<div class="info-post">
											<div class="post-date">
												<i class="fa fa-calendar-alt mr-2" aria-hidden="true"></i>
												3 สิงหาคม 2021
											</div>
										</div>
									</div>
								</div>
								</div>
							</div>
							<div class="card mb-3 card-items" style="max-width: 540px;">
								<div class="row no-gutters">
									<div class="col-4">
										<a href="#" class="card-link-img">
											<img src="<?= esc_url(get_template_directory_uri() .'/assets/img/blog/julian-o-hayon-Bs-zngH79Ds-unsplash.jpg')?>" class="img-life" alt="">
										</a>	
									</div>
									<div class="col-8">
									<div class="card-body py-1 px-2">
										<a href="#" class="card-link">
											<h3 class="card-title mb-1">คำเตือนสุดท้ายของ Stephen Hawking เกี่ยวกับโลกและอนาคตที่กำลังจะมาถึง</h3>
										</a>
										<div class="info-post">
											<div class="post-date">
												<i class="fa fa-calendar-alt mr-2" aria-hidden="true"></i>
												3 สิงหาคม 2021
											</div>
										</div>
									</div>
								</div>
								</div>
							</div>
						</div>

					</section>
				</div>
				<div class="col-lg-4"></div>
			</div>
		</div>
	</div>


<?php
get_footer();
