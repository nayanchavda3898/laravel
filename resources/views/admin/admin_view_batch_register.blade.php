
@extends('admin/admin_header')
@section('content')
<h1>Batch Register</h1>
    <!-- <nav class="navbar navbar-default mb-xl-5 mb-4"> -->

        
        <div class="outer-w3-agile mt-3">
            <!-- <h4 class="tittle-w3-agileits mb-4">Table Head Options</h4> -->
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">name</th>
                        <th scope="col">email</th>
                        <th scope="col">contact</th>
                        <th scope="col">batch_type</th>
                        <th scope="col">batch_time</th>
                        <th scope="col">from_date</th>
                        <th scope="col">days</th>
                        <th scope="col">amount</th>
                        <th scope="col">userid</th>
                        <th scope="col">status</th>
                        <th scope="col" colspan=2><center>Actoin</center></th>
                    </tr>
                </thead>
                <tbody>
               
                    @foreach ($data as $i)
                    <tr>
                        <td>{{$i->id}}</td>
                        <td>{{$i->name}}</td>
                        <td>{{$i->email}}</td>
                        <td>{{$i->contact}}</td>
                        <td>{{$i->batch_type}}</td>
                        <td>{{$i->start_time}}-{{$i->end_time}}</td>
                        <td>{{$i->fdate}}</td>
                        <td>{{$i->days}}</td>
                        <td>{{$i->status}}</td>
                       
                        <td><a href="update"><i class="fas fa-edit"></li>Edit</a></td>
                        <td><a href="delete"><i class="fas fa-trash"></li>Delete</a></td>
                    </tr>
                </tbody>
            </table>
            
        </div>
    <!-- </nav> -->
@endsection
