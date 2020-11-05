
@extends('admin/admin_header')
@section('content')
<h1>Ground Booking</h1>
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
                        <th scope="col">purpose</th>
                        <th scope="col">from_date</th>                    
                        <th scope="col">days</th>
                        <th scope="col">amount</th>
                        <th scope="col">userid</th>
                        <th scope="col" colspan=2><center>Action</center></th>
                    </tr>
                </thead>
                <tbody>
               
                    @foreach($data as $i)
                    <tr>
                        <td>{{$i->id}}</td>
                        <td>{{$i->name}}</td>
                        <td>{{$i->email}}</td>
                        <td>{{$i->contact}}</td>
                        <td>{{$i->purpose}}</td>
                        <td>{{$i->fdate}}</td>
                        <td>{{$i->days}}</td>
                        <td>{{$i->amount}}</td>
                        <td>{{$i->uid}}</td>
                        <td><a href="update"><i class="fas fa-edit"></li>Edit</a></td>
                        <td><a href="delete_ground_booking/{{$i->id}}"><i class="fas fa-trash"></li>Delete</a></td>
                        @endforeach
                    </tr>
                </tbody>
            </table>
            
        </div>
    <!-- </nav> -->
@endsection
