
@extends('admin/admin_header')
@section('content')
<h1>Department</h1>
    <!-- <nav class="navbar navbar-default mb-xl-5 mb-4"> -->

        
        <div class="outer-w3-agile mt-3">
            <!-- <h4 class="tittle-w3-agileits mb-4">Table Head Options</h4> -->
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Batch Name</th>
                        <th scope="col">Batch Type</th>
                        <th scope="col">Purpose</th>
                        <th scope="col" colspan=2><center>Actoin</center></th>
                    </tr>
                </thead>
                <tbody>
               
                    <tr>
                        <td>1</td>
                        <td>Regular</td>
                        <td>7:00-11:00</td>
                        <td>practice</td>
                        <td><a href="update_department"><i class="fas fa-edit"></li>Edit</a></td>
                        <td><a href="delete"><i class="fas fa-trash"></li>Delete</a></td>
                    </tr>
                    
                    <tr>
                        <td>2</td>
                        <td>Vacation</td>
                        <td>4:00-7:00</td>
                        <td>Event</td>
                        <td><a href="update_department"><i class="fas fa-edit"></li>Edit</a></td>
                        <td><a href="delete"><i class="fas fa-trash"></li>Delete</a></td>
                    </tr>
                    
                </tbody>
            </table>
            
        </div>
    <!-- </nav> -->
@endsection
