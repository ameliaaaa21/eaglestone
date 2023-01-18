<?php
    $menu_item_page = "index";
?>
@extends('layouts.template')

@section('content')
<div class="container">
	<div class="row">
		<div class="center-block">
			<div id="carouselBannerProducts" class="carousel slide carouselBannerProducts" data-bs-ride="carousel">
			  	<!-- <div class="carousel-indicators">
				    <button type="button" data-bs-target="#carouselBannerProducts" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
				    <button type="button" data-bs-target="#carouselBannerProducts" data-bs-slide-to="1" aria-label="Slide 2"></button>
				    <button type="button" data-bs-target="#carouselBannerProducts" data-bs-slide-to="2" aria-label="Slide 3"></button>
			  	</div> -->
			  	<div class="carousel-inner">
				    <div class="carousel-item active" data-bs-interval="3000">
				      	<img src="{{ asset('img/banner/banner_00.jpg') }}" alt="...">
				      	<!-- <div class="carousel-caption text-start banner-info">
				        	<h5>First slide label</h5>
				        	<p>Some representative placeholder content for the first slide.</p>
				      	</div> -->
				    </div>
				    <div class="carousel-item" data-bs-interval="3000">
				      	<img src="{{ asset('img/banner/banner_01.jpg') }}" alt="...">
				      	<!-- <div class="carousel-caption text-start">
				        	<h5>Second slide label</h5>
				        	<p>Some representative placeholder content for the first slide.</p>
				      	</div> -->
				    </div>
				    <div class="carousel-item" data-bs-interval="3000">
				      	<img src="{{ asset('img/banner/banner_02.jpg') }}" alt="...">
				      	<!-- <div class="carousel-caption text-start">
				        	<h5>Third slide label</h5>
				        	<p>Some representative placeholder content for the first slide.</p>
				      	</div> -->
				    </div>
			  	</div>
			  	<button class="carousel-control-prev" type="button" data-bs-target="#carouselBannerProducts" data-bs-slide="prev">
			    	<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			    	<span class="visually-hidden">Previous</span>
			  	</button>
			  	<button class="carousel-control-next" type="button" data-bs-target="#carouselBannerProducts" data-bs-slide="next">
			    	<span class="carousel-control-next-icon" aria-hidden="true"></span>
			    	<span class="visually-hidden">Next</span>
			  	</button>
			</div>			
		</div>
	</div>
</div>
<main id="main">
	<section id="about" class="about">
		<div class="container">
			<div class="section-title">
				<span>About Us</span>
				<h2>About Us</h2>
      			<p>
      				We supply products with many different textures, colors, finishings and sizes. We offer our customers a full range of natural stone products at very competitive prices in every form and size such as tiles, slabs, mosaics, borders, moldings, medallions, sinks, pool copings and pavers.
      			</p>
			</div>
		</div>
	</section>

	<section id="product" class="portfolio pt-0">
		<div class="container php-email-form">
			<div class="section-title">
				<span>Products</span>
				<h2>Products</h2>
			</div>
			<div class="row portfolio-container">
				<div class="col-lg-4 col-md-6 portfolio-item">
					<div class="portfolio-img"><img src="{{ asset('images/Light Grey Mosaic.jpg') }}" class="img-fluid" alt=""></div>
					<div class="portfolio-info">
						<h4>Light Grey Mosaic</h4>
          				<p>Pebble</p>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 portfolio-item">
					<div class="portfolio-img"><img src="{{ asset('images/Slice Pancawarna Peble.jpg') }}" class="img-fluid" alt=""></div>
					<div class="portfolio-info">
						<h4>Slice Pancawarna Pebble</h4>
          				<p>Pebble</p>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 portfolio-item">
					<div class="portfolio-img"><img src="{{ asset('images/Slice Mix Harmony.jpg') }}" class="img-fluid" alt=""></div>
					<div class="portfolio-info">
						<h4>Slice Mix Harmony</h4>
          				<p>Pebble</p>
					</div>
				</div>
			</div>
			<div class="text-center"><a href="{{ route('products') }}" class="btn-browsemore">Browse More</a></div>
		</div>
	</section>
</main>
@endsection

@section('script')
@endsection