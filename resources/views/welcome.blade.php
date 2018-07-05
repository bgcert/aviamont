@extends('layouts.app')

@section('content')

<!-- start banner Area -->
<section class="banner-area relative" id="home">
	<div class="overlay overlay-bg"></div>
	<div class="container">
		<div class="row fullscreen d-flex align-items-center justify-content-center">
			<div class="banner-content col-lg-12 col-md-12">
				<h6 class="text-uppercase">Don’t look further, here is the key</h6>
				<h1>
					Лицензиран авиационен оператор			
				</h1>
				<p class="text-white">
					Повече от 10 години Авиамонт АД извършва полети в съответствие с критериите за сертификация.
				</p>
				<a href="/contact" class="primary-btn header-btn text-uppercase">Свържете се с нас</a>
				<p class="mt-20"><a href="/documents/project_arz.pdf" target="_blank"><img src="/img/banner.png"></a></p>
			</div>
		</div>
	</div>
</section>
<!-- End banner Area -->

<!-- Start cat Area -->
<section class="cat-area section-gap" id="feature">
	<div class="container">							
		<div class="row">
			<div class="col-lg-4">	
				<div class="single-cat d-flex flex-column">
					<a href="#" class="hb-sm-margin mx-auto d-block"><span class="hb hb-sm inv hb-facebook-inv"><span class="lnr lnr-magic-wand"></span></span></a>
					<h4 class="mb-20" style="margin-top: 23px;">Специализирани операции за авиохимически работи</h4>
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

<section class="section-gap" id="carousel" style="background-image: url(/img/background-flag-blur.jpg); background-size: cover;">
	<div class="container">	
		@include('includes.carousel')
	</div>
</section>
<!-- Start home-about Area -->
<section class="home-about-area section-gap aboutus-about" id="about">
	<div class="container">
		<div class="row justify-content-center align-items-center">
			<div class="col-lg-8 col-md-12 home-about-left">
				<h1>
					"Авиоремонтен завод" ЕООД
				</h1>
				<p class="sub">Оторизиран сервизен център</p>
				<p>
					„Авиоремонтен завод“ ЕООД е регистрирано съгласно Търговския закон, като еднолично дружество с ограничена отговорност със седалище гр. Монтана. Дружеството е 100% собственост на "АВИАМОНТ" АД и се представлява от инж. Катя Атанасова-Василева – Управител).
				</p>
				<p>
					Дружеството изпълнява основно техническо обслужване на въздухоплавателни средства и техни агрегати, а от скоро - проектиране и производство на осветителни и отоплителни продукти.
				</p>
				<p>
					Пряко свързани с техническите обслужвания са изпълняваните производство и ремонт на техника за обслужване на въздухоплавателни средства, както и други дейности като търговия с резервни части.
				</p>
				<p class="pb-20">
					Дружеството е пряк наследник на приватизирания „Авиоремонтен завод“ ЕООД. Приватизацията е осъществена от специалисти с богат технически опит в изпълнението технически обслужвания и поддържането на летателна годност на въздухоплавателни средства, използвани основно за авиоаграрни работи.
				</p>
				<a class="primary-btn" href="#">Услугите, които предлагаме</a>
			</div>
			<div class="col-lg-4 col-md-12 home-about-right relative">
				<form class="form-wrap" action="#">
					<h4 class="text-white pb-20">Изпратете запитване</h4>
					<div class="form-select" id="service-select"">
						<select>
							<option value="1">Select Service</option>
							<option value="2">Service One</option>
							<option value="3">Service Two</option>
							<option value="4">Service Three</option>
							<option value="5">Service Four</option>
						</select>
					</div>								
					<input type="text" class="form-control" placeholder="name">
					<input type="phone" class="form-control" placeholder="Phone Number">
					<input type="email" class="form-control" placeholder="Email Address">
					<textarea name="message" id="" cols="30" rows="5" placeholder="Message" class="form-control"></textarea>
					<button class="primary-btn">Request Free Quote</button>
				</form>
			</div>
		</div>
	</div>	
</section>
<!-- End home-about Area -->

