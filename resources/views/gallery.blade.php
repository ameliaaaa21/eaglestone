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
        		<div class="portfolio-img"><img src="{{ asset('img/gallery/gallery_1.jpg') }}" class="img-fluid" alt=""></div>
      		</div>

      		<div class="col-lg-4 col-md-6 portfolio-item filter-web">
        		<div class="portfolio-img"><img src="{{ asset('img/gallery/gallery_3.jpg') }}" class="img-fluid" alt=""></div>
      		</div>

      		<div class="col-lg-4 col-md-6 portfolio-item filter-app">
        		<div class="portfolio-img"><img src="{{ asset('img/gallery/gallery_2.jpg') }}" class="img-fluid" alt=""></div>
        		
      		</div>

      		<div class="col-lg-4 col-md-6 portfolio-item filter-card">
        		<div class="portfolio-img"><img src="{{ asset('img/gallery/gallery_4.jpg') }}" class="img-fluid" alt=""></div>
        		
      		</div>

      		<div class="col-lg-4 col-md-6 portfolio-item filter-web">
	            <div class="portfolio-img"><img src="{{ asset('img/gallery/gallery_10.jpg') }}" class="img-fluid" alt=""></div>
	            
      		</div>

      		<div class="col-lg-4 col-md-6 portfolio-item filter-app">
	            <div class="portfolio-img"><img src="{{ asset('img/gallery/gallery_5.jpg') }}" class="img-fluid" alt=""></div>
	            
      		</div>

      		<div class="col-lg-4 col-md-6 portfolio-item filter-card">
	            <div class="portfolio-img"><img src="{{ asset('img/gallery/gallery_7.jpg') }}" class="img-fluid" alt=""></div>
	            
      		</div>

      		<div class="col-lg-4 col-md-6 portfolio-item filter-card">
	            <div class="portfolio-img"><img src="{{ asset('img/gallery/gallery_11.jpg') }}" class="img-fluid" alt=""></div>
	            
      		</div>

      		<div class="col-lg-4 col-md-6 portfolio-item filter-web">
	            <div class="portfolio-img"><img src="{{ asset('img/gallery/gallery_9.jpg') }}" class="img-fluid" alt=""></div>
	            
      		</div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
              <div class="portfolio-img"><img src="{{ asset('img/gallery/gallery_6.jpg') }}" class="img-fluid" alt=""></div>
              
          </div>
    	</div>
		</div>
</section><!-- End My Portfolio Section -->
@endsection('content')