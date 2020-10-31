
@extends('admin/admin_header')
@section('content')
    
<h1>Add Batch Type</h1>
    <nav class="navbar navbar-default mb-xl-5 mb-4">
        <div class="outer-w3-agile col-xl mt-3">
        <!-- <h4 class="tittle-w3-agileits mb-4">Batch Type</h4> -->
        <form action="#" method="post">
        @csrf
        <div class="form-group">
                <label for="bname">Batch Name</label>
                <input type="text" class="form-control" name="dept_name"  placeholder="Batch Name" required="" id="bname"> 
            </div>
            <div class="form-group">
            <label for="btime">Batch Time</label>
                <input type="text" class="form-control" name="dept_code" placeholder="Batch Time" required="" id="btime"> 
            </div>
            <div class="form-group">
            <label for="bpurpose">Batch Purpose</label>     
                <input type="text" class="form-control" name="dept_code" placeholder="Batch Purpose" required="" id="bpurpose"> 
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