<!-- Start service Area -->
<section class="service-area section-gap" id="services">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-12 pb-30 header-text text-center">
				<h1 class="mb-10">Our Capturing Market Sectors</h1>
				<p>
					Who are in extremely love with eco friendly system..
				</p>
			</div>
		</div>						
		<div class="row">
			<div class="col-lg-4">
				<div class="single-service">
					<div class="thumb">
						<img src="img/service1.jpg" alt="">
					</div>
					<a href="/services"><h4>Специализирани операции за авиохимически работи</h4></a>
					<p>
						inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct women face higher conduct.
					</p>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="single-service">
					<div class="thumb">
						<img src="img/service2.jpg" alt="">
					</div>
					<h4>Организация за техническо обслужване-BG.145.4023</h4>
					<p>
						inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct women face higher conduct.
					</p>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="single-service">
					<div class="thumb">
						<img src="img/service3.jpg" alt="">
					</div>
					<h4>Обучение на пилоти за авиохимически работи</h4>
					<p>
						inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct women face higher conduct.
					</p>
				</div>
			</div>												
		</div>
	</div>	
</section>
<!-- End service Area -->

<!-- Start project Area -->
<section class="project-area section-gap" id="base">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-8 pb-30 header-text text-center">
				<h1 class="mb-10">Latest Finished Projects</h1>
				<p>
					Who are in extremely love with eco friendly system..
				</p>
			</div>
		</div>						
		<div class="row">
			<div class="col-lg-8 col-md-8">
				<a href="img/p1.jpg" class="img-gal">
					<img class="img-fluid single-project" src="img/p1.jpg" alt="">
				</a>	
			</div>
			<div class="col-lg-4 col-md-4">
				<a href="img/p2.jpg" class="img-gal">
					<img class="img-fluid single-project" src="img/p2.jpg" alt="">
				</a>	
			</div>						
			<div class="col-lg-6 col-md-6">
				<a href="img/p3.jpg" class="img-gal">
					<img class="img-fluid single-project" src="img/p3.jpg" alt="">
				</a>	
			</div>
			<div class="col-lg-6 col-md-6">
				<a href="img/p4.jpg" class="img-gal">
					<img class="img-fluid single-project" src="img/p4.jpg" alt="">
				</a>	
			</div>		
		</div>
	</div>	
</section>
<!-- End project Area -->	  

<!-- Start contact-page Area -->
<section class="contact-page-area section-gap">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-8 pb-30 header-text text-center">
				<h1 class="mb-10">Свържете се с нас</h1>
				<p>
					Who are in extremely love with eco friendly system..
				</p>
			</div>
		</div>	
		<div class="row">
			<div class="map-wrap" style="width:100%; height: 445px;" id="map"></div>
			<div class="col-lg-4 d-flex flex-column address-wrap">
				<div class="single-contact-address d-flex flex-row">
					<div class="icon">
						<span class="lnr lnr-home"></span>
					</div>
					<div class="contact-details">
						<h5>Монтана, България</h5>
						<p>56/8, West Panthapath</p>
					</div>
				</div>
				<div class="single-contact-address d-flex flex-row">
					<div class="icon">
						<span class="lnr lnr-phone-handset"></span>
					</div>
					<div class="contact-details">
						<h5>00 (880) 9865 562</h5>
						<p>Mon to Fri 9am to 6 pm</p>
					</div>
				</div>
				<div class="single-contact-address d-flex flex-row">
					<div class="icon">
						<span class="lnr lnr-envelope"></span>
					</div>
					<div class="contact-details">
						<h5>office@aviamont.com</h5>
						<p>Send us your query anytime!</p>
					</div>
				</div>														
			</div>
			<div class="col-lg-8">
				<form class="form-area " id="myForm" action="mail.php" method="post" class="contact-form text-right">
					<div class="row">	
						<div class="col-lg-6 form-group">
							<input name="name" placeholder="Въведете име" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Въведете име'" class="common-input mb-20 form-control" required="" type="text">

							<input name="email" placeholder="Въведете и-мейл адрес" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" class="common-input mb-20 form-control" required="" type="email">

							<input name="subject" placeholder="Относно" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Относно'" class="common-input mb-20 form-control" required="" type="text">
							<div class="mt-20 alert-msg" style="text-align: left;"></div>
						</div>
						<div class="col-lg-6 form-group">
							<textarea class="common-textarea form-control" name="message" placeholder="Съобщение" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Съобщение'" required=""></textarea>
							<button class="genric-btn primary circle mt-30" style="float: right;">Изпратете съобщението</button>								
						</div>
					</div>
				</form>	
			</div>
		</div>
	</div>	
</section>
<!-- End contact-page Area -->
@endsection