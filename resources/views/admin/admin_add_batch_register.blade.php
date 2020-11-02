
@extends('admin/admin_header')
@section('content')
    
<h1>Add Batch Register</h1>
    <nav class="navbar navbar-default mb-xl-5 mb-4">
        <div class="outer-w3-agile col-xl mt-3">
        <!-- <h4 class="tittle-w3-agileits mb-4">Batch Register</h4> -->
        <form action="#" method="post">
        @csrf
        <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" name="name"  placeholder="Name" required="" id="name"> 
            </div>
        <div class="form-group">
                <label for="emailid">E-mail id</label>
                <input type="email" class="form-control" name="emailid"  placeholder="Email" required="" id="emailid"> 
            </div>
        <div class="form-group">
                <label for="cnumber">Contact Number</label>
                <input type="number" class="form-control" name="cnumber"  placeholder="Contact number" required="" id="cnumber"> 
            </div>
        <div class="form-group">
                <label for="btype">Batch Type</label>
                <select name="btype" id="btype" class="form-control">
                @foreach($data as $i)
                     <option>{{$i->batch_name}}</option>
                @endforeach
                </select>
               
            </div>
        <div class="form-group">
                <label for="btime">Batch Time</label>
                <select name="btime" id="btime" class="form-control">
                @foreach($data as $i)
            <option>{{$i->start_time}} - {{$i->end_time}}</option>
            @endforeach
</select>
            </div>   
            <div class="form-group">
            <label for="fdate">Date</label>
                <input type="date" class="form-control" name="f_date" required="" id="fdate"> 
            </div>
            <div class="form-group">
            <label for="days">Days</label>
                <input type="number" class="form-control" name="btime" placeholder="How Many Days?" required="" id="days"> 
            </div>
            <div class="form-group">
            <label for="amount">Amount</label>
                <input type="number" class="form-control" name="amount" required="" id="amount"> 
            </div>
            
            <div class="form-group">
            <label for="user_id">User_id</label>
                <input type="number" class="form-control" name="amount" required="" id="user_id"> 
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
