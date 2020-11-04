
@extends('admin/admin_header')
@section('content')
    
<h1>Add Ground Booking</h1>
    <nav class="navbar navbar-default mb-xl-5 mb-4">
        <div class="outer-w3-agile col-xl mt-3">
        <!-- <h4 class="tittle-w3-agileits mb-4">Batch Register</h4> -->
        <form action="insert_ground_booking" method="post">
        @csrf
        <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" name="grname"  placeholder="Name" required="" id="name"> 
            </div>
        <div class="form-group">
                <label for="emailid">E-mail id</label>
                <input type="email" class="form-control" name="gremail"  placeholder="Email" required="" id="emailid"> 
            </div>
        <div class="form-group">
                <label for="cnumber">Contact Number</label>
                <input type="number" class="form-control" name="grcnumber"  placeholder="Contact number" required="" id="cnumber"> 
            </div>
        <div class="form-group">
                <label for="purpose">Purpose</label>
                <select name="grpurpose" id="purpose" class="form-control">
                @foreach ($data as $i)
    <option>{{ $i->purpose }}</option>
    @endforeach
   
</select>
            </div>
            <div class="form-group">
            <label for="fdate">Date</label>
                <input type="date" class="form-control" name="grfdate" required="" id="fdate"> 
            </div>
            <div class="form-group">
            <label for="days">Days</label>
                <input type="number" class="form-control" name="grdays" placeholder="How Many Days?" required="" id="days"> 
            </div>
            <div class="form-group">
            <label for="amount">Amount</label>
                <input type="number" class="form-control" name="gramount" required="" id="amount"> 
            </div>
            
            <div class="form-group">
            <label for="user_id">User_id</label>
                <input type="number" class="form-control" name="gruid" required="" id="user_id"> 
            </div>
            <div class="form-group">
            <label for="status">Status</label>
                <input type="number" class="form-control" name="grstatus" required="" id="status"> 
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
