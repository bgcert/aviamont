@extends('layouts.app')

@section('content')
<!-- start banner Area -->
<section class="banner-area relative" id="home">	
	<div class="overlay overlay-bg"></div>
	<div class="container">				
		<div class="row d-flex align-items-center justify-content-center">
			<div class="about-content col-lg-12">
				<h1 class="text-white">
					Услуги			
				</h1>	
				<p class="text-white link-nav"><a href="/">Начало </a>  <span class="lnr lnr-arrow-right"></span>  <a href="/services"> Услуги</a></p>
			</div>	
		</div>
	</div>
</section>
<!-- End banner Area -->

<!-- Start service Area -->
<section class="service-area section-gap" id="service">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-12 pb-30 header-text text-center">
				<h1 class="mb-10">Услугите, които предлагаме</h1>
				<p>
					Who are in extremely love with eco friendly system..
				</p>
			</div>
		</div>						
		<div class="row">
			<div class="col-md-12 pb-30">
				<h4 class="mb-20">Техническо Обслужване самолет Ан-2, Двигател АШ-62ИР и витло AW-2-30</h4>
				<table class="table table-bordered">
					<thead>
						<tr>
							<th scope="col">Клас</th>
							<th scope="col" colspan="2">Категория</th>
							<th scope="col">Ограничения</th>
							<th scope="col">Базово</th>
							<th scope="col">Линейно</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<th scope="row">BC</th>
							<td>А2 Самолети под 5700 кг.</td>
							<td>Антонов Ан-2 <br>Двигател АШ-62ИР</td>
							<td>Всички форми до КВР включително</td>
							<td>Да</td>
							<td>Да</td>
						</tr>
					</tbody>
				</table>
				<ul class="mb-20">
					<li>Капитално Възстановителен ремонт витло AW-2-30;</li>
					<li>Специален ремонт на витло AW-2-30 на базата на Анекс 2 към Ръководството за ремонт на витло АВ-2 по местонахождение на самолета;</li>
					<li>Капитално Възстановителен ремонт на  компонентите на самолет Ан-2 и Двигател АШ-62ИР съгласно СПИСЪК НА ОДОБРЕНИТЕ ДЕЙНОСТИ.</li>
				</ul>
				<table class="table table-bordered">
					<thead>
						<tr>
							<th scope="col">Клас</th>
							<th scope="col" colspan="2">Категория</th>
							<th scope="col">Ограничения</th>
							<th scope="col">Базово</th>
							<th scope="col">Линейно</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Двигател</td>
							<td>В2 Бутални двигатели</td>
							<td>Двигател АШ-62ИР</td>
							<td>Всички форми до  КВР включително</td>
							<td>Да</td>
							<td>Да</td>
						</tr>
						<tr>
							<td colspan="2">Други компоненти освен цели двигатели или СЕА</td>
							<td>
								<ul>
									<li>- СЗ Свързочно и навигационно оборудване</li>
									<li>- С4 Врати - люкове</li>
									<li>- С5 Елекгрозахранване</li>
									<li>- С6 Кабинно –битово оборудване</li>
									<li>- C7 Двигател</li>
									<li>- С8 Системи за управление</li>
									<li>- С9 Горивна система</li>
									<li>- С13 Прибори</li>
									<li>- С14 Колесник</li>
									<li>- С16 Витла</li>
									<li>- С17 Пневматична система</li>
									<li>- С18 Предпазване от лед/дъжд/пожар</li>
									<li>- С19 Остъкление</li>
									<li>- C20 Силова конструкция</li>
								</ul>
							</td>
							<td colspan="3">Съгласно ООТО- "Списък на одобрените дейности"</td>
						</tr>
						<tr>
							<td colspan="2">Специализирани дейности </td>
							<td>
								D.1 Без разрушителен контрол
								<ul>
									<li>- Цветна  дефектоскопия</li>
									<li>- Магнитен контрол</li>
								</ul>
							</td>
							<td colspan="3">Специализирани дейности</td>
						</tr>
					</tbody>
				</table>
			</div>								
		</div>
	</div>	
</section>
<!-- End service Area -->			

<!-- Start cat Area -->
<section class="cat-area section-gap aboutus-cat" id="feature">
	<div class="container">							
		<div class="row">
			<div class="col-lg-4">	
				<div class="single-cat d-flex flex-column">
					<a href="#" class="hb-sm-margin mx-auto d-block"><span class="hb hb-sm inv hb-facebook-inv"><span class="lnr lnr-magic-wand"></span></span></a>
					<h4 class="mb-20" style="margin-top: 23px;">Maintenance</h4>
					<p>
						inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct standards especially in the workplace. That’s why.
					</p>
				</div>															
			</div>
			<div class="col-lg-4">	
				<div class="single-cat">
					<a href="#" class="hb-sm-margin mx-auto d-block"><span class="hb hb-sm inv hb-facebook-inv"><span class="lnr lnr-rocket"></span></span></a>
					<h4 class="mt-40 mb-20">Residental Service</h4>
					<p>
						inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct standards especially in the workplace. That’s why.
					</p>
				</div>															
			</div>
			<div class="col-lg-4">
				<div class="single-cat">
					<a href="#" class="hb-sm-margin mx-auto d-block"><span class="hb hb-sm inv hb-facebook-inv"><span class="lnr lnr-bug"></span></span></a>
					<h4 class="mt-40 mb-20">Commercial Service</h4>
					<p>
						inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct standards especially in the workplace. That’s why.
					</p>
				</div>							
			</div>
		</div>
	</div>	
</section>
<!-- End cat Area -->						

<!-- Start feedback Area -->
<section class="feedback-area aboutus-feedback section-gap" id="feedback">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-12 pb-60 header-text text-center">
				<h1 class="mb-10">Enjoy our Client’s Feedback</h1>
				<p>
					Who are in extremely love with eco friendly system..
				</p>
			</div>
		</div>			
		<div class="row feedback-contents justify-content-center align-items-center">
			<div class="col-lg-6 feedback-left relative d-flex justify-content-center align-items-center">
				<div class="overlay overlay-bg"></div>
				<a class="play-btn" href="https://www.youtube.com/watch?v=ARA0AxrnHdM"><img class="img-fluid" src="img/play-btn.png" alt=""></a>
			</div>
			<div class="col-lg-6 feedback-right">
				<div class="active-review-carusel">
					<div class="single-feedback-carusel">
						<div class="title d-flex flex-row">
							<h4 class="pb-10">Fannie Rowe</h4>
							<div class="star">
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star"></span>
								<span class="fa fa-star"></span>								
							</div>										
						</div>
						<p>
							Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker. Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker.
						</p>
					</div>
					<div class="single-feedback-carusel">
						<div class="title d-flex flex-row">
							<h4 class="pb-10">Fannie Rowe</h4>
							<div class="star">
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star"></span>								
							</div>										
						</div>
						<p>
							Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker. Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker.
						</p>
					</div>
					<div class="single-feedback-carusel">
						<div class="title d-flex flex-row">
							<h4 class="pb-10">Fannie Rowe</h4>
							<div class="star">
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked	"></span>								
							</div>										
						</div>
						<p>
							Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker. Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker.
						</p>
					</div>																
				</div>
			</div>
		</div>
	</div>	
</section>
<!-- End feedback Area -->
@endsection