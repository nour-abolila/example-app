@extends('layouts.master')

@section('content')



	<!-- contact form -->
	<div class="contact-from-section mt-150 mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 mb-2 mb-lg-0">
					<div class="form-title">
						<h2>Have you any question?</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur, ratione! Laboriosam est, assumenda. Perferendis, quo alias quaerat aliquid. Corporis ipsum minus voluptate? Dolore, esse natus!</p>
					</div>
				 	<div id="form_status"></div>
					<div class="contact-form">
						<form action="{{ route ('add.review') }}" method="POST" id="fruitkha-contact" onSubmit="return valid_datas( this );">
                            @csrf
                            @method('POST')
							<p>
								<input type="text" placeholder="Name" name="name" id="name">
								<input type="email" placeholder="Email" name="email" id="email">
							</p>
							<p>
								<input type="tel" placeholder="Phone" name="phone" id="phone">
								<input type="text" placeholder="Subject" name="subject" id="subject">
							</p>
							<p><textarea name="message" id="message" cols="30" rows="10" placeholder="Message"></textarea></p>
							<input type="hidden" name="token" value="FsWga4&@f6aw" />
							<p><input type="submit" value="Submit"></p>
						</form>
					</div>
				</div>
    
<!-- testimonail-section -->
	<div class="testimonail-section mt-80 mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-10 offset-lg-1 text-center">
					<div class="testimonial-sliders">
					@foreach ($reviews as $item)
                        <div class="single-testimonial-slider">
							<div class="client-avater">
								<img src="assets/img/avaters/avatar1.png" alt="">
							</div>
							<div class="client-meta">
								<h3>{{ $item -> name }} <span>{{$item -> phone}}</span></h3>
                                <h3>{{ $item -> email }}</h3>
                                <h4>{{ $item -> subject }}</h4>
								<p class="testimonial-body">
									  {{ $item -> message }}
								<div class="last-icon">
									<i class="fas fa-quote-right"></i>
								</div>
							</div>
						</div>
                    @endforeach
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end testimonail-section -->



@endsection