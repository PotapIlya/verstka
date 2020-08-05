<?php require 'templates/__header.php' ?>
	<main>

		<section class="f-screen">
			<div class="container d-flex flex-column align-items-start justify-content-center text-center text-md-left">
				<div class="mb-3 mb-sm-5 w-100">
					<h1 class="text-uppercase">
						<span>ПОСТРО</span> свое тело<br>
						<span>измени</span> свою жизнь
					</h1>
				</div>
				<div class="d-flex flex-column flex-sm-row justify-content-center justify-content-md-start align-items-center text-center w-100">
					<button class="openModal my-1 my-sm-0 mx-0 mx-sm-2">
						Получить консультацию
					</button>
					<a href="#price">
						<button class="my-1 my-sm-0 mx-0 mx-sm-2">Заказать</button>
					</a>
				</div>
			</div>
		</section>

		<section class="about py-5">
			<div class="container">
				
				<?php include 'templates/__adout.php' ?>

			</div>
		</section>

		<section class="staff py-5">
			<div class="container">
				<div class="d-flex flex-column align-items-center">
					<span>
						Meet
					</span>
					<h2 class="text-uppercase py-3">
						наши тренера
					</h2>
					<hr>
				</div>
				<div class="row justify-content-center justify-content-lg-between align-items-center mt-5">
					<div class="staff__persone d-flex justify-content-center col-12 col-sm-6 col-lg-2 p-0 mb-4 mb-lg-0">
						<img class="mw-100" src="buld/img/trainer-1.jpg" alt="">
						<div class="staff__persone__text text-center">
							Lorem ipsum<br>	
							<span>lorem</span>
						</div>
					</div>
					<div class="staff__persone d-flex justify-content-center col-12 col-sm-6 col-lg-2 p-0 mb-4 mb-lg-0">
						<img class="mw-100" src="buld/img/trainer-3.jpg" alt="">
						<div class="staff__persone__text text-center">
							Lorem ipsum<br>
							<span>lorem</span>
						</div>
					</div>
					<div class="staff__persone d-flex justify-content-center col-12 col-sm-6 col-lg-2 p-0 mb-4 mb-lg-0">
						<img class="mw-100" src="buld/img/trainer-4.jpg" alt="">
						<div class="staff__persone__text text-center">
							Lorem ipsum<br>
							<span>lorem</span>
						</div>
					</div>
					<div class="staff__persone d-flex justify-content-center col-12 col-sm-6 col-lg-2 p-0 mb-4 mb-lg-0">
						<img class="mw-100" src="buld/img/trainer-5.jpg" alt="">
						<div class="staff__persone__text text-center">
							Lorem ipsum<br>
							<span>lorem</span>
						</div>
					</div>
					<div class="staff__persone d-flex justify-content-center col-12 col-sm-6 col-lg-2 p-0 mb-4 mb-lg-0">
						<img class="mw-100" src="buld/img/trainer-2.jpg" alt="">
						<div class="staff__persone__text text-center">
							Lorem ipsum<br>
							<span>lorem</span>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="trainees py-5">
			<div class="container">
				<div class="d-flex flex-column align-items-center">
					<span>
						Choose
					</span>
					<h2 class="py-3">
						OUR TRAINEES
					</h2>
					<hr>
				</div>
				<div class="d-flex flex-column flex-md-row justify-content-between align-items-center mt-5">

					<div class="trainees__wrapper col-10 col-md-4 d-flex flex-column align-items-center justify-content-center text-center mb-4 mb-md-0">
						<div class="circle">
							<img class="mw-100" src="buld/img/icon-1.png" alt="">
						</div>
						<h4 class="py-4">
							Фитнес
						</h4>
						<p class="pb-4">
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio, blanditiis fugiat voluptas nemo voluptate dolor suscipit quos ullam libero accusamus!
						</p>
						<a href="#price">
							Заказать
						</a>
					</div>

					<div class="trainees__wrapper col-10 col-md-4 d-flex flex-column align-items-center justify-content-center text-center mb-4 mb-md-0">
						<div class="circle">
							<img class="mw-100" src="buld/img/icon-2.png" alt="">
						</div>
						<h4 class="py-4">
							Body Building Programs
						</h4>
						<p class="pb-4">
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio, blanditiis fugiat voluptas nemo voluptate dolor suscipit quos ullam libero accusamus!
						</p>
						<a href="#price">
							Заказать
						</a>
					</div>

					<div class="trainees__wrapper col-10 col-md-4 d-flex flex-column align-items-center justify-content-center text-center mb-4 mb-md-0">
						<div class="circle">
							<img class="mw-100" src="buld/img/icon-3.png" alt="">
						</div>
						<h4 class="py-4">
							Массаж
						</h4>
						<p class="pb-4">
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio, blanditiis fugiat voluptas nemo voluptate dolor suscipit quos ullam libero accusamus!
						</p>
						<a href="#price">
							Заказать
						</a>
					</div>

				</div>
			</div>
		</section>

		<section class="reviews py-5">
			<div class="container">
				<div class="d-flex flex-column align-items-center">
					<span>
						Отзывы
					</span>
					<h2 class="py-3">
						Что клиенты говрят о нас
					</h2>
					<hr>
				</div>
				<div class="d-flex justify-content-between align-items-center mt-5">

					<div class="slick-reviews w-100">

						<?php include 'templates/__reviews.php' ?>

					</div>

				</div>
			</div>
		</section>

		<section class="slider py-5">
			<div class="container">
				<div class="slick-slider">
					<div class="col-4">
						<img class="mw-100 m0-auto" src="buld/img/sport-1.jpg" alt="">
					</div>
					<div class="col-4">
						<img class="mw-100 m0-auto" src="buld/img/sport-2.jpg" alt="">
					</div>
					<div class="col-4">
						<img class="mw-100 m0-auto" src="buld/img/sport-3.jpg" alt="">
					</div>
					<div class="col-4">
						<img class="mw-100 m0-auto" src="buld/img/sport-4.jpg" alt="">
					</div>
					<div class="col-4">
						<img class="mw-100 m0-auto" src="buld/img/sport-5.jpg" alt="">
					</div>
					<div class="col-4">
						<img class="mw-100 m0-auto" src="buld/img/sport-4.jpg" alt="">
					</div>
				</div>
			</div>
		</section>

		<section class="price py-5" id="price">
			<div class="container">
				<div class="d-flex flex-column align-items-center">
					<span>
						Choose
					</span>
					<h2 class="py-3">
						Наши услуги
					</h2>
					<hr>
				</div>
				<div class="d-flex flex-column flex-md-row justify-content-between align-items-center mt-5">
					<div class="col-10 col-md-4 pb-4 pb-md-0">
						<div class="price__wrapper w-100 d-flex flex-column align-items-center justify-content-center text-center">
							<h2><sub>$</sub>10<sub>/mounth</sub></h2>
							<h4 class="my-4">
								One Year Subscription
							</h4>
							<ul class="list-inline">
								<li>
									Access to all clubs
								</li>
								<li class="py-3">
									Training in group or alone
								</li>
								<li>
									Dedicated trainer available
								</li>
								<li class="py-3">
									Access to one 1 hour fitness class
								</li>
								<li>
									Access to spa center<br>
									(Book Separately)
								</li>
							</ul>
							<button data-modal="price" class="openModal mt-4">
								Заказать
							</button>
						</div>
					</div>
					<div class="col-10 col-md-4 pb-4 pb-md-0">
						<div class="price__wrapper w-100 d-flex flex-column align-items-center justify-content-center text-center">
							<h2><sub>$</sub>10<sub>/mounth</sub></h2>
							<h4 class="my-4">
								One Year Subscription
							</h4>
							<ul class="list-inline">
								<li>
									Access to all clubs
								</li>
								<li class="py-3">
									Training in group or alone
								</li>
								<li>
									Dedicated trainer available
								</li>
								<li class="py-3">
									Access to one 1 hour fitness class
								</li>
								<li>
									Access to spa center<br>
									(Book Separately)
								</li>
							</ul>
							<button data-modal="price" class="openModal mt-4">
								Заказать
							</button>
						</div>
					</div>
					<div class="col-10 col-md-4 pb-4 pb-md-0">
						<div class="price__wrapper w-100 d-flex flex-column align-items-center justify-content-center text-center">
							<h2><sub>$</sub>10<sub>/mounth</sub></h2>
							<h4 class="my-4">
								One Year Subscription
							</h4>
							<ul class="list-inline">
								<li>
									Access to all clubs
								</li>
								<li class="py-3">
									Training in group or alone
								</li>
								<li>
									Dedicated trainer available
								</li>
								<li class="py-3">
									Access to one 1 hour fitness class
								</li>
								<li>
									Access to spa center<br>
									(Book Separately)
								</li>
							</ul>
							<button data-modal="price" class="openModal mt-4">
								Заказать
							</button>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="news py-5">
			<div class="container">
				<div class="d-flex flex-column align-items-center pb-3">
					<span>
						Blog
					</span>
					<h2 class="py-3">
						OUR LATEST NEWS
					</h2>
					<hr>
				</div>
				<div class="d-flex flex-wrap justify-content-between align-items-center">
				
					<div class="news-slider w-100">
						<?php include 'templates/__news.php' ?>
					</div>
				</div>
			</div>
		</section>

		<section class="info py-5">
			<div class="container">
				<div class="d-flex flex-column align-items-center col-12 col-sm-10 col-lg-6 m0-auto text-center">
					<span>
						Call Us Today
					</span>
					<h2 class="py-3">
						+1 957 652 1268
					</h2>
					<p class="py-4">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora labore asperiores nulla, suscipit aperiam cumque cupiditate, recusandae placeat itaque quis dolores maiores! Ut maiores, ab assumenda.
					</p>
					<button class="openModal">
						Проконсультироваться
					</button>
				</div>
			</div>
		</section>
	</main>

	<?php require 'templates/__footer.php' ?>

</html>