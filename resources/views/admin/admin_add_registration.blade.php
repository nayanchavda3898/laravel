
@extends('admin/admin_header')
@section('content')
    
<h1>Add Registration</h1>
    <nav class="navbar navbar-default mb-xl-5 mb-4">
        <div class="outer-w3-agile col-xl mt-3">
        <!-- <h4 class="tittle-w3-agileits mb-4">Add Registeration</h4> -->
        <form action="insert_registration" method="post">
        @csrf
        <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" name="rname"  placeholder="Name" required="" id="name"> 
            </div>
        <div class="form-group">
                <label for="emailid">E-mail id</label>
                <input type="email" class="form-control" name="remail"  placeholder="Email" required="" id="emailid"> 
            </div>
        <div class="form-group">
                <label for="cnumber">Contact Number</label>
                <input type="number" class="form-control" name="rcnumber"  placeholder="Contact number" required="" id="cnumber"> 
            </div>
            <div class="form-group">
                <label for="cgender">Select Gender :-</label>
                <!-- <input type="number" class="form-control" name="gcnumber"  placeholder="Contact number" required="" id="cnumber">  -->
                <input type="radio" name="rgender" value="Male" id="gen_male">Male
                <input type="radio" name="rgender" value="Female" id="gen_female" >Female
            </div>
            
            <div class="form-group">
                    <label for="cnumber">Age</label>
                    <input type="number" name="rage" class="form-control" placeholder="Enter Age">
                </div>
                <div class="form-group">
                    <label for="cnumber">Password</label>
                    <input type="password" class="form-control" name="rpassword" placeholder="Enter password">
                </div>
            
            <center>
            <div class="form-group row">
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <button type="reset" class="btn btn-primary">clear</button>
                </div>
            </div></center>
        </form>  
</div>
    </nav>

@endsection
