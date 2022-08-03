<?php
    $menu_item_page = "products";
?>
@extends('layouts.template')

@section('content')
<!-- ======= My Products Section ======= -->
<section id="portfolio" class="portfolio pt-0">
		<div class="container">

		<div class="section-title">
  			<span>PRODUCTS</span>
  			<h2>PRODUCTS</h2>
  			<p>Sit sint consectetur velit quisquam cupiditate impedit suscipit alias</p>
		</div>

    	<ul id="portfolio-flters" class="d-flex justify-content-center">
    		<li data-filter="*" class="filter-active">All</li>
		  	<li data-filter=".filter-app">Category A</li>
	        <li data-filter=".filter-card">Category B</li>
	        <li data-filter=".filter-web">Category C</li>
		</ul>
		<br>

		<div class="row portfolio-container">

			<div class="col-lg-4 col-md-6 portfolio-item filter-app">
	            <div class="portfolio-img-product"><a href="{{ asset('img/portfolio/portfolio-1.jpg') }}" data-gallery="portfolioGallery" title="Product Name" class="portfolio-lightbox preview-link"><img src="{{ asset('img/portfolio/portfolio-1.jpg') }}" alt=""></a></div>
	            <h4>Category A</h4>
	            <p>Product Name</p>
	        </div>

	        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
	            <div class="portfolio-img-product"><a href="{{ asset('img/portfolio/portfolio-1.jpg') }}" data-gallery="portfolioGallery" title="Product Name" class="portfolio-lightbox preview-link"><img src="{{ asset('img/portfolio/portfolio-1.jpg') }}" alt=""></a></div>
	            <h4>Category A</h4>
	            <p>Product Name</p>
	        </div>

	        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
	            <div class="portfolio-img-product"><a href="{{ asset('img/portfolio/portfolio-2.jpg') }}" data-gallery="portfolioGallery" title="Product Name" class="portfolio-lightbox preview-link"><img src="{{ asset('img/portfolio/portfolio-2.jpg') }}" alt=""></a></div>
	            <h4>Category B</h4>
	            <p>Product Name</p>
	        </div>

	        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
	            <div class="portfolio-img-product"><a href="{{ asset('img/portfolio/portfolio-3.jpg') }}" data-gallery="portfolioGallery" title="Product Name" class="portfolio-lightbox preview-link"><img src="{{ asset('img/portfolio/portfolio-3.jpg') }}" alt=""></a></div>
	            <h4>Category B</h4>
	            <p>Product Name</p>
	        </div>

	        <div class="col-lg-4 col-md-6 portfolio-item filter-card">
	            <div class="portfolio-img-product"><a href="{{ asset('img/portfolio/portfolio-4.jpg') }}" data-gallery="portfolioGallery" title="Product Name" class="portfolio-lightbox preview-link"><img src="{{ asset('img/portfolio/portfolio-4.jpg') }}" alt=""></a></div>
	            <h4>Category C</h4>
	            <p>Product Name</p>
	        </div>

	        <div class="col-lg-4 col-md-6 portfolio-item filter-card">
	            <div class="portfolio-img-product"><a href="{{ asset('img/portfolio/portfolio-5.jpg') }}" data-gallery="portfolioGallery" title="Product Name" class="portfolio-lightbox preview-link"><img src="{{ asset('img/portfolio/portfolio-5.jpg') }}" alt=""></a></div>
	            <h4>Category C</h4>
	            <p>Product Name</p>
	        </div>

		</div>
    	

    	<!-- pagination -->
    	<nav aria-label="Page navigation example">
		  	<ul class="pagination justify-content-center portfolio-pagination">
			    <li class="page-item">
			      	<a href="#" aria-label="Previous">
			        	<span aria-hidden="true">&laquo;</span>
			      	</a>
			    </li>
			    <li class="page-item"><a href="#">1</a></li>
			    <li class="page-item"><a href="#">2</a></li>
			    <li class="page-item"><a href="#">3</a></li>
			    <li class="page-item">
			      	<a href="#" aria-label="Next">
			        	<span aria-hidden="true">&raquo;</span>
			      	</a>
			    </li>
		  	</ul>
		</nav>
		</div>
</section><!-- End My Productcs Section -->
@endsection('content')