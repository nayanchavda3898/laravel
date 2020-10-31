@extends('master')
@section('content')
   <div class="container">
     <center><h1> <b>Login</b></h1></center>
		<form action="#" class="bg-light p-5 contact-form">
			<div class="form-group">
				Username :-
			  <input type="text" class="form-control" required>
			</div>
			<div class="form-group">
				Password :- 
			  <input type="password" class="form-control" required>
			</div>
			
			<div class="form-group">
			  <input type="submit" value="Login" class="btn btn-primary py-3 px-5">
			</div>
		  </form>
    </div>
@endsection