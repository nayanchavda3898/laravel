@extends('master')
@section('content')

<div class="container">
     <center><h1> <b> Ground Booking Form</b></h1></center>
		<form action="insert_ground_book" method="post" class="bg-light p-5 contact-form">
		@csrf
			<div class="form-group">
				Name :-
			  <input type="text" class="form-control" name="name" placeholder="Your Name" required="">
			</div>
			<div class="form-group">
				Email Id :-
			  <input type="email" name="email" class="form-control" placeholder="Your Email" required>
			</div>
			<div class="form-group">
			  Contact No :-
				<input type="number" class="form-control" placeholder="Contact No" required>
			</div>
			<div class="form-group">
				Purpose :-
			<select name="Purpose" id="purpose_id" class="form-control">
			  @foreach($data as $show)
			  <option value="">{{$show->batch_name}}</option>
			  @endforeach
			  </select>
			</div>
			<div class="form-group">
				Date :-
				  <input type="date" class="form-control" required>
			  </div>
			<div class="form-group">
				Days :-
				  <input type="number" class="form-control" placeholder="How Many Days?" required>
			  </div>
			  
			  <div class="form-group">
				Amount :-
				  <input type="number" class="form-control">
			  </div>
			  <div class="form-group">
				  <input type="button" value="Calculate Amount" class="form-control">
			  </div>
			<div class="form-group">
			  <input type="reset" value="Clear" class="btn btn-primary py-3 px-5">
			  <input type="submit" value="Send" class="btn btn-primary py-3 px-5">
			</div>
		  </form>
    </div>
@endsection