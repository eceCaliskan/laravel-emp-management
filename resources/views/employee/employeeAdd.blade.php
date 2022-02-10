

@extends('layouts.app')
@section('content')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                   @auth
              <form class="pl-20 pr-20 pt-10 pb-20 "method="POST" action="{{url('/employee')}}">
                     @csrf
                     @method("post")
                     <h1 class="pb-20">Create User</h1>
                     <input aria-label="Enter your name" 
                            name="name"
                            type="text" placeholder="Name" 
                            class="text-sm text-gray-base w-full 
                                   mr-3 py-5 px-4 h-2 border 
                                   border-gray-200 rounded mb-2" />
                     <input aria-label="Enter your surname" 
                            name="surname"
                            type="text" placeholder="Surname" 
                            class="text-sm text-gray-base w-full 
                                   mr-3 py-5 px-4 h-2 border 
                                   border-gray-200 rounded mb-2" /> 
                     <input aria-label="Enter your Email" 
                            name="email"
                            type="text" placeholder="Email"
                            class="text-sm text-gray-base w-full mr-3 
                                   py-5 px-4 h-2 border border-gray-200 
                                   rounded mb-2" />
                     <button type="submit"
                             class="bg-blue-400 w-9/12 mt-10 pt-4 pb-4">
                         Submit
                     </button>
                 </form>
              
            </div>
        </div>
        @endauth
       
    </div>
    
</div>
@guest
<div class="text-center pt-20 text-xl"><h1>PLEASE LOGIN TO ADD EMPLOYEES</h1></div>
@endguest

@endsection('content')