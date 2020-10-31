
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
                        <th scope="col">name</th>
                        <th scope="col">gender</th>
                        <th scope="col">address</th>
                        <th scope="col">email</th>
                        <th scope="col">contact</th>                      
                        <th scope="col">password</th>
                        <th scope="col">userid</th>
                        <th scope="col" colspan=2><center>Actoin</center></th>
                    </tr>
                </thead>
                <tbody>
               
                    <tr>
                        <td>1</td>
                        <td>nayan</td>
                        <td>Male</td>
                        <td>krishna park</td>
                        <td>nayanc674@gmail.com</td>
                        <td>8777799008</td>
                        <td>84374387</td>
                        <td>1111</td>
                        <td><a href="update_department"><i class="fas fa-edit"></li>Edit</a></td>
                        <td><a href="delete"><i class="fas fa-trash"></li>Delete</a></td>
                    </tr>
                </tbody>
            </table>
            
        </div>
    <!-- </nav> -->
@endsection
