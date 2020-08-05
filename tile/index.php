<?php
	require 'templates/__header.php';
?>
<main>
	<section class="f-screen mb-5">
		<div class="container h-100 d-flex align-items-center justify-content-center">

			<div class="f-screen__wrapper w-100 d-flex flex-column flex-lg-row align-items-center justify-content-around">
				<div class="text-center text-lg-left mb-4 mb-lg-0">
					<h1 class="mb-0 mb--3">Укладка плитки<br>
						<span>любой</span> сложности
					</h1>
					<p>Заполните форму и получите<br class="d-none d-lg-block">
						<span>скидку</span> 10%
					</p>
					<div class="d-block d-sm-none mt-3">
						<button class="modalOpen" type="submit">Заказать звонок</button>
					</div>
				</div>
				<form class="d-none d-sm-flex flex-column align-items-center justify-content-center text-center col-8 col-lg-4" method="" action="">
					<h3 class="mb-4">Оставьте заявку<br> с расчетом стоимости ремонта</h3>
					<div class="select d-flex w-100">
						<select class="mr-2 p-2 w-100">
							<option>Вид услуг</option>
							<option>Вид услуг_1</option>
							<option>Вид услуг_2</option>
							<option>Вид услуг_3</option>
							<option>Вид услуг_4</option>
						</select>
						<input placeholder="кв.м" type="text">
					</div>
					<input class="w-100 my-2" placeholder="Ваше имя" type="text">
					<input class="w-100" placeholder="Ваш номер телефона" type="text">
					<div class="mt-3">
						<button  type="submit">Заказать звонок</button>
					</div>
					<p class="py-3 ">
						Нажимая на кнопку, Вы даете согласие на обработку <a href="#">персональных данных</a>
					</p>
				</form>
			</div>
	</section>

	<section class="advantages py-5">
		<div class="container">
			<div class="advantages__wrapper row justify-content-between align-items-center text-center">

				<div class="col-12 col-sm-4 col-lg-2 d-flex flex-column justify-content-center align-items-center p-0">
					<img class="mw-100" src="buld/img/cheak_mark.svg" alt="">
					<p>Бесплатный замер составление сметы</p>
				</div>
				<div class="col-12 col-sm-4 col-lg-2 d-flex flex-column justify-content-center align-items-center p-0">
					<img class="mw-100" src="buld/img/cheak_mark.svg" alt="">
					<p>Гарантия до 5 лет</p>
				</div>
				<div class="col-12 col-sm-4 col-lg-2 d-flex flex-column justify-content-center align-items-center p-0">
					<img class="mw-100" src="buld/img/cheak_mark.svg" alt="">
					<p>Не оставляем мусор<br> после себя</p>
				</div>
				<div class="col-12 col-sm-4 col-lg-2 d-flex flex-column justify-content-center align-items-center p-0">
					<img class="mw-100" src="buld/img/cheak_mark.svg" alt="">
					<p>Работаем по договору</p>
				</div>
				<div class="col-12 col-sm-4 col-lg-2 d-flex flex-column justify-content-center align-items-center p-0">
					<img class="mw-100" src="buld/img/cheak_mark.svg" alt="">
					<p>Качественные материалы</p>
				</div>
				<div class="col-12 col-sm-4 col-lg-2 d-flex flex-column justify-content-center align-items-center p-0">
					<img class="mw-100" src="buld/img/cheak_mark.svg" alt="">
					<p>Укладка плитки от 600 рублей</p>
				</div>
			</div>
			<img class="advantages__icon mw-100" src="buld/img/advantages__icon.svg" alt="">
		</div>
	</section>


	<section id="services" class="services py-5">
		<div class="container">
			<h2 class="text-center text-xl-left pb-5">Наши услуги</h2>
			<div class="services__wrapper">
				<div class="row align-items-center justify-content-between">

					<div class="d-flex flex-column col-12 col-xl-6 p-0 mb-4">
						<h3 class="mb-3 text-center text-xl-left">
							Укладка плитки на пол
						</h3>
						<div class="d-flex flex-column flex-md-row align-items-center justify-content-center">
							<img class="mw-100 mr-2" src="buld/img/services_1.jpg" alt="">
							<ul class="list-inline mt-3 mt-md-0">
								<li>
									- Укладка пола кафельной плиткой
								</li>
								<li class="py-2">
									- Укладка пола керамической плиткой
								</li>
								<li>
									- Укладка пола клинкерной плиткой
								</li>
								<li class="py-2">
									- Укладка пола мраморной плиткой
								</li>
								<li>
									- Укладка пола мозаичной плиткой
								</li>
							</ul>
						</div>
						<div class="pt-3 pl-3 ml-auto mr-auto ml-xl-0">
							<button class="modalOpen">
								Заказать услугу
							</button>
						</div>
					</div>

					<div class="d-flex flex-column col-12 col-xl-6 p-0 mb-4">
						<h3 class="mb-3 text-center text-xl-left">
							Укладка плитки в ванную
						</h3>
					<div class="d-flex flex-column flex-md-row align-items-center justify-content-center">
							<img class="mw-100 mr-2" src="buld/img/services_2.jpg" alt="">
							<ul class="list-inline mt-3 mt-md-0">
								<li>
									- Укладка кафельной плитки в ванной
								</li>
								<li class="py-2">
									- Укладка керамической плитки в ванной
								</li>
								<li>
									- Укладка клинкерной плитки в ванной
								</li>
								<li class="py-2">
									- Укладка мраморной плитки в ванной
								</li>
								<li>
									- Укладка мозаичной плитки в ванной
								</li>
							</ul>
						</div>
						<div class="pt-3 pl-3 ml-auto mr-auto ml-xl-0">
							<button class="modalOpen">
								Заказать услугу
							</button>
						</div>
					</div>

					<div class="d-flex flex-column col-12 col-xl-6 p-0 mb-4">
						<h3 class="mb-3 text-center text-xl-left">
							Укладка плитки на стену
						</h3>
					<div class="d-flex flex-column flex-md-row align-items-center justify-content-center">
							<img class="mw-100 mr-2" src="buld/img/services_3.jpg" alt="">
							<ul class="list-inline mt-3 mt-md-0">
								<li>
									- Укладка кафельной плитки на стену
								</li>
								<li class="py-2">
									- Укладка керамической плитки на стену
								</li>
								<li>
									- Укладка клинкерной плитки на стену
								</li>
								<li class="py-2">
									- Укладка мраморной плитки на стену
								</li>
								<li>
									- Укладка мозаичной плитки на стену
								</li>
							</ul>
						</div>
						<div class="pt-3 pl-3 ml-auto mr-auto ml-xl-0">
							<button class="modalOpen">
								Заказать услугу
							</button>
						</div>
					</div>

					<div class="d-flex flex-column col-12 col-xl-6 p-0 mb-4">
						<h3 class="mb-3 text-center text-xl-left">
							Укладка плитки на кухне
						</h3>
					<div class="d-flex flex-column flex-md-row align-items-center justify-content-center">
							<img class="mw-100 mr-2" src="buld/img/services_4.jpg" alt="">
							<ul class="list-inline mt-3 mt-md-0">
								<li>
									- Укладка кафельной плитки на кухне
								</li>
								<li class="py-2">
									- Укладка керамической плитки на кухне
								</li>
								<li>
									- Укладка клинкерной плитки на кухне
								</li>
								<li class="py-2">
									- Укладка мраморной плитки на кухне
								</li>
								<li>
									- Укладка мозаичной плитки на кухне
								</li>
							</ul>
						</div>
						<div class="pt-3 pl-3 ml-auto mr-auto ml-xl-0">
							<button class="modalOpen">
								Заказать услугу
							</button>
						</div>
					</div>

					<div class="d-flex flex-column col-12 col-xl-6 p-0 mb-4">
						<h3 class="mb-3 text-center text-xl-left">
							Укладка плитки в коридоре
						</h3>
					<div class="d-flex flex-column flex-md-row align-items-center justify-content-center">
							<img class="mw-100 mr-2" src="buld/img/services_5.jpg" alt="">
							<ul class="list-inline mt-3 mt-md-0">
								<li>
									-Укладка кафельной плитки в коридоре
								</li>
								<li class="py-2">
									- Укладка керамической плитки в коридоре
								<li>
									- Укладка клинкерной плитки в коридоре
								</li>
								<li class="py-2">
									- Укладка мраморной плитки в коридоре
								</li>
								<li>
									- Укладка мозаичной плитки в коридоре
								</li>
							</ul>
						</div>
						<div class="pt-3 pl-3 ml-auto mr-auto ml-xl-0">
							<button class="modalOpen">
								Заказать услугу
							</button>
						</div>
					</div>

					<div class="d-flex flex-column col-12 col-xl-6 p-0 mb-4">
						<h3 class="mb-3 text-center text-xl-left">
							Другие наши услуги
						</h3>
					<div class="d-flex flex-column flex-md-row align-items-center justify-content-center">
							<img class="mw-100 mr-2" src="buld/img/services_6.jpg" alt="">
							<ul class="list-inline mt-3 mt-md-0">
								<li>
									-Выполняем штукатурные работы
								</li>
								<li class="py-2">
									- Установка сантехнических приборов
								<li>
									- Разводка водоправода
								</li>
								<li class="py-2">
									- Качественная запилка плитки под<br> 45 градусов
								</li>
								<li>
									- Затирка швов эпоксидными составами
								</li>
							</ul>
						</div>
						<div class="pt-3 pl-3 ml-auto mr-auto ml-xl-0">
							<button class="modalOpen">
								Заказать услугу
							</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>


	<section class="form py-2">
		<div class="container">
			<div class="d-flex justify-content-end">
				<img class="img mw-100" src="buld/img/form.png" alt="">
				<img class="percent mw-100" src="buld/img/percent.svg" alt="">
				<div class="col-12 col-md-8 col-lg-6 text-center text-md-left py-2">
					<h2>
						Скидки всем покупателям на стройматериалы!
					</h2>
					<p class="py-2">
						Скидки до 50%  на строительные материалы<br>
						во всех крупнейших строительных магазинах<br>
						Владимирской области
					</p>
					<form class="d-flex flex-column flex-xl-row" method="" action="">
						<input class="mb-2 mb-xl-0" placeholder="Ваш номер" type="number">
						<button type="submit">Заказать звонок</button>
					</form>
				</div>
			</div>
		</div>
	</section>


	<section id="about" class="client py-5">
		<div class="container">
			<div class="d-flex flex-column flex-lg-row align-items-center justify-content-between">

				<div class="col-12 col-lg-7">
					<h2 class="text-center text-lg-left pb-1 pb-lg-3">
						Почему клиенты выбирают нас
					</h2>
					<p class="text-center text-lg-left">
						Все работы осуществляются со строгим соблюдением технологических принципов<br class="d-none d-lg-block">
						и использованием необходимого оборудования.<br><br class="d-none d-lg-block">
						Кроме непосредственной укладки наша компания предоставляет услуги<br class="d-none d-lg-block">
						по ремонту либо замене кафельного покрытия.<br class="d-none d-lg-block">
						По требованию заказчика мы осуществляем полный демонтаж старой плитки<br class="d-none d-lg-block">
						и зачищаем поверхность под ней для нового настенного либо полового материала.<br class="d-none d-lg-block">
						Выполним укладку любой сложности, дизайн проекты по укладке плитки.
					</p>
					<h5 class="pb-lg-2 pt-4 pb-lg-3">
						Заключив договор вы получаете:
					</h5>
					<ul class="list-inline mt-3 mt-md-0">
						<li class="d-flex align-items-center">
							<div class="col-1 d-flex align-items-center justify-content-center mr-2 p-0">
								<img class="mw-100" src="buld/img/cheak_mark.svg" alt="">
							</div>
							<p>
								Качественную и современно исполненную работу в оговоренные сроки
							</p>
						</li>
						<li class="d-flex align-items-center">
							<div class="col-1 d-flex align-items-center justify-content-center mr-2 p-0">
								<img class="mw-100" src="buld/img/cheak_mark.svg" alt="">
							</div>
							<p>
								Гарантию на выполненные работы
							</p>
						</li>
						<li class="d-flex align-items-center">
							<div class="col-1 d-flex align-items-center justify-content-center mr-2 p-0">
								<img class="mw-100" src="buld/img/cheak_mark.svg" alt="">
							</div>
							<p>
								Грамотный подход в выборе материалов
							</p>
						</li>
						<li class="d-flex align-items-center">
							<div class="col-1 d-flex align-items-center justify-content-center mr-2 p-0">
								<img class="mw-100" src="buld/img/cheak_mark.svg" alt="">
							</div>
							<p>
								Большой опыт укладки плитки высокого уровня с самыми дорогими и современными материалами
							</p>
						</li>
						<li class="d-flex align-items-center">
							<div class="col-1 d-flex align-items-center justify-content-center mr-2 p-0">
								<img class="mw-100" src="buld/img/cheak_mark.svg" alt="">
							</div>
							<p>
								Договор и смету
							</p>
						</li>
						<li class="d-flex align-items-center">
							<div class="col-1 d-flex align-items-center justify-content-center mr-2 p-0">
								<img class="mw-100" src="buld/img/cheak_mark.svg" alt="">
							</div>
							<p>
								Квалифицированные мастера , без вредных привычек
							</p>
						</li>
						<li class="d-flex align-items-center">
							<div class="col-1 d-flex align-items-center justify-content-center mr-2 p-0">
								<img class="mw-100" src="buld/img/cheak_mark.svg" alt="">
							</div>
							<p>
								Контроль качества и отчетность
							</p>
						</li>
					</ul>
				</div>

				<div class="client__img col-10 col-lg-5 text-center">
					<img class="mw-100" src="buld/img/client.jpg" alt="">
					<img class="client__icon mw-100" src="buld/img/client__icon.svg" alt="">
				</div>
			</div>
		</div>
	</section>


	<section id="reverse" class="slider py-5">
        <div class="container">
			<h2 class="text-center text-xl-left pb-5">
				Отзывы наших клиентов
			</h2>
			<img class="slider__icon mw-100" src="buld/img/slider__icon.svg" alt="">
            <div class="slider-slide">

                <div class="py-5">
					<div class="slider__form col-11 col-xl-8 text-center text-sm-left m0-auto">
						<h4>
							В 4-ый раз остаюсь довольной
						</h4>
						<p class="py-3">
							Спешу поделиться впечатлениями от работы специалистов,<br class="d-none d-lg-block">
							производивших укладку плитки у нас в квартире. Это настоящие<br class="d-none d-lg-block">
							профессионалы своего дела. Наш бюджет был ограничен, но они<br class="d-none d-lg-block">
							подобрали нам подходящий вариант, осуществили укладку<br class="d-none d-lg-block">
							быстро, без лишнего шума и пыли. Мы очень довольны. Спасибо!
						</p>
						<div class="d-flex align-items-center justify-content-center justify-content-sm-start">
							<img class="mw-100 mr-4" src="buld/img/reverse.jpg" alt="">
							<h5>Анастасия Ковалева</h5>
						</div>
					</div>
				</div>
				<div class="py-5">
					<div class="slider__form col-11 col-xl-8 text-center text-sm-left m0-auto">
						<h4>
							В 4-ый раз остаюсь довольной
						</h4>
						<p class="py-3">
							Спешу поделиться впечатлениями от работы специалистов,<br class="d-none d-lg-block">
							производивших укладку плитки у нас в квартире. Это настоящие<br class="d-none d-lg-block">
							профессионалы своего дела. Наш бюджет был ограничен, но они<br class="d-none d-lg-block">
							подобрали нам подходящий вариант, осуществили укладку<br class="d-none d-lg-block">
							быстро, без лишнего шума и пыли. Мы очень довольны. Спасибо!
						</p>
						<div class="d-flex align-items-center justify-content-center justify-content-sm-start">
							<img class="mw-100 mr-4" src="buld/img/reverse.jpg" alt="">
							<h5>Анастасия Ковалева</h5>
						</div>
					</div>
				</div>
            </div>
        </div>
    </section>


	<section id="portf" class="work pb-5">
		<div class="container">
			<h2 class="text-center text-xl-left pb-3">
				Наши работы
			</h2>
			<div class="slider-work">>

				<div class="d-flex flex-column">
					<a data-lightbox="slider" href="buld/img/work__1.jpg">
						<img class="mw-100 m0-auto" src="buld/img/work__1.jpg" alt="">
					</a>
					<a data-lightbox="slider" href="buld/img/work__2.jpg">
						<img class="mw-100 m0-auto" src="buld/img/work__2.jpg" alt="">
					</a>
				</div>
				<div class="d-flex flex-column">
					<a data-lightbox="slider" href="buld/img/work__3.jpg">
						<img class="mw-100 m0-auto" src="buld/img/work__3.jpg" alt="">
					</a>
					<a data-lightbox="slider" href="buld/img/work__2.jpg">
						<img class="mw-100 m0-auto" src="buld/img/work__2.jpg" alt="">
					</a>
				</div>
				<div class="d-flex flex-column">
					<a data-lightbox="slider" href="buld/img/work__1.jpg">
						<img class="mw-100 m0-auto" src="buld/img/work__1.jpg" alt="">
					</a>
					<a data-lightbox="slider" href="buld/img/work__2.jpg">
						<img class="mw-100 m0-auto" src="buld/img/work__2.jpg" alt="">
					</a>
				</div>
				<div class="d-flex flex-column">
					<a data-lightbox="slider" href="buld/img/work__3.jpg">
						<img class="mw-100 m0-auto" src="buld/img/work__3.jpg" alt="">
					</a>
					<a data-lightbox="slider" href="buld/img/work__2.jpg">
						<img class="mw-100 m0-auto" src="buld/img/work__2.jpg" alt="">
					</a>
				</div>
			</div>
		</div>
	</section>



	<section id="discounts" class="discounts py-5">
		<div class="container">
			<div class="d-flex flex-column-reverse flex-lg-row align-items-center justify-content-around">

				<form class="d-flex flex-column align-items-center justify-content-center text-center col-12 col-sm-8 col-lg-4" method="" action="">
					<h3 class="mb-4">Оставьте заявку<br> с расчетом стоимости ремонта</h3>
					<div class="select d-flex w-100">
						<select class="mr-2 p-2 w-100">
							<option>Вид услуг</option>
							<option>Вид услуг_1</option>
							<option>Вид услуг_2</option>
							<option>Вид услуг_3</option>
							<option>Вид услуг_4</option>
						</select>
						<input placeholder="кв.м" type="text">
					</div>
					<input class="w-100 my-2" placeholder="Ваше имя" type="text">
					<input class="w-100" placeholder="Ваш номер телефона" type="text">
					<div class="mt-3">
						<button type="submit">Заказать звонок</button>
					</div>
					<p class="py-3 ">
						Нажимая на кнопку, Вы даете согласие на обработку <a href="#">персональных данных</a>
					</p>
				</form>

				<div class="col-12 col-lg-5 text-center text-lg-left mb-4 mb-lg-0">
					<h2 class="pb-3">
						Скидки всем клиентам<br class="d-none d-lg-block">
						на любую услугу!
					</h2>
					<p>
						Заполните форму и получите свою <span>скидку в 20% </span><br class="d-none d-lg-block">
						на любую услугу!
					</p>
				</div>
			</div>
		</div>
	</section>
</main>

<?php
    require 'templates/__footer.php';
?>

</html>