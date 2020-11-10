@extends('master')
@section('content')

<div class="container">
     <center><h1> <b>Batch Registration</b></h1></center>
		<form action="insert_batch_registration" method="post" class="bg-light p-5 contact-form">
			<div class="form-group">
				Name :-
			  <input type="text" class="form-control" placeholder="Your Name" required>
			</div>
			<div class="form-group">
				Email Id :-
			  <input type="email" class="form-control" placeholder="Your Email" required>
			</div>
			<div class="form-group">
			  Contact No :-
				<input type="number" class="form-control" placeholder="Contact No" required>
			</div>
			<div class="form-group">
				Batch Type :-
			  <select name="Purpose of ground" id="purpose_id" class="form-control"><option value="">Regular</option><option value="">Vacation</option></select>
			</div>
			<div class="form-group">
                User Type :-   
                <!-- Senior Citizon ne discount madse -->
			  <select name="Purpose of ground" id="purpose_id" class="form-control"><option value="">Regular</option><option value="">Senior Citizon</option></select>
            </div>
            <div class="form-group">
				Batch Timing :-
			  <select name="" id="batch_id" class="form-control"><option value="">7am-11am</option><option value="">4pm-7pm</option></select>
			</div>
			<div class="form-group">
			From Date :-
				  <input type="datetime-local" class="form-control" required>
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
			  <input type="submit" value="Join" class="btn btn-primary py-3 px-5">
			</div>
		  </form>
    </div>

@endsection