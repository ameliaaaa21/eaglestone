<?php
    $menu_item_page = "gallery";
?>
@extends('layouts.template')

@section('content')
<!-- ======= My Portfolio Section ======= -->
<section id="portfolio" class="portfolio pt-0">
		<div class="container">

		<div class="section-title">
  			<span>GALLERY</span>
  			<h2>GALLERY</h2>
  			<p>Sit sint consectetur velit quisquam cupiditate impedit suscipit alias</p>
		</div>

    	<div class="row portfolio-container">

      		<div class="col-lg-4 col-md-6 portfolio-item filter-app">
        		<div class="portfolio-img"><img src="{{ asset('img/portfolio/portfolio-1.jpg') }}" class="img-fluid" alt=""></div>
      		</div>

      		<div class="col-lg-4 col-md-6 portfolio-item filter-web">
        		<div class="portfolio-img"><img src="{{ asset('img/portfolio/portfolio-2.jpg') }}" class="img-fluid" alt=""></div>
      		</div>

      		<div class="col-lg-4 col-md-6 portfolio-item filter-app">
        		<div class="portfolio-img"><img src="{{ asset('img/portfolio/portfolio-3.jpg') }}" class="img-fluid" alt=""></div>
        		
      		</div>

      		<div class="col-lg-4 col-md-6 portfolio-item filter-card">
        		<div class="portfolio-img"><img src="{{ asset('img/portfolio/portfolio-4.jpg') }}" class="img-fluid" alt=""></div>
        		
      		</div>

      		<div class="col-lg-4 col-md-6 portfolio-item filter-web">
	            <div class="portfolio-img"><img src="{{ asset('img/portfolio/portfolio-5.jpg') }}" class="img-fluid" alt=""></div>
	            
      		</div>

      		<div class="col-lg-4 col-md-6 portfolio-item filter-app">
	            <div class="portfolio-img"><img src="{{ asset('img/portfolio/portfolio-6.jpg') }}" class="img-fluid" alt=""></div>
	            
      		</div>

      		<div class="col-lg-4 col-md-6 portfolio-item filter-card">
	            <div class="portfolio-img"><img src="{{ asset('img/portfolio/portfolio-7.jpg') }}" class="img-fluid" alt=""></div>
	            
      		</div>

      		<div class="col-lg-4 col-md-6 portfolio-item filter-card">
	            <div class="portfolio-img"><img src="{{ asset('img/portfolio/portfolio-8.jpg') }}" class="img-fluid" alt=""></div>
	            
      		</div>

      		<div class="col-lg-4 col-md-6 portfolio-item filter-web">
	            <div class="portfolio-img"><img src="{{ asset('img/portfolio/portfolio-9.jpg') }}" class="img-fluid" alt=""></div>
	            
      		</div>
    	</div>
		</div>
</section><!-- End My Portfolio Section -->
@endsection('content')