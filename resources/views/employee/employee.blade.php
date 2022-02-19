@extends('layouts.app')
@section('content')




    <div class=" flex flex-row ">
        @include('employee.sidebar')
        <div class="col-md-10 pl-10 ">
            <div class="card bg-white ">

                <table class=" auto">
                    <thead>
                        <tr class="bg-white pt-30">
                          <th class="pl-10 pr-10 text-l pt-20">Employee id</th>
                          <th class="pl-10  pr-10 text-l pt-20">Name</th>
                          <th class="pl-20 pr-10 text-l pt-20" >Surname</th>

                          <th class="pl-20 pr-20 text-l pt-20" >E-mail</th>
                          <th class="pl-20 pr-20 text-l pt-20" ></th>
                          <th class="pl-20 pr-20 text-l pt-20" ></th>
                        </tr>
                      </thead>
                    @foreach ($employee as $person)
                    <tr>
                         <td class="pr-10 pb-20 pt-20 pl-10 text-l">{{$person->id}}</td>
                         <td class="pr-10 pb-20 pt-20 pl-10 text-l">{{$person->name}}</td>
                         <td class="pr-10 pb-20 pl-20 pt-20 text-l">{{$person->surname}}</td>
                         <td class="pr-10 pb-20 pl-20 pt-20 text-l">{{$person->email}}</td>

                         @auth

                         <td class="pr-10 pb-20 pl-20 pt-20"><form action="/employee/{{ $person->id }}" method="POST">@csrf @method('delete')<button type="submit"><p class="text-orange-600 text-l">Delete</p></button></form></td>
                         <td class="pr-10 pb-20 pl-20 pt-20"><form action="/employee/{{ $person->id }}" method="POST">@csrf @method('get')<button type="submit"><p class="text-orange-600 text-l">See the Details</p></button></form></td>
                         @endauth

                     @endforeach


                  </tr>

                </table>
                <td class="pl-10 pr-10">{{ $employee->links() }}</td>
            </div>
        </div>
    </div>


@endsection('content')
