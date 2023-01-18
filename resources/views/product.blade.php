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
	  			<p>Crafted by nature</p>
			</div>

	    	<ul id="portfolio-flters" class="d-flex justify-content-center">
	    		<li data-filter="*" class="filter-active">All</li>

	    		@foreach($kategoris as $kategori)
	    			<li data-filter=".filter-{{ $kategori['id'] }}">{{ $kategori['name'] }}</li>	
	    		@endforeach
			</ul>
			<br>

			<div class="row portfolio-container">

				@foreach($produks as $product)
					<div class="col-lg-4 col-md-6 portfolio-item filter-{{ $product['category_id'] }}">
			            <div class="portfolio-img-product"><a href="{{ asset('images/' . $product['array_image']) }}" data-gallery="portfolioGallery" title="{{ $product['name'] }}" class="portfolio-lightbox preview-link"><img src="{{ asset('images/' . $product['array_image']) }}" alt=""></a></div>
			            <h4>{{ $product['name'] }}</h4>
			            <p>{{ $product->category->name }}</p>
			        </div>
				@endforeach

			</div>
    	

    	
		</div>
</section><!-- End My Productcs Section -->
@endsection('content')