

@extends('layouts.app')
@section('content')


    <div class="flex flex-row ">
        @include('employee.sidebar')
        <div class="col-md-10 pl-10 ">
            <div class="card">

                   @auth

              <form class="pl-64 pr-20 pt-10 pb-20 "method="POST" action="{{url('/employee')}}">
                     @csrf
                     @method("post")
                     <h1 class="pb-20 text-3xl">Add Emloyee</h1>
                     <input aria-label="Enter your name"
                            name="name"
                            type="text" placeholder="Name"
                            class="text-sm text-gray-base
                            w-3/6 mr-3 py-4  h-2 border
                                   border-gray-200 rounded mb-2" />
                     <input aria-label="Enter your surname"
                            name="surname"
                            type="text" placeholder="Surname"
                            class="text-sm text-gray-base w-3/6
                                   mr-3 py-4 h-2 border
                                   border-gray-200 rounded mb-2" />
                     <input aria-label="Enter your Email"
                            name="email"
                            type="text" placeholder="Email"
                            class="text-sm text-gray-base  w-3/6 mr-3
                                   py-4 h-2 border border-gray-200
                                   rounded mb-2" />
                                   <br>
                     <button type="submit"
                             class="bg-black text-white w-24 mt-5 rounded-lg pt-1 pb-1 ">
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
