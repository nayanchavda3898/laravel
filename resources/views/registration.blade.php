@extends('master')
@section('content')

<div class="container">
     <center><h1> <b>Registration</b></h1></center>
		<form action="insert_registration" method="post" class="bg-light p-5 contact-form">
			<div class="form-group">
				Name :-
			  <input type="text" class="form-control" placeholder="Enter Your Name" required>
			</div>
			<div class="form-group">
				Email Id :-
			  <input type="email" class="form-control" placeholder="Enter Your Email" required>
			</div>
			<div class="form-group">
			  Contact No :-
				<input type="number" class="form-control" placeholder="Enter Your Contact Number" required>
			</div>
			<div class="form-group">
			  Password :-
				<input type="password" class="form-control" placeholder="Enter Password" required>
			</div>
			<div class="form-group">
			  Confirm Password :-
				<input type="password" class="form-control" placeholder="Enter Confirm Password" required>
			</div>
			<div class="form-group">
			  <input type="reset" value="Clear" class="btn btn-primary py-3 px-5">
              <input type="submit" value="Submit" class="btn btn-primary py-3 px-5">
			</div>
		  </form>
    </div>

@endsection