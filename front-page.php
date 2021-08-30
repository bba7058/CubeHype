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
	<!-- FB page embed -->
	<div id="fb-root"></div>
	<script async defer crossorigin="anonymous" src="https://connect.facebook.net/th_TH/sdk.js#xfbml=1&version=v11.0" nonce="DPbQOrlP"></script>
	
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
					<div class="row mx-auto trending-right-top">
						<div class="col-12 h-100 px-0 box-right">
							<a href="#" class="trending-item">
								<img src="<?= esc_url(get_template_directory_uri() .'/assets/img/blog/jingwei-ke-E7w_Ti4BSSs-unsplash.jpg')?>" class="img-trending" alt="25 Amazing Facts You Didn’t Know About Animals">
								<div class="trending-header flex-center px-3 py-2">
									<h3 class="title-left mb-0">เผยเทคโนโลยีใน MG HS รถยนต์ที่จะทำให้คุณเข้าใกล้คำว่า Autonomous car</h3>
								</div>
							</a>
						</div>
					</div>
					<div class="row mx-auto trending-right-bottom">	
						<div class="col-sm-6 sm-box">
							<a href="#" class="trending-item">
								<img src="<?= esc_url(get_template_directory_uri() .'/assets/img/blog/amirali-mirhashemian-88YAXjnpvrM-unsplash.jpg')?>" class="img-trending" alt="25 Amazing Facts You Didn’t Know About Animals">
								<div class="trending-header flex-center px-3 py-2">
									<h3 class="title-left mb-0">17 ภาพการเปลี่ยนแปลงของสัตว์เลี้ยง เผยให้เห็นว่าพวกมันเติบโตเร็วแค่ไหน</h3>
								</div>
							</a>
						</div>
						<div class="col-sm-6 sm-box-2">
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
											<div class="post-author">
												<i class="fa fa-user mr-2" aria-hidden="true"></i>
												Admin
											</div>
											<span class="mx-3">|</span>
											<div class="post-date">
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
						</div>

					</section>
					<section class="section-tech">
						<div class="header-category">
							<div class="category-title tech">Technology</div>
						</div>
						<div class="row">
							<div class="col-6">
								<div class="card border-0 tech-item mb-3">
									<a href="#" class="card-link-img">
										<img class="card-img-top img-tech" src="<?= esc_url(get_template_directory_uri() .'/assets/img/blog/julian-o-hayon-Bs-zngH79Ds-unsplash.jpg')?>" alt="">
									</a>
										<div class="card-body px-0">
										<a href="#" class="card-link">
											<h3 class="card-title mb-1">หนุ่มใช้ AirTag จนเจอสกูตเตอร์ที่โดนขโมยไป</h3>
										</a>
										<div class="info-post">
											<div class="post-author">
												<i class="fa fa-user mr-2" aria-hidden="true"></i>
												Admin
											</div>
											<span class="mx-3">|</span>
											<div class="post-date">
												<i class="fa fa-calendar-alt mr-2" aria-hidden="true"></i>
												3 สิงหาคม 2021
											</div>
										</div>
										<p class="card-text">เมื่อวานนี้ Evan Blass (@evleaks) ได้โพสต์ภาพเรนเดอร์ของ Fitbit Charge 5 ฟิตเนสแทร็กเกอร์รุ่นใหม่จากฟิตบิท (Fitbit) ภายใต้แบรนด์กูเกิล (Google) ที่จะคาดว่าจะมาพร้อมกับจอสีเป็นรุ่นแรกในไลน์อัป Charge นี้</p>
									</div>
								</div>
							</div>
							<div class="col-6">
								<div class="card border-0 tech-item mb-3">
									<a href="#" class="card-link-img">
										<img class="card-img-top img-tech" src="<?= esc_url(get_template_directory_uri() .'/assets/img/blog/zhang-kaiyv-dhiOkqjewAM-unsplash.jpg')?>" alt="">
									</a>
										<div class="card-body px-0">
										<a href="#" class="card-link">
											<h3 class="card-title mb-1">iPhone และ Mac ในปี 2022 อาจใช้ชิปเทคโนโลยี 3 นาโนเมตร</h3>
										</a>
										<div class="info-post">
											<div class="post-author">
												<i class="fa fa-user mr-2" aria-hidden="true"></i>
												Admin
											</div>
											<span class="mx-3">|</span>
											<div class="post-date">
												<i class="fa fa-calendar-alt mr-2" aria-hidden="true"></i>
												3 สิงหาคม 2021
											</div>
										</div>
										<p class="card-text">เมื่อวานนี้ Evan Blass (@evleaks) ได้โพสต์ภาพเรนเดอร์ของ Fitbit Charge 5 ฟิตเนสแทร็กเกอร์รุ่นใหม่จากฟิตบิท (Fitbit) ภายใต้แบรนด์กูเกิล (Google) ที่จะคาดว่าจะมาพร้อมกับจอสีเป็นรุ่นแรกในไลน์อัป Charge นี้</p>
									</div>
								</div>
							</div>
							<div class="col-6">
								<div class="card border-0 tech-item mb-3">
									<a href="#" class="card-link-img">
										<img class="card-img-top img-tech" src="<?= esc_url(get_template_directory_uri() .'/assets/img/blog/eagan-hsu-hrJs18Q8Hgk-unsplash.jpg')?>" alt="">
									</a>
										<div class="card-body px-0">
										<a href="#" class="card-link">
											<h3 class="card-title mb-1">AMD Radeon RX 6600 XT ขึ้นแท่นการ์ดจอเหมืองดีที่สุดตอนนี้</h3>
										</a>
										<div class="info-post">
											<div class="post-author">
												<i class="fa fa-user mr-2" aria-hidden="true"></i>
												Admin
											</div>
											<span class="mx-3">|</span>
											<div class="post-date">
												<i class="fa fa-calendar-alt mr-2" aria-hidden="true"></i>
												3 สิงหาคม 2021
											</div>
										</div>
										<p class="card-text">เมื่อวานนี้ Evan Blass (@evleaks) ได้โพสต์ภาพเรนเดอร์ของ Fitbit Charge 5 ฟิตเนสแทร็กเกอร์รุ่นใหม่จากฟิตบิท (Fitbit) ภายใต้แบรนด์กูเกิล (Google) ที่จะคาดว่าจะมาพร้อมกับจอสีเป็นรุ่นแรกในไลน์อัป Charge นี้</p>
									</div>
								</div>
							</div>
							<div class="col-6">
								<div class="card border-0 tech-item mb-3">
									<a href="#" class="card-link-img">
										<img class="card-img-top img-tech" src="<?= esc_url(get_template_directory_uri() .'/assets/img/blog/luca-bravo-XJXWbfSo2f0-unsplash.jpg')?>" alt="">
									</a>
										<div class="card-body px-0">
										<a href="#" class="card-link">
											<h3 class="card-title mb-1">Zoom ปล่อยฟีเจอร์ Focus mode เน้นให้นักเรียนจับจ้องไปที่ครู ไม่ส่องเพื่อนเสียสมาธิ</h3>
										</a>
										<div class="info-post">
											<div class="post-author">
												<i class="fa fa-user mr-2" aria-hidden="true"></i>
												Admin
											</div>
											<span class="mx-3">|</span>
											<div class="post-date">
												<i class="fa fa-calendar-alt mr-2" aria-hidden="true"></i>
												3 สิงหาคม 2021
											</div>
										</div>
										<p class="card-text">เมื่อวานนี้ Evan Blass (@evleaks) ได้โพสต์ภาพเรนเดอร์ของ Fitbit Charge 5 ฟิตเนสแทร็กเกอร์รุ่นใหม่จากฟิตบิท (Fitbit) ภายใต้แบรนด์กูเกิล (Google) ที่จะคาดว่าจะมาพร้อมกับจอสีเป็นรุ่นแรกในไลน์อัป Charge นี้</p>
									</div>
								</div>
							</div>
						</div>
					</section>
					<section class="section-ent">
						<div class="header-category">
							<div class="category-title ent">Entertainment</div>
						</div>
						<div class="row mx-auto">
							<div class="col-6 ent-wrapper">
								<a href="#" class="ent-list">
									<img src="<?= esc_url(get_template_directory_uri() .'/assets/img/blog/alex-litvin-MAYsdoYpGuk-unsplash.jpg')?>" class="img-cover" alt="">
									<div class="text-overlay flex-center">
										<div class="text-wrapper">
											<div class="flex-center flex-column flex-sm-row mb-2">
												<div class="ent-info mr-1">
													<span class="cate">บันเทิง</span>
													<span>|</span>
													<span class="tag">Disney</span>
												</div>
												<span class="ent-date">14/08/21</span>		
											</div>
											<h3 class="ent-title">20 รายละเอียดเล็ก ๆ ในหนังดิสนีย์ ที่คนส่วนมากไม่เคยสังเกตเห็น</h3>
										</div>
									</div>		
								</a>
							</div>
							<div class="col-6 ent-wrapper">
								<a href="#" class="ent-list">
									<img src="<?= esc_url(get_template_directory_uri() .'/assets/img/blog/myke-simon-atsUqIm3wxo-unsplash.jpg')?>" class="img-cover" alt="">
									<div class="text-overlay flex-center">
										<div class="text-wrapper">
											<div class="flex-center flex-column flex-sm-row mb-2">
												<div class="ent-info mr-1">
													<span class="cate">บันเทิง</span>
													<span>|</span>
													<span class="tag">Disney</span>
												</div>
												<span class="ent-date">14/08/21</span>		
											</div>
											<h3 class="ent-title">สื่อต่างประเทศยืนยัน ‘พัคซอจุน’ เข้าร่วมจักรวาลมาร์เวล ใน Captain Marvel 2: The Marvels</h3>
										</div>
									</div>		
								</a>
							</div>
							<div class="col-6 ent-wrapper">
								<a href="#" class="ent-list">
									<img src="<?= esc_url(get_template_directory_uri() .'/assets/img/blog/krists-luhaers-AtPWnYNDJnM-unsplash.jpg')?>" class="img-cover" alt="">
									<div class="text-overlay flex-center">
										<div class="text-wrapper">
											<div class="flex-center flex-column flex-sm-row mb-2">
												<div class="ent-info mr-1">
													<span class="cate">บันเทิง</span>
													<span>|</span>
													<span class="tag">Disney</span>
												</div>
												<span class="ent-date">14/08/21</span>		
											</div>
											<h3 class="ent-title">‘ไอ้เข้โลกิ’ ผู้น่าสงสาร ชอบถูกลืมเอาเข้าฉากเพราะร่างจริงเป็น ‘หมอน’ จนกองถ่ายต้องเลิกช้า</h3>
										</div>
									</div>		
								</a>
							</div>
							<div class="col-6 ent-wrapper">
								<a href="#" class="ent-list">
									<img src="<?= esc_url(get_template_directory_uri() .'/assets/img/blog/samuel-wong-4R1wcvJb40c-unsplash.jpg')?>" class="img-cover" alt="">
									<div class="text-overlay flex-center">
										<div class="text-wrapper">
											<div class="flex-center flex-column flex-sm-row mb-2">
												<div class="ent-info mr-1">
													<span class="cate">บันเทิง</span>
													<span>|</span>
													<span class="tag">Disney</span>
												</div>
												<span class="ent-date">14/08/21</span>		
											</div>
											<h3 class="ent-title">ผู้กำกับ ‘Loki’ เผย แฟน ๆ ควรจำยานอวกาศลึกลับในตอนจบได้</h3>
										</div>
									</div>		
								</a>
							</div>
						</div>
					</section>
					<section class="section-ww">
						<div class="header-category">
							<div class="category-title ww">Worldwide</div>
						</div>
						<div class="row mx-auto">
							<div class="col-6 col-md-4 px-1">
								<div class="card border-0 ww-wrapper">
									<a href="#" class="ww-link-img">
										<img class="img-ww" src="<?= esc_url(get_template_directory_uri() .'/assets/img/blog/carissa-gan-oYmT4go4hTk-unsplash.jpg')?>" alt="">
									</a>
									<div class="card-body ww-body">
										<a href="#" class="ww-title-link">
											<h3 class="card-title">20 รายละเอียดเล็ก ๆ ในหนังดิสนีย์ ที่คนส่วนมากไม่เคยสังเกตเห็น</h3>
										</a>
										<div class="info-post">
											<div class="post-author">
												<i class="fa fa-user mr-2" aria-hidden="true"></i>
												Admin
											</div>
											<span class="mx-3">|</span>
											<div class="post-date">
												<i class="fa fa-calendar-alt mr-2" aria-hidden="true"></i>
												3 สิงหาคม 2021
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-6 col-md-4 px-1">
								<div class="card border-0 ww-wrapper">
									<a href="#" class="ww-link-img">
										<img class="img-ww" src="<?= esc_url(get_template_directory_uri() .'/assets/img/blog/emeric-deroubaix-ADznPBBNpP8-unsplash.jpg')?>" alt="">
									</a>
									<div class="card-body ww-body">
										<a href="#" class="ww-title-link">
											<h3 class="card-title">20 รายละเอียดเล็ก ๆ ในหนังดิสนีย์ ที่คนส่วนมากไม่เคยสังเกตเห็น</h3>
										</a>
										<div class="info-post">
											<div class="post-author">
												<i class="fa fa-user mr-2" aria-hidden="true"></i>
												Admin
											</div>
											<span class="mx-3">|</span>
											<div class="post-date">
												<i class="fa fa-calendar-alt mr-2" aria-hidden="true"></i>
												3 สิงหาคม 2021
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-6 col-md-4 px-1">
								<div class="card border-0 ww-wrapper">
									<a href="#" class="ww-link-img">
										<img class="img-ww" src="<?= esc_url(get_template_directory_uri() .'/assets/img/blog/gabriel-voltz-xCr7cmReH3Y-unsplash.jpg')?>" alt="">
									</a>
									<div class="card-body ww-body">
										<a href="#" class="ww-title-link">
											<h3 class="card-title">20 รายละเอียดเล็ก ๆ ในหนังดิสนีย์ ที่คนส่วนมากไม่เคยสังเกตเห็น</h3>
										</a>
										<div class="info-post">
											<div class="post-author">
												<i class="fa fa-user mr-2" aria-hidden="true"></i>
												Admin
											</div>
											<span class="mx-3">|</span>
											<div class="post-date">
												<i class="fa fa-calendar-alt mr-2" aria-hidden="true"></i>
												3 สิงหาคม 2021
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-6 col-md-4 px-1">
								<div class="card border-0 ww-wrapper">
									<a href="#" class="ww-link-img">
										<img class="img-ww" src="<?= esc_url(get_template_directory_uri() .'/assets/img/blog/j-a-neshan-paul-Qm8q-VUjLqs-unsplash.jpg')?>" alt="">
									</a>
									<div class="card-body ww-body">
										<a href="#" class="ww-title-link">
											<h3 class="card-title">20 รายละเอียดเล็ก ๆ ในหนังดิสนีย์ ที่คนส่วนมากไม่เคยสังเกตเห็น</h3>
										</a>
										<div class="info-post">
											<div class="post-author">
												<i class="fa fa-user mr-2" aria-hidden="true"></i>
												Admin
											</div>
											<span class="mx-3">|</span>
											<div class="post-date">
												<i class="fa fa-calendar-alt mr-2" aria-hidden="true"></i>
												3 สิงหาคม 2021
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-6 col-md-4 px-1">
								<div class="card border-0 ww-wrapper">
									<a href="#" class="ww-link-img">
										<img class="img-ww" src="<?= esc_url(get_template_directory_uri() .'/assets/img/blog/matt-wang-JkdchN8zPMo-unsplash.jpg')?>" alt="">
									</a>
									<div class="card-body ww-body">
										<a href="#" class="ww-title-link">
											<h3 class="card-title">20 รายละเอียดเล็ก ๆ ในหนังดิสนีย์ ที่คนส่วนมากไม่เคยสังเกตเห็น</h3>
										</a>
										<div class="info-post">
											<div class="post-author">
												<i class="fa fa-user mr-2" aria-hidden="true"></i>
												Admin
											</div>
											<span class="mx-3">|</span>
											<div class="post-date">
												<i class="fa fa-calendar-alt mr-2" aria-hidden="true"></i>
												3 สิงหาคม 2021
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-6 col-md-4 px-1">
								<div class="card border-0 ww-wrapper">
									<a href="#" class="ww-link-img">
										<img class="img-ww" src="<?= esc_url(get_template_directory_uri() .'/assets/img/blog/nick-jones-dNKswTQCBy4-unsplash.jpg')?>" alt="">
									</a>
									<div class="card-body ww-body">
										<a href="#" class="ww-title-link">
											<h3 class="card-title">20 รายละเอียดเล็ก ๆ ในหนังดิสนีย์ ที่คนส่วนมากไม่เคยสังเกตเห็น</h3>
										</a>
										<div class="info-post">
											<div class="post-author">
												<i class="fa fa-user mr-2" aria-hidden="true"></i>
												Admin
											</div>
											<span class="mx-3">|</span>
											<div class="post-date">
												<i class="fa fa-calendar-alt mr-2" aria-hidden="true"></i>
												3 สิงหาคม 2021
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</section>
					<section class="section-lastest">
						<div class="header-category">
							<div class="category-title lastest">Latest Post</div>
						</div>
						<div class="row mx-auto">
							<div class="card mb-3 lastest-items">
								<div class="row no-gutters">
									<div class="col-4">
										<a href="#" class="lastest-link-img">
											<img src="<?= esc_url(get_template_directory_uri() .'/assets/img/blog/clever-visuals-lGCVWSOui5U-unsplash.jpg')?>" class="img-lastest" alt="">
										</a>	
									</div>
									<div class="col-8">
										<div class="card-body py-1 px-3">
											<div class="inner-body-wrapper">
												<a href="#" class="lastest-link">
													<h3 class="card-title mb-1">20 รายละเอียดเล็ก ๆ ในหนังดิสนีย์ ที่คนส่วนมากไม่เคยสังเกตเห็น</h3>
												</a>
												<div class="info-post">
													<div class="post-author">
														<i class="fa fa-user mr-2" aria-hidden="true"></i>
														Admin
													</div>
													<span class="mx-3">|</span>
													<div class="post-date">
														<i class="fa fa-calendar-alt mr-2" aria-hidden="true"></i>
														3 สิงหาคม 2021
													</div>
												</div>
												<p class="card-text">
													เมื่อวานนี้ Evan Blass (@evleaks) ได้โพสต์ภาพเรนเดอร์ของ Fitbit Charge 5 ฟิตเนสแทร็กเกอร์รุ่นใหม่จากฟิตบิท (Fitbit) ภายใต้แบรนด์กูเกิล (Google) ที่จะคาดว่าจะมาพร้อมกับจอสีเป็นรุ่นแรกในไลน์อัป Charge นี้
												</p>
											</div>	
										</div>
									</div>
								</div>
							</div>
							<div class="card mb-3 lastest-items">
								<div class="row no-gutters">
									<div class="col-4">
										<a href="#" class="lastest-link-img">
											<img src="<?= esc_url(get_template_directory_uri() .'/assets/img/blog/khamkeo-vilaysing-eBoXzvsb4WM-unsplash.jpg')?>" class="img-lastest" alt="">
										</a>	
									</div>
									<div class="col-8">
										<div class="card-body py-1 px-3">
											<div class="inner-body-wrapper">
												<a href="#" class="lastest-link">
													<h3 class="card-title mb-1">20 รายละเอียดเล็ก ๆ ในหนังดิสนีย์ ที่คนส่วนมากไม่เคยสังเกตเห็น</h3>
												</a>
												<div class="info-post">
													<div class="post-author">
														<i class="fa fa-user mr-2" aria-hidden="true"></i>
														Admin
													</div>
													<span class="mx-3">|</span>
													<div class="post-date">
														<i class="fa fa-calendar-alt mr-2" aria-hidden="true"></i>
														3 สิงหาคม 2021
													</div>
												</div>
												<p class="card-text">
													เมื่อวานนี้ Evan Blass (@evleaks) ได้โพสต์ภาพเรนเดอร์ของ Fitbit Charge 5 ฟิตเนสแทร็กเกอร์รุ่นใหม่จากฟิตบิท (Fitbit) ภายใต้แบรนด์กูเกิล (Google) ที่จะคาดว่าจะมาพร้อมกับจอสีเป็นรุ่นแรกในไลน์อัป Charge นี้
												</p>
											</div>		
										</div>
									</div>
								</div>
							</div>
							<div class="card mb-3 lastest-items">
								<div class="row no-gutters">
									<div class="col-4">
										<a href="#" class="lastest-link-img">
											<img src="<?= esc_url(get_template_directory_uri() .'/assets/img/blog/nrd-a2JMcWOtNAs-unsplash.jpg')?>" class="img-lastest" alt="">
										</a>	
									</div>
									<div class="col-8">
										<div class="card-body py-1 px-3">
											<div class="inner-body-wrapper">
												<a href="#" class="lastest-link">
													<h3 class="card-title mb-1">20 รายละเอียดเล็ก ๆ ในหนังดิสนีย์ ที่คนส่วนมากไม่เคยสังเกตเห็น</h3>
												</a>
												<div class="info-post">
													<div class="post-author">
														<i class="fa fa-user mr-2" aria-hidden="true"></i>
														Admin
													</div>
													<span class="mx-3">|</span>
													<div class="post-date">
														<i class="fa fa-calendar-alt mr-2" aria-hidden="true"></i>
														3 สิงหาคม 2021
													</div>
												</div>
												<p class="card-text">
														เมื่อวานนี้ Evan Blass (@evleaks) ได้โพสต์ภาพเรนเดอร์ของ Fitbit Charge 5 ฟิตเนสแทร็กเกอร์รุ่นใหม่จากฟิตบิท (Fitbit) ภายใต้แบรนด์กูเกิล (Google) ที่จะคาดว่าจะมาพร้อมกับจอสีเป็นรุ่นแรกในไลน์อัป Charge นี้
												</p>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="card mb-3 lastest-items">
								<div class="row no-gutters">
									<div class="col-4">
										<a href="#" class="lastest-link-img">
											<img src="<?= esc_url(get_template_directory_uri() .'/assets/img/blog/samuel-wong-4R1wcvJb40c-unsplash.jpg')?>" class="img-lastest" alt="">
										</a>	
									</div>
									<div class="col-8">
										<div class="card-body py-1 px-3">
											<div class="inner-body-wrapper">
												<a href="#" class="lastest-link">
													<h3 class="card-title mb-1">20 รายละเอียดเล็ก ๆ ในหนังดิสนีย์ ที่คนส่วนมากไม่เคยสังเกตเห็น</h3>
												</a>
												<div class="info-post">
													<div class="post-author">
														<i class="fa fa-user mr-2" aria-hidden="true"></i>
														Admin
													</div>
													<span class="mx-3">|</span>
													<div class="post-date">
														<i class="fa fa-calendar-alt mr-2" aria-hidden="true"></i>
														3 สิงหาคม 2021
													</div>
												</div>
												<p class="card-text">
														เมื่อวานนี้ Evan Blass (@evleaks) ได้โพสต์ภาพเรนเดอร์ของ Fitbit Charge 5 ฟิตเนสแทร็กเกอร์รุ่นใหม่จากฟิตบิท (Fitbit) ภายใต้แบรนด์กูเกิล (Google) ที่จะคาดว่าจะมาพร้อมกับจอสีเป็นรุ่นแรกในไลน์อัป Charge นี้
												</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="btn-load">
							<button tyle="button" class="btn btn-more">LOAD MORE</button>
						</div>
					</section>
				</div>
				<?php get_sidebar(); ?>
			</div>
		</div>
	</div>


<?php
get_footer();
