
@extends('admin/admin_header')
@section('content')
    
<h1>Add Ground Booking</h1>
    <nav class="navbar navbar-default mb-xl-5 mb-4">
        <div class="outer-w3-agile col-xl mt-3">
        <!-- <h4 class="tittle-w3-agileits mb-4">Batch Register</h4> -->
        <form action="#" method="post">
        @csrf
        <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" name="gname"  placeholder="Name" required="" id="name"> 
            </div>
        <div class="form-group">
                <label for="emailid">E-mail id</label>
                <input type="email" class="form-control" name="gemailid"  placeholder="Email" required="" id="emailid"> 
            </div>
        <div class="form-group">
                <label for="cnumber">Contact Number</label>
                <input type="number" class="form-control" name="gcnumber"  placeholder="Contact number" required="" id="cnumber"> 
            </div>
        <div class="form-group">
                <label for="purpose">Purpose</label>
                <select name="gpurpose" id="purpose" class="form-control">
    <option value="Regular" selected>Practice</option>
    <option value="Vacation">Event</option>
</select>
            </div>
            <div class="form-group">
            <label for="fdate">Date</label>
                <input type="date" class="form-control" name="gdate" required="" id="fdate"> 
            </div>
            <div class="form-group">
            <label for="days">Days</label>
                <input type="number" class="form-control" name="gbtime" placeholder="How Many Days?" required="" id="days"> 
            </div>
            <div class="form-group">
            <label for="amount">Amount</label>
                <input type="number" class="form-control" name="gamount" required="" id="amount"> 
            </div>
            
            <div class="form-group">
            <label for="user_id">User_id</label>
                <input type="number" class="form-control" name="guserid" required="" id="user_id"> 
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
