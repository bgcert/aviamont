@extends('layouts.app')

@section('content')
<!-- start banner Area -->
<section class="banner-area relative" id="home">	
	<div class="overlay overlay-bg"></div>
	<div class="container">				
		<div class="row d-flex align-items-center justify-content-center">
			<div class="about-content col-lg-12">
				<h1 class="text-white">
					Ремонтна база
				</h1>	
				<p class="text-white link-nav"><a href="index.html">Начало </a>  <span class="lnr lnr-arrow-right"></span>  <a href="projects.html"> Ремонтна база</a></p>
			</div>	
		</div>
	</div>
</section>
<!-- End banner Area -->

<!-- Start project Area -->
<section class="project-area section-gap" id="project">
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
@endsection