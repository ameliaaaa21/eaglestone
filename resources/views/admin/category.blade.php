@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="card">
			<div class="card-header">
				Category
			</div>
			<div class="card-body">
				<div id="card_add_category" class="card">
					<div class="card-body">
						<form id="form_add_category" class="form-sample" method="POST" action="">
							{{ csrf_field() }}
							<label>Add Category</label>
							<hr>
							<div class="form-group">
								<label>Category Name</label>
								<input type="text" name="name" class="form-control" required="">
							</div>
							<br>
							<div class="form-group">
								<button id="btn-add-category" type="submit" class="btn btn-primary">
	                           		Save
	                            </button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection('content')