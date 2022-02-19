@extends('layouts.app')
@section('content')
@auth
<div class=" flex flex-row bg-white">
    @include('employee.sidebar')





            <ul class=" ml-64 pl-64 pl-64 pt-40" >
                <img src="{{ asset('img/user.png') }}" alt="description of myimage">
                 <li class="text-2xl pt-10"><h3>Employee Id:     {{$employee->id}}</h3></td>
                 <li class="text-2xl pt-10"><h3>Employee Name:     {{$employee->name}}</h3></td>
                 <li class="text-2xl  pt-10"><h3>Employee Surname:     {{$employee->surname}}</h3></td>
                 <li class=" text-2xl  pt-10"><h3>Employee Email:     {{$employee->email}}</h3></td>








            </ul>




</div>
@endauth

@endsection('content')
