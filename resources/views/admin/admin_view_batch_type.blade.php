
@extends('admin/admin_header')
@section('content')
<h1>Batch Type</h1>
    <!-- <nav class="navbar navbar-default mb-xl-5 mb-4"> -->

        
        <div class="outer-w3-agile mt-3">
            <!-- <h4 class="tittle-w3-agileits mb-4">Table Head Options</h4> -->
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Batch Name</th>
                        <th scope="col">Batch Time</th>
                        <th scope="col">Purpose</th>
                        <th scope="col" colspan='2'><center>Actoin</center></th>
                    </tr>
                </thead>
                <tbody>
                @foreach($data as $i)
                    <tr>
                        <td>{{$i->id}}</td>
                        <td>{{$i->batch_name}}</td>
                        
                        <td>{{$i->start_time}} - {{$i->end_time}}</td>
                        <td>{{$i->purpose}}</td>
                        <td><a href="update"><i class="fas fa-edit"></li>Edit</a></td>
                        <td><a href="delete_batch/{{$i->id}}"><i class="fas fa-trash"></li>Delete</a></td>
                    @endforeach
                    </tr>
                </tbody>
            </table>
            
        </div>
    <!-- </nav> -->
@endsection
