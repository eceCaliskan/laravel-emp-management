@extends('layouts.app')
@section('content')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <table class="grid place-items-center ">
                    @foreach ($employee as $person)
                    <tr>
                         <td class="pr-10 pb-20 pt-20 pl-10 text-l">{{$person->id}}</td>
                         <td class="pr-10 pb-20 pt-20 pl-10 text-l">{{$person->name}}</td>
                         <td class="pr-10 pb-20 pl-20 pt-20 text-l">{{$person->surname}}</td>
                         <td class="pr-10 pb-20 pl-20 pt-20 text-l">{{$person->email}}</td>
                       
                         @auth
                         <td class="pr-10 pb-20 pl-20 pt-20"><form action="/employee/{{ $person->id }}" method="POST">@csrf @method('delete')<button type="submit"><p class="text-orange-600 text-l">Delete</p></button></form></td>
                        @endauth
                    
                     @endforeach
                    
                   
                  </tr>
                  
                </table>
                <td class="pl-10 pr-10">{{ $employee->links() }}</td>
            </div>
        </div>
    </div>
</div>

@endsection('content')