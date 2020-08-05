<?php require 'template/__header.php' ?>
	<main>

		<section class="f-screen">
			<div class="container d-flex align-items-center justify-content-center">
				<div class="d-flex flex-column-reverse flex-md-row align-items-center justify-content-between">
					<div class="d-flex flex-column col-12 col-md-7 text-center text-md-left">
						<h1 class="mb-5">
							<span>Привлечем клиентов в Ваш бизнес</span><br class="d-none d-lg-block">
							благодаря комплексному маркетингу<br class="d-none d-md-block"> 
							<span>в течении 7 дней</span> или вернем деньги.
						</h1>
						<div>
							<a href="#scrolling">
								Получить предложение
							</a>
						</div>
					</div>
					<div class="col-10 col-md-5">
						<img class="mw-100" src="buld/img/f-screen.png" alt="">
					</div>
				</div>
			</div>
		</section>

		<section class="mission py-5">
			<div class="container">
				<div class="d-flex flex-column flex-lg-row justify-content-center justify-content-lg-around align-items-center">
					<div class="col-8 col-lg-6 d-flex justify-content-center">
						<img class="mw-100" src="buld/img/mission.png" alt="">
					</div>
					<div class="col-12 col-lg-6 text-center text-lg-left mt-2 mt-lg-0">
						<h2>
							Миссия и принципы
						</h2>
						<p class="py-2 py-lg-4">
							Комплексное маркетинговое агентство Sonder Digital<br class="d-none d-sm-block">
							основано в 2015 году. Основной миссией компании<br class="d-none d-sm-block">
							является развитие рекламной индустрии в стране с<br class="d-none d-sm-block">
							помощью комплексного подхода. 
						</p>
						<p>
							Принципом компании является максимальная<br class="d-none d-sm-block">
							ориентированность на конечный результат,<br class="d-none d-sm-block">
							подкрепленный четкими цифрами и аналитикой. 
						</p>
					</div>
					
				</div>
			</div>
		</section>

		<section class="company py-5">
			<div class="container">
				<h2 class="text-center pb-5">
					Почему 147 компаний доверились нам 
				</h2>


				<div class="company__wrapper row">
					
					<div class="col-12 col-md-6 d-flex justify-content-center mb-3 mb-md-5">
						<div>
							<img class="mw-100 mr-4" src="buld/img/svg/company_1.svg" alt="">
						</div>
						<p>
							95% наших рекламных кампаний<br>
							 окупаются минимум в 2 раза<br>
							 за первый месяц
						</p>
					</div>
					<div class="col-12 col-md-6 d-flex justify-content-center mb-3 mb-md-5">
						<div>
							<img class="mw-100 mr-4" src="buld/img/svg/company_3.svg" alt="">
						</div>
						<p>
							Мы настоящие фанатики своего<br>
							дела, готовые работать 24 часа<br>
							в сути, чтобы дать клиенту результат
						</p>
					</div>
					<div class="col-12 col-md-6 d-flex justify-content-center mb-3 mb-md-5">
						<div>
							<img class="mw-100 mr-4" src="buld/img/svg/company_2.svg" alt="">
						</div>
						<p>
							Опыт в более, чем 100 нишах,<br>
							50+ описанных кейсов.  Мы сможем<br>
							помочь даже в самой сложной<br>
							ситуации
						</p>
					</div>
					<div class="col-12 col-md-6 d-flex justify-content-center mb-3 mb-md-5">
						<div>
							<img class="mw-100 mr-4" src="buld/img/svg/company_4.svg" alt="">
						</div>
						<p>
							Очень трепетно относимся<br>
							к срокам и договоренностям.<br>
							При нарушении сроков, прописанных<br>
							в договоре - возвращаем деньги 
						</p>
					</div>


				</div>
				</div>
			</div>
		</section>

		<section class="services py-5" id="scrolling">
			<div class="container">
				<div class="d-flex flex-column text-center pb-5">
					<h2>
						Наши услуги
					</h2>
					<p>
						Ваш конечный результат - наш главный приоритет
					</p>
				</div>

				<div class="row flex-column flex-md-row align-items-center justify-content-between">
						
					<?php include 'template/__services.php' ?>

				</div>
			</div>
		</section>



		<section class="cases py-5">
			<div class="container">
				<div class="d-flex flex-column flex-lg-row justify-content-around align-items-center">
					<div class="col-12 col-lg-6 text-center text-lg-left">
						<h2 class="pb-3">
							Кейсы
						</h2>
						<p>
							Слова ничего не значат, если за ними нет реальной статистики. За время работы наша команда принесла результат более 100 клиентам, ниже вы сможете ознакомиться с ними подробнее.
						</p>
					</div>
					<div class="col-12 col-lg-6 d-flex justify-content-center">
						<img class="mw-100" src="buld/img/cases.png" alt="">
					</div>
				</div>
				<div class="cases-slide">
					
					<?php include 'template/__case.php' ?>

				</div>
			</div>
		</section>

		<section class="form py-5">
			<div class="container">
	
				<div class="d-flex flex-column">
					<h2 class="text-center text-md-left">
						Заполните форму и вы получите:
					</h2>
					<div class="d-flex flex-column align-items-center align-items-md-start flex-md-row py-4">
						<div class="d-flex">
							<div class="mr-2">
								<img class="mw-100" src="buld/img/svg/check mark.svg" alt="">
							</div>
							<p>
								Бесплатный аудит<br>
								вашего маркетинга.
							</p>
						</div>
						<div class="d-flex my-3 my-md-0 mx-0 mx-md-2 mx-lg-5">
							<div class="mr-2">
								<img class="mw-100" src="buld/img/svg/check mark.svg" alt="">
							</div>
							<p>
								Список рекомендаций по<br>
								увеличению количества заявок
							</p>
						</div>
						<div class="d-flex">
							<div class="mr-2">
								<img class="mw-100" src="buld/img/svg/check mark.svg" alt="">
							</div>
							<p>
								Увидите, где вы тратите<br>
								деньги впустую
							</p>
						</div>
					</div>
					<form class="d-flex flex-column flex-lg-row align-items-center justify-content-around" action="" method="POST">
						<input placeholder="Ваш телефон" type="number">
						<input  placeholder="Сфера вашей деятельности" type="text">
						<button type="submit">
							Получить аудит
						</button>
					</form>
				</div>
			</div>
		</section>

		<section class="stages py-5 d-none">
			<div class="container">
				<h2 class="text-center mb-4">
					Этапы работы
				</h2>
	
				<div class="d-flex align-items-center justify-content-between">

					<div class="stages__box">
						<div class="mb-4">
							<img class="mw-100" src="buld/img/stages_1.png" alt="">
						</div>
						<h5 class="mb-2">
							1 день
						</h5>
						<p>
							Составление стратегии,<br>
							определение нужных услуг
						</p>
					</div>
					<div>
						<div class="mb-4">
							<img class="mw-100" src="buld/img/stages_1.png" alt="">
						</div>
						<h5 class="mb-2">
							1 день
						</h5>
						<p>
							Составление стратегии,<br>
							определение нужных услуг
						</p>
					</div>
					<div>
						<div class="mb-4">
							<img class="mw-100" src="buld/img/stages_1.png" alt="">
						</div>
						<h5 class="mb-2">
							1 день
						</h5>
						<p>
							Составление стратегии,<br>
							определение нужных услуг
						</p>
					</div>

				</div>



			</div>
		</section>

		<section class="staff py-5">
			<div class="container">
				<div class="d-flex flex-column flex-md-row align-items-center justify-content-around">
					<div class="col-12 col-md-6 text-center text-md-left mb-3 mb-md-0">
						<h2 class="pb-3">
							Сотрудники
						</h2>
						<p>
							Основа любого бизнеса - это люди. В нашей<br>
							компании  мы объединяем специалистов, чьим<br>
							главным принципом является максимальная<br>
							приверженность делу, готовность пожертвовать<br>
							всем, ради достижения результата. 
						</p>
					</div>
					<div class="col-12 col-md-6">
						<img class="mw-100" src="buld/img/staff.png" alt="">
					</div>
				</div>
				<div class="row justify-content-between align-items-center text-center py-3">

					<div class="col-12 col-sm-6 col-md-3 mb-3">
						<div class="w-100 staff__box">
							<img class="mw-100" src="buld/img/persone_2.jpg" alt="">
							<h4 class="mt-2">
								Донская Анастасия
							</h4>
							<p>
								Контент-менеджер
							</p>
						</div>
					</div>
					<div class="col-12 col-sm-6 col-md-3 mb-3">
						<div class="w-100 staff__box">
							<img class="mw-100" src="buld/img/persone_3.jpg" alt="">
							<h4 class="mt-2">
								Донская Анастасия
							</h4>
							<p>
								Контент-менеджер
							</p>
						</div>
					</div>
					<div class="col-12 col-sm-6 col-md-3 mb-3">
						<div class="w-100 staff__box">
							<img class="mw-100" src="buld/img/persone_2.jpg" alt="">
							<h4 class="mt-2">
								Донская Анастасия
							</h4>
							<p>
								Контент-менеджер
							</p>
						</div>
					</div>
					<div class="col-12 col-sm-6 col-md-3 mb-3">
						<div class="w-100 staff__box">
							<img class="mw-100" src="buld/img/persone_3.jpg" alt="">
							<h4 class="mt-2">
								Донская Анастасия
							</h4>
							<p>
								Контент-менеджер
							</p>
						</div>
					</div>
					<div class="col-12 col-sm-6 col-md-3 mb-3">
						<div class="w-100 staff__box">
							<img class="mw-100" src="buld/img/persone_2.jpg" alt="">
							<h4 class="mt-2">
								Донская Анастасия
							</h4>
							<p>
								Контент-менеджер
							</p>
						</div>
					</div>
					<div class="col-12 col-sm-6 col-md-3 mb-3">
						<div class="w-100 staff__box">
							<img class="mw-100" src="buld/img/persone_3.jpg" alt="">
							<h4 class="mt-2">
								Донская Анастасия
							</h4>
							<p>
								Контент-менеджер
							</p>
						</div>
					</div>
					<div class="col-12 col-sm-6 col-md-3 mb-3">
						<div class="w-100 staff__box">
							<img class="mw-100" src="buld/img/persone_2.jpg" alt="">
							<h4 class="mt-2">
								Донская Анастасия
							</h4>
							<p>
								Контент-менеджер
							</p>
						</div>
					</div>
					<div class="col-12 col-sm-6 col-md-3 mb-3">
						<div class="w-100 staff__box">
							<img class="mw-100" src="buld/img/persone_3.jpg" alt="">
							<h4 class="mt-2">
								Донская Анастасия
							</h4>
							<p>
								Контент-менеджер
							</p>
						</div>
					</div>
					



				</div>
			</div>
		</section>

		<section class="py-5">
			<div class="container">
				<div class="d-flex flex-column flex-lg-row align-items-center justify-content-around">
					<div class="col-12 col-lg-7 text-center text-lg-left mb-3 mb-lg-0">
						<h2 class="pb-3">
							Наши выступления
						</h2>
						<p>
							Мы давно занимаемся маркетингом и за это время успели<br class="d-none d-sm-block"> выступить на многих конференциях. Посмотрите наши<br class="d-none d-sm-block"> выступления, чтобы убедиться, что вы будете работать<br class="d-none d-sm-block"> 
							с экспертами своего дела.
						</p>
					</div>
					<div class="col-12 col-lg-5 d-flex justify-content-center">
						<img class="mw-100" src="buld/img/video.jpg" alt="">
					</div>
				</div>
			</div>
		</section>

		<section class="reviews py-5">
			<div class="container">
				<h2 class="text-center pb-5">
					Отзывы наших клиентов 
				</h2>

				<div class="reviews-slide">
					
					<?php include 'template/__reviews.php' ?>

				</div>

				<div class="text-center pt-5">
					<a href="">
						Читать все отзывы в ВК
					</a>
				</div>
			</div>
		</section>

		<section class="res py-5">
			<div class="container">
	
				<div class="d-flex flex-column">
					<h2 class="text-center text-lg-left">
						Заполните форму и вы получите:
					</h2>
					<div class="d-flex flex-column align-items-center align-items-lg-start flex-md-row py-4">
						<div class="d-flex">
							<div class="mr-2">
								<img class="mw-100" src="buld/img/svg/check mark.svg" alt="">
							</div>
							<p>
								Бесплатный аудит<br>
								вашего маркетинга.
							</p>
						</div>
						<div class="d-flex my-3 my-md-0 mx-0 mx-md-2 mx-lg-5">
							<div class="mr-2">
								<img class="mw-100" src="buld/img/svg/check mark.svg" alt="">
							</div>
							<p>
								Список рекомендаций по<br>
								увеличению количества заявок
							</p>
						</div>
						<div class="d-flex">
							<div class="mr-2">
								<img class="mw-100" src="buld/img/svg/check mark.svg" alt="">
							</div>
							<p>
								Увидите, где вы тратите<br>
								деньги впустую
							</p>
						</div>
					</div>
					<div class="d-flex flex-column-reverse flex-lg-row align-items-center justify-content-between">
						<form class="d-flex flex-column col-12 col-sm-10 col-lg-5" action="" method="POST">
							<input placeholder="Ваш телефон" type="number">
							<input  placeholder="Сфера вашей деятельности" type="text">
							<div class="m0-auto">
								<button class="mt-2">
									Получить аудит
								</button>
							</div>
						</form>
						<div class="col-12 col-sm-8 col-lg-5">
							<img class="mw-100" src="buld/img/form.png" alt="">
						</div>
					</div>
				</div>
			</div>
		</section>
	</main>

<?php require 'template/__footer.php' ?>

</html>