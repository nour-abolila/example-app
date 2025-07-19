@extends('layouts.master')

@section('content')


<!-- start section  one -->
<div class="product-section mt-150 mb-150">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 text-center">
                <div class="section-title">	
                    <h3><span class="orange-text">اضافة </span> منتج</h3>
                    <p>متعة التسوق عبر موقعنا</p>
                </div>
            </div>
        </div>
<!-- end section two -->

{{-- start section two --}}
			<div class="row">
				<div class="col-lg-12 mb-5 mb-lg-0">
					<div class="form-title">
					</div> 
				 	<div id="form_status"></div>
					<div class="contact-form">
						<form action="{{ route('products.store') }}" method="POST" id="fruitkha-contact">
							@csrf
							<p>
								<input type="text" required style="width:100%" placeholder="Name" name="name" id="name">
							</p>
							<p style="display:flex;">
                                <input type="number" required style="width:50%" class="mr-2" placeholder="price" name="price" id="price">
								<input type="number" required style="width:50%" placeholder="quantity" name="quantity" id="quantity">
							
							</p>
							<p><textarea name="description" required id="description" cols="30" rows="10" placeholder="description"></textarea></p>
					         <select name="category_id" required>
    <option value="">number</option>
    @foreach($categories as $cat)
        <option value="{{ $cat->id }}">{{ $cat->name }}</option>
    @endforeach
</select>

							<p><input type="submit" value="Submit"></p>
						</form>
					</div>
				</div>
				</div>
			</div>
		</div>
	</div>
    </div>
</div>
<!-- end section two -->














@endsection