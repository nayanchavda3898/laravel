
@extends('admin/admin_header')
@section('content')
    
<h1>Update Batch Type</h1>
    <nav class="navbar navbar-default mb-xl-5 mb-4">
        <div class="outer-w3-agile col-xl mt-3">
        <!-- <h4 class="tittle-w3-agileits mb-4">Batch Type</h4> -->
        <form action="update_batch_type/{{$data->id}}" method="post">
        @csrf
        <div class="form-group">
        
                <label for="bname">Batch Name</label>
                <input type="text" class="form-control" name="b_name"  value="{{$data->batch_name}}" required="" id="bname"> 
            </div>
            <div class="form-group">
            <label for="stime">Start Time</label>
                <input type="time" class="form-control" name="s_time" value="{{$data->start_time}}" required="" id="stime"> 
            </div>
            <div class="form-group">
            <label for="etime">End Time</label>
                <input type="time" class="form-control" name="e_time" value="{{$data->end_time}}" required="" id="etime"> 
            </div>
            <div class="form-group">
            <label for="bpurpose">Batch Purpose</label>     
                <input type="text" class="form-control" name="b_purpose" value="{{$data->purpose}}" required="" id="bpurpose"> 
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
